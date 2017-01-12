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
	  
	  if( isset($_POST["BtnOKposlovnice"]) && (empty($_POST["grad"]) || empty($_POST["adresa"])))
		  {
			  $_msg="Popunite sva polja";
		  }
	  if( isset($_POST["BtnOKposlovnice"]) && (strlen($_POST["grad"]) < 2 || strlen($_POST["adresa"]) < 2 ))
	  {
		  $_msg="Dužina unosa mora biti veća od 2 znaka";
	  }
	  
	  if(isset($_POST["BtnOKposlovnice"]))
	  {
		Validiraj($_POST["grad"]);
	    Validiraj($_POST["adresa"]);
	   
		try
		{
           $baza = new PDO("mysql:dbname=knjizaraebook;host=localhost;charset=utf8","rhoso1","rhoso1");
           $baza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		   
		 
                $sql = $baza->prepare("INSERT INTO poslovnice (grad, adresa) VALUES(?, ?)");
                  $sql->execute(array(
                                       $_POST["grad"],
                                       $_POST["adresa"]
                                      ));
		  
          $baza = null;
        }
        catch(PDOException $e)
        {
          echo $e->getMessage();
        }
		
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
		   <form class="dodajPoslovnice" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			     <table>
				   <tr>
				    <td><label>Unesite podatke:</label></td>
				   </tr>
				   <tr>
				    <td><label>Grad: </label></td>
				   </tr>
				   <tr>
				    <td><input type="text" name="grad" id="gradPoslovnice" placeholder="Grad" onkeyup="ValidirajUnos()" required></td>
				   </tr>
				   <tr>
				    <td><label id="gradPosl"></label></td>
				   </tr>
				   <tr>
				    <td><label>Adresa: </label></td>
				   </tr>
				   <tr>
				    <td><input type="text" name="adresa" id="adresaPoslovnice" placeholder="Adresa" onkeyup="ValidirajUnos()" required></td>
				   </tr>
				   <tr>
				    <td><label id="adresaPosl"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="OK" name="BtnOKposlovnice" id="OKposlovnice" onclick="ValidirajPodatke()"></td>
				   </tr>
				    <td><label id="posovniceLabel"><?php echo $_msg ?></label></td>
				 </table> 
               </form>
		 </div>
	   </div>
	   
	   <div class="red">
	         <div class ="Kolona jedan">
		       <form action="DodajPoslovnicu.php" method="post">
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