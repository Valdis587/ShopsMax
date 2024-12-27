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
<section class="hit caruselhome shop sidebar container">
    <div class="title-home-wrapper">
    <?php if($shopsmax['hit-title-home']) {  ?>
        <h3 class="title-home"><span><?php echo $shopsmax['hit-title-home']; ?><small class="arow-after"></small></span><strong class="title-line"></strong></h3>
        <?php }  ?>
        <?php if($shopsmax['hit-desc-home']) {  ?>
        <p class="desc-home"><?php echo $shopsmax['hit-desc-home']; ?></p>
        <?php }  ?>
    </div>
        <?php 
          $query_args = array(
            'posts_per_page' => 400,
            'no_found_rows'  => 1,
            'post_status'    => 'publish',
            'post_type'      => 'product',
            'orderby'  => 'post__in',
        );
        $r = new WP_Query( $query_args  );
        if ( $r->have_posts() ) {
    do_action( 'start_wrapper_home_carousel' );
                 while ( $r->have_posts() ) {
                       global $product;
                       $r->the_post();
                       if($shopsmax['badgik-hit']) {
                       wc_get_template_part( 'content', 'product' );
                       } }
        do_action( 'end_wrapper_home_carousel' );
           ?>
        <?php }  wp_reset_postdata();
        ?> 
</section>