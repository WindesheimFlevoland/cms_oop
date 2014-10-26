      	<?php
	  	    
	     //variabelen uit formulier halen
		
		 $firstname=$_POST['voornaam'];
         $lastname=$_POST['achternaam'];
		 $email=$_POST['emailadres'];
         $password=$_POST['wachtwoord'];
		 $admin=$_POST['rechten'];
		
		include '../model/user_class.php';
          
        // Maak een instantie van de user aan
		
        $user = new User($id, $firstname, $lastname, $email, $password, $admin);
        
       	// Bewaar de gegevens van deze user in de database
		
		$user->save();
		
		//keer terug naar het gebruikersoverzicht
		 		   
	    header('Location: ../view/user_overzicht.php');
		   
		  
        ?>    