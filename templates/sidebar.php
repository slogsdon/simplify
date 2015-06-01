<input type="checkbox" class="sidebar-checkbox" id="sidebar-checkbox">

<div class="sidebar" id="sidebar">
  <div class="sidebar-item">
    <p><?php echo get_theme_mod('simplify_long_description', ''); ?></p>
  </div>

  <nav class="sidebar-nav">
    <?php
    if (has_nav_menu('primary_navigation')) {
        $menu_name = 'primary_navigation';

        if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);

            foreach ((array)$menu_items as $key => $menu_item) {
                $title = $menu_item->title;
                $url = $menu_item->url;
                echo '<a class="sidebar-nav-item" href="' . $url . '">' . $title . '</a>';
            }
        }
    }
    ?>
  </nav>

  <div class="sidebar-item">
    <p>
    <?php get_template_part('templates/social'); ?>
    </p>
  </div>

  <div class="sidebar-item">
    <p>
      &copy; <?php echo date('Y'); ?>. All rights reserved.
    </p>
  </div>
</div>
