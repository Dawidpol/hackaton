<?php 
    register_nav_menu( 'primary', 'Menu glowne' );
    function my_scripts_method() {
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'calendar', get_template_directory_uri() . '/js/calendar.js' );
        
    }

    add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
?>