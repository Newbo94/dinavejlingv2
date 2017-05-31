<?php get_header ();

 /*
	Template Name: Home
*/

    ?>

    <div class="container-fluid position-re">
    <div class="row">
        <div class="colum-lg-12">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper til slides -->
  <div class="carousel-inner">
    <div class="item active">
      <?php

  $image = get_field('image_slider_1');

  if( !empty($image) ): ?>

  	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

  <?php endif; ?>

    </div>

    <div class="item">
      <?php

  $image = get_field('image_slider_2');

  if( !empty($image) ): ?>

    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

  <?php endif; ?>

    </div>

    <div class="item">
      <?php

  $image = get_field('image_slider_3');

  if( !empty($image) ): ?>

    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

  <?php endif; ?>

    </div>
  </div>

            </div>

    </div>
        </div>

</div> <!----- container-fluid poistion-re------>



<!-- Social media og kontakt info -->

<div class="container position-ab position-top social_media_con">
<div class="row">
<div class="col-sm-offset-8 col-sm-4">
<div class="front_social_media">
<h3> <?php  the_field('mail');?> </h3>
<h3> <?php  the_field('telefon_');?>  </h3>


  <a href="https://www.facebook.com/Dina-Vejling-Dansk-kunsth%C3%A5ndv%C3%A6rk-361328902422/" target="_blank">   <?php

$image = get_field('social_media_link_1');

if( !empty($image) ): ?>

  <img class="front_social_media_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>  </a>
  <a href="https://www.instagram.com/dinavejling/" target="_blank"><?php

$image = get_field('social_media_link_2');

if( !empty($image) ): ?>

  <img class="front_social_media_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?> </a>

</div>
</div>
</div>


</div>




<!-- Main logo poisition ---->

<div class="container position-ab position-top">
  <div class="row">
    <div class="col-sm-offset-2 col-md-3">
<div class="main-logo">
  <?php

$image = get_field('home_header_logo');

if( !empty($image) ): ?>

  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>

</div>
</div>
</div>
</div>



<!-- Adresse og åbningstider info ---->

<div class="container position-ab position-bottom ">

<div class="adress_text row">

<div class="col-sm-offset-2 col-md-3">

<h3> <?php the_field('adresse_textbox'); ?> </h3>


</div>


<div class="col-sm-offset-1 col-md-3">
<h3> <?php the_field('abningstider_textbox'); ?> </h3>
</div>
</div>
</div>


</div>

</div>


<style> footer {
  display: none;
}
</style>

<?php get_footer(); ?>
