<style>
nav{
  display: none block; !important
}
footer{
display: none block; !important
}
</style>

<?php get_header();

 /*
	Template Name: Press
*/

?>

<?php

if( have_posts() ):

  while( have_posts() ): the_post(); ?>


<div class="">
  <p><?php the_content(); ?></p>
</div>




  <?php endwhile;

endif;


?>



<?php get_footer(); ?>
