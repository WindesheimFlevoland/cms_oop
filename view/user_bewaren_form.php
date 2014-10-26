<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naamloos document</title>
<link type='text/css' rel='stylesheet' href='css/style.css'/>
</head>

<body>
<?php 
$rights=2;
include 'includes/sentry.php'; ?>
<div id="form">

<?php 	     		   
include 'includes/header.php';		
?>

</div>
<div id="menu">
<?php
 
include 'includes/menu.php';
	

?>
</div>
<div id="content">
<h2>  Gebruiker toevoegen</h2>
<table>
<form action="../controller/user_bewaren.php" method="post">
<tr><td>Voornaam: </td><td>
  <input name="voornaam" type="text" /></td></tr>
 
<tr><td>Achternaam:</td><td>
  <input name="achternaam" type="text" /></td></tr>
  </p>
<tr><td>Emailadres:</td><td>
  <input name="emailadres" type="text" /></td></tr>
  </p>
<tr><td>Wachtwoord:</td><td>
  <input name="wachtwoord" type="password" /></td></tr>
<tr><td>Rechten:</td><td>
  User:<input name="rechten" type="radio" value="1" />
  Admin: <input name="rechten" type="radio" value="2" /></td></tr>
  <p>
<tr><td><button class="submit" type="submit">Gebruiker opslaan</button></td><td>
  </p>
</form>
</div>
</body>
</html>