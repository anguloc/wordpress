<?php get_header(); ?>
<div id="oloContainer">
	<div id="oloContent">
		<div class="oloPosts">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<?php if ( is_sticky() ) : ?>
								<h2><i class="fa fa-thumb-tack" aria-hidden="true" title="<?php printf(__('Featured', 'olo')) ; ?>"></i> <?php the_title(); ?></h2>
							
						<?php else : ?>
						<h2><?php the_title(); ?></h2>
						<?php endif; ?>
						<div class="date">
							<span class="binds"></span>
							<span class="month"><?php the_time('Y/m'); ?></span>
							<span class="day"><?php the_time( 'd' ); ?></span>
							<span class="hour"><?php the_time( 'H:m' ); ?></span>
						</div>
						
					</header>
					
					<section class="oloEntry">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<nav class="page-link"><span>' . __( 'Pages:', 'olo' ) . '</span>', 'after' => '</nav>' ) ); ?>
					</section>
					
					<footer>
						<?php the_tags('<p class="tags"><i class="fa fa-tags"></i> ',', ','</p>'); ?>
						<span class="author">
							<?php _e('Posted by', 'olo'); ?> <?php the_author_posts_link(); ?>
						</span> - 
						<span class="cat-links">
							<?php _e('Posted in', 'olo'); ?> <?php the_category(', '); ?>
						</span>

						<?php edit_post_link( __( 'Edit', 'olo' ), '<span class="edit-link">', '</span>' ); ?>
					</footer>
				</article><!-- #post-<?php the_ID(); ?> -->
				
				<?php comments_template( '', true ); ?>
				<?php endwhile; ?>
				<div class="clear"></div>
					<nav id="nav-single">
						<p class="nav-previous"><?php previous_post_link( '%link', __( 'Previous: %title', 'olo' ) ); ?></p>
						<p class="nav-next"><?php next_post_link( '%link', __( 'Next: %title', 'olo' ) ); ?></p>
					</nav><!-- #nav-single -->

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