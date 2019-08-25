<?php get_header(); ?>
<div id="oloContainer">
	<div id="oloContent">
		<div class="oloPosts">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<h2><?php the_title(); ?></h2>
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
						<span class="author">
							<?php _e('Posted by', 'olo'); ?> <?php the_author_posts_link(); ?>
						</span> - 
						<span class="last-updated">
							<?php if ((get_the_modified_time('Y')*365+get_the_modified_time('z')) > (get_the_time('Y')*365+get_the_time('z'))) : ?><?php _e('Last Updated', 'olo'); ?>: <?php the_modified_time('Y-m-j h:s'); ?><?php else : ?><?php echo null; ?><?php endif; ?>
						</span>

						<?php edit_post_link( __( 'Edit', 'olo' ), '<span class="edit-link">', '</span>' ); ?>
					</footer>
				</article><!-- #post-<?php the_ID(); ?> -->
				
				<?php comments_template( '', true ); ?>
				<?php endwhile; ?>

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