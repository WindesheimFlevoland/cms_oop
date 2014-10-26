      <?php
	      
		 error_reporting(E_ALL ^ E_NOTICE);
	     //variabelen uit formulier halen
		 $id=$_GET['id'];
		 $weghalen=$_GET['weghalen'];		 
		 			
	     include '../model/user_class.php';
		 
		 //Wil de gebruiker daadwerkelijk een user uit de database halen?
         
		 if ($weghalen=="nee") {
		 
		 header('Location: ../view/index.php');	 
			 
		 }
		 
		 if ($weghalen=="ja")	{ 
        
		 // Maak een instantie van de user aan
		
        $user = new User($id, $firstname, $lastname, $email, $password, $admin);
        
       	// Haal de betreffende user uit de database
		
		$user->delete(); 
		header('Location: ../view/user_overzicht.php'); 
		}
        ?>