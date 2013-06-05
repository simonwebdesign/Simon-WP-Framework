<?php
/**
 * The template for Comments.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */

 if ( post_password_required() ) : ?>
<p>
  This post is password protected. Enter the password to view any comments.
</p>
<?php
	return;
	endif;
?>
<?php ?>
<?php if ( have_comments() ) : ?>
<h3 id="comments-title">
  <?php
			printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'simonwpframework' ),
			number_format_i18n( get_comments_number() ), '' . get_the_title() . '' );
			?>
</h3>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<?php previous_comments_link( __( '&larr; Older Comments', 'simonwpframework' ) ); ?>
<?php next_comments_link( __( 'Newer Comments &rarr;', 'simonwpframework' ) ); ?>
<?php endif; ?>
<ol>
  <?php  wp_list_comments( array( 'callback' => 'simonwpframework_comment' ) ); ?>
</ol>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<?php previous_comments_link( __( '&larr; Older Comments', 'simonwpframework' ) ); ?>
<?php next_comments_link( __( 'Newer Comments &rarr;', 'simonwpframework' ) ); ?>
<?php endif; ?>
<?php else : if ( ! comments_open() ) : ?>
<p>
</p>
<?php endif; ?>
<?php endif; ?>
<?php comment_form(); ?>
