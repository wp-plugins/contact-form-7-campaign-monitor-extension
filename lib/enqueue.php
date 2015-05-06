<?php


function wpcf7_cme_admin_enqueue_scripts() {

	global $plugin_page;

	if ( ! isset( $plugin_page ) || 'wpcf7' != $plugin_page )
		return;

	wp_enqueue_style( 'wpcf7-spartan-admin', SPARTAN_CME_PLUGIN_URL . '/assets/css/style-spartan.css', array(), SPARTAN_CME_VERSION, 'all' );

	wp_enqueue_script( 'wpcf7-spartan-admin', SPARTAN_CME_PLUGIN_URL . '/assets/js/scripts-spartan.js', array( 'jquery', 'wpcf7-admin' ), SPARTAN_CME_VERSION, true );


}
add_action( 'admin_print_scripts', 'wpcf7_cme_admin_enqueue_scripts' );


/* Custom ajax loader */
function wpcf7_cme_ajax_loader() {

	return  SPARTAN_CME_PLUGIN_URL . '/assets/images/fading-squares.gif';

}
add_filter('wpcf7_ajax_loader', 'wpcf7_cme_ajax_loader');