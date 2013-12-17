<?php
/**
 * The template for Meta Info.
 *
 * @package WordPress
 * @subpackage Simon_WP_Framework
 * @since Simon WP Framework 1.0
 */
 ?>

<div class="meta">
  <?php the_date('F jS, Y', '<span class="time">', '</span>'); ?>
  <span class="meta_author"><em>by</em>
  <?php the_author() ?>
  | Type:
  <?php
				if ( get_post_format() ) {
								echo get_post_format_string( get_post_format() );
				} else {
								echo 'Standard';
				}
		?>
  </span>
  <?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?>
  <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'post-comments', 'Comments are off for this post'); ?>

</div>
