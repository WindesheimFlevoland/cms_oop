  <?php session_start(); ?>
  <html>
      <head>
        <title> Introduction to Object-Oriented Programming </title>
        <link type='text/css' rel='stylesheet' href='css/style.css'/>
      </head>
      <body>
      <?php 
	  $rights=2;
	  include 'includes/sentry.php'; ?>
        <p>
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
      <div id="weghalen">
  Weet u zeker dat u deze pagina met id=<?php $id=$_GET['id']; echo $id; ?> definitief wilt verwijderen? <br><br>
  <table>	
  <form action="../controller/bericht_weghalen.php" method="get"> 
  <input name="id" type="hidden" value="<?php echo $id; ?>">
  <tr><td><button class="submit" name="weghalen" type="submit" value="ja">Ja</button></td><td>
  <button class="submit" name="weghalen" type="submit" value="nee">Nee</button></td></tr>
  </form> <br>
  </table>
      </div>
    </div>
          </p>
      </body>
  </html>