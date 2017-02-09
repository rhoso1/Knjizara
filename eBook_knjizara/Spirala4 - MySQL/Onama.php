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
		    <div class="Kolona dva">
			  <div class="tekst">
		    	        <p class="tekstParagraf">Preduzeće eBook osnovano je 1995. godine. Od 2007. godine u okviru ovog preduzeća radi eBook - prva i najveća bosanska internet knjižara.Preko 
			                                našeg sajta možete pronaći i kupiti više od 80.000 naslova.Podatke o knjigama koje su Vam potrebne možete potražiti prema oblasti, naslovu ili autoru.
			                                Možete, također, dobiti najnovije informacije o književnim priznanjima, najprodavanijim knjigama, naslovima koje posebno preporučujemo, kao i pregled
			                                najzanimljivijih prikaza, članaka i intervjua o novim izdanjima, ličnostima i događajima iz svijeta književnosti.Preko našeg sajta možete poručiti i strane,
			                                polovne i antikvarne knjige. eBook.com već sarađuje sa najznačajnijim domaćim i stranim distributerima i naučnim institucijama. 
						</p>
			  </div>  
		    </div>
			
			<div class="Kolona dva">
			  <div class="slika"></div>
			</div>
		  </div>
			 
            
			
            <div class="red">
		    <div class="Kolona jedan">
			   <form action="Onama.php" method="post">
			     <table class="Granica">
				 <tr id="InputOnama"></tr>
				   <tr>
			        <td><label class="Naziv">Unesite grad:</label></td>
                    <td><input class="UnesiText" type="text" name="Knjiga" id="TxtOnama" onkeyup="ValidirajInput()"></td>
                    <td><input class="btnPotvrdi" type="submit" value="Pretraži"  id="BtnOnama" onclick="ValidirajOnama()"></td>
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