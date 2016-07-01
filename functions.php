<?php
function my_theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_comments_open( $open, $post_id ) {
  return false;
}
add_filter( 'comments_open', 'my_comments_open', 10, 2 );
