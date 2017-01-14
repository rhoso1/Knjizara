<?php 
	 
	 $_nazivAutora[] = "";
	 
	   $baza = new PDO("mysql:dbname=baza;host=mysql-55-centos7;charset=utf8","rhoso1","rhoso1");
      $sql = $baza->prepare("SELECT * FROM knjige");
      $sql->execute();

		
		while($rezultat = $sql->fetch(PDO::FETCH_ASSOC))
		{
	     
     		 $_nazivAutora[] = $rezultat['autor'];
			 
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
           echo $_prijedlog === "" ? "" : $_prijedlog;
	 }
	 
?>