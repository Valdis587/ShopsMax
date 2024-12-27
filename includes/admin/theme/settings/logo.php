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
		'title'      => esc_html__( 'Лого', 'your-textdomain-here' ),
		'id'         => 'logo-theme',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'logo',
				'type'     => 'media',
				'title'    => esc_html__( 'Лого', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
        ),
        )
    );