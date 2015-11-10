<?php 
//Ustalenie adresu serwera: 
$location = sprintf('http://%s%s/soap_server.php', 
//$_SERVER['HTTP_HOST'], 
'samoloty.222.pl/',
dirname($_SERVER['SCRIPT_NAME'])); 

//echo $location;
  
//Utworzenie obiektu klienta SOAP 
$soap = new SoapClient(null, array('location' => $location, 'uri'      => '')); 
  
//wykorzystanie funkcji udostępnionej przez serwer 
$ret = $soap->remoteToUpper('SOAP - i like it!'); 
  
echo $ret; //zwraca napis "SOAP - I LIKE IT!" 
?> 