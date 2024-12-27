<?php
/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit; 

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'You Tube', 'your-textdomain-here' ),
        'id'         => 'you',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'you-tube-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'You Tube Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
        ),
        )
    );