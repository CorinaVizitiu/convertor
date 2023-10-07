

<?php
session_start() ;
session_unset(); 
$title="Info";
$nav="info";
require_once "header.php";
?>

<div class="b-example-divider"></div>

<div class="container px-4 py-5" id="custom-cards">
  <h2 class="pb-2 border-bottom">3 manières de  convertir des devises</h2>

  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('bb.jpeg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">1.Faire son propre calcul</h3>
         
      
        </div>
        <img src="pc.jpg">
      </div>
     
    </div>
    <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('bb.jpeg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">2.Rendez-vous dans un bureau de change</h3>
          
          </div>
          <img src="pc2.jpg"> 
         </div>
     
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('bb.jpeg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">3.Retirez de l'argent directement en devise étrangère.</h3>
         
          </div>
          <img src="pc3.jpg">
        </div>
      
      </div>
      </div>
  </div>







  <?php 
require_once "footer.php";
?>