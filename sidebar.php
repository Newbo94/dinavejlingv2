<?php

if ( ! is_active_sidebar( 'page-sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>


<div class="newsletter_section">
 <div class="container-fluid wrap_newsletter">
   <div class="row">

       <div class="col-md-12 col-sm-12" >




     <?php

$image = get_field('newsletter_billede_sidebar');

if( !empty($image) ): ?>

	<img class="news-overlay" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
  </div>

       <div class="col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8 text-center newsletter_tekst"><h2>TILMELD DIG VORES NYHEDSBREV</h2>
<p class="text-center">Hold dig opdateret med nyheder fra Dina Vejling.</p>
</div>

<div class="form-newsletter col-md-offset-4 col-sm-offset-4 cold-md-4 col-sm-4">
           <div id="blog-sidebar1">
<?php
if(is_active_sidebar('page-sidebar-1')){
dynamic_sidebar('page-sidebar-1');
}
?>

         </div>
       </div>
     </div>
 </div>
</div>
</aside><!-- #secondary -->
