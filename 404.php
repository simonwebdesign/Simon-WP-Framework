<?php
/**
 * The template for 404.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0 
 
 */

get_header(); ?>

<div class="outer_wrap">
  <div class="inner_wrap">
    <div class="content">
      <div class="flex_100">
        <div class="post">
          <h1>Oops.</h1>
          <hr size="1" />
          <div class="flex_25">
            <h2>We didn't find what you were looking for.</h2>
          </div>
          <div id="categories" class="flex_25">
            <h2>Categories</h2>
            <ul>
              <?php wp_list_categories('show_count=1&title_li='); ?>
            </ul>
          </div>
          <div id="archives" class="flex_25">
            <h2>Archives</h2>
            <ul>
              <?php wp_get_archives('type=monthly'); ?>
            </ul>
          </div>
          <div class="flex_25">
            <h2>Pages</h2>
            <ul>
              <?php wp_list_pages('title_li='); ?>
            </ul>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
