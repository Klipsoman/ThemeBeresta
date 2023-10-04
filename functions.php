<?php
show_admin_bar( false );

remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
remove_action('wp_head','wp_generator');  // скрыть версию wordpress

remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head','wp_shortlink_wp_head', 10, 0 );

remove_action( 'wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );

if ( !is_admin() ) { 
	wp_deregister_script('jquery'); 
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// add_action( 'wp_enqueue_scripts', 'remove_some_stylesheet', 20 );
// function remove_some_stylesheet() {
//     wp_dequeue_style('flexslider');
//     wp_dequeue_style('owl-carousel');
//     wp_dequeue_style('owl-theme');
//     wp_dequeue_style('font-awesome');
//     wp_dequeue_style('wp-pagenavi');
 
//     wp_deregister_script('flexslider');
//     wp_deregister_script('googlemapapis');
//     wp_deregister_script('easing');
//     wp_deregister_script('jflickrfeed');
//     wp_deregister_script('playlist');
//     wp_deregister_script('jplayer');
// }
  
  add_action( 'wp_enqueue_scripts', 'ruspan_add_styles_and_sctipts' );

  function ruspan_add_styles_and_sctipts() {
    wp_deregister_script('jquery');

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'swiper', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" );
    wp_enqueue_script( 'index', get_template_directory_uri() .'/script.js', [], null, true );
    wp_enqueue_script( 'swiper', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js" );

    wp_dequeue_style('global-styles');
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); 
    wp_dequeue_style( 'classic-theme-styles' ); 
    wp_dequeue_style('flexslider');
    wp_dequeue_style('owl-carousel');
    wp_dequeue_style('owl-theme');
    wp_dequeue_style('font-awesome');
    wp_dequeue_style('wp-pagenavi');
 
    wp_deregister_script('flexslider');
    wp_deregister_script('googlemapapis');
    wp_deregister_script('easing');
    wp_deregister_script('jflickrfeed');
    wp_deregister_script('playlist');
    wp_deregister_script('jplayer');
  }
?>