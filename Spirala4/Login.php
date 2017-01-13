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
	  $_msg = '';
	  $_OK = false;
	  $_username = '';
	  
	   if (isset($_POST['BtnOK']) && empty($_POST['username']) && empty($_POST['password']))
			{
				$_msg = 'Popunite sva polja';
			}
	  
	    if (isset($_POST['BtnOK']) && !empty($_POST['username']) && !empty($_POST['password'])) 
			{
				Validiraj($_POST['username']);
				Validiraj($_POST['password']);
				
					
				$baza = new PDO("mysql:dbname=knjizaraebook;host=localhost;charset=utf8","rhoso1","rhoso1");
 
                 $sql = $baza->prepare("SELECT * FROM adminpodaci");
                 $sql->execute();
				 
				 while($rezultat = $sql->fetch(PDO::FETCH_ASSOC))
		          {
				
				    if($_POST['username'] == $rezultat['username'] && $_POST['password'] == $rezultat['password'])
				    {
				      $_SESSION['LoginForma'] = true;
				      $_msg="";
				       $_OK = true;
				    }
				  }
				  
			  if(!$_OK)
			  {	
					$_msg = 'Pogrešan username ili password';
					$_SESSION['LoginForma'] = false;
			  }
			}

			if($_OK)
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
		   <form class="LoginForma" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			     <table>
				   <tr>
				    <td><label>Unesite podatke:</label></td>
				   </tr>
				   <tr>
				    <td><label>Username: </label></td>
				   </tr>
				   <tr>
				    <td><input type="text" name="username" id="username" placeholder="Username"></td>
				   </tr>
				   <tr>
				    <td><label>Password: </label></td>
				   </tr>
				   <tr>
				    <td><input type="password" name="password" id ="password" placeholder="Password"></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="OK" name="BtnOK" id="LogOk" onclick="ValidirajLogin()"></td>
				   </tr>
				    <td><label id="loglabel"><?php echo $_msg ?></label></td>
				 </table> 
               </form>
		 </div>
	   </div>
  
</BODY>
</HTML>