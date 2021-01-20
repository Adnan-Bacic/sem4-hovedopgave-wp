<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'yoga-style' for the Yoga theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

/**
 * Add a title tag to the logo
 */
function my_custom_logo() {
	
	// The logo
    $custom_logo_id = get_theme_mod( 'custom_logo' );

    // If has logo
    if ( $custom_logo_id ) {

    	// Attr
	    $custom_logo_attr = array(
			'class'    => 'custom-logo',
			'itemprop' => 'logo',
		);

		// Image alt
		$image_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );
		if ( empty( $image_alt ) ) {
			$custom_logo_attr['alt'] = get_bloginfo( 'name', 'display' );
		}

	    // Get the image
	    $html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url" title="%2$s">%3$s</a>',
			esc_url( home_url( '/' ) ),
			esc_html( get_bloginfo( 'name' ) ),
			wp_get_attachment_image( $custom_logo_id, 'full', false, $custom_logo_attr )
		);

	}

	// If no logo is set but we're in the Customizer, leave a placeholder (needed for the live preview).
	elseif ( is_customize_preview() ) {
		$html = sprintf( '<a href="%1$s" class="custom-logo-link" style="display:none;"><img class="custom-logo"/></a>',
			esc_url( home_url( '/' ) )
		);
	}

	// Return
    return $html; 
	
}
add_filter( 'get_custom_logo', 'my_custom_logo' );
