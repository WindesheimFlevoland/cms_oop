<?php session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<?php
include '../controller/users_overzicht.php';

?>

</div>

</body>
</html>