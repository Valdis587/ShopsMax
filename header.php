<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShopsMax
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php global $shopsmax; ?>
<div class="search-head">
	<button class="searchClose"><i class="icon-plus"></i></button>
<?php if ( class_exists( 'WooCommerce' ) ) { get_product_search_form(); }  ?>
</div>
<div class="wrapper">
<header class="header">
		<div class="header__content">
			<div class="header__top">
				<div class="header__top-content container">
				<?php get_template_part( 'template-parts/content', 'social' ); ?>
				<button aria-label="menu" class="header__burger"><i class="icon-bars"></i></button> 
				</div>
			</div>
			<div class="header__container ">
				<div class="header__center container">
					<div class="header__logo">
					<?php get_template_part( 'template-parts/content', 'logo' ); ?>
					</div>
					<ul class="header__contact">
					<?php if($shopsmax['phone']) { ?>
						<li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $shopsmax['phone']); ?>"><?php echo $shopsmax['phone']; ?></a></li>
                <?php } ?>
				<?php if($shopsmax['email']) { ?>
					<li><i class="icon-envelope"></i><a href="mailto:<?php echo $shopsmax['email']; ?>"><?php echo $shopsmax['email']; ?></a></li>
                <?php } ?>
				<?php if($shopsmax['adres']) { ?>
                <li class="header__address"><i class="icon-map-marker-alt"></i><?php echo $shopsmax['adres'] ?></li>
                <?php } ?>
					</ul>
					<a class="button header__popup-form" href="javascript:void(0);">Заказать звонок</a>
				</div>
			
				<div class="header__menu-wrapper">
				<div class="header__menu-content container">
				<div class="header__menu-category">
				<?php if( has_nav_menu('menu-category') ) { ?>
					<div class="header__menu-category-wrapp">
					<a class="header__menu-category-link" href="javascript:void(0);"><i class="icon-bars"></i><span>Категории</span></a>
					<nav class="header__menu-cat">
					<?php Theme_menu_category(); ?>
					</nav>
				</div>
					<?php  } ?>	
				</div>
				<nav class="header__menu-primary">
				<button aria-label="menu-close" class="header__menu-close"><i class="icon-plus"></i></button>
			<?php if( has_nav_menu('menu-primary') ) {
				Theme_menu_primary();
			}
				?>
				</nav>
				<div class="header__icon-block">
				<?php get_template_part( 'template-parts/content', 'cartblock' ); ?>
				</div>
				</div>
			</div>
		</div>	
		</div>
</header>
	<div class="content-wrapper">