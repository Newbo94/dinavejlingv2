<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dina Vejling <?php wp_title(); ?></title>
		<?php wp_head(); ?>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

	</head>

	<?php

		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;

	?>

	<body <?php body_class( $awesome_classes ); ?>>

		<div class="container">

		<nav role="navigation">

<div class="navbar navbar-inverse navbar-fixed-left">

<div class="flex-justify">

	    <?php
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav '
									)
								);
							?>
  </div>

<div class="flex-justify">
<img class="navbar-brand" src="http://justwebwork.dk/dina/img/icon.svg"></img>
</div>
</div>



			</div>
