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
		'title'            => esc_html__( 'Вопрос ответ', 'your-textdomain-here' ),
		'id'               => 'faq-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'faq-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Вопрос ответ', 'your-textdomain-here' ),
				'default'  => 'Вопрос ответ',
			),
            array(
				'id'       => 'faq-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
)
);