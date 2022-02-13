<?php

namespace SukiChild;

if (!defined('ABSPATH')) {
  exit;
}

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'suki-child',
    trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/main.css',
    ['suki'],
    wp_get_theme()->get('Version')
  );
}, 20);
