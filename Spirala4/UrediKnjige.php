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
		if(isset($_POST["BtnNazadOpcije"]))
		{
			header("Location: AdminOpcije.php");
		}
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
		 $baza = new PDO("mysql:dbname=baza;host=mysql-55-centos7","rhoso1","rhoso1");
		//U ovom slucaju se nista ne unosi
		if (isset($_POST['Uredi']) && isset($_POST['urediKnjigu']))
		{
			$_naslov=$_POST['urediKnjigu'];
 
                 $sql = $baza->prepare("SELECT * FROM knjige");
                 $sql->execute();
				 
				 while($rezultat = $sql->fetch(PDO::FETCH_ASSOC))
		          {
				
				      if ($rezultat['naslov'] == $_naslov)
				      {
					    $_zanr = $rezultat['zanr'];
					    $_autor = $rezultat['autor'];
					    $_naslov = $rezultat['naslov'];
				      }
			      } 
		  }
		
		if (isset($_POST['Sacuvaj']) && isset($_POST['urediKnjigu']) && isset($_POST['autorKnjige']) && isset($_POST['zanr']))
		{
			$_naslov=$_POST['urediKnjigu'];
			//Provjera unosa
			$_noviZanr = Validiraj($_POST['zanr']);
			$_autor = $_POST['autorKnjige'];
			
		
			
                 $sql = $baza->prepare("SELECT * FROM knjige");
                 $sql->execute();
				 
				 while($rezultat = $sql->fetch(PDO::FETCH_ASSOC))
		          {
				     if ($rezultat['naslov'] == $_POST['urediKnjigu'])
				     {
					   $sql = $baza->prepare("UPDATE knjige SET zanr='" . $_noviZanr . "' ");
                       $sql->execute();
					
			       	}
				  }
			
			$_zanr = $_noviZanr;
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
						 $sql = $baza->prepare("SELECT * FROM knjige");
                         $sql->execute();
				 
				          while($rezultat = $sql->fetch(PDO::FETCH_ASSOC))
                          {
					?>
						<option class="selectOption" ><?php echo $rezultat['naslov']; ?></option>
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
		       <form action="UrediKnjige.php" method="post">
		        <input type="submit" value="Nazad" name="BtnNazadOpcije" class="nazadBtn">
		       </form>
		    </div>
	     </div>
  
</BODY>
</HTML>