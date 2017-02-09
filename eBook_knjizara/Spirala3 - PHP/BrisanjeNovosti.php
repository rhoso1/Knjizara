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
				
				//Briše knjigu koja odgovara button-u
			if(isset($_POST['naslovNovosti']))
			{				
				 $_XML = simplexml_load_file("Novost.xml");
				
				  foreach($_XML->novost as $_novost)
                {
                 if((isset($_POST['Obrisi'])) && $_novost->naslov == $_POST['naslovNovosti'])
				 {
                      $tmp = dom_import_simplexml($_novost);
                      $tmp->parentNode->removeChild($tmp);
                 }
               }
            $_XML->asXML('Novost.xml');
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
             <li><a href="Linkovi.php">Linkovi</a></li>
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
		    
            $_XML = simplexml_load_file("Novost.xml");
              
              foreach($_XML->novost as $_novost)
              {
			?>
	       <div class="red">
	          <div class ="Kolona jedan">
		        <form class="Brisanje" action="BrisanjeNovosti.php" method="post">
			      <table>
				    <tr>
				    <td><label>Naslov novosti:</label><input type="text" class="urediInput" name="naslovNovosti" readonly="readonly" value="<?php echo $_novost->naslov ?>"></td>
				   </tr>
				   <tr>
				    <td><label>Sadržaj novosti: </label><input type="text" class="urediInput" name="sadrzajNovosti" readonly="readonly" value="<?php echo $_novost->sadrzaj ?>" ></td>
				   </tr>
				   <tr>
				    <td><label>Autor: </label><input type="text" class="urediInput" name="autorNovosti" readonly="readonly" value="<?php echo $_novost->autor ?>"></td>
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
		       <form action="BrisanjeNovosti.php" method="post">
		        <input type="submit" value="Nazad" name="BtnNazadOpcije" class="nazadBtn">
		       </form>
		    </div>
	     </div>
  
</BODY>
</HTML>