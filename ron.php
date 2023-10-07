<?php
session_start() ;
$title="ron";
$nav="ron";
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
<h1>Converter euro-ron/ron-euro</h1>
 <div class="container">
  
  <form method="POST" id="euro_to_ron_form">
    <label for="euro">Euro:</label>
    <input type="number" step="any" name="euro" id="euro" required onchange="document.getElementById('euro_to_ron_form').submit()">
    <input type="hidden" name="euro_to_ron" value="euro_to_ron">
  </form>
  <form method="POST" id="ron_to_euro_form">
    <label for="ron">Ron:</label>
    <input type="number" step="any" name="ron" id="ron" required onchange="document.getElementById('ron_to_euro_form').submit()">
    <input type="hidden" name="ron_to_euro" value="ron_to_euro">
  </form>
</div>
</div>
<?php
$rate_euro_ron = 4.92; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    if (isset($_POST['euro_to_ron'])) {
        $euro = $_POST['euro'];
        $ron = $euro * $rate_euro_ron;
        echo '<div class="result">'.$euro.' Euro = '.$ron.' Ron</div>';
       
        $_SESSION['euro_to_ron']= $euroron = euroron($euro,$rate_euro_ron);
        $_SESSION['count']++;
    $_SESSION['resultat'] .= "Euro to  Ron:" . $euro. ":" . $rate_euro_ron . ":" . $_SESSION['euro_to_ron']   . '*';
    }
 
    if (isset($_POST['ron_to_euro'])) {
        $ron = $_POST['ron'];
        $euro = $ron / $rate_euro_ron;
        echo '<div class="result">'.$ron.' Ron = '.$euro.' Euro</div>';
        $_SESSION['ron_to_euro'] = $roneuro = roneuro($ron,$rate_euro_ron);
        $_SESSION['count']++;
    $_SESSION['resultat'] .= "Ron to Euro:" . $euro. ":" . $rate_euro_ron . ":" . $_SESSION['ron_to_euro']   . '*';
    }
}
?>


<?php 
require_once "footer.php";
?>