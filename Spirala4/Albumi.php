<!DOCTYPE HTML>
<HTML>
  <HEAD>
   <TITLE>eBook knjizara</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
	<META charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="galerijaAlbum.js"></script>
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
	     <div class ="Kolona jedan">
		   <p class="GalerijaParag">Pogledajte galeriju fotografija albuma koje možete pronaći u našoj knjižari</p>
		 </div>
	   </div>
	   
	   <div class="red">
	       <div class="Kolona dva">
		      <img class="Pimage" id="Aslika1" src="Slike/album1.jpg" onclick="FullScreen1()">		
		   </div>
		   <div class="Kolona dva">
		      <img class="Pimage" id="Aslika2" src="Slike/album2.jpg" onclick="FullScreen2()">
		   </div>
	   </div>
	   
	   <div class="red">
	       <div class="Kolona dva">
		     <img class="Pimage" id="Aslika3" src="Slike/album3.jpg" onclick="FullScreen3()">
		   </div>
		   <div class="Kolona dva">
		     <img class="Pimage" id="Aslika4" src="Slike/album4.jpg" onclick="FullScreen4()">
		   </div>
	   </div>
	   
	   <div class="red">
	       <div class="Kolona dva">
		      <img class="Pimage" id="Aslika5" src="Slike/album5.jpg" onclick="FullScreen5()">
		   </div>
		   <div class="Kolona dva">
		      <img class="Pimage" id="Aslika6" src="Slike/album6.jpg" onclick="FullScreen6()">
		   </div>
	   </div>
	   
	   <div class="red">
	       <div class="Kolona dva">
		      <img class="Pimage" id="Aslika7" src="Slike/album7.jpg" onclick="FullScreen7()">
		   </div>
		   <div class="Kolona dva">
		      <img class="Pimage" id="Aslika8" src="Slike/album8.jpg" onclick="FullScreen8()">
		   </div>
	   </div>  
		   
       <div class="red">
			    <div class="Kolona jedan">
				    <p class="kraj">Posjetite nas u ulici Zmaja od Bosne bb, Sarajevo.</p>
				</div>
            </div>
  
</BODY>
</HTML>