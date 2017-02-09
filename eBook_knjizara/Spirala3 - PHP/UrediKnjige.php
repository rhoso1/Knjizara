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
		
		$_autor ="";
		$_zanr="";
		$_naslov="";
		$_msg ="";
		
		//U ovom slucaju se nista ne unosi
		if (isset($_POST['Uredi']) && isset($_POST['urediKnjigu']))
		{
			$_naslov=$_POST['urediKnjigu'];
			
			$_XML = simplexml_load_file('Knjige.xml');
			
			foreach($_XML->knjiga as $_knjiga) 
			{
				
				if ($_knjiga->naslov == $_naslov)
				{
					$_zanr = $_knjiga->zanr;
					$_autor = $_knjiga->autor;
					$_naslov = $_knjiga->naslov;
				}
			}
		}
		
		if (isset($_POST['Sacuvaj']) && isset($_POST['urediKnjigu']) && isset($_POST['autorKnjige']) && isset($_POST['zanr']))
		{
			$_naslov=$_POST['urediKnjigu'];
			//Provjera unosa
			$_noviZanr = Validiraj($_POST['zanr']);
			$_autor = $_POST['autorKnjige'];
			
			
			$_XML = simplexml_load_file('Knjige.xml');
			
			foreach($_XML->knjiga as $_knjiga) 
			{
				if ($_knjiga->naslov == $_POST['urediKnjigu'])
				{
					$_knjiga->zanr = $_noviZanr;
					
				}
			}
			$_zanr = $_noviZanr;
			
			
			$_XML->asXML('Knjige.xml');
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
		        <form class="Brisanje" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			      <table>
				    <tr>
				    <td><label>Naziv knjige:</label>
					<select  name="urediKnjigu" class="selectOption">
					<?php 
						 $_XML = simplexml_load_file("Knjige.xml");
              
                            foreach($_XML->knjiga as $_knjiga)
                            {
					?>
						<option class="selectOption" ><?php echo $_knjiga->naslov; ?></option>
					<?php
					        }
					?>
				   </select>
				   </td>
				   </tr>
				   
				   <tr>
				   <td><label>Žanr: </label><input type="text" name="zanr" class="urediInput" value="<?php echo $_zanr ?>" ></td>
				   </tr>
				   <tr>
				   <td><label>Autor: </label><input type="text" class="urediInput" name="autorKnjige" readonly="readonly" value="<?php echo $_autor ?>"></td>
				   </tr>
				   <tr>
				   <td><input type="submit" value="Uredi" name="Uredi" class="BtnUredi"><input type="submit" value="Sačuvaj" name="Sacuvaj" class="BtnSacuvaj"></td>
				   </tr>
				 </table> 
               </form>
		 </div>
	   </div>		  
		   <div class="red">
	         <div class ="Kolona jedan">
		       <form action="BrisanjeKnjige.php" method="post">
		        <input type="submit" value="Nazad" name="BtnNazadOpcije" class="nazadBtn">
		       </form>
		    </div>
	     </div>
  
</BODY>
</HTML>