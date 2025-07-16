<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="bg-gray-50 text-gray-800 font-sans">
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
      <h1 class="text-xl font-bold">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-blue-600 hover:underline">
          <?php bloginfo('name'); ?>
        </a>
      </h1>
      <nav class="space-x-4">
        <?php wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'items_wrap' => '%3$s',
          'fallback_cb' => false
        ]); ?>
      </nav>
    </div>
  </header>
  <main class="py-8 px-4 max-w-7xl mx-auto">
