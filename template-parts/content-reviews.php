<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopsMax
 */
	global $shopsmax; 
    $value = redux_post_meta( 'shopsmax', 'otzyvy' );
?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__reviews cart__shadow">
    <div class="cart__reviews-content">
        <div class="cart__reviews-img">
        <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
                       <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
        </div>
    <div class="cart__reviews-text">
        <p class="cart__reviews-name"><?php the_title(''); ?></p>
        <p class="cart__reviews-job"><?php echo $value['otzyvy-job']; ?></p>
        <p class="cart__reviews-date"><?php the_date( 'Y-m-d'); ?></p>
        <p class="cart__reviews-reviews"><?php do_excerpt(get_the_excerpt(), 30); ?></p>
    </div>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->