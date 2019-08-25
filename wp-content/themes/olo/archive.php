<?php get_header(); ?>
<div id="oloContainer">
	<div id="oloContent">
		<div class="oloPosts">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<?php if ( is_sticky() ) : ?>
								<h2>[<?php printf(__('Featured', 'olo')) ; ?>]<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => '', 'after' => '' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							
						<?php else : ?>
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => '', 'after' => '' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<?php endif; ?>
						<div class="date">
							<span class="binds"></span>
							<span class="month"><?php the_time('Y/m'); ?></span>
							<span class="day"><?php the_time( 'd' ); ?></span>
							<span class="hour"><?php the_time( 'H:m' ); ?></span>
						</div>
						
					</header>
					
					<section class="oloEntry">
						<?php the_excerpt(); ?>
					</section>
					
					<footer>
						<span class="author">
							<?php _e('Posted by', 'olo'); ?> <?php the_author_posts_link(); ?>
						</span> - 
						<span class="cat-links">
							<?php _e('Posted in', 'olo'); ?> <?php the_category(', '); ?>
						</span> - 
						<span class="comments-views">
						<?php comments_popup_link( __( 'Leave a reply', 'olo' ), __( '<b>1</b> Reply', 'olo' ), __( '<b>%</b> Replies', 'olo' ) ); ?>
						</span>

						<?php edit_post_link( __( 'Edit', 'olo' ), '<span class="edit-link">', '</span>' ); ?>
					</footer>
				</article><!-- #post-<?php the_ID(); ?> -->
				
				<?php endwhile; ?>
					
					<nav class="oloNav">
						<?php
							if(function_exists('wp_page_numbers')) {
								wp_page_numbers();
							}
							elseif(function_exists('wp_pagenavi')) {
								wp_pagenavi();
							} else {
								global $wp_query;
								$total_pages = $wp_query->max_num_pages;
								if ( $total_pages > 1 ) {
										posts_nav_link(' | ', __('&laquo; Previous page','olo'), __('Next page &raquo;','olo'));
								}
							}
						?>
					</nav>

			<?php else : ?>

				<article id="post-404" class="post no-results not-found">
					<header>
						<h1><?php _e( 'Nothing Found', 'olo' ); ?></h1>
					</header><!-- .entry-header -->

					<section>
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'olo' ); ?></p>
					</section><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
		</div><!--#oloPosts-->
<?php if(!IsMobile) get_sidebar(); ?>		
	</div><!-- #oloContent-->
</div><!-- #oloContainer-->
<?php get_footer(); ?>