<?php 
	 
	 $_naslovKnjige[] = "";
	 
	 $baza = new PDO("mysql:dbname=baza;host=mysql-55-centos7","rhoso1","rhoso1");
     $sql = $baza->prepare("SELECT * FROM knjige");
     $sql->execute();

		
		while($rezultat = $sql->fetch(PDO::FETCH_ASSOC))
		{
	     
     		 $_naslovKnjige[] = $rezultat['naslov'];
			 
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
           echo $_prijedlog === "" ? "" : $_prijedlog;
	 }
	 
?>