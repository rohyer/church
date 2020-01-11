<?php

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_theme_support( 'post-thumbnails' );

add_filter('single_template', 'create_single_template');

function create_single_template( $template ) {
	global $post;

	$categories = get_the_category();
	// caso não tenhamos categoria retornamos o template default.
	if ( ! $categories )
			return $template; 

	//resgatando o post type
	$post_type = get_post_type( $post->ID );

	$templates = array();

	foreach ( $categories as $category ) {
			// adicionando templates por id e slug
			$templates[] = "single-{$post_type}-{$category->slug}.php";
			$templates[] = "single-{$post_type}-{$category->term_id}.php";
	}

	// adicionando os templates padrões
	$templates[] = "single-{$post_type}.php";
	$templates[] = 'single.php';
	$templates[] = 'singular.php';
	$templates[] = 'index.php';

	return locate_template( $templates );
}

function g_scripts() {

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('jquery-3.4.1', get_template_directory_uri() . '/assets/js/jquery-3.4.1.js', array(), 1.0, true);
    wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/bootstrap/index.js', array(), 1.0, true);
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl/owl.carousel.js', array(), 1.0, true);
    wp_enqueue_script('owl.autoplay', get_template_directory_uri() . '/assets/js/owl/owl.autoplay.js', array(), 1.0, true);
    wp_enqueue_script('owl.navigation', get_template_directory_uri() . '/assets/js/owl/owl.navigation.js', array(), 1.0, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'g_scripts');


require get_template_directory() . '/inc/customizer.php';


?>