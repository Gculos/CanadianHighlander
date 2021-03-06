<?php 
/**
 * @package WordPress
 * @subpackage Farmco
 * @since Farmco 1.0
 **/

add_filter( 'jetpack_development_mode', '__return_true' );

function hl_get_svg_directory() {
  return get_template_directory_uri() . '/assets/img/svg';
}

function create_post_types() {

  register_post_type( 'council',
    array(
      'labels' => array(
        'name' => __( 'Council' ),
        'singular_name' => __( 'Council' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' )
    )
  );

  register_post_type( 'podcasts_tcobo',
    array(
      'labels' => array(
        'name' => __( 'Podcasts' ),
        'singular_name' => __( 'Episode' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' )
    )
  );

  register_post_type( 'deck_post',
    array(
      'labels' => array(
        'name' => __( 'Deck Lists' ),
        'singular_name' => __( 'Deck' )
      ),
      'public'              => true,
      'hierarchical'        => false,
      'has_archive'         => true,
      'supports'            => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' )
    )
  );

  register_post_type( 'monday_night_meta',
    array(
      'labels' => array(
        'name' => __( 'Monday Night Meta' ),
        'singular_name' => __( 'Monday Night Meta' )
      ),
      'hierarchical'        => false,
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' )
    )
  );

  register_post_type( 'article',
    array(
      'labels' => array(
        'name' => __( 'Article' ),
        'singular_name' => __( 'Article' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' )
    )
  );

  register_post_type( 'points_list',
    array(
      'labels' => array(
        'name' => __( 'Points List' ),
        'singular_name' => __( 'Pointed Card' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' )
    )
  );

  register_post_type( 'news',
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'News' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

    )
  );
}
add_action( 'init', 'create_post_types');

@ini_set( 'upload_max_size' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'max_execution_time', '300' );
?>