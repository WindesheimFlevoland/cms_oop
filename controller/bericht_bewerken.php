      <?php
	  
	     //variabelen uit formulier halen
		 $id=$_POST['id'];
		 $titel=$_POST['mce_0'];
         $tekst=$_POST['mce_2'];
		 
		    			
	    include '../model/message_class.php';
          
         // Maak een nieuwe instantie van een bericht aan
        $bericht = new Message($id, $titel, $tekst);
        
       	// Sla het gewijzigde bericht op in de database en keer terug naar het berichtenoverzicht
		
		$bericht->update(); 
		header('Location: ../view/berichten_overzicht_admin.php');
        ?>
        </p>
    </body>
</html>