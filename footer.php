<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShopsMax
 */

 global $shopsmax;
 ?>
 </div>
	 <footer class="footer">
		<div class="footer__top container">
			<div class="footer__top-left">
				<?php if($shopsmax['footer-text']) { echo $shopsmax['footer-text']; } ?>
			</div>
			<div class="footer__top-right">
			<a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $shopsmax['phone']) ?>"><i class="icon-phone-alt"></i><?php echo $shopsmax['phone'] ?></a>
			</div>
		</div>
		 <div class="footer__content container">
			 <div class="footer__contact">
				 <h5 class="footer__title"><?php echo $shopsmax['footer-title1'] ?></h5>
				 <ul class="footer__contact-list">
			 <?php if($shopsmax['adres']) { ?>
				 <li><i class="icon-map-marker-alt"></i><?php echo $shopsmax['adres'] ?></li>
				 <?php } ?>
				 <?php if($shopsmax['phone']) { ?>
					 <li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $shopsmax['phone']) ?>"><?php echo $shopsmax['phone'] ?></a></li>
				 <?php } ?>
				 <?php if($shopsmax['email']) { ?>
					 <li><i class="icon-envelope"></i><a href="mailto:<?php echo $shopsmax['email'] ?>"><?php echo $shopsmax['email'] ?></a></li>
					 <?php } ?>
					 <?php if($shopsmax['time-york']) { ?>
					 <li><i class="icon-clock"></i><?php echo $shopsmax['time-york'] ?></li>
					 <?php } ?>
			 </ul> 
			 </div>
			 <div class="footer__menu">
			 <?php if( has_nav_menu('menu-page') ) { ?>
				 <h5 class="footer__title"><?php echo $shopsmax['footer-title2'] ?></h5>
				 <?php Theme_menu_page(); } ?>
			 </div>
			 <div class="footer__menu">
			 <?php if( has_nav_menu('menu-category-footer') ) { ?>
				 <h5 class="footer__title"><?php echo $shopsmax['footer-title3'] ?></h5>
				 <?php Theme_menu_cat_footer(); } ?>
			 </div>
			 <div class="footer__menu">
			 <?php if( has_nav_menu('menu-service') ) { ?>
				 <h5 class="footer__title"><?php echo $shopsmax['footer-title4'] ?></h5>
				 <?php Theme_menu_service(); } ?>
			 </div>
		 </div>
		 <div class="footer__bottom container">
			 <div class="footer__bottom-left">
			 <?php get_template_part( 'template-parts/content', 'social' ); ?>
			 </div>
			 <div class="footer__bottom-right">
			 <?php get_template_part( 'template-parts/content', 'pay' ); ?>
			 </div>
		 </div>
		 <div class="footer__copy">
		 <p><?php echo $shopsmax['copy']; ?></p>
		 </div>
	 </footer><!-- #colophon -->
 </div><!-- #page -->
 <?php 
  if($shopsmax['yandex']) {
	  echo $shopsmax['yandex'];
   }
   if($shopsmax['google']) {
	  echo $shopsmax['google'];
   }
  ?>
 <?php wp_footer(); ?>
 </body>
 </html>
