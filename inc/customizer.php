<?php

function mytheme_customize_register( $wp_customize ) {

    // $wp_customize->add_panel('contact', array(
    //     'title' => __('Contato'),
    //     'description' => __('Adicione informações de contato'),
    //     'priority' => 150,
    // ));
    
    // PÁGINA CONTATO
    $wp_customize->add_section(
        'section_contact', array(
        'title' => __( 'Contato', 'odin' ),
        'priority' => 201,
    ));

    $wp_customize->add_setting( 'email' );

    $wp_customize->add_control('email', array(
        'type' => 'email',
        'section' => 'section_contact',
        'label' => __('Insira seu e-mail', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('exemplo@email.com'),
        )
    ));

    $wp_customize->add_setting( 'telefone' );

    $wp_customize->add_control('telefone', array(
        'type' => 'text',
        'section' => 'section_contact',
        'label' => __('Insira seu telefone', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('(99) 9999-9999'),
        ),
    ));

    $wp_customize->add_setting( 'facebook' );

    $wp_customize->add_control('facebook', array(
        'type' => 'text',
        'section' => 'section_contact',
        'label' => __('Insira o link de seu facebook aqui', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('https://www.facebook.com/pagina/'),
        ),
    ));

    // FOOTER
    $wp_customize->add_section(
        'section_footer', array(
        'title' => __( 'Footer', 'odin' ),
        'priority' => 202,
    ));

    $wp_customize->add_setting( 'email_section' );

    $wp_customize->add_control('email_section', array(
        'type' => 'email',
        'section' => 'section_footer',
        'label' => __('Insira seu e-mail', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('exemplo@email.com'),
        )
    ));

    $wp_customize->add_setting( 'telefone_section' );

    $wp_customize->add_control('telefone_section', array(
        'type' => 'text',
        'section' => 'section_footer',
        'label' => __('Insira seu telefone', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('(99) 9999-9999'),
        ),
    ));

    $wp_customize->add_setting( 'whatsapp_section' );

    $wp_customize->add_control('whatsapp_section', array(
        'type' => 'text',
        'section' => 'section_footer',
        'label' => __('Insira o seu whatsapp', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('(99) 9999-9999'),
        ),
    ));
}

add_action( 'customize_register', 'mytheme_customize_register');

?>