<?php 
	 
	 $_naslovKnjige[] = "";
	 
	 $_XML = simplexml_load_file("Knjige.xml");
              
              foreach($_XML->knjiga as $_knjiga)
              {
				  $_naslovKnjige[] = $_knjiga->naslov;
			  }
			  
	 if(isset($_REQUEST["q"]))
	 {
      $q = $_REQUEST["q"];
	  

      $_prijedlog = "";
 
       if ($q !== "") 
	   {
           $q = strtolower($q);
           $_duzina = strlen($q);
		   
           foreach($_naslovKnjige as $_ime)
		   {
             if (stristr($q, substr($_ime, 0, $_duzina)))
				 {
                   if ($_prijedlog === "") 
				   {
                      $_prijedlog = $_ime;
                   } 
				   else 
				   {
                     $_prijedlog .= ", $_ime";
                   }
                 }
           }
        }
           echo $_prijedlog === "" ? "nema prijedloga" : $_prijedlog;
	 }
	 
?>