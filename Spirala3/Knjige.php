<!DOCTYPE HTML>
<HTML>
  <HEAD>
   <TITLE>eBook Knjige</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
	<META charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="validacija.js"></script>
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
		     <table class="Tabela">
			   <tr>   
                 <th>Naslov</th>
                 <th>Žanr</th>
                 <th>Autor</th>
               </tr>
			   <?php 
		    
            $_XML = simplexml_load_file("Knjige.xml");
              
              foreach($_XML->knjiga as $_knjiga)
              {
			?>
			   <tr>
			   <td><?php echo $_knjiga->naslov ?></td>
			   <td><?php echo $_knjiga->zanr ?></td>
			   <td><?php echo $_knjiga->autor ?></td>
			   </tr>
			   <?php
                      }
	        	?>  
              </table>
		  </div>
		</div>
		
		<div class="red">
			    <div class="Kolona jedan">
				    <p class="pdfParagraf">Spisak knjiga u pdf formatu možete preuzeti ovdje:</p>
					<form class="pdf" action="Knjige.php" method="post">
			          <input type="submit" class="pdfBtn" name="pdfBtn" value="">
			        </form>
				</div>
            </div>
		
		<div class="red">
		    <div class="Kolona jedan">
			   <form action="Knjige.php" method="post">
			     <table class="Granica">
				   <tr>
				   <td><label class="Naziv">Unesite naziv knjige:</label><input class="UnesiText" type="text" name="Knjiga" id="InputKnjiga" onkeyup="ValidirajKnjigu()"></td>
				   </tr>
				   <tr>
				   <td><label>Unestite ime autora:</label><input class="UnesiText" type="text" name="autor" id="autorKnjiga" onkeyup="ValidirajKnjigu()"></td>
				   </tr>
				   <tr>
				   <td><input class="btnPotvrdi" type="submit" value="Pretraži" id="BtnKnjiga" onclick="Validiraj()"></td>
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