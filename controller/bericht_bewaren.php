
      	<?php
	     session_start();
	     
	     //variabelen uit formulier halen
		 $id=$_POST['id'];
		 $titel=$_POST['mce_0'];
         $tekst=$_POST['mce_2'];
		
		include '../model/message_class.php';
          
        // Maak een nieuwe instantie van een bericht aan
        $bericht = new Message($id, $titel, $tekst);
        
       	// Bewaar het bericht in de database
		
		$bericht->save();
		
		//Keer terug naar het berichtenoverzicht (bewerkbaar of niet afhankelijk van de gebruiker) 
		  if ($_SESSION['admin']==2) {		   
		   
		  header('Location: ../view/berichten_overzicht_admin.php');
		   
		  }
		  
		  if ($_SESSION['admin']==1) {		   
		   
		   header('Location: ../view/berichten_overzicht.php');
		   
		  }
        ?>
        </p>
    </body>
</html>