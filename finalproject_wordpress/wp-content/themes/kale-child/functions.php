<?php
//Enqued my child theme (kale child) 
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'child-style' for the Kale theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}


//Added code to be able to load Google Fonts. used 3 Google fonts: Arvo, Pacifico, Didact + Gothic
function load_google_fonts() {
wp_register_style('googleWebFonts', 'https://fonts.googleapis.com/css?family=Arvo|Pacifico|Didact+Gothic');
wp_enqueue_style('googleWebFonts');
}

add_action('wp_print_styles', 'load_google_fonts');

?>
