<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?php bloginfo('name') ?></title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
    <?php wp_head(); ?>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/bootstrap/<?php esc_html_e(get_theme_mod('theme_selector')) ?>.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4cde37f226.js"></script>
    <!-- Style propio -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <?php if(has_custom_logo()) : the_custom_logo(); else : ?>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    <?php endif; ?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php
      wp_nav_menu([
        'menu'            => 'primary',
        'theme_location'  => 'primary',
        'container'       => '',
        'container_id'    => '',
        'container_class' => '',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav mr-auto',
        'depth'           => 1,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
      ]);
      ?>
      <?php
      wp_nav_menu([
        'menu'            => 'secondary',
        'theme_location'  => 'secondary',
        'container'       => '',
        'container_id'    => '',
        'container_class' => '',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav ml-auto',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
      ]);
      ?>
  </div>
</nav>
</header>
<main role="main">