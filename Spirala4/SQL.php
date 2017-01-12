<!DOCTYPE HTML>
<HTML>
  <HEAD>
   <TITLE>eBook knjizara</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
	<META charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="validacija.js"></script>
	<script type="text/javascript" src="DropDown.js"></script>
   </HEAD>
<BODY>

<?php
       session_start();
	   if(isset($_POST['BtnNazadOpcije']))
			    {
			      header("Location: AdminOpcije.php");
			    }    
	   if(isset($_POST['WebServis']))
			    {
			      header("Location: REST.php");
			    }    
         try
		        {
                   $baza = new PDO("mysql:dbname=knjizaraebook;host=localhost;charset=utf8","rhoso1","rhoso1");
                   $baza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
					
                    //  Da prebaci sve poslovnice
		               $_XML = simplexml_load_file("Poslovnice.xml");

              
                       foreach($_XML->poslovnica as $_poslovnica)
                       {
						   //Ne upisuje duple
						     $sql = $baza->prepare("SELECT * FROM poslovnice WHERE grad = '". $_poslovnica->grad ."' AND adresa = '". $_poslovnica->adresa ."' ");
                             $sql->execute();
							 
							 if( $row = $sql->fetch() )
							 {
								 throw new Exception("Podaci postoje u bazi");
							 }
	                      else 
						  {
						       $sql = $baza->prepare("INSERT INTO poslovnice (grad, adresa) VALUES(?, ?)");
                               $sql->execute(array(
                                                    $_poslovnica->grad,
									                $_poslovnica->adresa
						                          ));
							  
						  }
						   
					   }

			       //Da prebaci sve novosti
			           $_XML = simplexml_load_file("Novost.xml"); 
			           foreach($_XML->novost as $_novost)
                       {
						     $sql = $baza->prepare("SELECT * FROM novosti WHERE naslov = '". $_novost->naslov ."' AND sadrzaj = '". $_novost->sadrzaj ."' AND autor = '". $_novost->autor ."' ");
                             $sql->execute();
							 
							 if( $row = $sql->fetch() )
							 {
								 throw new Exception("Podaci postoje u bazi");
							 }
							 else
							 {
				               $sql = $baza->prepare("INSERT INTO novosti (poslovnice, naslov, sadrzaj, autor) VALUES(?, ?, ?, ?)");
                               $sql->execute(array(
				                       1,
                                       $_novost->naslov,
                                       $_novost->sadrzaj,
									   $_novost->autor
                                      ));
							 }
			           }
			  
			    // // //Da prebaci sve knjige
			      $_XML = simplexml_load_file("Knjige.xml"); 
			       foreach($_XML->knjiga as $_knjiga)
                     {
						 $sql = $baza->prepare("SELECT * FROM knjige WHERE naslov = '". $_knjiga->naslov ."' AND zanr = '". $_knjiga->zanr ."' AND autor = '". $_knjiga->autor ."' ");
                             $sql->execute();
							 
							 if( $row = $sql->fetch() )
							 {
								 throw new Exception("Podaci postoje u bazi");
							 }
							 else
							 {
				               $sql = $baza->prepare("INSERT INTO knjige (poslovnice, naslov, zanr, autor) VALUES(?, ?, ?, ?)");
                               $sql->execute(array(
				                                    1, 
                                                    $_knjiga->naslov,
                                                    $_knjiga->zanr,
									                $_knjiga->autor
                                                   ));
			                 }
                  
				     }
					 $baza = null;
				}
				
				catch(PDOException $e)
               {
                 echo $e->getMessage();
               }
			   catch(Exception $e)
			   {
                   echo '<script type="text/javascript">alert("' . $e->getMessage() . '")</script>';
               }
		
      ?>
  <div class="red">
	     <div class="Kolona jedan">
		    <h1 class="Naslov">eBook</h1>
		 </div>
	   </div>
     
	   <div class="red">
	     <div class="Kolona jedan">
		    <div class="meni">
             <ul>
             <li><a href="Pocetna.php">Početna</a></li>
             <li><a href="Knjige.php">Knjige</a></li>
             <li><a href="Poslovnice.php">Poslovnice</a></li>
             <li><a href="Onama.php">O nama</a></li>
             <li><a href="Kontakt.php">Kontakt</a></li>
			 <li class="DropDownMenu">
                <a href="#" class="DropBtn" onclick="DropDown()">Galerija</a>
                  <div id="DropDownId" class="DropDownItem">
                    <a href="Knjizevnost.php">Književnost</a>
				    <a href="Pribor.php">Pribor</a>
				    <a href="Cestitke.php">Čestitke</a>
				    <a href="Albumi.php">Albumi</a>
			<li><a href="Login.php">Login</a></li>
                  </div>
               </li>
             </ul>
           </div>
	     </div>
	   </div>
	   

       <div class="red">
	         <div class ="Kolona jedan">
		       <form class ="SQL" action="SQL.php" method="post">
			     <table>
				   <tr>
		           <td><input type="submit" value="Servis" name="WebServis" class="SQL"></td>
				   </tr>
				   <tr>
				   <td><input type="submit" value="Nazad" name="BtnNazadOpcije" class="SQL"></td>
				   </tr>
		       </form>
		    </div>
	     </div>

</BODY>
</HTML>
