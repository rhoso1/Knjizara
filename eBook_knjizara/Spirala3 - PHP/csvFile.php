<?php
//Upisivanje iz Knjige.xml u Knjige.csv
session_start();
       
	   $_XML = simplexml_load_file("Knjige.xml");
	   
	   $_upis = fopen("Knjige.csv","w");
		
		foreach($_XML->knjiga as $_knjiga)
		{
		  $_upisPodaci = $_knjiga->naslov . " / " . $_knjiga->zanr . " / " . $_knjiga->autor;
		  fputcsv($_upis,explode(',',$_upisPodaci));
		}
	fclose($_upis);
	
	//Skidanje Novost.csv
	$filename="Knjige.csv";
	header('Content-Type: application/csv; charset=UTF-8');
    header('Content-Disposition: attachment;filename="'.$filename.'";');
	readfile("Knjige.csv");
 
?>