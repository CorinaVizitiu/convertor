<?php
session_start() ;
$title="francsrdc";
$nav="francsrdc";
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
<h1>Converter euro-francsRdc/francsRdc-euro</h1>
 <div class="container">
  
  <form method="POST" id="euro_to_franc_form">
    <label for="euro">Euro:</label>
    <input type="number" step="any" name="euro" id="euro" required onchange="document.getElementById('euro_to_franc_form').submit()">
    <input type="hidden" name="euro_to_franc" value="euro_to_franc">
  </form>
  <form method="POST" id="franc_to_euro_form">
    <label for="franc">Franc:</label>
    <input type="number" step="any" name="franc" id="franc" required onchange="document.getElementById('franc_to_euro_form').submit()">
    <input type="hidden" name="franc_to_euro" value="franc_to_euro">
  </form>
</div>
</div>
<?php
$rate_euro_franc =2203.72 ; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (isset($_POST['euro_to_franc'])) {
        $euro = $_POST['euro'];
        $franc = $euro * $rate_euro_franc;
        echo '<div class="result">'.$euro.' Euro = '.$franc.' FrancsRDC</div>';
        $_SESSION['euro_to_franc']= $eurofranc = eurofranc($euro,$rate_euro_franc);
        $_SESSION['count']++;
        $_SESSION['resultat'] .= "Euro to FrancRDC:" . $euro. ":" . $rate_euro_franc . ":" . $_SESSION['euro_to_franc']   . '*';
    }
    
    if (isset($_POST['franc_to_euro'])) {
        $franc = $_POST['franc'];
        $euro = $franc / $rate_euro_franc;
        echo '<div class="result">'.$franc.' FrancsRDC = '.$euro.' Euro</div>';
        $_SESSION['franc_to_euro'] = $franceuro = franceuro($franc,$rate_euro_franc);
        $_SESSION['count']++;
        $_SESSION['resultat'] .= "FrancRDC to Euro:" . $franc. ":" . $rate_euro_franc . ":" . $_SESSION['franc_to_euro']   . '*';
    }
}
?>






<?php 
require_once "footer.php";
?>