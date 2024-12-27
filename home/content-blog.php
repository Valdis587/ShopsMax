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
<section class="blog caruselhome cart sidebar container">
    <div class="title-home-wrapper">
    <?php if($shopsmax['blog-title-home']) {  ?>
        <h3 class="title-home"><span><?php echo $shopsmax['blog-title-home']; ?><small class="arow-after"></small></span><strong class="title-line"></strong></h3>
        <?php }  ?>
        <?php if($shopsmax['blog-desc-home']) {  ?>
        <p class="desc-home"><?php echo $shopsmax['blog-desc-home']; ?></p>
        <?php }  ?>
    </div>
    <?php 
           $query_args = array(
            'post_type' => 'post',
        );
        $r = new WP_Query( $query_args  );
        if ( $r->have_posts() ) {
    do_action( 'start_wrapper_home_carousel' );
                 while ( $r->have_posts() ) {
                       $r->the_post();
                       get_template_part( 'template-parts/content', get_post_type() );
                       } 
                do_action( 'end_wrapper_home_carousel' );
           ?>
        <?php }  wp_reset_postdata();
        ?>       
</section>

