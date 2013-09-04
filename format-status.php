
<div class="flex_10">
  <div class="postdate">
    <div class="postmonth">
      <?php the_time('M, d') ?>
    </div>
    <div class="postyear">
      <?php the_time('Y') ?>
    </div>
  </div>
</div>
<div class="flex_90"> <span class="categories">
  <?php the_category(', '); ?>
  </span>
  <div class="entry">
    <div class="flex_100">
      <div class="post-status-icon"></div><?php the_content(); ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
