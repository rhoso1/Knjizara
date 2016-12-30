<?php 
	 
	 $_nazivAutora[] = "";
	 
	 $_XML = simplexml_load_file("Knjige.xml");
              
              foreach($_XML->knjiga as $_knjiga)
              {
				  $_nazivAutora[] = $_knjiga->autor;
			  }
			  
	 if(isset($_REQUEST["q"]))
	 {
      $q = $_REQUEST["q"];
	  

      $_prijedlog = "";
 
       if ($q !== "") 
	   {
           $q = strtolower($q);
           $_duzina = strlen($q);
		   
           foreach($_nazivAutora as $_naziv)
		   {
             if (stristr($q, substr($_naziv, 0, $_duzina)))
				 {
                   if ($_prijedlog === "") 
				   {
                      $_prijedlog = $_naziv;
                   } 
				   else 
				   {
                     $_prijedlog .= ", $_naziv";
                   }
                 }
           }
        }
           echo $_prijedlog === "" ? "nema prijedloga" : $_prijedlog;
	 }
	 
?>