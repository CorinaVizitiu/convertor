<?php
session_start() ;
$title="dirham";
$nav="dirham";
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
<h1>Converter euro-dirham/dirham-euro</h1>

  <div class="container">
 
  <form method="POST" id="euro_to_dirham_form">
    <label for="euro">Euro:</label>
    <input type="number" step="any" name="euro" id="euro" required onchange="document.getElementById('euro_to_dirham_form').submit()">
    <input type="hidden" name="euro_to_dirham" value="euro_to_dirham">
  </form>
  <form method="POST" id="dirham_to_euro_form">
    <label for="dirham">Dirham:</label>
    <input type="number" step="any" name="dirham" id="dirham" required onchange="document.getElementById('dirham_to_euro_form').submit()">
    <input type="hidden" name="dirham_to_euro" value="dirham_to_euro">
  </form>
</div>
</div>
<?php
$rate_euro_dirham = 3.91;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (isset($_POST['euro_to_dirham'])) {
        $euro = $_POST['euro'];
        $dirham = $euro * $rate_euro_dirham;
        echo '<div class="result">'.$euro.' Euro = '.$dirham.' Dirham</div>';
        $_SESSION['euro_to_dirham']= $eurodirham = eurodirham($euro,$rate_euro_dirham); 
        $_SESSION['count']++;
        $_SESSION['resultat'] .= "Euro to Dirham:" . $euro. ":" . $rate_euro_dirham . ":" . $_SESSION['euro_to_dirham']   . '*'; 
    }
   
    if (isset($_POST['dirham_to_euro'])) {
        $dirham = $_POST['dirham'];
        $euro = $dirham / $rate_euro_dirham;
        echo '<div class="result">'.$dirham.' Dirham = '.$euro.' Euro</div>';
        $_SESSION['dirham_to_euro'] = $dirhameuro = dirhameuro($dirham,$rate_euro_dirham); 
        $_SESSION['count']++;
        $_SESSION['resultat'] .= "Dirham to Euro:" . $dirham. ":" . $rate_euro_dirham . ":" . $_SESSION['dirham_to_euro']   . '*';
    }
}
?>





<?php 
require_once "footer.php";
?>