
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
  <h1 id="post-<?php the_ID(); ?>"  class="entry-title">
    <?php if ( get_the_title() == '' ) { ?>
    No Title
    <?php } else { ?>
    <div class="post-status-icon"></div><?php the_title(); ?>
    <?php } ?>
  </h1>
  <div class="entry">
    <?php the_content(); ?>
  </div>
</div>
