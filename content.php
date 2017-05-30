<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="blogkasse">
        <!-- Henter billedet, som tilføjes i Wordpress - Linker til single page for hvert blogindlæg -->
        <a href="<?php the_permalink(); ?>" class="center-block bloglink">
            <img src="<?php the_field('blog_post_img'); ?>" alt="">
        </a>
        
        <!-- Henter datoen, som tilføjes i Wordpress -->
        <p class="blog-post-meta blogdato"><?php the_field('blog_post_date'); ?></p>

        <header class="entry-header">
            <!-- Henter titlen, som tilføjes i Wordpress - Linker til single page for hvert blogindlæg -->
            <a href="<?php the_permalink(); ?>" class="center-block bloglinktitle">
                <h3 class="blog-post-title blognavn"><?php the_title(); ?></h3>
            </a>
            
            <hr class="blog_hr">
        </header>

        <div class="blogtekst">
            <!-- Henter tekstinholdet, som tilføjes i Wordpress -->
            <?php the_content(); ?>
        </div>
        
        <!-- Linker til single page for hvert blogindlæg -->
        <a href="<?php the_permalink(); ?>" class="center-block bloglink">Læs mere</a>
    </div>
</div>