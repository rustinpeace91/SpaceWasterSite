<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		
		<meta charset = "<?php bloginfo('charset'); ?>">
		<meta name = "viewport" content = "width=device-width">
		<title><?php bloginfo ('name'); ?> </title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class();?> >



			<!--site header-->

			<div class = "site-header">
				<h1 id = "site-title"><a href = "<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

				<h4 id = "site-description"><?php bloginfo('description'); ?></h4>
				<img id = "header-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

					<nav class ="site-nav">

						<?php
							$args = array (
								'theme_location' => 'primary'
							);

						?>

						<?php wp_nav_menu($args);?>
						
					</nav><!--sitenav-->


					<nav class = "site-social">
						<?php 
							$args = array (
									'theme_location' => 'social'
								);
						?>

						<?php wp_nav_menu($args);?>
					</nav><!--social media menu-->

			</div><!--/site-header-->
	<div class = "container">