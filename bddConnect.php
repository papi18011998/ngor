<?php
try{
 $pdo=new PDO("mysql:home=127.0.0.1;dbname=ngorSubscribe","root","root"); 
}
catch(Exception $erreur)
{
	echo "Erreur de connxion avec la base de donnée </br> $erreur";
}
?>