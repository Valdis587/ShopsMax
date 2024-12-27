<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopsMax
 */

 global $shopsmax; ?>
 <ul class="footer__pay-list">
 <?php if($shopsmax['pay1']) { ?>
                 <li><img src="<?php echo $shopsmax['pay1']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                 <?php } ?>
                 <?php if($shopsmax['pay2']) { ?>
                 <li><img src="<?php echo $shopsmax['pay2']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                 <?php } ?>
                 <?php if($shopsmax['pay3']) { ?>
                 <li><img src="<?php echo $shopsmax['pay3']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                 <?php } ?>
                 <?php if($shopsmax['pay4']) { ?>
                 <li><img src="<?php echo $shopsmax['pay4']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                 <?php } ?>
                 <?php if($shopsmax['pay5']) { ?>
                 <li><img src="<?php echo $shopsmax['pay5']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                 <?php } ?>
 </ul>