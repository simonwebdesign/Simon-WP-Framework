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
      <h1 id="post-<?php the_ID(); ?>"  class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <?php if ( get_the_title() == '' ) { ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link">No Title</a>
        <?php } else { ?>
        <?php the_title(); ?>
        <?php } ?>
        </a></h1>
      <div class="entry">
        <?php the_content(); ?>
      </div>
      <div class="postmetadata">
        <?php get_template_part( '/inc/meta' );?>
        <?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?>
        <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'post-comments', 'Comments are off for this post'); ?>
      </div>
    </div>