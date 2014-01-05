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
 */

get_header(); ?>

		<!-- Begin page.php 
		============================================ -->
		
		<!-- #main-container container -->
		<div data-role="content" class="main-container container page-video">
		
			<?php get_sidebar(); ?>
			
			<!-- #primary .site-content -->
			<div class="primary site-content ten columns">
				
				<div role="main" class="content">

					<div class="videomenu">

					<!-- <div class="html5gallery" data-width="" data-height="" style="display:none;" data-thumbwidth="75" data-thumbheight="75"> -->

						<?php 
		                    global $more; $more = 0;
		                    query_posts(array( 
		                        'post_type' => 'videos',
		                        'showposts' => 100,
		                        'orderby' => 'menu_order',
		                        'order' => 'ASC'
		                    ) );  
		                ?>
		                <?php while (have_posts()) : the_post(); ?>

		                    <a href="<?php the_permalink(); ?>">
		                    	<?php the_post_thumbnail('large'); ?>
	                    	</a>

		                    <!-- this would have to be integrated into the js
		                    	<div class="credits"><?php the_content(); ?></div> 
		                	-->
		                
		                <?php
		                	endwhile; // end of the loop.
		                	wp_reset_query();
		                ?>
		            </div>

					<!--</div>

					<script>
						$(document).ready(function() {
							$('img.html5gallery-tn-image-0').delay(2000).removeAttr('style');
						});
					</script>-->


					<?php get_template_part( 'content', 'page' ); ?>
					

				</div>
				<!-- end #content -->
			</div>
			<!-- end #primary .site-content -->
		
		</div>
		<!-- end #main-container .container -->

		<!-- end page.php -->
		
<?php get_footer(); ?>