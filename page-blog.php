<?php get_header ();

 /*
	Template Name: Blog
*/

?>
	





<div class="container blog">
    <h1>Blog</h1>
    <hr align="left">
    
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 blogkasse">
            <img src="<?php the_field('blog_post_img'); ?>" alt="">

            <p class="blogdato"><?php the_field('blog_post_date'); ?></p>

            <h3 class="blognavn"><?php the_field('blog_post_navn'); ?></h3>
            <hr>

            <p class="blogtekst"><?php the_field('blog_post_tekst'); ?></p>

            <a href="#" class="center-block bloglink">Læs mere</a>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12 blogkasse">
            <img src="../wp-content/themes/dinavejlingv2/event.png" alt="">

            <p class="blogdato">26. maj 2017</p>

            <h3 class="blognavn">Artist Talk</h3>
            <hr>

            <p class="blogtekst">Dina Vejling - Dansk kunsthåndværk er en butik udelukkende med dansk kunsthåndværk. Her er et mangfoldigt udvalg, og jeg tør næsten garantere at du finder noget nyt hver gang, du går på opdagelse i butikken.Dina Vejling - Dansk kunsthåndværk er en butik udelukkende med dansk kunsthåndværk.Her er et mangfoldigt udvalg, og jeg tør næsten garantere at du finder noget nyt hver gang, du går på opdagelse i butikken.</p>

            <a href="#" class="center-block bloglink">Læs mere</a>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12 blogkasse">
            <img src="../wp-content/themes/dinavejlingv2/event.png" alt="">

            <p class="blogdato">26. maj 2017</p>

            <h3 class="blognavn">Artist Talk</h3>
            <hr>

            <p class="blogtekst">Dina Vejling - Dansk kunsthåndværk er en butik udelukkende med dansk kunsthåndværk. Her er et mangfoldigt udvalg, og jeg tør næsten garantere at du finder noget nyt hver gang, du går på opdagelse i butikken.Dina Vejling - Dansk kunsthåndværk er en butik udelukkende med dansk kunsthåndværk.Her er et mangfoldigt udvalg, og jeg tør næsten garantere at du finder noget nyt hver gang, du går på opdagelse i butikken.</p>

            <a href="#" class="center-block bloglink">Læs mere</a>
        </div>
    </div>
</div>


<?php get_footer(); ?>