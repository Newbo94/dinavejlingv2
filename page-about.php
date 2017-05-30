<?php get_header ();

 /*
	Template Name: Butikken
*/

?>

<div class="single">
    <!-- FORSIDE SEKTION -->
    <div class="single_firstsection" style="background-image: url(<?php the_field('forside_img'); ?>);">
        <div class="butikken_overlay">
            <img src="<?php the_field('logo'); ?>">
        </div>
    </div>

    <div class="container single">

        <!-- SEKTION 1 -->
        <div class="single_secondsection">
            <div class="single_imgleft">
                <!-- Henter venstre billede til sektion 1, som tilføjes i Wordpress -->
                <img src="<?php the_field('left_img'); ?>" alt="">
            </div>

            <div class="single_imgright">
                <!-- Henter højre billede til sektion 1, som tilføjes i Wordpress -->
                <img src="<?php the_field('right_img'); ?>" alt="">
            </div>

            <div class="single_boks1">
                <!-- Henter titlen til sektion1, som tilføjes i Wordpress -->
                <h2 class="single_boksoverskrift1"><?php the_field('first_heading'); ?></h2>
                <hr class="blog_hr" align="left">

                <!-- Henter teksten til sektion 1, som tilføjes i Wordpress -->
                <p class="single_bokstekst1"><?php the_field('first_txt'); ?></p>
            </div>
        </div>


        <!-- SEKTION 2 -->
        <!-- Denne sektion sættes kun ind, hvis alle felter er udfyldt i Wordpress -->
        <?php 
        if(get_field('second_heading',$page->ID) != NULL && get_field('second_txt',$page->ID) != NULL && get_field('second_img',$page->ID) != NULL ){    
        ?>

        <div class="single_thirdsection">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="single_left">
                        <div class="single_boks2">
                            <!-- Henter titel til sektion 2, som tilføjes i Wordpress -->
                            <h2 class="single_boksoverskrift2"><?php the_field('second_heading'); ?></h2>
                            <hr class="blog_hr" align="left">

                            <!-- Henter tekst til sektion 2, som tilføjes i Wordpress -->
                            <p class="single_bokstekst2"><?php the_field('second_txt'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="single_right">
                        <div class="single_img2">
                            <!-- Henter billede til sektion 2, som tilføjes i Wordpress -->
                            <img src="<?php the_field('second_img'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>


<?php get_footer(); ?>