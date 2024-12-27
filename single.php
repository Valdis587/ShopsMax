<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ShopsMax
 */

 get_header();
 get_template_part( 'template-parts/content', 'head' );
 do_action( 'start_wrapper_single_sidebar_right' ); 
 ?>
			 <div class="cart__news-single">
			 <?php
		 while ( have_posts() ) :
			 the_post(); ?>
				 <div class="cart__news-single-img">
				 <?php
					 $id = get_post_thumbnail_id();
					 $main=wp_get_attachment_image_src( $id, 'blog' );
					 ?>
				<img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
				 </div>
				 <h2 class="cart__news-single-title"><?php the_title(''); ?></h2>
				 <div class="cart__content-info">
					 <span class="cart__date"><i class="icon-calendar-alt"></i><?php the_date( 'Y-m-d'); ?></span>
					 <span class="cart__autor"><i class="icon-user-alt"></i>Автор: <?php the_author(); ?></span>
					 <span class="cart__news-comment"><i class="icon-comments"></i><?php echo comments_number(); ?></span>
				 </div>
				 <div class="cart__content-text">
				 <?php the_content(); ?>
			 </div>
			 <?php 	// If comments are open or we have at least one comment, load up the comment template.
			 if ( comments_open() || get_comments_number() ) :
				 comments_template();
			 endif;
 
		 endwhile; // End of the loop.
		 ?>
			 </div>
 <?php do_action( 'end_wrapper_single_sidebar_right' );
 get_footer();
