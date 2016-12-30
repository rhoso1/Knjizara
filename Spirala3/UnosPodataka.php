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
	  
	  if( isset($_POST["BtnOKnovost"]) && (empty($_POST["naslovKnjige"]) || empty($_POST["zanr"]) || empty($_POST["author"])))
		  {
			  $_msg="Popunite sva polja";
		  }
	  if( isset($_POST["BtnOKnovost"]) && (strlen($_POST["naslovKnjige"]) < 2 || strlen($_POST["zanr"]) < 2 || strlen($_POST["author"]) < 2))
	  {
		  $_msg="Dužina unosa mora biti veća od 2 znaka";
	  }
	  
	  if(isset($_POST["BtnOKnovost"]))
	  {
		       Validiraj($_POST["naslovKnjige"]);
	           Validiraj($_POST["zanr"]);
	           Validiraj($_POST["author"]);
			   
        $_XML = new SimpleXMLElement("Knjige.xml", null, true);
		
        $_data = $_XML->addChild('knjiga');
        $_data->addChild('naslov', $_POST["naslovKnjige"]);
        $_data->addChild('zanr', $_POST["zanr"]);
		$_data->addChild('autor', $_POST["author"]);
        $_XML->asXML('Knjige.xml');
		
		//Formatiranje novosti u xml file-u
		$dom = new DOMDocument('1.0');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($_XML->asXML());
        $dom->save('Knjige.xml');
	  }
	
	  
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
	   
	   <div class="red">
	     <div class ="Kolona jedan">
		   <form class="Podaci" action="UnosPodataka.php" method="post">
			     <table>
				   <tr>
				    <td><label>Unesite podatke:</label></td>
				   </tr>
				   <tr>
				    <td><label>Naziv knjige: </label></td>
				   </tr>
				   <tr>
				    <td><input type="text" name="naslovKnjige" id="naslovKnjige" placeholder="Naslov" onkeyup="ValidirajUnos()" required></td>
				   </tr>
				   <tr>
				    <td><label id="naslovLabel"></label></td>
				   </tr>
				   <tr>
				    <td><label>Žanr: </label></td>
				   </tr>
				   <tr>
				    <td><input type="text" name="zanr" id="zanr" placeholder="Naslov" onkeyup="ValidirajUnos()" required></td>
				   </tr>
				   <tr>
				    <td><label id="zanrLabel"></td>
				   </tr>
				   <tr>
				    <td><label>Autor: </label></td>
				   </tr>
				   <tr>
				    <td><input type="text" name="author" id="author" placeholder="Autor" onkeyup="ValidirajUnos()" required></td>
				   </tr>
				   <tr>
				    <td><label id="autorLabel"></label></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="OK" name="BtnOKnovost" id="OKnovost" onclick="ValidirajPodatke()"></td>
				   </tr>
				    <td><label id="dugmeLabel"><?php echo $_msg ?></label></td>
				 </table> 
               </form>
		 </div>
	   </div>
	   
	   <div class="red">
	         <div class ="Kolona jedan">
		       <form action="UnosPodataka.php" method="post">
		        <input type="submit" value="Nazad" name="BtnNazadOpcije" class="nazadBtn">
		       </form>
		    </div>
	     </div>
  
</BODY>
</HTML>