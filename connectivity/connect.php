<?php


//geef hieronder de correcte variabelen weer voor de webserver en de database
$host='localhost';
$user='root';
$password='';
$db='cmsoop';

//hieronder niet veranderen

$conn=mysqli_connect($host,$user,$password,$db)
or die ("Verbinding mislukt: Geen geldige host, gebruikersnaam, database of wachtwoord"); 

?>