<div class="social-nav">
<?php
if (has_nav_menu('social_navigation')) {
    $menu_name = 'social_navigation';

    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        foreach ((array)$menu_items as $key => $menu_item) {
            $attrTitle = $menu_item->attr_title;
            $title = $menu_item->title;
            $url = $menu_item->url;
            $type = '';
            switch (true) {
                case stristr($url, 'twitter.com'):
                    $type = 'fa-twitter';
                    break;
                case stristr($url, 'github.com'):
                    $type = 'fa-github';
                    break;
                case stristr($url, 'plus.google.com'):
                    $type = 'fa-google-plus';
                    break;
                case stristr($url, 'instagram.com'):
                    $type = 'fa-instagram';
                    break;
                case stristr($url, 'linkedin.com'):
                    $type = 'fa-linkedin';
                    break;
                case stristr($url, 'youtube.com'):
                    $type = 'fa-youtube';
                    break;
            }
            echo '<a class="fa ' . $type . '" href="' . $url
                . '" title="' . $attrTitle . '"><span>' . $title . '</span></a>';
        }
    }
}
?>
</div>
