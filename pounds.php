<?php
session_start() ;
$title="pounds";
$nav="pounds";
require_once "header.php";

?>
<?php
if(!is_connected()) :
   header('location: /Convertor/login.php');
endif;

?>
<div class="container">
<h1>Converter euro-pounds/pounds-euro</h1>
 <div class="container">
 
  <form method="POST" id="euro_to_pounds_form">
    <label for="euro">Euro:</label>
    <input type="number" step="any" name="euro" id="euro" required onchange="document.getElementById('euro_to_pounds_form').submit()">
    <input type="hidden" name="euro_to_pounds" value="euro_to_pounds">
  </form>
  <form method="POST" id="pounds_to_euro_form">
    <label for="pounds">Pounds:</label>
    <input type="number" step="any" name="pounds" id="pounds" required onchange="document.getElementById('pounds_to_euro_form').submit()">
    <input type="hidden" name="pounds_to_euro" value="pounds_to_euro">
  </form>
</div>
</div>
<?php

$rate_euro_pounds = 0.88; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['euro_to_pounds'])) {
        $euro = $_POST['euro'];
        $pounds = $euro * $rate_euro_pounds;
        echo '<div class="result">'.$euro.' Euro = '.$pounds.' Pounds</div>';
        $_SESSION['euro_to_pounds']= $europounds = europounds($euro,$rate_euro_pounds);
        $_SESSION['count']++;
        $_SESSION['resultat'] .= "Euro to Pounds:" . $euro. ":" . $rate_euro_pounds . ":" . $_SESSION['euro_to_pounds']   . '*';
    }
    
    if (isset($_POST['pounds_to_euro'])) {
        $pounds = $_POST['pounds'];
        $euro = $pounds / $rate_euro_pounds;
        echo '<div class="result">'.$pounds.' Pounds = '.$euro.' Euro</div>';
        
        $_SESSION['pounds_to_euro'] = $poundseuro = poundseuro($pounds,$rate_euro_pounds);
        $_SESSION['count']++;
        $_SESSION['resultat'] .= "Pounds to Euro:" . $pounds. ":" . $rate_euro_pounds . ":" . $_SESSION['pounds_to_euro']   . '*';
    }
}
?>





<?php 
require_once "footer.php";
?>