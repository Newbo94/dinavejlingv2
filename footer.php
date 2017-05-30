

		<footer>
				<div class="flexcontainer">

					<div class=" gallery-wrap">
<h3> Kontakt </h3>
<p> <a href="mailto:dk@dinavejling.dk " target="_top">dk@dinavejling.dk </a> </p>
<p> Telf: +45 6611 1405 </p>
<p> <a href="#">Presse login</a> </p>

  <a href="https://www.facebook.com/Dina-Vejling-Dansk-kunsth%C3%A5ndv%C3%A6rk-361328902422/" target="_blank"> <img  class="front_social_media_img" src="http://localhost:8888/wordpressdb/wp-content/uploads/2017/05/facebook-icon.svg">  </a>
  <a href="https://www.instagram.com/dinavejling/" target="_blank"><img  class="front_social_media_img"src="http://localhost:8888/wordpressdb/wp-content/uploads/2017/05/instagram_icon.svg" > </a>



					</div>

<hr class="footer_hr">

<div class=" gallery-wrap">
<h3>Åbningstider </h3>
<p> Man - tors 11 - 17.30<br><br>
	Fredag 11 - 18.00<br><br>
	Lørdag 10.30 - 14.00

</p>


</div>

<hr class="footer_hr">

<div class=" gallery-wrap">
<h3>Info</h3>
<p> Dina Vejling · Dansk <br> kunsthåndværk <br> <br>
	Brandts Passage 28<br>
	5000 Odense C

 </p>



</div>


<hr class="footer_hr">



<!-- Google maps API, som bliver styled af snazzy maps plugin og maps css --->

<div class="gallery-wrap  gallery-wrap-map">
	<div id="map"></div>
	    <script>
			function initMap() {
			 var uluru = {lat: 55.39544, lng: 10.38112};
			 var map = new google.maps.Map(document.getElementById('map'), {
				 zoom: 15,
				 center: uluru
			 });
			 var marker = new google.maps.Marker({
				 position: uluru,
				 map: map
			 });
		 }
	    </script>
	   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoMx8t0GUgs-Qzq8ASDFp2O4W-RX9UTVA&callback=initMap"
    async defer></script>


</div>


</div>

<div id="footer-sidebar1">
<?php
if(is_active_sidebar('footer-sidebar-1')){
dynamic_sidebar('footer-sidebar-1');
}
?>
				</div> <!---row end --->

				<p class="copyright">  	&copy; 2017 Dina Vejling - Dansk Kunsthåndværk All rights reserved. </p>



		</footer>

	</div><!-- .container -->

	<?php wp_footer(); ?>





	</body>
</html>
