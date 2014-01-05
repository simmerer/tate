<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Agility
 * @since Agility 1.0
 */

get_header(); ?>

	<!-- Begin 404.php 
		============================================ -->
		
		<!-- #main-container container -->
		<div id="main-container" class="container">

			<?php get_sidebar(); ?>
			
			<!-- #primary .site-content -->
			<div id="primary" class="site-content eleven columns">
				
				<div id="content" role="main">

					<article id="post-0" class="post error404 not-found">
						<header class="entry-header">
							<h1 class="page-title"><?php _e( 'Hmm. Nothing to see here.', 'agility' ); ?></h2>
						</header>

						<div class="entry-content">
							<div class="tagline"><?php _e( 'How embarrassing, something got mucked up.', 'agility' ); ?></div>
							
							<p><?php _e( 'Why not try a search?', 'agility' ); ?></p>

							<?php get_search_form(); ?>

						</div><!-- .entry-content -->
					</article><!-- #post-0 -->
				</div>
				<!-- end #content -->
			</div>
			<!-- end #primary .site-content -->
			
			

		</div>
		<!-- end #main-container .container -->

		<!-- end 404.php -->
		
<?php get_footer(); ?>