<!DOCTYPE HTML>
<HTML>
  <HEAD>
   <TITLE>eBook knjizara</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
	<META charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="DropDown.js"></script>
   </HEAD>
<BODY>

<?php 
     if(isset($_POST["pdfBtn"]))
	 {
		 header("Location: MyPDF.php");
	 }
?>
     
       <div class="red">
	     <div class="Kolona jedan">
		    <h1 class="Naslov">eBook</h1>
			  <form class="pdf" action="Pocetna.php" method="post">
			   <input type="submit" class="pdfBtn" name="pdfBtn" value="">
			  </form>
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
			    <div class="Kolona jedan">
				    <p class="kraj">Knjige u našoj ponudi</h2>
				</div>
            </div>
	   
		   <?php 
		    
            $_XML = simplexml_load_file("Novost.xml");
              
              foreach($_XML->knjiga as $_knjiga)
              {
			?>
			<div class="red">
	          <div class ="Kolona jedan">
		        <form class="Prikaz" action="PrikazKnjiga.php" method="post">
			      <table>
				    <tr>
				    <td><label>Naziv knjige:</label><input type="text" class="urediInput" name="naslovKnjige" readonly="readonly" value="<?php echo $_knjiga->naslov ?>"></td>
				   </tr>
				   <tr>
				    <td><label>Žanr: </label><input type="text" class="urediInput" name="zanr" readonly="readonly" value="<?php echo $_knjiga->zanr ?>" ></td>
				   </tr>
				   <tr>
				    <td><label>Autor: </label><input type="text" class="urediInput" name="author" readonly="readonly" value="<?php echo $_knjiga->autor ?>"></td>
				   </tr>
				 </table> 
               </form>
		 </div>
	   </div>
				<?php
                      }
	        	?>  
	   
	<!--<div class="red">
	   <div class="Kolona dva slikaP">
	    <div class="lijevo">
	     <h1 class="Lijevo">Novo u našoj ponudi</h1>
	     <p class="Lijevo">Školski pribor po izuzetno niskim cijenama...
	     <br>
	     </p>
	     <div class="okvir"></div>
		 </div>
		 </div>
		 
		 <div class="Kolona dva slikaP">
		   <div class="desno">
		   <h1 class="Desno">Novo u našoj ponudi - čestitke</h1>
	       <div class="okvirDesno"></div>
		   </div>
		  </div>
	   </div>
	   
	
	
	<div class="red">
	   <div class="Kolona dva slikaP">
	    <div class="lijevo">
	       <h1 class="Lijevo">Novo u našoj ponudi</h1>
	       <p class="Lijevo">Izrada albuma sa fotografijama po Vašoj želji...
	       <br>
	       </p>
	       <div class="okvirLijevo"></div>
		 </div>
       	</div>	
		<div class="Kolona dva slikaP">
		  <div class="desno">
		    <h1 class="Desno">I još puno toga...</h1>
	        <p class="Desno">Posjetite nas svakim radim danom u periodu od 09:00-16:00
			 </p>
		  </div>
	  </div>
	</div>
	-->
	<div class="red">
			    <div class="Kolona jedan">
				    <p class="kraj">Posjetite nas u ulici Zmaja od Bosne bb, Sarajevo.</p>
				</div>
            </div>
			

</BODY>
</HTML>