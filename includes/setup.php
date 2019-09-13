<?php

// THEME SUPPORT

function rp6_setup() {

  add_theme_support('post-thumbnails');

}

// WOOCOMMERCE SUPPORT

function woocommerce_support(){
    add_theme_support( 'woocommerce' );
}

// BLOG TEXT EXCERPT LENGHT

function set_excerpt_length(){

  return 35;

}

// MENU

function add_menus(){

  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');

}

// LEFT SIDEBAR

function rp6_side_widget() {

  register_sidebar(
                    array(
                'name' => 'Left Sidebar',
                'id' => 'rp6-left-sidebar',
                'description' => 'Left Sidebar for rp6',
                'before_widget' => '<div class="rp6-left-sidebar">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
                  ));

}

// TOP SIDEBAR

function rp6_top_widget() {

  register_sidebar(
                    array(
                'name' => 'Top Sidebar',
                'id' => 'rp6-top-sidebar',
                'description' => 'Top Sidebar for rp6',
                'before_widget' => '<div class="rp6-top-sidebar">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
                  ));

}

// CART COUNTER

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

    ?>
        <span class="header-box-4-1-2-p2-span-1" href="" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
  	<?php

	$fragments['span.header-box-4-1-2-p2-span-1'] = ob_get_clean();
	return $fragments;
}
