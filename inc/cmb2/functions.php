<?php

add_action('cmb2_admin_init', 'law_enforcement_slider_metabox');

function law_enforcement_slider_metabox() {

    $lawenforce_meta = new_cmb2_box(array(
        'id'            => 'lawenforce_slider_metabox',
        'title'         => esc_html__('Slider Metabox', 'cmb2'),
        'object_types'  => array('sliders'),
    ));

    $lawenforce_meta->add_field(array(
        'name'       => esc_html__('Heading Top', 'cmb2'),
        'desc'       => esc_html__('Heading Top Text', 'cmb2'),
        'id'         => 'lawenforce_slider_heading_top',
        'type'       => 'text',
    ));

    $lawenforce_meta->add_field(array(
        'name'       => esc_html__('Heading main', 'cmb2'),
        'desc'       => esc_html__('Heading Main Text', 'cmb2'),
        'id'         => 'lawenforce_slider_heading_main',
        'type'       => 'text',
    ));

    $lawenforce_meta->add_field(array(
        'name'       => esc_html__('Slider content', 'cmb2'),
        'desc'       => esc_html__('Content Text', 'cmb2'),
        'id'         => 'lawenforce_slider_content',
        'type'       => 'textarea',
    ));
}
