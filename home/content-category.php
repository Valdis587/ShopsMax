<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopsMax
 * 
 */
global $shopsmax;
?>
<section class="category caruselhome shop sidebar container">
    <div class="title-home-wrapper">
    <?php if($shopsmax['category-title-home']) {  ?>
        <h3 class="title-home"><span><?php echo $shopsmax['category-title-home']; ?><small class="arow-after"></small></span><strong class="title-line"></strong></h3>
        <?php }  ?>
       
        <?php if($shopsmax['category-desc-home']) {  ?>
        <p class="desc-home"><?php echo $shopsmax['category-desc-home']; ?></p>
        <?php }  ?>
    </div>
 <?php get_template_part( 'template-parts/category', 'carousel' ); ?>
</section>