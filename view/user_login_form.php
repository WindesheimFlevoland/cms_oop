<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naamloos document</title>
 <link type='text/css' rel='stylesheet' href='css/style.css'/>
</head>

<body>
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
<h2>Login:</h2>
<table>
<form action="../controller/user_login.php" method="post">
 <tr><td> <p>Voornaam: </td>
  <td><input name="voornaam" type="text" /> </td></tr>
  </p>
  <tr><td><p>Wachtwoord: </td>
   <td><input name="wachtwoord" type="password" /></td></tr>
  </p>
 
  <p>
  <tr><td></td><td><button class="submit" type="submit">Inloggen</button></td></tr>
  </p>
  </table>
</form>
</div>
</body>
</html>