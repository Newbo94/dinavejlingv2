<?php get_header ();

 /*
	Template Name: Kontakt
*/

    ?>

    <div class="container-fluid kontakt">
      <div class="row">
        <div class="kontakt_left col-md-6 col-sm-12">
          <div class="kontakt_left_flex">
          <div class="kontakt_venstre">
            <div class="kontakt_ingenting">
          <div class="kontakt_top">
            <h1>Kontakt</h1>
            <hr class="kontakt_red_hr" align="left">
          </div>

          <!-- Adresse information -->
          <div class="row-fluid kontakt_midt">
            <p> <?php the_field('adresse_textbox'); ?> </p>

          </div>
        </div>
      </div>

          <div>
            <!-- Kontakt formular -->
          <?php
        $action=$_REQUEST['action'];
        if ($action=="")
        {
        ?>
        <div class="kontakt_container">

            <div class="kontakt_form col-md-4 col-sm-8 col-xs-10 kontakt_bund">

                <form class="kontakt-form" action="index.php#kontakt" method="POST">

                    <input class="kontakt-field-wrap" type="hidden" name="action" value="submit">
                    <input class="kontakt-field-wrap" type="text" name="name" placeholder="Dit navn" required="required">
            
                    <input class="kontakt-field-wrap" type="email" name="email" placeholder="Din e-mail" required="required">

                    <textarea class="kontakt-field-wrap" name="message" placeholder="Din besked" required="required"></textarea>

                    <button class="button" type="submit" value="Send email">Send besked<i aria-hidden="true"></i></button>

                </form>
            </div>
          </div>

        <!--- Credit til http://www.123contactform.com/simple-php-contact-form.html -->

                  <?php
        }
        else
        {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];
        if (($name=="")||($email=="")||($message==""))
        {
        echo "Alle felter er påkrævet, udfyld <a href=\"\">kontakt formularen</a> igen .";
        }
        else{

        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Besked fra Dina Vejlings side";
        mail("kontakt@justwebwork.dk", $subject, $message, $from);
        echo "Tak for din mail, den vil blive besvaret hurtigst muligt :) ";
        }
        }
        ?>

          </div>

      </div>
    </div>

        <div class="col-md-6 col-sm-12 kontakt_right">
          <div class=" map_top">
            <h1>Find os her</h1>
          </div>

            <!--- Google maps  -->
          <div>
            <div class="kontakt_wrap_map">
            	<div id="kontakt_map"></div>
            	    <script>
            			function initMap() {
            			 var uluru = {lat: 55.39544, lng: 10.38112};
            			 var map = new google.maps.Map(document.getElementById('kontakt_map'), {
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

          <div class="map_bund">
            <h3>Åbningstider</h3>
            <!-- åbningstider informaton ---->

              <p> <?php the_field('aabningstider_textbox'); ?> </p>


            </div>

            </div>

          </div>
        </div>

      </div>
    </div>

<?php wp_footer(); ?>
