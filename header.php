<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
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
<svg id="toggle-button" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64.3 64.3"><defs><style>.cls-1{fill:none;stroke:#555;stroke-width:2px;}.cls-2{fill:#555;}</style></defs><title>toggle-icon</title><g id="Group_2577" data-name="Group 2577"><path id="Path_574" data-name="Path 574" class="cls-1" d="M32.15,1A31.15,31.15,0,1,1,1,32.15H1A31.15,31.15,0,0,1,32.15,1Z" transform="translate(0)"/><g id="Group_2576" data-name="Group 2576"><path id="Rectangle_3773" data-name="Rectangle 3773" class="cls-2" d="M18,22.5H45.26a1.5,1.5,0,0,1,1.5,1.5h0a1.5,1.5,0,0,1-1.5,1.5H18A1.5,1.5,0,0,1,16.5,24h0A1.5,1.5,0,0,1,18,22.5Z" transform="translate(0)"/><path id="Rectangle_3774" data-name="Rectangle 3774" class="cls-2" d="M18,30.5H45.26a1.5,1.5,0,0,1,1.5,1.5h0a1.5,1.5,0,0,1-1.5,1.5H18A1.5,1.5,0,0,1,16.5,32h0A1.5,1.5,0,0,1,18,30.5Z" transform="translate(0)"/><path id="Rectangle_3775" data-name="Rectangle 3775" class="cls-2" d="M18,38.5H45.26a1.5,1.5,0,0,1,1.5,1.5h0a1.5,1.5,0,0,1-1.5,1.5H18A1.5,1.5,0,0,1,16.5,40h0A1.5,1.5,0,0,1,18,38.5Z" transform="translate(0)"/></g></g></svg>
</div>


			</div>
