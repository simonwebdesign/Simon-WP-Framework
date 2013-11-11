<?php 
/**
 * The template for displaying Single Posts.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
get_header(); ?>

<div class="outer_wrap">
  <div class="inner_wrap">
    <div class="content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="bread-crumb textcenter">
        <?php simonwpframework_breadcrumb();?>
      </div>
      <h1 class="entry-title center">
        <?php the_title(); ?>
      </h1>
      <div class="flex_vert_pad"></div>
      <div class="flex_100">
        <div class="flex_66">
          <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <div class="entry">
              <?php the_content(); ?>
            </div>
            <div class="postmetadata">
              <div class="author">
                <?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '100' ); }?>
                <div class="authorinfo">
                  <h3>About <span rel="author">
                    <?php the_author_posts_link(); ?>
                    </span> </h3>
                  <p>
                    <?php the_author_meta('description'); ?>
                  </p>
                  <div class="clear"></div>
                </div>
              </div>
              <?php get_template_part( '/inc/meta' );?>
              <span class="categories">Filed Under:
              <?php the_category(', '); ?>
              </span>
              <?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?>
            </div>
          </div>
          <div id="comment-block">
            <?php comments_template(); ?>
          </div>
          <?php endwhile; endif; ?>
          <div>
            <?php wp_link_pages(); ?>
          </div>
        </div>
        <?php get_template_part('sidebar'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
