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
<section class="homereviews caruselhome container ">
<div class="title-home-wrapper">
    <?php if($shopsmax['reviews-title-home']) {  ?>
        <h3 class="title-home"><span><?php echo $shopsmax['reviews-title-home']; ?><small class="arow-after"></small></span><strong class="title-line"></strong></h3>
        <?php }  ?>
        <?php if($shopsmax['reviews-desc-home']) {  ?>
        <p class="desc-home"><?php echo $shopsmax['reviews-desc-home']; ?></p>
        <?php }  ?>
    </div>
    <?php 
     $query_args = array(
      'post_type' => 'otzyvy',
  );
  $r = new WP_Query( $query_args  );
  if ( $r->have_posts() ) {
    ?>
    <div class="swiper homereviews__home">
        <div class="swiper-wrapper homereviews__wrapper cart">
            <?php
                      while ( $r->have_posts() ) {
                        $r->the_post();
                        get_template_part( 'template-parts/content', 'reviews');
                        }
            }  wp_reset_postdata();
            ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>