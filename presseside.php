<?php


/* Displays user information and some useful messages */
require 'db.php';


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
    $active = $_SESSION['active'];
}
?>
<?php get_header();

 /*
 Template Name: Press
*/

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
