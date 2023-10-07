<?php
session_start() ;
$nav="login";
$erreur = null;
require_once "header.php";


if(is_connected()):
 header('location: profil.php');
endif;

if (!empty($_POST['prenom']) || !empty($_POST['password'])|| !empty($_POST['nom']) ) {
   if ($_POST['prenom'] === "Corina" && $_POST['nom'] === "Vizitiu" && $_POST['password'] === "12345")  {
      $_SESSION['connected'] = true;
      $_SESSION['prenom'] = $_POST['prenom']; 
      $_SESSION['nom'] = $_POST['nom'];
      //session retine informatiile 
      header('location: profil.php'); //pour aller vers une autre page
   } else {
      $erreur = "Identifiants incorrects !";
   }
}

if ($erreur) : ?>
   <div class="alert alert-danger">
      <?php echo $erreur; ?>
   </div>
<?php endif;


?>
<style>
/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcont {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.cont{
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}


</style>
  


<form action="/Convertor/login.php" method="post">
  <div class="imgcontainer">
    <img src="emo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="cont">
    <div>
  <label for="prenom"><b>Prenom</b></label>
    <input type="text" placeholder="Enter prenom" name="prenom" required>
    </div>
    <div>
    <label for="nom"><b>Nom</b></label>
    <input type="text" placeholder="Enter nom " name="nom" required>
    </div>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    
  </div> 

 
</form> 

<?php 
require_once "footer.php";
?>