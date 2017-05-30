<?php get_header ();

 /*
	Template Name: Blogindlæg
*/

?>


<!-- FORSIDE SEKTION -->
<div class="single_firstsection" style="background-image: url(<?php the_field('blog_post_img'); ?>);">
    <div class="single_overlay">
        <!-- Henter titlen, som tilføjes i Wordpress -->
        <h1 class="single_overskrift"><?php the_title(); ?></h1>
        <!-- Henter datoen, som tilføjes i Wordpress -->
        <p class="single_dato"><?php the_field('blog_post_date'); ?></p>
    </div>
</div>

<div class="container single">

    <!-- SEKTION 1 -->
    <div class="single_secondsection">
        <div class="single_imgleft">
            <!-- Henter venstre billede til sektion 1, som tilføjes i Wordpress -->
            <img src="<?php the_field('img_left_section1'); ?>" alt="">
        </div>
        
        <div class="single_imgright">
            <!-- Henter højre billede til sektion 1, som tilføjes i Wordpress -->
            <img src="<?php the_field('img_right_section1'); ?>" alt="">
        </div>
        
        <div class="single_boks1">
            <!-- Henter titlen til sektion1, som tilføjes i Wordpress -->
            <h2 class="single_boksoverskrift1"><?php the_field('heading_section1'); ?></h2>
            <hr class="blog_hr" align="left">
            
            <!-- Henter teksten til sektion 1, som tilføjes i Wordpress -->
            <p class="single_bokstekst1"><?php the_field('txt_section1'); ?></p>
            
            <div class="single_sociale1">
                <a href="https://www.facebook.com/Dina-Vejling-Dansk-kunsth%C3%A5ndv%C3%A6rk-361328902422/" target="_blank">
                    <img  class="front_social_media_img" src="http://localhost:8888/wordpressdb/wp-content/uploads/2017/05/facebook-icon.svg">
                </a>
                <a href="https://www.instagram.com/dinavejling/" target="_blank">
                    <img  class="front_social_media_img"src="http://localhost:8888/wordpressdb/wp-content/uploads/2017/05/instagram_icon.svg">
                </a>
            </div>
        </div>
    </div>
    
    
    <!-- SEKTION 2 -->
    <!-- Denne sektion sættes kun ind, hvis alle felter er udfyldt i Wordpress -->
    <?php 
    if(get_field('heading_section2',$page->ID) != NULL && get_field('txt_section2',$page->ID) != NULL && get_field('img_section2',$page->ID) != NULL ){    
    ?>
    
    <div class="single_thirdsection">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="single_left">
                    <div class="single_boks2">
                        <!-- Henter titel til sektion 2, som tilføjes i Wordpress -->
                        <h2 class="single_boksoverskrift2"><?php the_field('heading_section2'); ?></h2>
                        <hr class="blog_hr" align="left">

                        <!-- Henter tekst til sektion 2, som tilføjes i Wordpress -->
                        <p class="single_bokstekst2"><?php the_field('txt_section2'); ?></p>

                        <div class="single_sociale1">
                            <a href="https://www.facebook.com/Dina-Vejling-Dansk-kunsth%C3%A5ndv%C3%A6rk-361328902422/" target="_blank">
                                <img  class="front_social_media_img" src="http://localhost:8888/wordpressdb/wp-content/uploads/2017/05/facebook-icon.svg">
                            </a>
                            <a href="https://www.instagram.com/dinavejling/" target="_blank">
                                <img  class="front_social_media_img"src="http://localhost:8888/wordpressdb/wp-content/uploads/2017/05/instagram_icon.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="single_right">
                    <div class="single_img2">
                        <!-- Henter billede til sektion 2, som tilføjes i Wordpress -->
                        <img src="<?php the_field('img_section2'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php } ?>
</div>


<!-- SEKTION 3 -->
<div class="single_fourthsection">
    <div class="container single_fourthcontent">
        <h5 class="single_moreoverskrift">Læs flere blogindlæg</h5>
        
        <div class="row">
            <?php 
            $posts = get_field('related_post'); 

            if( $posts ) {
                foreach( $posts as $post ):
                    echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                        echo '<div class="single_more">';
                            setup_postdata($post);
                            echo '<a href="' . get_the_permalink() . '">';
                            echo '<h3>' . get_the_title() . '</h3>';
                            echo '<hr class="blog_hr">';
                            the_excerpt();
                            echo '</a>';
                        echo '</div>';
                    echo '</div>';
                endforeach;
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>