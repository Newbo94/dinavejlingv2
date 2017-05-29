
<?php
 get_header();

 /*
	Template Name: Gallery
*/

?>



<?php

if( have_posts() ):

  while( have_posts() ): the_post(); ?>

    <div class="gallery_content"><?php the_content(); ?></div>


<hr class="gallery_hr">
  <?php endwhile;

endif;

?>




<?php get_footer(); ?>
