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
		'title'            => esc_html__( 'Слайдер', 'your-textdomain-here' ),
		'id'               => 'slider-home',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
                'id'          => 'item-slider-home',
                'type'        => 'repeater',
                'title'       => esc_html__( 'Слайдер', 'your-textdomain-here' ),
                'full_width'  => true,
                'item_name'   => '',
                'sortable'    => true,
                'active'      => false,
                'collapsible' => false,
                'fields'      => array(
                    array(
                        'id'       => 'slider-back',
                        'type'     => 'media',
                        'title'    => esc_html__( 'Бекграунд слайда', 'your-textdomain-here' ),
                        'url'      => false,
                        'preview'  => true,
                    ),
                    array(
                        'id'          => 'slider-title',
                        'type'        => 'textarea',
                        'placeholder' => esc_html__( 'Заголовок', 'your-textdomain-here' ),
                    ),
                    array(
                        'id'          => 'slider-desc',
                        'type'        => 'textarea',
                        'placeholder' => esc_html__( 'Описание', 'your-textdomain-here' ),
                    ),
                    array(
                        'id'       => 'slider-img-right',
                        'type'     => 'media',
                        'title'    => esc_html__( 'Картинка справа', 'your-textdomain-here' ),
                        'url'      => false,
                        'preview'  => true,
                    ),
                ),
            ),
        ),
        )
        );