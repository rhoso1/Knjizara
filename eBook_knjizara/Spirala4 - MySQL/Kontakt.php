<!DOCTYPE HTML>
<HTML>
  <HEAD>
   <TITLE>eBook kontakt</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
	<META charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="validacija.js"></script>
	<script type="text/javascript" src="DropDown.js"></script>
   </HEAD>
<BODY>
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
		 <div class="Kolona jedan">
				<form class="Forma" action="Kontakt.php" method="post">
			     <table>
				   <tr>
				    <td><label>E-mail: </label></td>
				   </tr>
				   <tr>
				    <td><input type="email" name="email" id="txtMail" onkeyup="ValidirajMail()" required></td>
				   </tr>
				   <tr>
				    <td><label id="mailLabel"></label></td>
				   </tr>
				   <tr>
				    <td><label>Broj telefona: </label></td>
				   </tr>
				   <tr>
				    <td><input type="tel" name="tel" id="txtTelefon" onkeyup="ValidirajTelefon()" required></td>
				   </tr>
				   <tr>
				    <td><label id="telefonLabel"></label></td>
				   </tr>
				   <tr>
				    <td><label>Država: </label></td>
				   </tr>
				   <tr>
				    <td><input type="text" name="drzava" id="txtDrzava" onkeyup="ValidirajDrzavu()" required></td>
				   </tr>
				   <tr>
				    <td><label id="drzavaLabel"></label></td>
				   </tr>
				   <tr>
				    <td><label>Poruka: </label></td>
				   </tr>
				   <tr>
				    <td><textarea rows="4" cols="35" name ="mss" id="txtPoruka" onkeyup="ValidirajPoruku()"></textarea></td>
				   </tr>
				   <tr>
				    <td><label id="porukaLabel"></label></td>
				   </tr>
				   <tr>
				    <td><input type="submit" value="Pošalji" id="BtnKontakt" onclick="ValidirajKontakt()"></td>
				   </tr>
				    <td><label id="btnLabel"></label></td>
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