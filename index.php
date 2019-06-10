<?php
/**
* Plugin Name: Divi Archive Grid Layout
* Plugin URI: https://divi.tech/
* Description: A plugin which creates a grid layout for Archive pages
* Version: 1.0
* Author: Ungureanu Eduard
* Author URI: https://divi.tech/
**/



function enqueue_dt_archive_grid_layout_styles(){
	if (is_archive() || is_search()) {
		wp_enqueue_style('dt-archive-grid-layout', plugin_dir_url( __FILE__ ) . 'css/dt-archive.css' );
	}
}

add_action('get_footer','enqueue_dt_archive_grid_layout_styles', 9999);