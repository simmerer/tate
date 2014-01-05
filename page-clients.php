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
		<div data-role="content" class="main-container container">
		
			<?php get_sidebar(); ?>
			
			<!-- #primary .site-content -->
			<div class="primary site-content ten columns">
				
				<div role="main" class="content">

					<ul class="clientlist">

						<?php 
		                    global $more; $more = 0;
		                    query_posts(array( 
		                        'post_type' => 'clientele',
		                        'showposts' => 200,
		                        'orderby' => 'title',
		                        'order' => 'ASC'
		                    ) );  
		                ?>
		                <?php while (have_posts()) : the_post(); ?>
			                <li class="<?php echo $post->post_name; ?>">
			                	<img class="initial" src="<?php the_field('greyscale_logo'); ?>" alt="<?php the_title(); ?>" />
			                	<img class="reveal" src="<?php the_field('color_logo'); ?>" alt="<?php the_title(); ?>" />
		                	</li>
		                <?php
		                	endwhile; // end of the loop.
		                	wp_reset_query();
		                 ?>

                       
						

					</ul>

					<script>
						$(document).ready(function() {		
							$("img.reveal").css("opacity",0).fadeTo(500, 0);
							$("img.reveal").mouseover(function () {
						    	$(this).fadeTo(300, 1);
						    });
							$("img.reveal").mouseout(function () {
						    	$(this).fadeTo(300, 0);
						    });
						});
					</script>

					<?php get_template_part( 'content', 'page' ); ?>

				</div>
				<!-- end #content -->
			</div>
			<!-- end #primary .site-content -->
		
		</div>
		<!-- end #main-container .container -->

		<!-- end page.php -->
		
<?php get_footer(); ?>