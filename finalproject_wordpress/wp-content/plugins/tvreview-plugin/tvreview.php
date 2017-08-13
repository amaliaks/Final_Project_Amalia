<?php

/* code adapted from elegant themes and Codex */

/*
Plugin Name: TV Review Post
Description: TV Review custom post
Author: Amalia Klinck-Shearman
Version: 1.0
Author URI: threecheersfourfood.com
*/

/*created custom post type with labels, and hierarchies for the TV reviews */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'tv_review',
    array(
      'labels' => array(
        'name' => __( 'tvreviews' ),
        'singular_name' => __( 'tvreview' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'tv-review'),
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_icon' => 'dashicons-randomize',
      'supports' => array(
      	'title',
      	'show_name',
      	'custom-fields',
      	'comments'
      	)

    )
  );
}
?>
