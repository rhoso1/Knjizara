<?php
        
		session_start();
		
		 $baza = new PDO("mysql:dbname=baza;host=localhost","rhoso1","rhoso1");
		$baza->exec("Set names utf8");
		  
		  function zag() 
		 {
            header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
            header('Access-Control-Allow-Origin: *');
			header('Content-Type: application/json'); 
         }
		 

        function rest_delete($request) { }
		function rest_put($request, $data){}
        function rest_error($request) { }
		
		function rest_get($request, $data)
		{ 
		  $baza = new PDO("mysql:dbname=baza;host=localhost","rhoso1","rhoso1");
         $baza->exec("Set names utf8");
		 
			    if(isset($data["adresa"]))
			     {
					  try
		                {
					     $sql = $baza->query("SELECT * FROM webservis WHERE adresa= '" . $data['adresa'] ."'");
					     $sql->execute();
						 echo "Nakon poziva get metode ispisu se podaci koji odgovaraju onim unesenim u URL:";
						 echo "\r\n";
					     echo json_encode($sql->fetchALL(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);
					  
					     $baza = null;
				       }

                         catch(PDOException $e)
                         {
                          echo $e->getMessage();
                         }
		             }
					 
					 else
					 {
						 $sql = $baza->query("SELECT * FROM webservis");
					     $sql->execute();
						 echo "Podaci u bazi:";
						 echo "\r\n";
					     echo json_encode($sql->fetchALL(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);
					 }
		}
      
		
		function rest_post($request, $data)
		{
			 $baza = new PDO("mysql:dbname=baza;host=localhost","rhoso1","rhoso1");
            $baza->exec("Set names utf8");
			
			$sql = $baza->prepare("INSERT INTO webservis (grad, adresa) VALUES(?, ?)");
            $sql->execute(array(
                                       $data['grad'],
                                       $data['adresa']
                                      ));
									  echo "blaaaaaa";
			
			echo json_encode($sql->fetchALL(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);
		}
		
		
		$method  = $_SERVER['REQUEST_METHOD'];
        $request = $_SERVER['REQUEST_URI'];

        switch($method)
		{
          case 'PUT':
          parse_str(file_get_contents('php://input'), $put_vars);
          zag(); 
		  $data = $put_vars;
		  rest_put($request, $data); break;
		  
         case 'POST':
         zag();
		 $data = $_POST;
		 rest_post($request, $data);
		 break;
		 
         case 'GET':
         zag();
		 $data = $_GET;
		 rest_get($request, $data);
		 break;
       
    	 case 'DELETE':
         zag();
		 rest_delete($request);
		 break;
		 
         default:
         header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
         rest_error($request); break;
}
		 
		 
?>