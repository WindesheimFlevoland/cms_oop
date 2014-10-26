      <?php
	     error_reporting(E_ALL ^ E_NOTICE);
	     //variabelen uit formulier halen
		$id = $_GET['id'];
				
		include '../model/message_class.php';
	 
          
         // Maak een nieuwe instantie van een bericht aan
        $bericht = new Message($id, $titel, $tekst);
        
       	// Haal het bericht uit de database en geef het weer
		
		
		echo $bericht->selectone();
        ?>
 