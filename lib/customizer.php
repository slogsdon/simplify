<?php

namespace Roots\Sage\Customizer;

function register_options($customizer)
{
    // Section for theme options

    $customizer->add_section('simplify_options', array(
        'title'       => __('Simplify Options', 'sage'),
        'capability'  => 'edit_theme_options',
        'description' => __('Allows you to customize some settings for Simplify.', 'sage'),
    ));

    // Long Description for use in the sidebar

    $customizer->add_setting('simplify_long_description', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $customizer->add_control('simplify_long_description', array(
        'label'    => __('Long Description', 'sage'),
        'section'  => 'simplify_options',
        'type'     => 'textarea',
        'priority' => 1,
    ));
}
add_action('customize_register', __NAMESPACE__ . '\\register_options', 11);
