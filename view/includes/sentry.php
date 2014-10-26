<?php

if(!isset($_SESSION['firstname'])) {

//include 'includes/header.php';	

echo '<div id="menu">';
     		   
include 'includes/menu.php';

echo '</div>';

echo '<div id="sentry">';

die( 'U bent niet ingelogd! Ga <a href=user_login_form.php>hier</a> naar de login pagina. </div>' ); }

else {

$firstname = $_SESSION['firstname'];
$password = $_SESSION['password'];
$admin = $_SESSION['admin'];

include '../model/connect.php';
$query = "SELECT * FROM user WHERE firstname = '$firstname' AND admin = '$admin'";

$result = mysqli_query($conn, $query );

if(mysqli_num_rows($result) < 1){

unset($_SESSION['firstname'], $_SESSION['password'], $_SESSION['admin']);

include 'includes/header.php';	

echo '<div id="menu">';
     		   
include 'includes/menu.php';

echo '</div>';
 
echo '<div id="sentry">'; 
    
die( 'U bent niet ingelogd! Ga <a href=user_login_form.php>hier</a> naar de login pagina. </div>');
 
   }
}
//gedeelte om de admin te scheiden van overige gebruikers

if ($rights==2 && $_SESSION['admin']==1) {
	
	include 'includes/header.php';	
	
	echo '<div id="menu">';
     		   
    include 'includes/menu.php';

    echo '</div>';
	
	echo '<div id="sentry">';
	
	die ("U heeft niet de bevoegdheid om deze pagina te bezoeken. Ga <a href=index.php>hier</a> naar de homepagina. </div>");
}
?>
</div>