<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuration de base du thème Portail S10.
 */
function portail_s10_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => __('Navigation principale', 'portail-s10'),
        'footer' => __('Navigation pied de page', 'portail-s10'),
    ]);
}
add_action('after_setup_theme', 'portail_s10_setup');

/**
 * Chargement des assets du thème.
 */
function portail_s10_enqueue_assets(): void
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'portail-s10-style',
        get_stylesheet_uri(),
        [],
        $version
    );
}
add_action('wp_enqueue_scripts', 'portail_s10_enqueue_assets');
