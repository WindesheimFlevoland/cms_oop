      <?php
	  
	     //variabelen uit formulier halen
		  $id=$_GET['id'];
		  $weghalen=$_GET['weghalen'];
		 			
	     include '../model/message_class.php';
         
		 if ($weghalen=="nee") {
		 
		 header('Location: ../view/index.php');	 
			 
		 }
		 
		 if ($weghalen=="ja")	{ 
        
		 // Maak een nieuwe instantie van een bericht aan
        
		 $bericht = new Message($id, $titel, $tekst);
        
       	// Haal dit specifieke bericht uit de database
		
		$bericht->delete(); 
		header('Location: ../view/berichten_overzicht_admin.php'); 
		}
        ?>
        </p>
    </body>
</html>