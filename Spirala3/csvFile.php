<?php
//Upisivanje iz Novost.xml u Novost.csv
session_start();
       
	   $_XML = simplexml_load_file("Novost.xml");
	   
	   $_upis = fopen("Novost.csv","w");
		
		foreach($_XML->knjiga as $_knjiga)
		{
		  $_upisPodaci = $_knjiga->naslov . " / " . $_knjiga->zanr . " / " . $_knjiga->autor;
		  fputcsv($_upis,explode(',',$_upisPodaci));
		}
	fclose($_upis);
	
	//Skidanje Novost.csv
	$filename="Novost.csv";
	header('Content-Type: application/csv; charset=UTF-8');
    header('Content-Disposition: attachment;filename="'.$filename.'";');
	readfile("Novost.csv");
 
?>