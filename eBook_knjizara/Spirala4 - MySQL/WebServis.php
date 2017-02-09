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
	 if(isset($_POST['BtnJson']))
			    {
			      header("Location: REST.php");
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
		       <form class="Servis" action="WebServis.php" method="post">
			     <table>
				   <tr>
				   <td><input type="submit" value="JsonFormat" name="BtnJson" class="SQL"></td>
				   </tr>
				   <tr>
				   <td><input type="submit" value="Nazad" name="BtnNazadOpcije" class="SQL"></td>
				   </tr>
		       </form>
		    </div>
	     </div>

</BODY>
</HTML>
