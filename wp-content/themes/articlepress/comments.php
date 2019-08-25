<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ArticlePress
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-count">
			<?php
			$articlepress_comment_count = get_comments_number();
			if ( '1' === $articlepress_comment_count ) {
				esc_html_e( '1 Comment', 'articlepress' );
			} else {
				/* translators: 2: title. */
				echo $articlepress_comment_count.esc_html__( ' Comments', 'articlepress' );
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>


		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ul><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'articlepress' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().


	comment_form();

	// Post Navigation
	the_post_navigation( array(
		'prev_text'          => '<i class="fas fa-chevron-left"></i>',
		'next_text'          => '<i class="fas fa-chevron-right"></i>',
	) );
	
	?>

</div><!-- #comments -->
