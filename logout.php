<?php get_header();
/*
 Template Name: logout
*/
?>
<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>

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
<?php get_footer(); ?>
