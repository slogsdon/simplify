<?php

use Roots\Sage\Utils;

?>
<meta itemprop="inLanguage" content="en-US"/>
<div class="post-date">
    <span title="<?php printf(__('Permalink for: %s', 'sage'), get_the_title());?>">
        <a href="<?php echo get_the_permalink(); ?>">&#35;</a>
    </span>
    <span class="sep">&ndash;</span>
    <time itemprop="datePublished" datetime="<?php echo get_the_time('c'); ?>">
        <?php printf(__('Published: %s', 'sage'), get_the_date('j F Y')); ?>
    </time>
    <span class="sep">&ndash;</span>
    <span class="reading-time" title="Estimated read time">
        <?php printf(__('Read time: %s', 'sage'), Utils\get_post_read_time()); ?>
    </span>
</div>
