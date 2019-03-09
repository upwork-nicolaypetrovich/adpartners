<?php
/**
 * @package webdesignsuntheme
 */



// adding theme customization
add_action( 'customize_register', function ( $wp_customize ) {

    // download link
    $wp_customize->add_section(
        'download-link',
        array(
            'title'       => 'Download Link',
            'description' => 'Download our free Pre-Listing Orientation link',
            'priority'    => 20,
        )
    );
    
    $wp_customize->add_setting(
        'd-link',
        array( 'default' => 'https://www.elastic.co/assets/bltada7771f270d08f6/enhanced-buzz-1492-1379411828-15.jpg' )
    );
    $wp_customize->add_control(
        'd-link',
        array(
            'label'   => 'Lnk',
            'section' => 'download-link',
            'type'    => 'text',
        )
    );


    // book pop-up section
    $wp_customize->add_section(
        'book-pop-up',
        array(
            'title'       => 'Book Pop-up',
            'description' => 'Texts for booking pop-up',
            'priority'    => 21,
        )
    );
    
    $wp_customize->add_setting(
        'book1',
        array( 'default' => 'Text #1' )
    );
    $wp_customize->add_control(
        'book1',
        array(
            'label'   => 'Text #1',
            'section' => 'book-pop-up',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'book2',
        array( 'default' => 'Text #2' )
    );
    $wp_customize->add_control(
        'book2',
        array(
            'label'   => 'Text #2',
            'section' => 'book-pop-up',
            'type'    => 'textarea',
        )
    );
    
    $wp_customize->add_setting(
        'book3',
        array( 'default' => 'Button Text' )
    );
    $wp_customize->add_control(
        'book3',
        array(
            'label'   => 'Button Text',
            'section' => 'book-pop-up',
            'type'    => 'text',
        )
    );


    // consultation section
    $wp_customize->add_section(
        'consultation',
        array(
            'title'       => 'Consultation',
            'description' => 'Texts for consultation block',
            'priority'    => 22,
        )
    );
    
    $wp_customize->add_setting(
        'cons1',
        array( 'default' => 'Vertical Title' )
    );
    $wp_customize->add_control(
        'cons1',
        array(
            'label'   => 'Vertical Title',
            'section' => 'consultation',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'cons2',
        array( 'default' => 'Text #1' )
    );
    $wp_customize->add_control(
        'cons2',
        array(
            'label'   => 'Text #1',
            'section' => 'consultation',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'cons3',
        array( 'default' => 'Text #2' )
    );
    $wp_customize->add_control(
        'cons3',
        array(
            'label'   => 'Text #2',
            'section' => 'consultation',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'cons4',
        array( 'default' => 'Button' )
    );
    $wp_customize->add_control(
        'cons4',
        array(
            'label'   => 'Button',
            'section' => 'consultation',
            'type'    => 'text',
        )
    );


    // team section
    $wp_customize->add_section(
        'team',
        array(
            'title'       => 'Team',
            'description' => 'Content for team block',
            'priority'    => 23,
        )
    );
    
    $wp_customize->add_setting(
        'team-text',
        array( 'default' => 'With lead realtor Andrew at the helm, Andrew Doumont and Partners is comprised with award winning agents and support staff. Along with 35 years of combined Toronto realty expertise, we offer strong market research, financial resources, and most importantly - dedication. We are equipped in all faucets of sales and invest in the right tools that go above and beyond typical Toronto realtors.' )
    );
    $wp_customize->add_control(
        'team-text',
        array(
            'label'   => 'Text',
            'section' => 'team',
            'type'    => 'textarea',
        )
    );
    
    $wp_customize->add_setting(
        'team-button',
        array( 'default' => 'Learn more about the team' )
    );
    $wp_customize->add_control(
        'team-button',
        array(
            'label'   => 'Button',
            'section' => 'team',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting('image_control_one', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control_one', array(
        'label' => __( 'Team Photo', 'theme-slug' ),
        'section' => 'team',
        'settings' => 'image_control_one',
    )));


    // footer section
    $wp_customize->add_section(
        'footer',
        array(
            'title'       => 'Footer',
            'description' => 'Footer content on all pages',
            'priority'    => 100,
        )
    );
    
    $wp_customize->add_setting(
        'f1',
        array( 'default' => 'Address #1' )
    );
    $wp_customize->add_control(
        'f1',
        array(
            'label'   => 'Address #1',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'f2',
        array( 'default' => 'Address #2' )
    );
    $wp_customize->add_control(
        'f2',
        array(
            'label'   => 'Address #2',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'f4',
        array( 'default' => 'Email #1' )
    );
    $wp_customize->add_control(
        'f4',
        array(
            'label'   => 'Email #1',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'f5',
        array( 'default' => 'Text #1' )
    );
    $wp_customize->add_control(
        'f5',
        array(
            'label'   => 'Text #1',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'f6',
        array( 'default' => 'Text #2' )
    );
    $wp_customize->add_control(
        'f6',
        array(
            'label'   => 'Text #2',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'f7',
        array( 'default' => 'Text #4' )
    );
    $wp_customize->add_control(
        'f7',
        array(
            'label'   => 'Text #4',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'f7',
        array( 'default' => 'Text #5' )
    );
    $wp_customize->add_control(
        'f7',
        array(
            'label'   => 'Text #5',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'f8',
        array( 'default' => 'Text #6' )
    );
    $wp_customize->add_control(
        'f8',
        array(
            'label'   => 'Text #6',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'f9',
        array( 'default' => 'Email #2' )
    );
    $wp_customize->add_control(
        'f9',
        array(
            'label'   => 'Email #2',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'i1',
        array( 'default' => 'Icon' )
    );
    $wp_customize->add_control(
        'i1',
        array(
            'label'   => 'Facebook',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'i2',
        array( 'default' => 'Icon' )
    );
    $wp_customize->add_control(
        'i2',
        array(
            'label'   => 'Twitter',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'i3',
        array( 'default' => 'Icon' )
    );
    $wp_customize->add_control(
        'i3',
        array(
            'label'   => 'Instagram',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'i4',
        array( 'default' => 'Icon' )
    );
    $wp_customize->add_control(
        'i4',
        array(
            'label'   => 'Pinterest',
            'section' => 'footer',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'i5',
        array( 'default' => 'Icon' )
    );
    $wp_customize->add_control(
        'i5',
        array(
            'label'   => 'YouTube',
            'section' => 'footer',
            'type'    => 'text',
        )
    );

} );
