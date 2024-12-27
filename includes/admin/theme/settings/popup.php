<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Форма попап', 'your-textdomain-here' ),
		'id'               => 'popup-short',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'popup-img',
				'type'     => 'media',
				'title'    => esc_html__( 'Картинка', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/assets/images/pop/pop.png',
                ),
			),
            array(
				'id'       => 'popup-short-form',
				'type'     => 'text',
				'title'    => esc_html__( 'Шоркод', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
        )
    );