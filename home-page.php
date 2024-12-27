<?php
/*
Template Name: Главная
*/
get_header();
if ( class_exists( 'WooCommerce' ) ) {
get_template_part('home/content', 'slider');
get_template_part('home/content', 'preim');
get_template_part('home/content', 'category');
get_template_part('home/content', 'hit');
get_template_part('home/content', 'sale');
get_template_part('home/content', 'new');
get_template_part('home/content', 'banner');
get_template_part('home/content', 'actions');
get_template_part('home/content', 'feautered');
get_template_part('home/content', 'faq');
get_template_part('home/content', 'category2');
get_template_part('home/content', 'reviews');
get_template_part('home/content', 'blog');
}

get_template_part('home/content', 'logo');
get_footer();