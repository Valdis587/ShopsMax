<?php
/**
 * Redux Framework media config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Баннеры', 'your-textdomain-here' ),
		'id'         => 'banner-theme',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'banner1',
				'type'     => 'media',
				'title'    => esc_html__( 'Баннер левый', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
            array(
				'id'       => 'banner2',
				'type'     => 'media',
				'title'    => esc_html__( 'Баннер правый', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
        ),
        )
    );