<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopsMax
 * 
 */
global $shopsmax; ?>
<section class="banners">
    <div class="banners__content container">
        <div class="banners__item">
            <img src="<?php echo $shopsmax['banner1']['url'] ?>" alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="banners__item">
        <img src="<?php echo $shopsmax['banner2']['url'] ?>" alt="<?php bloginfo('name'); ?>">
        </div>
    </div>
</section>