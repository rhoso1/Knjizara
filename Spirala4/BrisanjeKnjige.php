<!DOCTYPE HTML>
<HTML>
  <HEAD>
   <TITLE>eBook knjizara</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
	<META charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="DropDown.js"></script>
	<script type="text/javascript" src="validacija.js"></script>
   </HEAD>
<BODY>
       <?php
		   session_start();
		        if(isset($_POST['BtnNazadOpcije']))
			    {
			      header("Location: AdminOpcije.php");
			    }    
			
			try
			{
                  $baza = new PDO("mysql:dbname=knjizaraebook;host=localhost;charset=utf8","rhoso1","rhoso1");
                  $baza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
                  
				  if(isset($_POST['Obrisi']) && isset($_POST['naslovKnjige']))
				  {  
					   	$sql = $baza->prepare("DELETE FROM knjige WHERE naslov='". $_POST['naslovKnjige'] ."'");
	                    $sql->execute();
				 }
				  $baza = null;
            }
             catch(PDOException $e)
            {
               echo $e->getMessage();
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
	   
	   <?php 
		    
            $baza = new PDO("mysql:dbname=knjizaraebook;host=localhost;charset=utf8","rhoso1","rhoso1");
 
              $sql = $baza->prepare("SELECT * FROM knjige");
              $sql->execute();
	   
              while($rezultat = $sql->fetch(PDO::FETCH_ASSOC))
		   {
			?>
	       <div class="red">
	          <div class ="Kolona jedan">
		        <form class="Brisanje" action="BrisanjeKnjige.php" method="post">
			      <table>
				    <tr>
				    <td><label>Naziv knjige:</label><input type="text" class="urediInput" name="naslovKnjige" readonly="readonly"  value="<?php echo $rezultat['naslov']; ?>"></td>
				   </tr>
				   <tr>
				    <td><label>Žanr: </label><input type="text" class="urediInput" name="zanr" readonly="readonly" value="<?php echo $rezultat['zanr']; ?>" ></td>
				   </tr>
				   <tr>
				    <td><label>Autor: </label><input type="text" class="urediInput" name="author" readonly="readonly"  value="<?php echo $rezultat['autor']; ?>"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="Obriši" name="Obrisi" class="BtnObrisi"></td>
				   </tr>
				 </table> 
               </form>
		 </div>
	   </div>
	   <?php
             }
	    ?>
		  
		   <div class="red">
	         <div class ="Kolona jedan">
		       <form action="BrisanjeKnjige.php" method="post">
		        <input type="submit" value="Nazad" name="BtnNazadOpcije" class="nazadBtn">
		       </form>
		    </div>
	     </div>
		 
		 <div class="red">
			    <div class="Kolona jedan">
				    <p class="kraj">Posjetite nas u ulici Zmaja od Bosne bb, Sarajevo.</p>
				</div>
            </div>
  
</BODY>
</HTML>