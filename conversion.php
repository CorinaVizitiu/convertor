<?php
session_start() ;
$title="Conversion";
$nav="conversion";
require_once "header.php";

?>

<h1>Conversion</h1>
<?php
if(!is_connected()) :
   header('location: /Convertor/login.php');
endif;

?>


<?php 
require_once "footer.php";
?>