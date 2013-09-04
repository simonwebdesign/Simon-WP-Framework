
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
    <?php if (has_post_format('link')): ?>
    <?php
            $content = get_the_content();
            $linktoend = stristr($content, "http" );
            $afterlink = stristr($linktoend, ">");
            if ( ! strlen( $afterlink ) == 0 ):
            $linkurl = substr($linktoend, 0, -(strlen($afterlink) + 1));
            else:
            $linkurl = $linktoend;
            endif;
    ?>
    <a href="<?php echo $linkurl; ?>">
    <div class="post-status-icon"></div><?php the_content(); ?>
    </a>
    <?php endif; ?>
  </div>
</div>
