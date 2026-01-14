<?php
/**
 * Chargement des styles et scripts du thème
 */
add_action('wp_enqueue_scripts', function () {

  $theme_version = wp_get_theme()->get('Version');

  /**
   * Style principal WordPress
   * (uniquement l’en-tête du thème)
   */
  wp_enqueue_style(
    'portail-style',
    get_stylesheet_uri(),
    [],
    $theme_version
  );

  /**
   * Styles CSS modulaires
   */
  $css_files = [
    'tokens',
    'base',
    'layout',
    'header',
    'footer',
    'pages',
  ];

  foreach ($css_files as $file) {
    wp_enqueue_style(
      "portail-$file",
      get_stylesheet_directory_uri() . "/assets/css/$file.css",
      ['portail-style'],
      $theme_version
    );
  }

  /**
   * Scripts JS modulaires
   */
  $js_files = [
    'menu',
    'theme',
    'counters',
  ];

  foreach ($js_files as $file) {
    wp_enqueue_script(
      "portail-$file",
      get_stylesheet_directory_uri() . "/assets/js/$file.js",
      [],
      $theme_version,
      true
    );
  }
});

/**
 * Déclarations du thème
 */
add_action('after_setup_theme', function () {
  register_nav_menu('primary', 'Navigation principale');
});
