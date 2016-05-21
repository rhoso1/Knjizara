<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Novost</TITLE>
<link rel="stylesheet" type="text/css" href="stil.css">
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src = "ValidacijaNovosti.js"></script>
</HEAD>
<BODY>

<?php
    $_message ="";
	 if(empty($_POST['autor']) || empty($_POST['naziv']) || empty($_POST['novost']) || empty($_POST['kod']) || empty($_POST['telefon']))
	{
		$_message = 'Unesite sve podatke';
	}
    if (isset($_POST['autor']) && isset($_POST['naziv']) && isset($_POST['novost']))
	{
		$_autor = $_POST['autor'];
        $_naziv = $_POST['naziv'];
		$_novost = $_REQUEST['novost'];
	}
	  $_novosti = array ($_autor,$_naziv,$_novost);
	  $_file = fopen('UpisiNovosti.csv','a');
	  foreach( $_novosti as $line)
	  {
		  fputcsv($_file,explode(',',$line));
	  }
	  
	  fclose($_file);
?>
<div id = "Naslov">
     <h1>eBook</h1>
     </div>
         <div id="meni">
             <ul>
             <li><a href="Knjižara.html">Početna</a></li>
             <li><a href="Knjiga.html">Knjige</a></li>
             <li><a href="Linkovi.html">Linkovi</a></li>
             <li><a href="Onama.html">O nama</a></li>
             <li><a href="Kontakt.html">Kontakt</a></li>
			 <li><a href="Login.php">Login</a></li>
             </ul>
             </div>
			 <div id="novoForma">
			 <form action="DodajNovosti.php" method="post">
			 <label>Unesite ime autora:</label>
			 <br>
			 <input type="text" name="autor" id="autor" placeholder="Autor" onkeydown="return ValidacijaAutor()"></input><label id = "demoAutor"></label>
			 </br>
			 <label>Unesite naziv novosti:</label>
			 <br>
			 <input type="text" name="naziv" id="naziv" placeholder="Naziv novosti" onkeydown="return ValidacijaNaziv()"></input><label id = "demoNaziv"></label>
			 </br>
			 <label>Unesite novost:</label>
			 <br>
			 <textarea rows="4" cols="35" name ="novost" id = "novost" placeholder="Novost" onkeydown="return ValidacijaNovost()"></textarea><label id = "demoNovost"></label>
			 </br>
			 <label>Unesite dvoslovni kod države:</label>
			 <br>
			 <input type="text" name="kod" id = "kod" placeholder="Dvosloni kod"></input><label id = "demoKod"></label>
			 </br>
			 <label>Unesite broj autora:</label>
			 <br>
			 <input type="tel" name="telefon" id="tel" id = "telefon" placeholder="Broj telefona" onkeydown="return ValidacijaTelefon()"></input><label id = "demoTelefon"></label>
			 </br>
			 <br>
			 <input type="submit" name = "OK" value="OK"></input>
			 </br>
			 <div id="Poruka">	
			<h3><?php echo $_message;?></h3>
			</div>
			 </form>
			 </div>
</BODY>
</HTML>