      	<?php
	  
	    error_reporting(E_ALL ^ E_NOTICE);
	  	
		include '../model/user_class.php';
          
        // Maak een instantie van de user aan
        
		$user = new User($id, $firstname, $lastname, $email, $password, $admin);
        
       	// Haal alle bestaande users uit de database en geef ze weer 
				
		$user->selectallUsersAdmin();
		
	 		  
        ?>