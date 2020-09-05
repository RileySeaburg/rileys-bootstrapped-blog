<!doctype html>
<html <?php language_attributes( ) ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'description' ) ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title>
      <?php bloginfo( 'name' )?> | 
      <?php is_front_page() ? bloginfo( 'description' ) : wp_title(); ?>
      <?php wp_title()?> 
    </title>
    <?php wp_head(); ?>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav p-2 link-secondary',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
      </ul>
    </div>
  </div>
</nav>

<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
  <h1 class=" display-4 font-italic blog-header"><?php bloginfo( 'name' ) ?></h1>
  <p class="blog-description lead my-3"><?php bloginfo( 'description' ) ?></p>
 </div>
  </div>

</div>