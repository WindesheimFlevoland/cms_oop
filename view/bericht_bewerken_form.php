<?php
session_start();
?>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
        selector: "textarea",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
        ],

        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
});</script>
<link type='text/css' rel='stylesheet' href='css/style.css'/>

<body>
<?php
$rights=2;
include 'includes/sentry.php'; ?>
<div id="form">

<?php 	     		   
include 'includes/header.php';		
?>

</div>
<div id="menu">
<?php
 	     		   
include 'includes/menu.php';
		
?>

</div>
<div id="editor">

<form method="post" action="../controller/bericht_bewerken.php">
<input name="id" type="hidden" value="<?php echo $_GET['id']; ?>" /> 
Titel: <br><input name="mce_0" type="text" value="
<?php include '../model/connect.php'; $id=$_GET['id'];
$sql="SELECT title FROM message WHERE id='$id'"; 
$result=mysqli_query($conn,$sql); 
while(list($titel)=mysqli_fetch_row($result))
			{ echo "$titel"; } ?>"/><br /><br />Bericht:<br>
<textarea name="mce_2" style="width:100%; height:300px;" placeholder="Bericht">

<?php include '../model/connect.php'; $id=$_GET['id'];
$sql="SELECT content FROM message WHERE id='$id'"; 
$result=mysqli_query($conn,$sql); 
while(list($tekst)=mysqli_fetch_row($result))
			{ echo "$tekst"; } ?>

</textarea>   <br>
    <button class="submit" type="submit">Bericht opslaan</button>
</form>
</div>


    </body>
</html>