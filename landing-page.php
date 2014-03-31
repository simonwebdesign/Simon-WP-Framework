<?php 
/**
 * The template for displaying Landing Page.
 * Template Name: Landing Page
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
 get_header(); ?>

<div class="outer_wrap">
  <div class="inner_wrap">
    <div class="content">
      <?php get_template_part( 'grid_100', 'img' ); ?>
      <?php get_template_part( 'grid_33' ); ?>
      <?php get_template_part( 'grid_50' ); ?>
      <?php get_template_part( 'grid_50', 'img_right' ); ?>
      <?php get_template_part( 'grid_50', 'img_left' ); ?>
      <?php get_template_part( 'grid_33', 'img' ); ?>
      <?php get_template_part( 'grid_25', 'img_right' ); ?>
      <?php get_template_part( 'grid_25', 'img_left' ); ?>
      <?php get_template_part( 'grid_25', 'img' ); ?>
      <?php get_template_part( 'grid_25' ); ?>
      <?php get_template_part( 'grid_20', 'img' ); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
