<?php

try
		{
           $baza = new PDO("mysql:dbname=knjizaraebook;host=localhost;charset=utf8","rhoso1","rhoso1");
           $baza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		 //  Da prebaci sve poslovnice
		   $_XML = simplexml_load_file("Poslovnice.xml");
              
              foreach($_XML->poslovnica as $_poslovnica)
              {
				  $sql = $baza->prepare("INSERT INTO poslovnice (grad, adresa) VALUES(?, ?)");
                  $sql->execute(array(
                                       $_poslovnica->grad,
                                       $_poslovnica->adresa
                                      ));
			  }
			  
			  //Da prebaci sve novosti
			 $_XML = simplexml_load_file("Novost.xml"); 
			 foreach($_XML->novost as $_novost)
              {
				  $sql = $baza->prepare("INSERT INTO novosti (poslovnice, naslov, sadrzaj, autor) VALUES(?, ?, ?, ?)");
                  $sql->execute(array(
				                       1,
                                       $_novost->naslov,
                                       $_novost->sadrzaj,
									   $_novost->autor
                                      ));
			  }
			  
			  //Da prebaci sve knjige
			  $_XML = simplexml_load_file("Knjige.xml"); 
			  foreach($_XML->knjiga as $_knjiga)
              {
				  $sql = $baza->prepare("INSERT INTO knjige (poslovnice, naslov, zanr, autor) VALUES(?, ?, ?, ?)");
                  $sql->execute(array(
				                       1,
                                       $_knjiga->naslov,
                                       $_knjiga->zanr,
									   $_knjiga->autor
                                      ));
			  }
          $baza = null;
        }
        catch(PDOException $e)
        {
          echo $e->getMessage();
        }
?>
