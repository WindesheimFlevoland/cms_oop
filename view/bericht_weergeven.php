<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
      <title> Introduction to Object-Oriented Programming </title>
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
	   <?php
       include '../controller/bericht_weergeven.php';
	   ?>
       </div>
     </div>
   
  </body>
</html>