<?php get_header(); ?>


    
    <?php 
	
	if( have_posts() ):
        ?>
        <div class="blog-post">
            <div class="container-fluid blog">
                <h1>Blog</h1>
                <hr align="left" class="blog_hr">

                <div class="row grid">
                    <!-- Loop - Henter blogindlæg og styler dem efter hvordan centent er sat op -->
                    <?php while( have_posts() ): the_post(); ?>
                    
                    <?php get_template_part('content',get_post_format()); ?>

                    <?php endwhile; endif; ?>
	            </div>
            </div>
        </div>


<!-- Footer - Henter footeren -->
<?php get_footer(); ?>