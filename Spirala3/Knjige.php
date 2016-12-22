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
			   <form action="Knjige.php" method="post">
			     <table class="Granica">
				 <tr id="Input"></tr>
				   <tr>
			        <td><label class="Naziv">Unesite naziv knjige:</label></td>
                    <td><input class="UnesiText" type="text" name="Knjiga" id="InputKnjiga" onkeyup="ValidirajKnjigu()"></td>
                    <td><input class="btnPotvrdi" type="submit" value="Pretraži" id="BtnKnjiga" onclick="Validiraj()"></td>
				   </tr>
				 </table> 
               </form>
			</div>
		 </div>
		 
		<div class="red">
		   <div class="Kolona jedan">
		     <table class="Tabela">
			   <tr>   
                 <th>Informatika</th>
                 <th>Umjetnost</th>
                 <th>Književnost</th>
                 <th>Sport</th>
                 <th>Kućna Medicina</th>
              </tr>
              <tr>   
                 <td>C# Programming</td>
                 <td>Umjetnost5</td>
                 <td>Derviš i smrt</td>
                 <td>Sport5</td>
                 <td>Kućna Medicina1</td>
              </tr>
              <tr>   
                 <td>Java Programming</td>
                 <td>Umjetnost4</td>
                 <td>Jedan život</td>
                 <td>Sport4</td>
                 <td>Kućna Medicina2</td>
             </tr>
             <tr>   
                 <td>Software Eng</td>
                 <td>Umjetnost3</td>
                 <td>Crna duša</td>
                 <td>Sport3</td>
                 <td>Kućna Medicina3</td>
            </tr>
            <tr>   
                 <td>CAD</td>
                 <td>Umjetnost2</td>
                 <td>Amanet</td>
                 <td>Sport2</td>
                 <td>Kućna Medicina4</td>
            </tr>
            <tr>   
                 <td>PHP</td>
                 <td>Umjetnost1</td>
                 <td>Tvrđava</td>
                 <td>Sport1</td>
                 <td>Kućna Medicina5</td>
            </tr>
           </table>
		    
		  </div>
		</div>
          <div class="red">
			    <div class="Kolona jedan">
				    <p class="kraj">Posjetite nas u ulici Zmaja od Bosne bb, Sarajevo.</p>
				</div>
            </div>		 
		 
		 
</BODY>
</HTML>