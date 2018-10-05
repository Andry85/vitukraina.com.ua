<?php 



	function vit_script_enqueue() {
		wp_deregister_script( 'jquery' );
		wp_enqueue_style('customstyle', get_template_directory_uri().'/css/main.min.css', array(), '1.0.0','all');
		wp_enqueue_style('customstyle-1','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.css', array(), '1.0.0','all');

		wp_enqueue_script('customjs', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '1.0.0',true);
		wp_enqueue_script('customjs-1', get_template_directory_uri().'/js/jquery.slicknav.min.js', array(), '1.0.0',true);
		wp_enqueue_script('customjs-2', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1.0.0',true);
		wp_enqueue_script('customjs-21','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js', array(), '1.0.0',true);
		wp_enqueue_script('customjs-3', get_template_directory_uri().'/js/main.min.js', array(), '1.0.0',true);
	}
	add_action('wp_enqueue_scripts', 'vit_script_enqueue');



	function vit_theme_setup() {
		add_theme_support('menus');
		register_nav_menu('main', 'Main Menu');
		register_nav_menu('footer', 'Footer Menu');
	}
	add_action('init', 'vit_theme_setup');

	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('image'));



/*
	===============================
		Sidebar function
	===============================
*/


	function vit_widget_setupfooter() {
		/**
		 * Creates a sidebar
		 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		 */
		$args = array(
			'name'          =>'Footer text',
			'id'            => 'footer-text',
			'description'   => 'Footer text',
			'class'         => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<span style="display: none;">',
			'after_title'   => '</span>',
		);
		
		register_sidebar( $args );	
	}

	add_action('widgets_init','vit_widget_setupfooter');



/*
	===============================
		Head function
	===============================
*/	

	function vit_remove_version() { 
		return '';
	}
	add_filter('the_generator','vit_remove_version');

	function new_excerpt_length($length) {
		return 10;
	}
	add_filter('excerpt_length', 'new_excerpt_length');


 ?>