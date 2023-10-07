<?php
session_start();
$title = "test";
$nav = "test";
require_once "header.php";
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
if (!isset($_SESSION['resultat'])) {
    $_SESSION['resultat'] = "";
}
?>
<?php
if (!is_connected()) :
    header('location: /Convertor/login.php');
endif;

?>
<!-- <form method="POST">
  <label for="amount">Amount:</label>
  <input type="number" name="amount" id="amount" required>

  <label for="currency">Convert to:</label>
  <select name="currency" id="currency">
    <option value="usd">USD</option>
    <option value="eur">EUR</option>
  </select>

  <input type="submit" name="convert" value="Convert">
</form> -->


<div class="main-left pull-left">


    <div id="convertor">
        <form>
            <div class="convertor-input clearfix">
                <h2>CONVERTOR RAPID</h2>
                <div class="form-group clearfix">
                    <label>Schimbă din</label>
                    <select id="from-currency" class="form-control input-sm"  onclick="interschimbare()">
                        <option value="<?= (isset($_POST['euro_to_dollar']) ? $_POST['euro_to_dollar'] : '') ?> " selected="selected">EUR</option>
                       
                    </select>
                </div>
                <div class="form-group clearfix">
                    <label>În</label>
                    <select id="to-currency" class="form-control input-sm"  onclick="interschimbare()>
                       
                        <option value="<?= (isset($_POST['dollar_to_euro']) ? $_POST['dollar_to_euro'] : '') ?>" selected="selected" >USD</option>
                    </select>
                </div>

                <div class="form-group clearfix">
                    <label>Suma</label>
                    <input id="initial-value" class="form-control input-sm text-right" value=" Euro <?= (isset($_SESSION['dollar_to_euro']) ? $_SESSION['dollar_to_euro'] : '') ?>" onkeyup="calcul_convertor_rapid()" onClick="this.select();">
                  
                    <a id="switch-currency" onclick="interschimbare(); return false;" class="btn btn-sm btn-warning" title="Inversează valutele"><span class="fa fa-refresh"></span></a>
                </div>

                <div class="form-group clearfix">
                    <label>Rezultat</label>
                    <input type="text" class="form-control input-sm text-right" id="rez" readonly="readonly" onClick="this.select();">
                    <!--<span id="to_currency_display">RON</span>-->

                </div>
            </div>
</form>
    </div>
    <script type="text/javascript">
            window.calcul_convertor_rapid();
            //document.getElementById("initial_value_display").innerHTML = "23";
            //id="to_currency_display"

            document.getElementById("copy-to-clipboard").addEventListener("click", function (event) {
                copyToClipboard(document.getElementById("rez"));
                showCopyResult(event, 'Rezultatul a fost copiat în clipboard.');
            });

</script>
    <?php
    $rate_euro_dollar = 1.07;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['euro_to_dollar'])) {
            $euro = $_POST['euro'];
            $dollar = $euro * $rate_euro_dollar;
            $_SESSION['euro_to_dollar'] = $eurodollar = eurodollar($euro, $rate_euro_dollar);
            $_SESSION['count']++;
            $_SESSION['resultat'] .= "Euro to Dollar:" . $euro . ":" . $rate_euro_dollar . ":" . $_SESSION['euro_to_dollar']   . '*';
        }

        if (isset($_POST['dollar_to_euro'])) {
            $dollar = $_POST['dollar'];
            $euro = $dollar / $rate_euro_dollar;
            $_SESSION['dollar_to_euro'] = $dollareuro = dollareuro($dollar, $rate_euro_dollar);
            $_SESSION['count']++;
            $_SESSION['resultat'] .= "Dollar to Euro:" . $dollar . ":" . $rate_euro_dollar . ":" .  $_SESSION['dollar_to_euro']  . '*';
        }
    }

    ?>




    <?php
    require_once "footer.php";
    ?>