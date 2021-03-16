<?php

function mediabuyer_assets() {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
  wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css' );
  wp_enqueue_style( 'mediacss', get_template_directory_uri() . '/assets/css/media.css' );

	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js' );

}

add_action( 'wp_enqueue_scripts', 'mediabuyer_assets' );

show_admin_bar(false);

function allow_type($type) {
  $type['svg'] = 'image/svg+xml';
  return $type;
}
add_filter('upload_mimes', 'allow_type');