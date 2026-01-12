<?php
// Chargement des styles du thème
function portail_s10_enqueue_styles() {
    wp_enqueue_style( 'portail-s10-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'portail_s10_enqueue_styles' );
