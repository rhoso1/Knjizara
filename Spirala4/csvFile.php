<?php
//Upisivanje iz Knjige.xml u Knjige.csv
session_start();
       
	   $baza = new PDO("mysql:dbname=baza;host=mysql-55-centos7","rhoso1","rhoso1");
      $sql = $baza->prepare("SELECT * FROM knjige");
      $sql->execute();
	   
	   $_upis = fopen("Knjige.csv","w");
		
		while($rezultat = $sql->fetch(PDO::FETCH_ASSOC))
		{
		  $_upisPodaci = $rezultat['naslov'] . " / " . $rezultat['zanr'] . " / " . $rezultat['autor'];
		  fputcsv($_upis,explode(',',$_upisPodaci));
		}
	fclose($_upis);
	
	//Skidanje Novost.csv
	$filename="Knjige.csv";
	header('Content-Type: application/csv; charset=UTF-8');
    header('Content-Disposition: attachment;filename="'.$filename.'";');
	readfile("Knjige.csv");
 
?>
