<!DOCTYPE html>
<html lang="en" dir="ltr">


  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>


  <body <?php body_class("woocommerce"); ?>>

    <div class="wrapper clearfix">


      <div class="topbar">
        <div class="topbar-box-1">
          <span>Ügyfélszolgálat: +36-60-646-6886 | info@lumina.hu</span>
        </div>
        <div class="topbar-box-2">
          <div class="topbar-box-2-1">
            <img src="http://localhost/ref_project_6/wp-content/uploads/2019/09/truck1.png" alt="" class="topbar-box-2-img">
            <span>INGYENES KISZÁLLÍTÁS 20.000 Ft felett!  Részletek</span>
          </div>
        </div>
        <div class="topbar-box-3">
          <div class="topbar-box-3-container">
            <div class="topbar-box-3-1">
              <img src="http://localhost/ref_project_6/wp-content/uploads/2019/09/lock.png" alt="" class="topbar-box-3-img">
              <span><strong><a href="http://localhost/ref_project_6/belepes/">BELÉPÉS</a></strong></span>
            </div>
            <div class="topbar-box-3-2">
              <img src="http://localhost/ref_project_6/wp-content/uploads/2019/09/login.png" alt="" class="topbar-box-3-img">
              <span><strong><a href="http://localhost/ref_project_6/regisztracio/">REGISZTRÁCIÓ</a></strong></span>
            </div>
          </div>
        </div>
      </div>

      <div class="header">
        <div class="header-box-1">
          <a href="http://localhost/ref_project_6/"><img src="http://localhost/ref_project_6/wp-content/uploads/2019/09/logo.png" alt="" class="logo"></a>
        </div>
        <div class="header-box-2">
          <span>Lámpabolt és <br> lámpa webáruház</span>
        </div>
        <div class="header-box-3">
          <?php
           dynamic_sidebar('rp6-top-sidebar');
           ?>
        </div>
        <div class="header-box-4">

          <div class="header-box-4-1">
            <div class="header-box-4-1-1">
              <a href="http://localhost/ref_project_6/kosar/"><img src="http://localhost/ref_project_6/wp-content/uploads/2019/09/shopping-bag2.png" alt="" class="bag-icon"></a>
            </div>
            <div class="header-box-4-1-2">
              <p class="header-box-4-1-2-p-1">Kosár tartalma</p>
              <p class="header-box-4-1-2-p-2">
                <span class="header-box-4-1-2-p2-span-1" href="" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                <span class="header-box-4-1-2-p2-span-2">termék a kosárban <a href="http://localhost/ref_project_6/kosar/">>></a> </span>
              </p>
            </div>
              <div class="header-box-4-1-3">
                <div class="widget_shopping_cart_content">
                  <?php
                  woocommerce_mini_cart();
                  ?>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="main-navigation">

        <?php
        wp_nav_menu(array('theme_location' => 'primary'));
        ?>

      </div>
