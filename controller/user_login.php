      	<?php
	      session_start();
	      error_reporting(E_ALL ^ E_NOTICE);
	  
	     //variabelen uit formulier halen
		
		 $firstname=$_POST['voornaam'];
         $password=$_POST['wachtwoord'];
		
		include '../model/user_class.php';
          
        // Maak een instantie van de user aan
        
		  $me = new User($id, $firstname, $lastname, $email, $password, $admin);
        
       	  // Controleer of de gebruiker is ingelogd (sessie) en of hij bestaat in de database
		
		  $me->login();
		   
		  //Bepaal of de gebruiker administratorrechten heeft en stuur hem door naar de goede pagina
		   
		  if ($_SESSION['admin']==2) {		   
		   
		  header('Location: ../view/berichten_overzicht_admin.php');
		   
		  }
		  
		  if ($_SESSION['admin']==1) {		   
		   
		  header('Location: ../view/berichten_overzicht.php');
		   
		  }
        ?>