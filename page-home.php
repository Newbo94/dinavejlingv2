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

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="   <?php the_field('image_slider_1'); ?>
" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="    <?php the_field('image_slider_2'); ?>
" alt="Chicago">
    </div>

    <div class="item">
      <img src="  <?php the_field('image_slider_3'); ?>
" alt="New York">
    </div>
  </div>

            </div>

    </div>
        </div>

</div> <!----- container-fluid poistion-re------>

<div class="container position-ab">
  <div class="row">
    <div class="col-sm-offset-2 col-md-6">
<div class="main-logo">
<img src="<?php the_field('home_header_logo'); ?>" alt="dina vejlign logo ">
</div>
</div>
</div>
</div> <!---- Container position-ab ----->


<div class="container position-ab">

<div class="adress_text row">

<div class="col-sm-offset-2 col-md-2">

<h3> <?php the_field('adresse_textbox'); ?> </h3>



</div>


</div>
</div>







<?php get_footer(); ?>
