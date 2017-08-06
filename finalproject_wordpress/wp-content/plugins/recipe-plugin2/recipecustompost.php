<?php
/* code adapted from elegant themes and Codex */

/*
Plugin Name: Recipe Post
Description: Recipe custom post
Author: Amalia Klinck-Shearman
Version: 1.2
Author URI: threecheersfourfood.com
*/
add_action( 'init', 'create_post_type' );
function create_post_type() {
	$labels = array(
		'name'                  => __( 'Recipes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => __( 'Recipe', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Recipes', 'text_domain' ),
		'name_admin_bar'        => __( 'Recipes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Recipes', 'text_domain' ),
		'add_new_item'          => __( 'Add New Recipe', 'text_domain' ),
		'edit_item'             => __( 'Edit Recipe', 'text_domain' ),
		'update_item'           => __( 'Update Recipe', 'text_domain' ),
		'view_item'             => __( 'View Recipe', 'text_domain' ),
		'search_items'          => __( 'Search Recipes', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Recipe', 'text_domain' ),
		'description'           => __( 'different recipes', 'text_domain' ),
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
		'rewrite'               => array('slug' => 'recipes'),
		'capability_type'       => 'post',
	);
	register_post_type( 'recipe', $args );
}


/* code customized from https://www.sitepoint.com/adding-custom-meta-boxes-to-wordpress/ */

function add_custom_meta_box()
{
    add_meta_box("recipe-meta-box", "Recipe Details", "custom_meta_box_markup", "recipe", "side", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

function custom_meta_box_markup($object) 
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
            <label for="recipe_box_text">Recipe Name</label>
            <input name="recipe_box_text" type="text" value="<?php echo get_post_meta($object->ID, "recipe-box-text", true); ?>">
            <br>

            <label for="cooktime_box_text">Cook Time</label>
            <input name="cooktime_box_text" type="text" value="<?php echo get_post_meta($object->ID, "cooktime-box-text", true); ?>">
            <br>

            <label for="ingredients_box_text">Ingredients</label>
            <input name="ingredients_box_text" type="text" value="<?php echo get_post_meta($object->ID, "ingredients-box-text", true); ?>">
            <br>

            <label for="directions_box_text">Directions</label>
            <input name="directions_box_text" type="text" value="<?php echo get_post_meta($object->ID, "directions-box-text", true); ?>">
            <br>

            <label for="comments_box_text">Comments</label>
            <input name="comments_box_text" type="text" value="<?php echo get_post_meta($object->ID, "comments-box-text", true); ?>">
            <br>
         </div>
      <?php
}

?>