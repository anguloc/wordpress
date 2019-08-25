<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ArticlePress
 */

get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="blog-section">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! 404 That page can&rsquo;t be found.', 'articlepress' ); ?></h1>
							</header><!-- .page-header -->
						</div>
						<div class="col-md-4">
							<!-- Sidebar Register -->
							<?php get_sidebar(); ?>
							
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
