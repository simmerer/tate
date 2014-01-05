<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Agility
 * @since Agility 1.0
 */

get_header(); ?>

		<!-- Begin single.php 
		============================================ -->
		
		<!-- #main-container container -->
		<div data-role="content" class="main-container container">
		
    		<?php get_sidebar(); ?>
    		
			
			<!-- #primary .site-content -->
			<div class="primary site-content ten columns">
				
				<div role="main" class="content">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php if( $agilitySettings->op( 'blog-display-post-nav-above' ) ): ?>
					<?php agility_content_nav( 'nav-above' ); ?>
					<?php endif; ?>
	
					<?php get_template_part( 'content', 'single' ); ?>
	
					<?php agility_content_nav( 'nav-below' ); ?>

					<!-- Begin After Post sidebar/widget area -->
					<?php dynamic_sidebar( 'after-post' ); ?>
					<!-- end After Post sidebar/widget area -->
	
				<?php endwhile; // end of the loop. ?>

				</div>
				<!-- end #content -->
			</div>
			<!-- end #primary .site-content -->
		
			
		
		</div>
		<!-- end #main-container .container -->

		<!-- end single.php -->
		
<?php get_footer(); ?>
