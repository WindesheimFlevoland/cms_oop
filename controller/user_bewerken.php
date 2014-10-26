      <?php
	  
	     //variabelen uit formulier halen
		 $id=$_POST['id'];
		 $firstname=$_POST['voornaam'];
         $lastname=$_POST['achternaam'];
		 $email=$_POST['email'];
         $password=$_POST['wachtwoord'];
		 $admin=$_POST['admin'];
		    			
	    include '../model/user_class.php';
          
        // Maak een instantie van de user aan
		
        $user = new User($id, $firstname, $lastname, $email, $password, $admin);
        
       	// Verander de gegevens van deze gebruiker in de database 
		
		$user->update(); 
		header('Location: ../view/user_overzicht.php');
        ?> 
       