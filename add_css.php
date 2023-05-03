<?php 
//include css und js
function diviupsellremover_scripts() {
    wp_enqueue_style( 'diviupsellremover', plugin_dir_url( __FILE__ ) . 'style.css' );
}
add_action( 'admin_enqueue_scripts', 'diviupsellremover_scripts' );
?>
