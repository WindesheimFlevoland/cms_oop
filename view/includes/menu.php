<?php
 	    error_reporting(E_ALL ^ E_NOTICE);
		 
		  if ($_SESSION['admin']==2) {		   
		   
		    echo  "<ul><b>
			<h2> Menu</h2>
			<br />
			<li><a href='index.php'>Home</a></li>
			<li><a href='berichten_overzicht_admin.php'>Overzicht berichten</a></li>
			<li><a href='bericht_bewaren_form.php'>Bericht schrijven</a></li>
			<li><a href='user_overzicht.php'>Overzicht users</a></li>
			<li><a href='user_bewaren_form.php'>User toevoegen</a></li>
			<li><a href='user_logout_form.php'>Uitloggen</a></li>

			<br /> &nbsp; Welkom {$_SESSION['firstname']}";
		   
		  }
		   if ($_SESSION['admin']==1) {		   
		   
		   echo " <ul><b>
			<h2> Menu</h2>
			<br />
			<li><a href='index.php'>Home</a></li>
			<li><a href='berichten_overzicht.php'>Overzicht berichten</a></li>
			<li><a href='bericht_bewaren_form.php'>Bericht schrijven</a></li>
			<li><a href='user_logout_form.php'>Uitloggen</a></li>

			<br /> &nbsp; Welkom {$_SESSION['firstname']}";
		   
		 }
			if ($_SESSION['admin']==0) {		   
		 
		   
		   echo " <ul><b>
			<h2> Menu</h2>
			<br />
			<li><a href='index.php'>Home</a></li>
			<li><a href='berichten_overzicht.php'>Overzicht berichten</a></li>
			<li><a href='user_login_form.php'>Inloggen</a></li>

			<br />";
		   
		 }
?>
