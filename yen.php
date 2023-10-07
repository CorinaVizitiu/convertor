
  
<?php
session_start();
$title="yen";
$nav="yen";
require_once "header.php";
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
  }
if (!isset($_SESSION['resultat'])) {
    $_SESSION['resultat'] = "";
}
?>
<?php
if(!is_connected()) :
   header('location: /Convertor/login.php');
endif;

?>
<div class="container">
<h1>Converter euro-yen/yen-euro</h1>
 <div class="container">

  <form method="POST" id="euro_to_yen_form">
    <label for="euro">Euro:</label>
    <input type="number" step="any" name="euro" id="euro" required onchange="document.getElementById('euro_to_yen_form').submit()">
    <input type="hidden" name="euro_to_yen" value="euro_to_yen">
  </form>
  <form method="POST" id="yen_to_euro_form">
    <label for="yen">Yen:</label>
    <input type="number" step="any" name="yen" id="yen" required onchange="document.getElementById('yen_to_euro_form').submit()">
    <input type="hidden" name="yen_to_euro" value="yen_to_euro">
  </form>
</div>
</div>
<?php

$rate_euro_yen = 144.66; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    if (isset($_POST['euro_to_yen'])) {
        $euro = $_POST['euro'];
        $yen = $euro * $rate_euro_yen;
        echo '<div class="result">'.$euro.' Euro = '.$yen.' Yen</div>';
  
        $_SESSION['euro_to_yen']= $euroyen = euroyen($euro,$rate_euro_yen);
        $_SESSION['count']++;
        $_SESSION['resultat'] .= "Euro to Yen:" . $euro. ":" . $rate_euro_yen . ":" . $_SESSION['euro_to_yen']   . '*';
    }
    }

    if (isset($_POST['yen_to_euro'])) {
        $yen = $_POST['yen'];
        $euro = $yen / $rate_euro_yen;
        echo '<div class="result">'.$yen.' Yen = '.$euro.' Euro</div>';
        
        $_SESSION['yen_to_euro'] = $yeneuro = yeneuro($yen,$rate_euro_yen);
         $_SESSION['count']++;
    $_SESSION['resultat'] .= "Yen to Euro:" . $yen. ":" . $rate_euro_yen . ":" . $_SESSION['yen_to_euro']   . '*';
}
    

?>





<?php 
require_once "footer.php";
?>