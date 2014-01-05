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

    		<?php
    			global $post;
				$current_slug = get_post( $post )->post_name;
			?>
			
			<!-- #primary .site-content -->
			<div class="primary site-content ten columns">
				
				<div role="main" class="content">

					<div class="videothumbs">
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

		                	<?php
		                		$linkclass = $post->post_name == $current_slug ? 'active' : '';
		                	?>

		                    <a href="<?php the_permalink(); ?>#play" class="<?php echo $linkclass; ?>">
		                    	<?php the_post_thumbnail(); ?>
		                	</a>
		                
		                <?php
		                	endwhile; // end of the loop.
		                	wp_reset_query();
		                ?>
		            </div><!-- .videothumbs -->

				
					<?php while ( have_posts() ) : the_post(); ?>

	                	<iframe id="play" src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="100%" height="500" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		
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
