<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopsMax
 */
global $shopsmax;
if ( class_exists( 'WooCommerce' ) ) { ?>
    <ul class="header__cart-list">
        <li class="header__cart-list-item header__search"><a href="javascript:void(0);"><i class="icon-search"></i></a></li>
        <li class="header__cart-list-item"><a title="Мой аккаунт" href="<?php echo home_url();?>/my-account"><i class="icon-user-alt"></i></a></li>
        <?php if( class_exists( 'YITH_WCWL' ) ) { ?>
        <li class="header__cart-list-item"><a title="Список желаний" href="<?php echo home_url();?>/wishlist"><i class="icon-heart"></i></a></li>
        <?php } ?>
        <li class="header__cart-list-item header__mini-cart"><a title="Корзина" href="javascript:void(0);"><i class="icon-shopping-cart"></i></a><?php woocommerce_mini_cart(); ?></li>
    </ul>
    <?php if( class_exists( 'YITH_WCWL' ) ) { ?>
    <span class="header__bagick-wishlist"><?php echo YITH_WCWL()->count_products(); ?></span>
    <?php } ?>
   <span class="header__bagick-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    <?php } ?>