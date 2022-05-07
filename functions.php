
<?php
  function my_style_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/style.css' );
  }
  add_action('wp_enqueue_scripts', 'my_style_enqueue_styles');

/*
  function wpbootstrap_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/assets/dist/js/bootstrap.bundle.min.js', array (), 1.1, true);
  }
  add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_scripts');
*/


function register_my_links_menu() {
  register_nav_menu('links-menu',__( 'Links Menu' ));
}
add_action( 'init', 'register_my_links_menu' );
