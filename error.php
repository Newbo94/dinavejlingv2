<?php get_header();
/*
 Template Name: error
*/
?>

<?php

if(!isset($_SESSION)) {
       session_start();
  }
?>


<div class="row">
    <div class="presse-container container-fluid">

        <div class="wrapper-form col-md-4 col-sm-8 col-xs-11" id="errormsg">


   <div id="title-presse">
    <h1 id="presse-h1">Fejl</h1>
    </div>

    <div class="presseform">
    <p class="link-area">
    <?php
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];

    endif;
    ?>
    </p>
    <a href="login.php"><button class="button button-presse"/>Tilbage til log ind</button></a></div>
    </div>
</div>
</div>

<?php get_footer(); ?>
