<?php
session_start() ;
$title="dollars";
$nav="dollars";
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
<h1>Converter euro-dollar/dollar-euro</h1>
 <div class="container">
  
  <form method="POST" id="euro_to_dollar_form">
    <label for="euro">Euro:</label>
    <input type="number" step="any" name="euro" id="euro" required onchange="document.getElementById('euro_to_dollar_form').submit()">
    <input type="hidden" name="euro_to_dollar" value="euro_to_dollar">
  </form>
  <form method="POST" id="dollar_to_euro_form">
    <label for="dollar">Dollar:</label>
    <input type="number" step="any" name="dollar" id="dollar" required onchange="document.getElementById('dollar_to_euro_form').submit()">
    <input type="hidden" name="dollar_to_euro" value="dollar_to_euro">
  </form>
</div>
</div>
      <?php
$rate_euro_dollar = 1.07; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    if (isset($_POST['euro_to_dollar'])) {
        $euro=$_POST['euro_to_dollar'];
        $euro = $_POST['euro'];
        $dollar = $euro * $rate_euro_dollar;
        echo '<div class="result">'.$euro.' Euro = '.$dollar.' Dollar</div>';
    $_SESSION['euro_to_dollar']= $eurodollar = eurodollar($euro,$rate_euro_dollar);
    $_SESSION['count']++;
    $_SESSION['resultat'] .= "Euro to Dollar:" . $euro. ":" . $rate_euro_dollar . ":" . $_SESSION['euro_to_dollar']   . '*';
}
   
    if (isset($_POST['dollar_to_euro'])) {
        $dollar=$_POST['dollar_to_euro'];
        $dollar = $_POST['dollar'];
        $euro = $dollar / $rate_euro_dollar;
        echo '<div class="result">'.$dollar.' Dollar = '.$euro.' Euro</div>';
     $_SESSION['dollar_to_euro'] = $dollareuro = dollareuro($dollar,$rate_euro_dollar);
     $_SESSION['count']++;
     $_SESSION['resultat'] .= "Dollar to Euro:" . $dollar . ":" . $rate_euro_dollar . ":" .  $_SESSION['dollar_to_euro']  . '*';
     }
    
   
   
}
?>






<?php 
require_once "footer.php";
?>