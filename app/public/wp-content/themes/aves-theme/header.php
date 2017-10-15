<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

      <header class="header">

        <div class="header__top">
          <div class="header__left">
            <a class="search" href="/shop"><span class="icon--circle mdi mdi-magnify"></span></a>

            <?php echo do_shortcode('[woocommerce_product_search]'); ?>

          </div>
          <a class="brand" href="<?= esc_url(home_url('/')); ?>">
            <img class="logo" src="<?= get_template_directory_uri(); ?>/assets/img/header/logo.png">
          </a>
          <div class="header__right">
            <div class="header__account">
              <a href="/my-account"><span class="icon--circle mdi mdi-account"></span></a>
            </div>
            <div class="header__basket">
              <a href="/basket"><span class="icon--circle mdi mdi-basket"></span> Basket – <?php echo WC()->cart->get_cart_total(); ?></a>
            </div>
          </div>
        </div>

        <nav class="nav-primary">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
        </nav>

      </header>