<?php
header('Content-Type: application/json'); 
header('Access-Control-Allow-Origin: *');
$method = $_SERVER['REQUEST_METHOD'];
$baza = new PDO("mysql:dbname=knjizaraebook;host=localhost;charset=utf8","rhoso1","rhoso1");

switch ($method) 
{
  case 'GET':
    $sql = $baza->prepare("SELECT * FROM poslovnice");
          $sql->execute();
	break;
	
  case 'PUT':
    $sql = $baza->prepare("UPDATE  poslovnice SET adresa = 'ZmajaOdBosne'");
    $sql->execute();
	break;

  case 'POST':
    $sql = $baza->prepare("INSERT INTO poslovnice (grad, adresa) VALUES(?, ?)");
    $sql->execute(array(
                         "WebServis",
						 "WebServis"
                       ));
	break;
	
  case 'DELETE':
    	$sql = $baza->prepare("DELETE FROM poslovnice WHERE grad='WebServs'");
	    $sql->execute();
	break;
}

$rezultat = $baza->query("select * from poslovnice");

if (!$rezultat)
	{
        http_response_code(404);
        die(print_r($baza->errorInfo(), true));
}

if ($method == 'GET')
	{
       echo json_encode($rezultat->fetchALL(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);

  }
 