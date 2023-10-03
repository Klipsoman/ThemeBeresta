<?php
  show_admin_bar( false );
  add_action( 'wp_enqueue_scripts', 'ruspan_add_styles_and_sctipts' );
  function ruspan_add_styles_and_sctipts() {
    wp_deregister_script('jquery');

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'index', get_template_directory_uri() .'/script.js', [], null, true );
  }
?>