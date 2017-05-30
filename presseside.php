<?php get_header();

 /*
 Template Name: Press
*/

?>

<?php


/* Displays user information and some useful messages */
require 'db.php';
session_start();

// Check if user is logged in using the session variable
if ( $mysqli->query($sql) ){

    $_SESSION['active'] = 0; //0 until user activates their account with verify.php
    $_SESSION['logged_in'] = true; // So we know the user has logged in

  $_SESSION['message'] = "Hov, husk du skal logge ind før du kan se presse siden!";
  header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>


<section class="presse-image-gallery">

<?php

if( have_posts() ):

  while( have_posts() ): the_post(); ?>


<div class="">
  <p><?php the_content(); ?></p>
</div>




  <?php endwhile;

endif;


?>

</section>

<?php get_footer(); ?>
