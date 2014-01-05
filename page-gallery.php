<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Agility
 * @since Agility 1.0
 * Template Name: Tate Gallery
 */

get_header(); ?>

		<!-- Begin page.php 
		============================================ -->
		
		<!-- #main-container container -->
		<div data-role="content" class="main-container container">
		
			<?php get_sidebar(); ?>
			
			<!-- .primary .site-content -->
			<div class="primary site-content ten columns">
				
				<div class="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="gallery-mo">
						<?php echo gallery_images(); ?>
					</div><!-- .gallery-mo -->

					<div class="gallery-def">
						<?php echo do_shortcode('[portfolio_slideshow pagerstyle=thumbs pagerpos=top fluid=true class=pager-left]'); ?>
					</div><!-- .gallery-def -->

					<?php get_template_part( 'content', 'page' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

				</div>
				<!-- end .content -->
			</div>
			<!-- end .primary .site-content -->
		
		</div>
		<!-- end #main-container .container -->

		<!-- end page.php -->
		
<?php get_footer(); ?>