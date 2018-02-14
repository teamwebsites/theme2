<?php
add_action( 'wp_enqueue_scripts', 'fadebottom_enqueue_styles' );
function fadebottom_enqueue_styles() {
    wp_enqueue_script( 'fadebottom', get_template_directory_uri() . '/js/fadebottom.js', array('jquery'), '2.0.8', true );
 
}
?>