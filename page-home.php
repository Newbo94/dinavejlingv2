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
      <img src="   <?php the_field('image_slider_1'); ?>
" alt="Dina vejling slider billede">
    </div>

    <div class="item">
      <img src="    <?php the_field('image_slider_2'); ?>
" alt="Dina vejling slider billede">
    </div>

    <div class="item">
      <img src="  <?php the_field('image_slider_3'); ?>
" alt="Dina vejling slider billede">
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


  <a href="https://www.facebook.com/Dina-Vejling-Dansk-kunsth%C3%A5ndv%C3%A6rk-361328902422/" target="_blank"> <img  class="front_social_media_img" src="<?php the_field('social_media_link_1'); ?>">  </a>
  <a href="https://www.instagram.com/dinavejling/" target="_blank"><img  class="front_social_media_img" src="<?php the_field('social_media_link_2'); ?>" > </a>

</div>
</div>
</div>


</div>




<!-- Main logo poisition ---->

<div class="container position-ab position-top">
  <div class="row">
    <div class="col-sm-offset-2 col-md-3">
<div class="main-logo">
<img src="<?php the_field('home_header_logo'); ?>" alt="dina vejling logo ">
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
