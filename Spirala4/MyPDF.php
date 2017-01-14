
<?php 
     header('Content-Type: text/html; charset=utf-8');
     require('fpdf/fpdf.php');
     $pdf = new FPDF();
     $pdf->AddPage();
     $pdf->SetFont('Times','B',18);
     $pdf->SetTitle('Knjige');
	 $pdf->SetTextColor(128, 0, 0);
     $pdf->MultiCell(120,20,'Knjige koje mozete pronaci kod nas su:');

      $baza = new PDO("mysql:dbname=baza;host=mysql-55-centos7","rhoso1","rhoso1");
 
          $sql = $baza->prepare("SELECT * FROM knjige");
          $sql->execute();
	   
          while($rezultat = $sql->fetch(PDO::FETCH_ASSOC))
		  {
		   $_ispis =" - ". $rezultat['naslov'] . ", " . $rezultat['autor'] . ";";
		   $pdf->SetFont('Times','I',16);
		   $pdf->SetTextColor(0, 0, 102);
           $pdf->MultiCell(150,10,$_ispis);	
	      }

	   ob_end_clean();
       $pdf->Output();
?>