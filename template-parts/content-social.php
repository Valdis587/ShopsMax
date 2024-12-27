<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopsMax
 */
	global $shopsmax;
    ?>
     <ul class="social-list">
<?php if($shopsmax['tg']) { ?>
                    <li><a aria-label="telegram" href="<?php echo $shopsmax['tg']; ?>"><i class="icon-telegram-plane"></i></a></li>
                    <?php } ?>
                    <?php if($shopsmax['sk']) { ?>
                    <li><a aria-label="skype"  href="<?php echo $shopsmax['sk']; ?>"><i class="icon-skype"></i></a></li>
                    <?php } ?>
                    <?php if($shopsmax['vb']) { ?>
                    <li><a aria-label="viber"  href="<?php echo $shopsmax['vb']; ?>"><i class="icon-viber"></i></a></li>
                    <?php } ?>
                    <?php if($shopsmax['vk']) { ?>
                    <li><a aria-label="vk"  href="<?php echo $shopsmax['vk']; ?>"><i class="icon-vk"></i></a></li>
                    <?php } ?>
                    <?php if($shopsmax['wh']) { ?>
                    <li><a aria-label="whatsapp" href="<?php echo $shopsmax['wh']; ?>"><i class="icon-whatsapp"></i></a></li>
                    <?php } ?>
                    </ul>