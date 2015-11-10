<?php 
//Przekształca ciąg znaków na pisany wersalikami 
function remoteToUpper($str){ 
return strtoupper($str); 
} 
//Utworzenie serwera SOAP i wyeksportowanie funkcji remoteToUpper() 
$soap = new SoapServer(null, array('uri' => '')); 
$soap->addFunction('remoteToUpper'); 
  
//Użycie żądania POST dla wywołania usługi 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
$soap->handle(); 
} 
else { 
//Bez podanych parametrów - wypisana zostanie lista dostępnych funkcji serwera SOAP 
echo "Funkcje udostępnione:\n"; 
foreach ($soap->getFunctions() as $func) { 
echo $func . "\n"; 
} 
} 
?> 