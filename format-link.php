<div class="content-format-link">
  <div class="post-format-icon"></div>
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
  <div class="post-format-icon"></div>
  <?php the_content(); ?>
  </a>
  <?php endif; ?>
</div>
