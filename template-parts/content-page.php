<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopsMax
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php shopsmax_post_thumbnail(); ?>

		<?php
		the_content(); ?>



	
</article><!-- #post-<?php the_ID(); ?> -->
