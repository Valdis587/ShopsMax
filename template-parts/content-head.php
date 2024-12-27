<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopsMax
 */
	global $shopsmax; ?>
	<section class="headpanel container">
    <div class="headpanel__content">
        <div class="headpanel__text">
        <h1 class="headpanel__title"><?php wp_title(''); ?></h1>
        <?php breadcrumbs(); ?> 
        </div>
    </div>
</section><!--end headpanel-->