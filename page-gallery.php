
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


  <?php endwhile;

endif;

?>




<?php get_footer(); ?>
