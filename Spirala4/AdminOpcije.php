<!DOCTYPE HTML>
<HTML>
  <HEAD>
   <TITLE>eBook knjizara</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
	<META charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="DropDown.js"></script>
   </HEAD>
<BODY>
     <?php
			session_start();
			if (isset($_POST['BtnOdjava']))
			 {
				unset($_SESSION['LoginForma']);
				session_destroy();
				header("Location: Login.php");
			}
			
			if(isset($_POST['BtnUnos']))
			{
			  header("Location: UnosPodataka.php");
			}
			if(isset($_POST['BtnBrisanje']))
			{
			  header("Location: BrisanjeKnjige.php");
			}
			
			if(isset($_POST['BtnUnosNovosti']))
			{
			  header("Location: UnosNovosti.php");
			}
			if(isset($_POST['BtnBrisanjeNovosti']))
			{
			  header("Location: BrisanjeNovosti.php");
			}
			if(isset($_POST['BtnPoslovnica']))
			{
			  header("Location: DodajPoslovnicu.php");
			}
			if(isset($_POST['BtnUrediKnjigu']))
			{
			  header("Location: UrediKnjige.php");
			}
			if(isset($_POST['BtnCSV']))
			{
			  header("Location: csvFile.php");
			}
			
			//Upisivanje podataka iz XML fajlova u bazu na klik dugmeta
			if(isset($_POST['BtnSQL']))
			{
			  header("Location: SQL.php");
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
		   <form class="AdminForma" action="AdminOpcije.php" method="post">
			     <table>
				   <tr>
				    <td><label>Odaberite opciju:</label></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="Unos knjige" name="BtnUnos" class="input"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="Obriši knjige" name="BtnBrisanje" class="input"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="Unos novosti" name="BtnUnosNovosti" class="input"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="Obriši novost" name="BtnBrisanjeNovosti" class="input"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="Poslovnica" name="BtnPoslovnica" class="input"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="Uredi knjige" name="BtnUrediKnjigu" class="input"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="Skini CSV" name="BtnCSV" class="input"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="SQL" name="BtnSQL" class="input"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="Odjava" name="BtnOdjava" class="input"></td>
				   </tr>
				 </table> 
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