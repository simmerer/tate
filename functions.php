<?php

/* Place your custom functions here */

function tate_widgets_init() {

    register_sidebar( array(
		'name' => __( 'Small Device Superheader', 'agility' ),
		'id' => 'superheader',
		'before_widget' => '<aside id="superheader" class="widget %2$s cf">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'agility' => array(
			'bricks'		=>	false,
			'custom_side'	=>	false,
			'wrap_cols'		=> 	true,
		)
	) );

}
add_action( 'widgets_init', 'tate_widgets_init' );



function gallery_images($size = thumbnail) {

	if($images = get_posts(array(
		'post_parent'    => get_the_ID(),
		'post_type'      => 'attachment',
		'numberposts'    => -1, // show all
		'post_status'    => null,
		'post_mime_type' => 'image',
                'orderby'        => 'menu_order',
                'order'           => 'ASC',
	))) {
		echo '<ul id="gallery_images">';
		foreach($images as $image) {
			$img_thumb   = wp_get_attachment_image($image->ID,$size);
			$img_full 	 = wp_get_attachment_image_src($image->ID,"full");

			echo '<li><a href="'.$img_full[0].'">'.$img_thumb.'</a></li>';

		}
		echo '</ul>';
	}
}