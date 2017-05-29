<?php
/* Displays user information and some useful messages */
require 'db.php';
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Hov, husk du skal logge ind før du kan se din profil!";
  header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Velkommen til din profil</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="row">
    <div class="presse-container container-fluid">

        <div class="wrapper-form col-md-4 col-sm-8 col-xs-11" id="profile">

         <div id="title-presse">
          <h1 id="presse-h1">Velkommen</h1>
            </div>

          <div class="presseform">
            <p class="link-area">


          <?php

          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Du er ikke aktiveret endnu, prøv igen senere.
              </div>';
          }

          ?>

          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>

          <a href="presseside.php"><button class="button button-presse" name="presseside"/>Presseside</button></a>

          <a href="logout.php"><button class="button button-presse" name="logout"/>Log ud</button></a>

        </div>
      </div>
    </div>

    </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
