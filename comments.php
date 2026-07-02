<?php
/**
 * Comments template.
 *
 * @package AP_Luxury
 */
if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2><?php comments_number( esc_html__( 'No comments yet', 'ap-luxury' ), esc_html__( 'One comment', 'ap-luxury' ), esc_html__( '% comments', 'ap-luxury' ) ); ?></h2>
		<ol class="comment-list">
			<?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true ) ); ?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>
	<?php comment_form(); ?>
</section>
