      <?php
	     error_reporting(E_ALL ^ E_NOTICE);
	     //variabelen uit formulier halen
		
				
		include '../model/message_class.php';
	 
          
         // Maak een nieuwe instantie van een bericht aan
         
		 $bericht = new Message($id, $titel, $tekst);
        
       	// Haal de berichten uit de database en geef ze weer
		
		
		echo $bericht->selectall();
        ?>
 