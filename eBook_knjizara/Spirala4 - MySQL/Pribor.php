<!DOCTYPE HTML>
<HTML>
  <HEAD>
   <TITLE>eBook knjizara</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
	<META charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="galerijaPribor.js"></script>
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
		   <p class="GalerijaParag">Pogledajte galeriju fotografija pribora kojeg mozete pronaci u našoj knjižari</p>
		 </div>
	   </div>
	   
	   <div class="red">
	       <div class="Kolona dva">
		      <img class="Pimage" id="Pslika1" src="Slike/pribor1.jpg" onclick="FullScreen1()">		
		   </div>
		   <div class="Kolona dva">
		      <img class="Pimage" id="Pslika2" src="Slike/pribor2.jpg" onclick="FullScreen2()">
		   </div>
	   </div>
	   
	   <div class="red">
	       <div class="Kolona dva">
		     <img class="Pimage" id="Pslika3" src="Slike/pribor3.jpg" onclick="FullScreen3()">
		   </div>
		   <div class="Kolona dva">
		     <img class="Pimage" id="Pslika4" src="Slike/pribor4.jpg" onclick="FullScreen4()">
		   </div>
	   </div>
	   
	   <div class="red">
	       <div class="Kolona dva">
		      <img class="Pimage" id="Pslika5" src="Slike/pribor5.jpg" onclick="FullScreen5()">
		   </div>
		   <div class="Kolona dva">
		      <img class="Pimage" id="Pslika6" src="Slike/pribor6.jpg" onclick="FullScreen6()">
		   </div>
	   </div>

	    <div class="red">
			    <div class="Kolona jedan">
				    <p class="kraj">Posjetite nas u ulici Zmaja od Bosne bb, Sarajevo.</p>
				</div>
            </div>
  
</BODY>
</HTML>