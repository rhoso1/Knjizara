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
    function Validiraj($_unos) 
	{
     $_unos = trim($_unos);
     $_unos = stripslashes($_unos);
     $_unos = htmlspecialchars($_unos, ENT_QUOTES );
     return $_unos;
    }
	$_msg = "";
	  
	  if( isset($_POST["BtnNovost"]) && (empty($_POST["naslovNovosti"]) || empty($_POST["sadrzajNovosti"]) || empty($_POST["autor"])))
		  {
			  $_msg="Popunite sva polja";
		  }
	  if( isset($_POST["BtnNovost"]) && (strlen($_POST["naslovNovosti"]) < 2 || strlen($_POST["sadrzajNovosti"]) < 2 || strlen($_POST["autor"]) < 2))
	  {
		  $_msg="Dužina unosa mora biti veća od 2 znaka";
	  }
	  
	  if(isset($_POST["BtnNovost"]))
	  {
		       Validiraj($_POST["naslovNovosti"]);
	           Validiraj($_POST["sadrzajNovosti"]);
	           Validiraj($_POST["autor"]);
			   try
		        {
                   $baza = new PDO("mysql:dbname=knjizaraebook;host=localhost;charset=utf8","rhoso1","rhoso1");
                   $baza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                   $sql = $baza->prepare("INSERT INTO novosti (poslovnice, naslov, sadrzaj, autor) VALUES(?, ?, ?, ?)");
                   $sql->execute(array(
				                       1,
                                       $_POST["naslovNovosti"],
                                       $_POST["sadrzajNovosti"],
									   $_POST["autor"]
                                      ));
                   $baza = null;
                }
             catch(PDOException $e)
             {
                echo $e->getMessage();
             }
	   }
			   
        // $_XML = new SimpleXMLElement("Novost.xml", null, true);
		
        // $_data = $_XML->addChild('novost');
        // $_data->addChild('naslov', $_POST["naslovNovosti"]);
        // $_data->addChild('sadrzaj', $_POST["sadrzajNovosti"]);
		// $_data->addChild('autor', $_POST["autor"]);
        // $_XML->asXML('Novost.xml');
		
		// //Formatiranje novosti u xml file-u
		// $dom = new DOMDocument('1.0');
        // $dom->preserveWhiteSpace = false;
        // $dom->formatOutput = true;
        // $dom->loadXML($_XML->asXML());
        // $dom->save('Novost.xml');
	  
	
	  
	  if(isset($_POST['BtnNazadOpcije']))
			{
			  header("Location: AdminOpcije.php");
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
		   <form class="Novosti" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			     <table>
				   <tr>
				    <td><label id="nn">Unesite novost</label></td>
				   </tr>
				   <tr>
				    <td><label class="nn">Naslov novosti: </label></td>
				   </tr>
				   <tr>
				    <td><input type="text" name="naslovNovosti" id="nNovosti" placeholder="Naslov" onkeyup="ValidirajUnosNovosti()" required ></td>
				   </tr>
				   <tr>
				    <td><label id="novostLabel"></label></td>
				   </tr>
				   <tr>
				    <td><label class="nn">Sadržaj novosti: </label></td>
				   </tr>
				   <tr>
				    <td><textarea rows="5" cols="35" name ="sadrzajNovosti" id="txtNovost" class="nn" onkeyup="ValidirajUnosNovosti()" required></textarea></td>
				   </tr>
				   <tr>
				    <td><label id="sadrzajLabel"></td>
				   </tr>
				   <tr>
				    <td><label class="nn">Autor: </label></td>
				   </tr>
				   <tr>
				    <td><input type="text" name="autor" id="autorNovosti" placeholder="Autor" id="aNovost" onkeyup="ValidirajUnosNovosti()" required></td>
				   </tr>
				   <tr>
				    <td><label id="autorNovostiLabel"></label></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="OK" name="BtnNovost" id="dodajNovost" onclick="ValidirajNovosti()"></td>
				   </tr>
				    <td><label id="dodajNovostLabel"><?php echo $_msg ?></label></td> 
					 <tr>
				    <td><input type="submit" value="Nazad" name="BtnNazadOpcije" class="nazadBtnNovost"></td>
				   </tr>
               </form>
		 </div>
       </div>
  
</BODY>
</HTML>