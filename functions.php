<?php
function my_theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style', 'fullpage-style', 'bootstrap') );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_comments_open( $open, $post_id ) {
  return false;
}
add_filter( 'comments_open', 'my_comments_open', 10, 2 );

function custom_category_sort( $a, $b ) {
  if ($a->term_id === 1)
    return -1;
  if ($b->term_id === 1)
    return 1;
  if ($a->term_id === 6)
    return -1;
  if ($b->term_id === 6)
    return 1;
  return 1;
}

function custom_fonts() {
  wp_dequeue_style( 'fonts-Playfair_Display' );
  wp_enqueue_style( 'fonts-Oswald', 'https://fonts.googleapis.com/css?family=Oswald:400,700' );
}
add_action( 'wp_enqueue_scripts', 'custom_fonts', 20 );
