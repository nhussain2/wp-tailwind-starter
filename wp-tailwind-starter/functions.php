<?php
function tailwind_enqueue() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'tailwind_enqueue');

register_nav_menus([
  'primary' => __('Primary Menu', 'tailwind-starter'),
]);

