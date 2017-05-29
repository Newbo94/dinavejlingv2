<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <?php include 'css/css.html'; ?>
</head>

<body>
   <div class="row">
    <div class="presse-container container-fluid">
       
        <div class="wrapper-form col-md-4 col-sm-8 col-xs-11" id="signup">
   
    
          <div id="title-presse">
          <h1 id="presse-h1">Tak fordi du kiggede forbi. På gensyn</h1>
          </div>


        <div class="presseform">
          <p class="link-area"><?= 'Du er nu logget ud!'; ?></p>

          <a href="login.php"><button class="button button-presse"/>Tilbage til log ind</button></a>

        </div>
       </div>
    </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
