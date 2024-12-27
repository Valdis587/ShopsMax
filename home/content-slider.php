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
if($shopsmax['item-slider-home']) { $i= 0;
    ?>
    <section class="homeslider container">
        <div class="swiper homeslider__slider">
            <div class="swiper-wrapper homeslider__wrapper">
            <?php
            foreach ($shopsmax['slider-back'] as $tab => $key) { $i++; ?>
            <div class="swiper-slide homeslider__item">
                <div class="homeslider__back-wrapp">
                    <img src="<?php echo $key['url']; ?>" alt="<?php echo $shopsmax['slider-title'][$i-1]; ?>">
                </div>
                <div class="homeslider__content">
                    <div class="homeslider__content-left">
                        <h2 class="homeslider__title"><?php echo $shopsmax['slider-title'][$i-1]; ?></h2>
                        <p class="homeslider__desc"><?php echo $shopsmax['slider-desc'][$i-1]; ?></p>
                        <a class="homeslider__button button" href="<?php echo home_url(); ?>/shop">Начать покупки</a>
                    </div>
                    <div class="homeslider__content-right">
                        <img src="<?php echo $shopsmax['slider-img-right'][$i-1]['url']; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                </div>      
            </div>  
            <?php } ?>
            </div>
            <div class="swiper-pagination homeslider__pagination"></div>
        </div>
    </section>
    <?php } ?>