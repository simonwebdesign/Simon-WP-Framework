<?php
/**
 * The template for Header.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_search()) { ?>
<meta name="robots" content="noindex, nofollow" />
<?php } ?>
<title>
<?php bloginfo('name'); ?>
<?php wp_title('|'); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/normalize.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/mediaqueries.css" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<script src="<?php bloginfo('template_url'); ?>/menu.js"></script>
<script type="text/javascript">var templateDir = "<?php bloginfo('template_directory') ?>";</script>
<script src="<?php bloginfo('template_url'); ?>/to-top-jquery/to-top-jquery.js"></script>
</head>
<body <?php body_class(); ?>>
<div class="outer_wrap">
  <div class="inner_wrap">
    <div id="header" class="flex_100">
      <div class="flex_66">
        <h1><a href="<?php echo home_url(); ?>/">
          <?php bloginfo('name'); ?>
          </a></h1>
        <div class="description">
          <?php bloginfo('description'); ?>
        </div>
      </div>
      <div class="flex_33">
        <div id="search">
          <?php get_search_form(); ?>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <nav>
      <div id="navigation" class="flex_100">
        <?php wp_nav_menu(); ?>
        <div class="clear"></div>
        <a href="#" id="pull"><img src="<?php bloginfo('template_directory') ?>/images/nav-icon.png"></a></div>
    </nav>
    <div class="clear"></div>
  </div>
</div>
