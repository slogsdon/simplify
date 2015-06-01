<?php

namespace Roots\Sage\Utils;

/**
 * Tell WordPress to use searchform.php from the templates/ directory
 */
function get_search_form()
{
    $form = '';
    locate_template('/templates/searchform.php', true, false);
    return $form;
}
add_filter('get_search_form', __NAMESPACE__ . '\\get_search_form');

/**
 * Get post's estimated read time.
 */
function get_post_read_time($wpm = 200)
{
    $post = get_post();
    $content = apply_filters('the_content', $post->content);
    $num_words = str_word_count(strip_tags($content));
    $minutes = floor($num_words / $wpm);
    $seconds = floor($num_words % $wpm / ($wpm / 60));

    if ($seconds >= 30) {
        $minutes = $minutes + 1;
    }

    $estimated_time = $minutes . ' ' . __('minute' . ($minutes == 1 ? '' : 's'), 'sage');
    if ($minutes < 1) {
        $estimated_time = __('Less than a minute', 'sage');
    }

    return $estimated_time;
}
