<?php

$DEVELOPMENT = true; // change to false if PRODUCTION


// For Development ( Without caching )
function project_name_assets_dev(){
  $ASSETS = get_template_directory_uri() . '/assets'; // Dir to the assets theme folder
  $ABSOLUTE_ASSETS_PATH = get_template_directory() . '/assets'; // Absolute path to the assets folder

  $style_version = filemtime( "{$ABSOLUTE_ASSETS_PATH}/css/main.min.css" );
  $vendor_version = filemtime( "{$ABSOLUTE_ASSETS_PATH}/js/vendor.min.js" );
  $custom_version = filemtime( "{$ABSOLUTE_ASSETS_PATH}/js/custom.min.js" );

  wp_enqueue_style( 'project-name-main-stylesheet', "{$ASSETS}/css/main.css", array(), $style_version, 'all' );
  wp_enqueue_script( 'project-name-vendor-script', "{$ASSETS}/js/vendor.js", array(), $vendor_version, true );
  wp_enqueue_script( 'project-name-custom-script', "{$ASSETS}/js/custom.js", array('project-name-vendor-script'), $custom_version, true );
}

// For Production ( With caching )
function project_name_assets_prod(){
  $ASSETS = get_template_directory_uri() . '/assets'; // Dir to the assets theme folder

  wp_enqueue_style( 'project-name-main-stylesheet', "{$ASSETS}/css/main.css", array(), '1.0.0', 'all' );
  wp_enqueue_script( 'project-name-vendor-script', "{$ASSETS}/js/vendor.min.js", array(), '1.0.0', true );
  wp_enqueue_script( 'project-name-custom-script', "{$ASSETS}/js/custom.min.js", array('project-name-vendor-script'), '1.0.0', true );
}


if ( $DEVELOPMENT ) {
  add_action('wp_enqueue_scripts', 'project_name_assets_dev');
} else {
  add_action('wp_enqueue_scripts', 'project_name_assets_prod');
}
