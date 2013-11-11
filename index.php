<?php
/**
 * The template for displaying Index.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */

get_header(); ?>

<div class="outer_wrap">
  <div class="inner_wrap">
    <div class="content">
      <div class="alpha flex_66">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <?php
										/*
											* Pull in a different sub-template, depending on the Post Format.
											* 
											* Make sure that there is a default '<tt>format.php</tt>' file to fall back to
											* as a default. Name templates '<tt>format-link.php</tt>', '<tt>format-aside.php</tt>', etc.
											*
											* You should use this in the loop.
											*/
										
												$format = get_post_format();
												get_template_part( 'format', $format );
											?>
          <div class="clear"></div>
        </div>
        <?php endwhile; ?>
        <?php get_template_part( '/inc/nav' );?>
        <?php else : ?>
        <h2>Not Found</h2>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
