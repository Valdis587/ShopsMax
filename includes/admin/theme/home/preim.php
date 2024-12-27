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
		'title'            => esc_html__( 'Преимущества', 'your-textdomain-here' ),
		'id'               => 'preim-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'preim-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Преимущества', 'your-textdomain-here' ),
				'default'  => 'Наши преимущества',
			),
            array(
				'id'       => 'preim-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => '',
			),
            array(
                'id'          => 'item-preim-home',
                'type'        => 'repeater',
                'title'       => esc_html__( 'Слайдер', 'your-textdomain-here' ),
                'full_width'  => true,
                'item_name'   => '',
                'sortable'    => true,
                'active'      => false,
                'collapsible' => false,
                'fields'      => array(
                    array(
                        'id'       => 'preim-back',
                        'type'     => 'media',
                        'title'    => esc_html__( 'Картинка', 'your-textdomain-here' ),
                        'url'      => false,
                        'preview'  => true,
                    ),
                    array(
                        'id'          => 'preim-title',
                        'type'        => 'textarea',
                        'placeholder' => esc_html__( 'Заголовок', 'your-textdomain-here' ),
                    ),
                    array(
                        'id'          => 'preim-desc',
                        'type'        => 'textarea',
                        'placeholder' => esc_html__( 'Описание', 'your-textdomain-here' ),
                    ),
                ),
            ),
        ),
)
);