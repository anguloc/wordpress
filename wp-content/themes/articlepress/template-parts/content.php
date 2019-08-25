<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ArticlePress
 */

?>


<div id="post-<?php the_ID(); ?>" class="blog">
	<div class="blog-img">
		<?php articlepress_post_thumbnail(); ?>
	</div>
	<div class="blog-content">
		<h4 class="blog-info">
			<i class="fas fa-user"></i> <?php articlepress_posted_by(); ?>  <i class="far fa-calendar-alt"></i> 
			<?php esc_html_e( 'Updated', 'articlepress' ); ?> : <?php the_time( 'M d, Y' ); ?> <?php esc_html_e( 'in', 'articlepress' ) ?>  <i class="far fa-list-alt"></i>
		<?php 
			// Show the First Category Name Only
			$categories = get_the_category();
 
			if ( ! empty( $categories ) ) {
			    echo esc_html( $categories[0]->name );   
			}
		?>
		</h4>

		<!-- Blog Title -->
		<?php 
			if ( is_singular() ) :
				the_title( '<h3 class="blog-title">', '</h4>' );
			else :
				the_title( '<h3 class="blog-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif;
		?>

		<!-- Blog Content -->
		<p class="blog-text">
			<?php 
				echo wp_trim_words( get_the_content(), 25, NULL );
			?>
		</p>
		<div class="blog-btn">
			<a href="<?php esc_url( the_permalink() ); ?>" class="btn btn-blog"> <?php esc_html_e( 'Continue reading', 'articlepress' ) ?> <i class="fas fa-arrow-right"></i></a>
		</div>
	</div>
</div>