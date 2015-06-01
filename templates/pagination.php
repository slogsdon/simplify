<?php
  $next = get_next_posts_link('Older');
  $previous = get_previous_posts_link('Newer');
?>
<div class="pagination">
  <?php if ($next): ?>
    <?php echo str_replace('<a', '<a class="pagination-item older"', $next); ?>
  <?php else: ?>
    <span class="pagination-item older">Older</span>
  <?php endif; ?>
  <?php if ($previous): ?>
    <?php echo str_replace('<a', '<a class="pagination-item newer"', $previous); ?>
  <?php else: ?>
    <span class="pagination-item newer">Newer</span>
  <?php endif; ?>
</div>
