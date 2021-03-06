<?php
/**
 * Header file for the Test Work theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test Work
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
    	<header>
    		<section class="search">
    			<div class="container">
    				Search
    			</div>
    		</section>
    		<section class="top-bar">
    			<div class="container">
    				<div class="row">
    					<div class="brand col-md-3 col-12 col-lg-2 text-center text-md-left">Logo</div>
    				 <div class="second-column col-md-9 col-12 col-lg-10">
    				 	<div class="row">
    				 			<div class="account col-12">Account</div>

								<nav class="navbar navbar-expand-md navbar-light" role="navigation">
								  <div class="container">
								    <!-- Brand and toggle get grouped for better mobile display -->
								    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
    										<span class="navbar-toggler-icon"></span>
												</button>
								
								        <?php
								        wp_nav_menu( array(
								            'theme_location'    => 'test_work_main_menu',
								            'depth'             => 2,
								            'container'         => 'div',
								            'container_class'   => 'collapse navbar-collapse',
								            'container_id'      => 'bs-example-navbar-collapse-1',
								            'menu_class'        => 'nav navbar-nav',
								            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								            'walker'            => new WP_Bootstrap_Navwalker(),
								        ) );
								        ?>
								    </div>
								</nav>
    				 	</div>
    			 	
    				</div>
    			</div>
    		</div>
    </section>
</header>







