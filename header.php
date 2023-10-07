<?php
require_once "functions/function.php";
require_once "functions/autentification.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
   <style>
    .navi{
        background-color:  #603cba;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    h1 {
      text-align: center;
    }
    .container{
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px #ccc;
    }
    form {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
    }
    label {
      margin-right: 10px;
      font-weight: bold;
    }
    input[type="number"] {
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 100%;
      max-width: 200px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
    .result {
      text-align: center;
      font-size: 1.2em;
      font-weight: bold;
    }

   </style>
    <title><?php 
    if(isset($title)):
      echo $title ;
    else:
      echo "Mon superbe site ";
    endif
    ?></title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <nav class="navi">

    <div class="b-example-divider"></div>

<header class="p-3 mb-3 border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
  

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li class="nav-item active"><a href="index.php" class="nav-link px-2 link-<?php if ($nav === "accueil") : ?>light
          <?php endif ?>">Accueil</a></li>
        <li class="nav-item active" ><a href="profil.php" class="nav-link px-2 link-<?php if ($nav === "profil") : ?>light<?php endif ?>">Profil</a></li>
        <li class="nav-item active"><a href="info.php" class="nav-link px-2 link-<?php if ($nav === "info") : ?>light<?php endif ?>">Info</a></li>
       
        <?php if (is_connected()) :  ?>
    <li  class="nav-item"><a href="conversion.php" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0  text-decoration-none dropdown-toggle nav-link px-2 link-<?php if ($nav === "conversion" ||$nav === "dollars" || $nav==="yen" ||$nav==="pounds" ||$nav==="franc" ||$nav==="dirham" ||$nav==="ron") : ?>light
          <?php endif ?>light"  data-bs-toggle="dropdown" aria-expanded="false" >Conversion</a>
     
      <ul class="dropdown-menu text-small  ">
        <li><a class="dropdown-item" href="dollars.php" > Euro/Dollars</a></li>
        <li><a class="dropdown-item " href="yen.php">Euro/Yen</a></li>
        <li><a class="dropdown-item" href="pounds.php">Euro/Pounds</a></li>
        <li><a class="dropdown-item" href="francsrdc.php">Euro/FrancsRDC</a></li>
     
        <li><a class="dropdown-item" href="dirham.php">Euro/Dirham</a></li>
        <li><a class="dropdown-item" href="ron.php">Euro/Ron</a></li>
        <!-- <li><a class="dropdown-item" href="EuroTest.php">Euro/Dollars test</a></li> -->
      </ul>
    
                                   </li>
      
                                   <?php endif; ?>  
      </ul>

      <form method="get" action="https://www.google.com/search" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>

      <!-- action="https://www.google.com/search"  -->
<!-- 
      action="recherche.php" -->
        <ul class="nav col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <?php if (!is_connected()) : ?>
        <li><a href="login.php" class="nav-link px-2 link-<?php if ($nav === "login") : ?>light <?php endif ?> ">Login</a></li>
        <?php else : ?>
        <li><a href="logout.php" class="nav-link px-2  ">Logout</a></li>
      </div>
      <?php endif; ?>
    </div>
  </header>
</nav>
</head>
<body>
    
</body>
</html>