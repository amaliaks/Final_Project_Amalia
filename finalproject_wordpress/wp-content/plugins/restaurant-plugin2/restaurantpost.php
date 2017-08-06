<?php
/* code adapted from elegant themes and Codex */

/*
Plugin Name: Restaurant Post 
Description: Restaurant custom post
Author: Amalia Klinck-Shearman
Version: 1.2
Author URI: threecheersfourfood.com
*/
add_action( 'init', 'create_post_type' );
function create_post_type() {
  $labels = array(
    'name'                  => __( 'RestaurantReview', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => __( 'RestaurantReview', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'RestaurantReviews', 'text_domain' ),
    'name_admin_bar'        => __( 'RestaurantReviews', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All RestaurantReview', 'text_domain' ),
    'add_new_item'          => __( 'Add New RestaurantReview', 'text_domain' ),
    'edit_item'             => __( 'Edit RestaurantReview', 'text_domain' ),
    'update_item'           => __( 'Update RestaurantReview', 'text_domain' ),
    'view_item'             => __( 'View RestaurantReview', 'text_domain' ),
    'search_items'          => __( 'Search RestaurantReview', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'RestaurantReview', 'text_domain' ),
    'description'           => __( 'different restaurant reviews', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail', 'editor', 'comments', 'author', 'post-formats' ),
    'taxonomies'            => array( 'category' ),
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 20,
    'menu_icon'             => 'dashicons-randomize',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => false,
    'has_archive'           => true,    
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => array('slug' => 'Restaurant-Reviews'),
    'capability_type'       => 'post',
  );
  register_post_type( 'RestaurantReview', $args );
}


/* code customized from https://www.sitepoint.com/adding-custom-meta-boxes-to-wordpress/ */

function add_custom_meta_box()
{
    add_meta_box("RestaurantReview-meta-box", "RestaurantReview Details", "custom_meta_box_markup", "RestaurantReview", "side", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

function custom_meta_box_markup($object) 
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
            <label for="RestaurantReview_box_text">Restaurant Name</label>
            <input name="RestaurantReview_box_text" type="text" value="<?php echo get_post_meta($object->ID, "RestaurantReview-box-text", true); ?>">
            <br>

            <label for="address_box_text">Restaurant Address</label>
            <input name="address_box_text" type="text" value="<?php echo get_post_meta($object->ID, "address-box-text", true); ?>">
            <br>

            <label for="cuisine_box_text">Cuisine</label>
            <input name="cuisine_box_text" type="text" value="<?php echo get_post_meta($object->ID, "cuisine-box-text", true); ?>">
            <br>

            <label for="rating_box_text">Rating</label>
            <input name="rating_box_text" type="text" value="<?php echo get_post_meta($object->ID, "rating_box_text", true); ?>">
            <br>

            <label for="comments_box_text">Comments</label>
            <input name="comments_box_text" type="text" value="<?php echo get_post_meta($object->ID, "comments-box-text", true); ?>">
            <br>
         </div>
      <?php
}

?>