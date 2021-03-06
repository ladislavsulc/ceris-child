<?php
    
    if ( ! function_exists( 'ceris_child_theme_scripts_method' ) ) {
        function ceris_child_theme_scripts_method() {
            wp_enqueue_style( 'child-theme-style', get_stylesheet_directory_uri().'/style.css', array('ceris-style'), '' );
        }
    }
    
    add_action('wp_enqueue_scripts', 'ceris_child_theme_scripts_method');

    // Custom styles for WP GIVE
    function my_custom_override_form_template_styles() {
        wp_enqueue_style(
            'form-template-styles',
            get_stylesheet_directory_uri() . '/form-template-styles.css',
            'give-sequoia-template-css'
        );
    }
    
    add_action('wp_print_styles', 'my_custom_override_form_template_styles', 10);
    
?>