<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?>>
    <?php
    get_template_part('templates/sidebar');
    ?>

    <div class="wrap">
        <?php
        do_action('get_header');
        get_template_part('templates/header');
        ?>

        <div class="container content">
            <?php include Wrapper\template_path(); ?>
        </div>
    </div>

    <label for="sidebar-checkbox" class="sidebar-toggle"></label>

    <?php
    do_action('get_footer');
    get_template_part('templates/footer');
    wp_footer();
    ?>

</body>
</html>
