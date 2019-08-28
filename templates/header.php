<?php

use Roots\Soil\CustomNav\NavWalker; ?>
<header class="banner">
  <div class="">

    <!-- Brand -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array(
            'theme_location'  => 'primary_navigation',
            'depth'            => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => '',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'primary_nav',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ));
        endif;
        ?>
        <?php get_search_form();?>
      </div>
    </nav>

  </div>
</header>