<?php
/**
 * Your code here.
 *
 */

/* Use Paste As Text by default in the editor
----------------------------------------------------------------------------------------*/
add_filter('tiny_mce_before_init', 'ag_tinymce_paste_as_text');
function ag_tinymce_paste_as_text( $init ) {
	$init['paste_as_text'] = true;
	return $init;
}

// remove the Yoast SEO columns from the all posts page, because it's cluttered otherwise
function rkv_remove_columns( $columns ) {
	unset( $columns['wpseo-score'] );
	unset( $columns['wpseo-title'] );
	unset( $columns['wpseo-metadesc'] );
	unset( $columns['wpseo-focuskw'] );
	return $columns;
}
add_filter ( 'manage_edit-post_columns', 'rkv_remove_columns' );


// To enable automatic updates even if a VCS folder (.git, .hg, .svn etc) was found in the WordPress directory or any of its parent directories:
add_filter( 'automatic_updates_is_vcs_checkout', '__return_false', 1 );


##################################################################

// enable images in media uploader

##################################################################
function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

##################################################################
