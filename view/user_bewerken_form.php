<?php
session_start();
?>

<link type='text/css' rel='stylesheet' href='css/style.css'/>

<body>
<?php include 'includes/sentry.php'; ?>
<div id="form">

<?php 	     		   
include 'includes/header.php';		
?>

</div>
<div id="menu">
<?php
$rights=2;	     		   
include 'includes/menu.php';
		
?>

</div>
<div id="editor">
<h2>Gebruiker bewerken</h2>
<table>
<form method="post" action="../controller/user_bewerken.php">
<input name="id" type="hidden" value="<?php echo $_GET['id']; ?>" /> 
<tr><td><input name="voornaam" type="text" value="
<?php include '../model/connect.php'; $id=$_GET['id'];
$sql="SELECT firstname FROM user WHERE id='$id'"; 
$result=mysqli_query($conn,$sql); 
while(list($firstname)=mysqli_fetch_row($result)) {
echo "$firstname"; } ?>"/> </td></tr>
            
<tr><td><input name="achternaam" type="text" value="
<?php include '../model/connect.php'; $id=$_GET['id'];
$sql="SELECT lastname FROM user WHERE id='$id'"; 
$result=mysqli_query($conn,$sql); 
while(list($lastname)=mysqli_fetch_row($result)) {
echo "$lastname"; } ?>"/> </td></tr>

<tr><td><input name="email" type="text" value="
<?php include '../model/connect.php'; $id=$_GET['id'];
$sql="SELECT email FROM user WHERE id='$id'"; 
$result=mysqli_query($conn,$sql); 
while(list($email)=mysqli_fetch_row($result)) {
echo "$email"; } ?>"/> </td></tr>        
  
<tr><td><input name="wachtwoord" type="text" value="
<?php include '../model/connect.php'; $id=$_GET['id'];
$sql="SELECT password FROM user WHERE id='$id'"; 
$result=mysqli_query($conn,$sql); 
while(list($password)=mysqli_fetch_row($result)) {
echo "$password"; } ?>"/></td></tr>     

<tr><td><input name="admin" type="text" value="
<?php include '../model/connect.php'; $id=$_GET['id'];
$sql="SELECT admin FROM user WHERE id='$id'"; 
$result=mysqli_query($conn,$sql); 
while(list($admin)=mysqli_fetch_row($result)) {
echo "$admin"; } ?>"/> </td></tr>

<tr><td><button class="submit" type="submit">User opslaan</button></td></tr>
</form>
</table>
</div>


    </body>
</html>