<style>
    .title1{
        text-align:center;
    }
.p1{text-align: center;

    line-height: 1.8;
    font-size: 20px;
}
.img{
    width: 550px;
    height: 450px;
    float: right;
 }
 .clearfix::after {
  content: "";
  clear: both;
  display: table;
  
}
</style>

<?php
session_start() ; 
$title="Accueil";
$nav="accueil";
require_once "header.php";
?>
<?php var_dump($_SESSION); ?>
<div class="container">
<h1 class="title1">Échange monétaire</h1>
<p class="p1">
Le taux de change d'une devise (une monnaie) est le coût (autrement dit le prix) de cette devise par rapport à une autre. On parle aussi de la « parité d'une monnaie ». Mais ce dernier mot constitue un faux-ami très gênant avec l'anglais « parity » qui indique une égalité absolue.

Les taux de change, cotés sur les marchés des changes, varient en permanence ; ils varient également en fonction de la place de cotation
</p>
<div class="clearfix">
    <img src="img.jpg" class="img">

<h1>
Rôle économique</h1>
<p class="p1">
Les taux de change (et les taux d'intérêt, qui leur sont étroitement liés) agissent sur les prix à l'importation et à l'exportation. Ils ont une influence sur le sens des flux de capitaux entre zones économiques.

De ce fait, les pays et zones économiques peuvent être tentés d'agir sur les taux de change, sous prétexte souvent d'éviter la spéculation (en fait ces manipulations ont plutôt tendance à l'encourager), et dans le but d'améliorer (baisse du taux de change) :

la compétitivité-prix de leurs biens et services ;
leur attractivité en matière de flux d'IDE.
Cette baisse du taux de change aura également des effets négatifs (renchérissement des importations, etc.).

Le taux de change est aussi l'un des canaux de transmission de la politique monétaire.
</p>
</div>
</div>
<?php require_once "footer.php"
?>