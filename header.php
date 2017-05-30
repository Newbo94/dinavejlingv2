<!Doctype html>
<html <?php language_attributes(); ?>>
	<head>
		 <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title(); ?> | Dina Vejling - Dansk kunsthåndværk </title>
		<?php wp_head(); ?>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>



	<body <?php body_class( $dina_classes ); ?>>

		<div class="container">



		<nav role="navigation">
<div class="toggle-nav">
<div class="navbar-inverse navbar-fixed-left navbar">

<div class="flex-justify">

<!--- wordpress menu -->
	    <?php
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav '
									)
								);
							?>
							<div class="flex-justify">
							<img class="navbar-brand" src="http://justwebwork.dk/dina/img/icon.svg"></img>
							</div>
  </div>


</div>

</div>
</nav>

<!--- Navigation buttons -->
<div class="toggle-button">

<svg id="toggle-button" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.18 47.18"><defs><style>.cls-1{fill:#d5ccc4;}.cls-2{fill:#fff;}</style></defs><title>hamburger_menu</title><circle class="cls-1" cx="23.59" cy="23.59" r="23.59"/><path class="cls-2" d="M14.3,16h19a1.3,1.3,0,0,1,1.3,1.3h0a1.3,1.3,0,0,1-1.3,1.3h-19A1.3,1.3,0,0,1,13,17.3h0A1.3,1.3,0,0,1,14.3,16Z" transform="translate(0 0)"/><path class="cls-2" d="M14.3,21.94h19a1.3,1.3,0,0,1,1.3,1.3h0a1.3,1.3,0,0,1-1.3,1.3h-19a1.3,1.3,0,0,1-1.3-1.3h0A1.3,1.3,0,0,1,14.3,21.94Z" transform="translate(0 0)"/><path class="cls-2" d="M14.3,27.88h19a1.3,1.3,0,0,1,1.3,1.3h0a1.3,1.3,0,0,1-1.3,1.3h-19a1.3,1.3,0,0,1-1.3-1.3h0A1.3,1.3,0,0,1,14.3,27.88Z" transform="translate(0 0)"/></svg>



</div>


			</div>
