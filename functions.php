<?php
	register_nav_menus(
		array(
			'main' => __( 'Primary Menu', 'Woolff' ),
			'side' => __( 'Side Menu', 'Woolff' ),
			'footer-nav' => __( 'Footer Menu', 'Woolff' ),
		)
	);

	function remove_admin_bar(){ return false; }

	function load_scripts() {
		wp_register_style('styles', get_template_directory_uri() . '/assets/css/styles.css', [], 1, 'all');
		wp_enqueue_style('styles');

		wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', [], 1, true);
		wp_enqueue_script('scripts');
	}

	function nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
      $item_output = str_replace( $args->link_after . '</a>', '<p class="menu-item-description">' . $item->description . '</p>' . $args->link_after . '</a>', $item_output );
    }
 
    return $item_output;
	}
	

	add_filter( 'show_admin_bar' , 'remove_admin_bar');
	add_action('wp_enqueue_scripts','load_scripts');
	add_filter( 'walker_nav_menu_start_el', 'nav_description', 10, 4 );
?>