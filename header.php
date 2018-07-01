<!doctype html>  
<html <?php language_attributes(); ?> class="no-js">
	
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<?php // backwards compatibility for wp_title (vs title-tag)
		if ( ! function_exists( '_wp_render_title_tag' ) ) :
		    function theme_slug_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
		    }
		    add_action( 'wp_head', 'theme_slug_render_title' );
		endif; ?>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content=" <?php bloginfo('name'); echo ": "; bloginfo('description'); ?> ">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">	
		
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class('zengxiaoluan.com'); ?>>
        <header id="header" class="wrap" role="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                          <?php if(get_theme_mod( 'serena_logo' )) : ?>
                              <a href="<?php echo esc_url(home_url('/')); ?>" rel="nofollow"><img src="<?php echo get_theme_mod( 'serena_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                          <?php endif; ?>
                            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                            <p><?php bloginfo('description'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <nav role="navigation">
                          <?php
                          wp_nav_menu(array(
                              'container' => false,                           // remove nav container
                              'container_class' => 'menu',           // class of container
                              'menu' => __( 'The Main Menu', 'serena' ),  // nav name
                              'menu_class' => 'nav top-nav',         // adding custom nav class
                              'theme_location' => 'main-nav',                 // where it's located in the theme
                              'depth' => 2,                                   // limit the depth of the nav
                              'fallback_cb' => 'serena_main_nav_fallback'      // fallback function
                          ));
                          ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <style>
            .logo {
                font-size: 32px;
                color: rgb(51, 51, 51);
            }
        </style>
