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
<section class="preim container">
    <div class="title-home-wrapper">
    <?php if($shopsmax['preim-title-home']) {  ?>
        <h3 class="title-home"><span><?php echo $shopsmax['preim-title-home']; ?><small class="arow-after"></small></span><strong class="title-line"></strong></h3>
        <?php }  ?>
        <?php if($shopsmax['preim-desc-home']) {  ?>
        <p class="desc-home"><?php echo $shopsmax['preim-desc-home']; ?></p>
        <?php }  ?>
    </div>
    <div class="preim__content">
    <?php
        foreach ($shopsmax['preim-back'] as $tab => $key) { $i++; ?>
        <div class="preim__item">
            <div class="preim__img">
            <img src="<?php echo $key['url']; ?>" alt="<?php echo $shopsmax['preim-title'][$i-1]; ?>">
            </div>
            <div class="preim__info">
                <h4 class="preim__title"><?php echo $shopsmax['preim-title'][$i-1]; ?></h4>
                <p class="preim__desc"><?php echo $shopsmax['preim-desc'][$i-1]; ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</section>