<?php
/**
 * The template for Footer.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
?>
<div style="clear: both"></div>

</div>
<div style="clear: both"></div>
<div id="footer">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer1") ) : ?>
  <?php endif; ?>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer2") ) : ?>
  <?php endif; ?>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer3") ) : ?>
  <?php endif; ?>
  <div style="clear: both"></div>
  &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> | Powered By <a href="http://simonwebdesign.com/simon-wp-framework/" target="_new">Simon WP Framework</a> &amp; WordPress</div>
</div>
</div>
<?php wp_footer(); ?>
</body></html>