      	<?php
	      session_start();
		  
		  //alle (admin-) rechten worden uitgeschakeld en de gebruiker wordt doorgestuurd naar de indexpagina
		  
	      $_SESSION['admin']=0;	 
	      	  
	    	   
		  header('Location: ../view/index.php');
		   
		 
        ?>