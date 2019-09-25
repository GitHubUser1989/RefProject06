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

// LEFT SIDEBAR HOME PAGE

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

// LEFT SIDEBAR OTHER PAGES PAGE

function rp6_side_widget2() {

  register_sidebar(
                    array(
                'name' => 'Left Sidebar Home',
                'id' => 'rp6-left-sidebar-home',
                'description' => 'Left Sidebar for home page',
                'before_widget' => '<div class="rp6-left-sidebar-home">',
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


// CHANGE NUMBER OF RELATED PRODUCTS

function woo_related_products_limit() {
  global $product;

	$args['posts_per_page'] = 6;
	return $args;
}

  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}

// EXTRA FIELDS FOR REGISTER FORM

function wooc_extra_register_fields() {?>
       <p class="form-row form-row-wide">
       <label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?></label>
       <input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php esc_attr_e( $_POST['billing_phone'] ); ?>" />
       </p>

       <p class="form-row form-row-first">
       <label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><span class="required">*</span></label>
       <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
       </p>

       <p class="form-row form-row-last">
       <label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span></label>
       <input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
       </p>

       <div class="clear"></div>
       <?php
 }
