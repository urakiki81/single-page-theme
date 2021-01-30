<?php
add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {
    // ****** Panels *********
    $wp_customize->add_panel('nav_section_controls', array(
        'title'         => __('Social media Controls'),
        'description'   => __("All the controls for your social media section", 'domain'),
        'capability'    => 'edit_theme_options',
        'priority'      => 1
    ));
    $wp_customize->add_panel('landing_section_controls', array(
        'title'         => __('Landing Section'),
        'description'   => __("All the controls for your landing section", 'domain'),
        'capability'    => 'edit_theme_options',
        'priority'      => 2
    ));
    $wp_customize->add_panel('one_section_controls', array(
        'title'         => __('About Section'),
        'description'   => __("All the controls for about section", 'domain'),
        'capability'    => 'edit_theme_options',
        'priority'      => 3
    ));
    $wp_customize->add_panel('two_section_controls', array(
        'title'         => __('Team Section'),
        'description'   => __("All the controls for Team section", 'domain'),
        'capability'    => 'edit_theme_options',
        'priority'      => 4
    ));
    $wp_customize->add_panel('three_section_controls', array(
        'title'         => __('Gallary Section'),
        'description'   => __("All the controls for gallary section", 'domain'),
        'capability'    => 'edit_theme_options',
        'priority'      => 5
    ));
    $wp_customize->add_panel('four_section_controls', array(
        'title'         => __('Servies Section'),
        'description'   => __("All the controls for servies section", 'domain'),
        'capability'    => 'edit_theme_options',
        'priority'      => 5
    ));
    $wp_customize->add_panel('Contact_section_controls', array(
        'title'         => __('Contact Section'),
        'description'   => __("All the controls for contact section", 'domain'),
        'capability'    => 'edit_theme_options',
        'priority'      => 5
    ));

        //sections
        $wp_customize->add_section( 'company_main_area' , array(
            'title'      => 'Company Information',
            'priority'   => 1,
        ) );
        $wp_customize->add_section( 'cd_main_sm_area' , array(
            'title'      => 'Main Social media',
            'panel'     => 'nav_section_controls',
            'priority'   => 2,
        ) );
        $wp_customize->add_section( 'cd_person_one_sm' , array(
            'title'      => 'Team Member One',
            'panel'     => 'nav_section_controls',
            'priority'   => 3,
        ) );
        $wp_customize->add_section( 'cd_person_two_sm' , array(
            'title'      => 'Team Member Two',
            'panel'     => 'nav_section_controls',
            'priority'   => 4,
        ) );
        $wp_customize->add_section( 'cd_person_three_sm' , array(
            'title'      => 'Team Member Three',
            'panel'     => 'nav_section_controls',
            'priority'   => 5,
        ) );
        $wp_customize->add_section( 'cd_person_four_sm' , array(
            'title'      => 'Team Member Four',
            'panel'     => 'nav_section_controls',
            'priority'   => 5,
        ) );
        $wp_customize->add_section( 'cd_person_five_sm' , array(
            'title'      => 'Team Member Five',
            'panel'     => 'nav_section_controls',
            'priority'   => 5,
        ) );
        $wp_customize->add_section( 'cd_main_landing_area' , array(
            'title'      => 'Landing area',
            'panel'     => 'landing_section_controls',
            'priority'   => 1,
        ) );
        $wp_customize->add_section( 'bottom_bar' , array(
            'title'      => 'Bottom Bar',
            'panel'     => 'landing_section_controls',
            'priority'   => 2,
        ) );
        $wp_customize->add_section( 'cd_section_one_area' , array(
            'title'      => 'Section One',
            'panel'     => 'one_section_controls',
            'priority'   => 1,
        ) );
        $wp_customize->add_section( 'cd_section_two_area' , array(
            'title'      => 'Section Two',
            'panel'     => 'two_section_controls',
            'priority'   => 1,
        ) );
        $wp_customize->add_section( 'cd_section_two_a' , array(
            'title'      => 'Section Two Additional',
            'panel'     => 'two_section_controls',
            'priority'   => 1,
        ) );
        $wp_customize->add_section( 'cd_section_three_area' , array(
            'title'      => 'Image Gallery',
            'panel'     => 'three_section_controls',
            'priority'   => 1,
        ) );
        $wp_customize->add_section( 'cd_section_four_area' , array(
            'title'      => 'Section Four',
            'panel'     => 'four_section_controls',
            'priority'   => 1,
        ) );
        $wp_customize->add_section( 'contact_area' , array(
            'title'      => 'Contact Controls',
            'panel'     => 'Contact_section_controls',
            'priority'   => 1,
        ) );
        $wp_customize->add_section( 'footer_area' , array(
            'title'      => 'Footer Controls',
            'priority'   => 10,
        ) );
    // **** Company Information controls 
    $wp_customize->add_setting( 'cp_name_text' , array(
        'default'     => 'company name',
        'transport'   => 'postMessage',
        ) );
    
    $wp_customize->add_control( 'cp_name_text', array(
        'label' => 'Company name',
        'section'	=> 'company_main_area',
        'type'	 => 'text',
        ) );
    $wp_customize->selective_refresh->add_partial( 'cp_name_text', array(
        'selector' => '#nav .logo',
        'render_callback' => function(){
            echo get_theme_mod('cp_name_text');
        },
        ) );
    $wp_customize->add_setting( 'cp_name_text_font', array(
        'default'    => 'default', 
        'type'       => 'theme_mod', 
        'capability' => 'edit_theme_options', 
    
        ) 
        );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cp_name_text_font_too_section', array(
           'label'      => __( 'Logo Font', 'parsmizban' ),
           'settings'   => 'cp_name_text_font',
           'priority'   => 10, 
           'section'    => 'company_main_area',
           'type'    => 'select',
           'choices' => array(
            'f1' => 'Roboto',
            'f2' => 'Open Sans',
            'f3' => 'Lato',
            'f4' => 'Martel Sans',
            'f5' => 'Amatic SC',
            'f6' => 'Cambay',
            'f7' => 'Source San Pro',
            'f8' => 'Roboto Condensed',
            'f9' => 'Oswald',
            'f10' => 'Raleway',
            'f11' => 'Sigmar',
            'f12' => 'Lobster',
            'f13' => 'Indie Flower',
            'f14' => 'Dancing Script',
            'f15' => 'Zhi Mang Xing',
           )
        )
        ) );
        $wp_customize->add_setting( 'cp_nav_text_font', array(
            'default'    => 'default', 
            'type'       => 'theme_mod', 
            'capability' => 'edit_theme_options', 

        ) 
        );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cp_nav_text_font_too_section', array(
           'label'      => __( 'Navigation Font', 'parsmizban' ),
           'settings'   => 'cp_nav_text_font',
           'priority'   => 10, 
           'section'    => 'company_main_area',
           'type'    => 'select',
           'choices' => array(
            'f1' => 'Roboto',
            'f2' => 'Open Sans',
            'f3' => 'Lato',
            'f4' => 'Martel Sans',
            'f5' => 'Amatic SC',
            'f6' => 'Cambay',
            'f7' => 'Source San Pro',
            'f8' => 'Roboto Condensed',
            'f9' => 'Oswald',
            'f10' => 'Raleway',
            'f11' => 'Sigmar',
            'f12' => 'Lobster',
            'f13' => 'Indie Flower',
            'f14' => 'Dancing Script',
            'f15' => 'Zhi Mang Xing',
           )
        )
        ) );

    $wp_customize->add_setting( 'cd_d_email' , array(
        'default'     => true,
        'transport'   => 'refresh',
        ) );
          
    $wp_customize->add_control( 'cd_d_email', array(
        'label' => 'Display Email',
        'section' => 'company_main_area',
            'settings' => 'cd_d_email',
        'type' => 'radio',
        'choices' => array(
          'show' => 'Add Email',
          'hide' => 'Remove Email',
        ),
        ) );

    $wp_customize->add_setting( 'cp_e_mail' , array(
        'default'     => 'support@company.com',
        'transport'   => 'postMessage',
        ) );
    
    $wp_customize->add_control( 'cp_e_mail', array(
        'label' => 'Email',
        'section'	=> 'company_main_area',
        'type'	 => 'text',
        ) );
    $wp_customize->selective_refresh->add_partial( 'cp_e_mail', array(
        'selector' => '#email i',
        'render_callback' => function(){
            echo get_theme_mod('cp_e_mail');
        },
        ) );
    $wp_customize->add_setting( 'cd_d_phone' , array(
        'default'     => true,
        'transport'   => 'refresh',
        ) );
          
    $wp_customize->add_control( 'cd_d_phone', array(
        'label' => 'Display Phone Number',
        'section' => 'company_main_area',
            'settings' => 'cd_d_phone',
        'type' => 'radio',
        'choices' => array(
          'show' => 'Add Phone Number',
          'hide' => 'Remove Phone Number',
        ),
        ) );
    $wp_customize->add_setting( 'phone_number' , array(
        'default'     => '555-555-5555',
        'transport'   => 'postMessage',
        ) );
    $wp_customize->add_control( 'phone_number', array(
        'label' => 'Phone Number',
        'section'	=> 'company_main_area',
        'type'	 => 'text',
        ) );
        
    $wp_customize->selective_refresh->add_partial( 'phone_number', array(
        'selector' => '#contact h4',
        'render_callback' => function(){
            echo get_theme_mod('phone_number');
        },
        ) );
    $wp_customize->add_setting( 'phone_title' , array(
        'default'     => 'Call us at',
        'transport'   => 'postMessage',
        ) );
    $wp_customize->add_control( 'phone_title', array(
        'label' => 'Section Heading',
        'section'	=> 'company_main_area',
        'type'	 => 'text',
        ) );
    
    $wp_customize->selective_refresh->add_partial( 'phone_title', array(
        'selector' => '#contact h3',
        'render_callback' => function(){
            echo get_theme_mod('phone_title');
        },
        ) );
    $wp_customize->add_setting( 'cd_s_address' , array(
        'default'     => true,
        'transport'   => 'refresh',
        ) );
          
    $wp_customize->add_control( 'cd_s_address', array(
        'label' => 'Display Address',
        'section' => 'company_main_area',
            'settings' => 'cd_s_address',
        'type' => 'radio',
        'choices' => array(
          'show' => 'Add Address',
          'hide' => 'Remove Address',
        ),
        ) );
    $wp_customize->add_setting( 'cp_s_street' , array(
        'default'     => '123 S. Cedros Ave',
        'transport'   => 'postMessage',
        ) );
    
    $wp_customize->add_control( 'cp_s_street', array(
        'label' => 'Street',
        'section'	=> 'company_main_area',
        'type'	 => 'text',
        ) );
    $wp_customize->selective_refresh->add_partial( 'cp_s_street', array(
        'selector' => '#street i',
        'render_callback' => function(){
            echo get_theme_mod('cp_s_street');
        },
        ) );
    $wp_customize->add_setting( 'cp_cite_state' , array(
        'default'     => 'Solana Beach, California',
        'transport'   => 'postMessage',
        ) );
    
    $wp_customize->add_control( 'cp_cite_state', array(
        'label' => 'Cite State',
        'section'	=> 'company_main_area',
        'type'	 => 'text',
        ) );
    $wp_customize->add_setting( 'cp_copywight' , array(
        'default'     => 'Company Name',
        'transport'   => 'postMessage',
        ) );
    
    $wp_customize->add_control( 'cp_copywight', array(
        'label' => 'Copywight',
        'section'	=> 'company_main_area',
        'type'	 => 'text',
        ) );
    $wp_customize->selective_refresh->add_partial( 'cp_copywight', array(
        'selector' => '#footer span',
        'render_callback' => function(){
            echo get_theme_mod('cp_copywight');
        },
        ) );
    $wp_customize->add_setting( 'cp_copywight_year' , array(
        'default'     => '2020',
        'transport'   => 'postMessage',
        ) );
    
    $wp_customize->add_control( 'cp_copywight_year', array(
        'label' => 'Copywight Year',
        'section'	=> 'company_main_area',
        'type'	 => 'text',
        ) );

    // **** landing section controls
    $wp_customize->add_setting( 'landing_bg_img' , array(
        'transport'   => 'refresh',
        ) );
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'landing_bg_img', array(
        'section' => 'cd_main_landing_area',
        'label' => 'Background Image',
        'width' => 1920,
        'height' =>  1080
    )));
    $wp_customize->add_setting( 'Main_HL_text' , array(
        'default'     => 'Your Main Headline here',
        'transport'   => 'postMessage',
        ) );
    
    $wp_customize->add_control( 'Main_HL_text', array(
        'label' => 'Main Headline',
        'section'	=> 'cd_main_landing_area',
        'type'	 => 'text',
        ) );
    $wp_customize->add_setting( 'main_HL_text_font', array(
        'default'    => 'f1', 
        'type'       => 'theme_mod', 
        'capability' => 'edit_theme_options', 
    
        ) 
        );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'main_HL_text_font_too_section', array(
           'label'      => __( 'Main Heading Font', 'parsmizban' ),
           'settings'   => 'main_HL_text_font',
           'priority'   => 10, 
           'section'    => 'cd_main_landing_area',
           'type'    => 'select',
           'choices' => array(
            'f1' => 'Roboto',
            'f2' => 'Open Sans',
            'f3' => 'Lato',
            'f4' => 'Martel Sans',
            'f5' => 'Amatic SC',
            'f6' => 'Cambay',
            'f7' => 'Source San Pro',
            'f8' => 'Roboto Condensed',
            'f9' => 'Oswald',
            'f10' => 'Raleway',
            'f11' => 'Sigmar',
            'f12' => 'Lobster',
            'f13' => 'Indie Flower',
            'f14' => 'Dancing Script',
            'f15' => 'Zhi Mang Xing',
           )
        )
        ) );
        $wp_customize->selective_refresh->add_partial( 'Main_HL_text', array(
            'selector' => '.header h1',
            'render_callback' => function(){
                echo get_theme_mod('Main_HL_text');
            },
            ) );
        $wp_customize->add_setting( 'cd_Sc_heading' , array(
            'default'     => true,
            'transport'   => 'refresh',
        ) );
          
        $wp_customize->add_control( 'cd_Sc_heading', array(
            'label' => 'Display Secondary Heading',
            'section' => 'cd_main_landing_area',
            'settings' => 'cd_Sc_heading',
            'type' => 'radio',
            'choices' => array(
              'show' => 'Show Secondary Heading',
              'hide' => 'Hide Secondary Heading',
        ),
        ) );
        $wp_customize->add_setting( 'Sc_HL_text' , array(
            'default'     => 'Your Text Here',
            'transport'   => 'postMessage',
            ) );
            
        $wp_customize->add_control( 'Sc_HL_text', array(
            'label' => 'Secondary Heading',
            'section'	=> 'cd_main_landing_area',
            'type'	 => 'text',
            ) );
        $wp_customize->add_setting( 'Sc_HL_text_font', array(
            'default'    => 'f1', 
            'type'       => 'theme_mod', 
            'capability' => 'edit_theme_options', 
        
            ) 
            );
        $wp_customize->add_control( new WP_Customize_Control($wp_customize,'Sc_HL_text_font_too_section', array(
               'label'      => __( 'Secondary Heading Font', 'parsmizban' ),
               'settings'   => 'Sc_HL_text_font',
               'priority'   => 10, 
               'section'    => 'cd_main_landing_area',
               'type'    => 'select',
               'choices' => array(
                'f1' => 'Roboto',
                'f2' => 'Open Sans',
                'f3' => 'Lato',
                'f4' => 'Martel Sans',
                'f5' => 'Amatic SC',
                'f6' => 'Cambay',
                'f7' => 'Source San Pro',
                'f8' => 'Roboto Condensed',
                'f9' => 'Oswald',
                'f10' => 'Raleway',
                'f11' => 'Sigmar',
                'f12' => 'Lobster',
                'f13' => 'Indie Flower',
                'f14' => 'Dancing Script',
                'f15' => 'Zhi Mang Xing',
               )
            )
            ) );
        $wp_customize->selective_refresh->add_partial( 'Sc_HL_text', array(
            'selector' => '#header p',
            'render_callback' => function(){
                echo get_theme_mod('Sc_HL_text');
            },
            ) );
            $wp_customize->add_setting( 'Display_Side' , array(
                'default'     => true,
                'transport'   => 'refresh',
            ) );
              
            $wp_customize->add_control( 'Display_Side', array(
                'label' => 'Display Side Text',
                'section' => 'cd_main_landing_area',
                'settings' => 'Display_Side',
                'type' => 'radio',
                'choices' => array(
                  'show' => 'Add Side Text',
                  'hide' => 'Remove Side Text',
            ),
            ) );
            $wp_customize->add_setting( 'side_text' , array(
                'default'     => 'Your Text Here',
                'transport'   => 'postMessage',
                ) );
                
            $wp_customize->add_control( 'side_text', array(
                'label' => 'Side Text',
                'section'	=> 'cd_main_landing_area',
                'type'	 => 'text',
                ) );
            $wp_customize->add_setting( 'side_text_font', array(
                'default'    => 'f1', 
                'type'       => 'theme_mod', 
                'capability' => 'edit_theme_options', 
                
                ) 
                );
            $wp_customize->add_control( new WP_Customize_Control($wp_customize,'side_text_font_too_section', array(
                   'label'      => __( 'Side Text Font', 'parsmizban' ),
                   'settings'   => 'side_text_font',
                   'priority'   => 10, 
                   'section'    => 'cd_main_landing_area',
                   'type'    => 'select',
                   'choices' => array(
                    'f1' => 'Roboto',
                    'f2' => 'Open Sans',
                    'f3' => 'Lato',
                    'f4' => 'Martel Sans',
                    'f5' => 'Amatic SC',
                    'f6' => 'Cambay',
                    'f7' => 'Source San Pro',
                    'f8' => 'Roboto Condensed',
                    'f9' => 'Oswald',
                    'f10' => 'Raleway',
                    'f11' => 'Sigmar',
                    'f12' => 'Lobster',
                    'f13' => 'Indie Flower',
                    'f14' => 'Dancing Script',
                    'f15' => 'Zhi Mang Xing',
                   )
                )
                ) );
            $wp_customize->selective_refresh->add_partial( 'side_text', array(
                'selector' => '#side p',
                'render_callback' => function(){
                    echo get_theme_mod('side_text');
                },
                ) );
            $wp_customize->add_setting( 'button_link', array(
                'default'    => 'default', 
                'type'       => 'theme_mod', 
                'capability' => 'edit_theme_options', 
    
                ) 
                );
            $wp_customize->add_control( new WP_Customize_Control($wp_customize,'button_link_too_section', array(
                   'label'      => __( 'Button Link', 'parsmizban' ),
                   'description' => __( 'Using this option too link a Section to the button' ),
                   'settings'   => 'button_link',
                   'priority'   => 10, 
                   'section'    => 'cd_main_landing_area',
                   'type'    => 'select',
                   'choices' => array(
                       '#about' => 'About',
                       '#skills' => 'Team',
                       '#works' => 'Gallary',
                       '#design' => 'Servies',
                       '#contact' => 'Contact',
                   )
                )
                ) );
            $wp_customize->add_setting( 'button_text' , array(
                'default'     => 'Your Text Here',
                'transport'   => 'postMessage',
                ) );
                    
            $wp_customize->add_control( 'button_text', array(
                'label' => 'Button Text',
                'section'	=> 'cd_main_landing_area',
                'type'	 => 'text',
                ) );
            $wp_customize->add_setting( 'button_text_font', array(
                'default'    => 'f1', 
                'type'       => 'theme_mod', 
                'capability' => 'edit_theme_options', 
                
                ) 
                );
            $wp_customize->add_control( new WP_Customize_Control($wp_customize,'button_text_font_too_section', array(
                   'label'      => __( 'Button Text Font', 'parsmizban' ),
                   'settings'   => 'button_text_font',
                   'priority'   => 10, 
                   'section'    => 'cd_main_landing_area',
                   'type'    => 'select',
                   'choices' => array(
                    'f1' => 'Roboto',
                    'f2' => 'Open Sans',
                    'f3' => 'Lato',
                    'f4' => 'Martel Sans',
                    'f5' => 'Amatic SC',
                    'f6' => 'Cambay',
                    'f7' => 'Source San Pro',
                    'f8' => 'Roboto Condensed',
                    'f9' => 'Oswald',
                    'f10' => 'Raleway',
                    'f11' => 'Sigmar',
                    'f12' => 'Lobster',
                    'f13' => 'Indie Flower',
                    'f14' => 'Dancing Script',
                    'f15' => 'Zhi Mang Xing',
                   )
                )
                ) );
            $wp_customize->selective_refresh->add_partial( 'button_text', array(
                'selector' => '#header a',
                'render_callback' => function(){
                    echo get_theme_mod('button_text');
                },
                ) );
        //*** bottom bar landing ****/
        $wp_customize->add_setting( 'bottom_bar_display' , array(
            'default'     => true,
            'transport'   => 'refresh',
        ) );
      
        $wp_customize->add_control( 'bottom_bar_display', array(
            'label' => 'Display Section One',
            'section' => 'bottom_bar',
            'settings' => 'bottom_bar_display',
            'type' => 'radio',
            'choices' => array(
              'show' => 'Show Section One',
              'hide' => 'Hide Section One',
        ),
        ) );
        $wp_customize->add_setting( 'bb_title_text_font', array(
            'default'    => 'f1', 
            'type'       => 'theme_mod', 
            'capability' => 'edit_theme_options', 
            
            ) 
            );
        $wp_customize->add_control( new WP_Customize_Control($wp_customize,'bb_title_text_font_too_section', array(
               'label'      => __( 'Title Font', 'parsmizban' ),
               'settings'   => 'bb_title_text_font',
               'priority'   => 10, 
               'section'    => 'bottom_bar',
               'type'    => 'select',
               'choices' => array(
                'f1' => 'Roboto',
                'f2' => 'Open Sans',
                'f3' => 'Lato',
                'f4' => 'Martel Sans',
                'f5' => 'Amatic SC',
                'f6' => 'Cambay',
                'f7' => 'Source San Pro',
                'f8' => 'Roboto Condensed',
                'f9' => 'Oswald',
                'f10' => 'Raleway',
                'f11' => 'Sigmar',
                'f12' => 'Lobster',
                'f13' => 'Indie Flower',
                'f14' => 'Dancing Script',
                'f15' => 'Zhi Mang Xing',
               )
            )
            ) );
        $wp_customize->add_setting( 'bb_d_text_font', array(
            'default'    => 'f1', 
            'type'       => 'theme_mod', 
            'capability' => 'edit_theme_options', 
            
            ) 
            );
        $wp_customize->add_control( new WP_Customize_Control($wp_customize,'bb_d_font_too_section', array(
               'label'      => __( 'Description Font', 'parsmizban' ),
               'settings'   => 'bb_d_text_font',
               'priority'   => 10, 
               'section'    => 'bottom_bar',
               'type'    => 'select',
               'choices' => array(
                'f1' => 'Roboto',
                'f2' => 'Open Sans',
                'f3' => 'Lato',
                'f4' => 'Martel Sans',
                'f5' => 'Amatic SC',
                'f6' => 'Cambay',
                'f7' => 'Source San Pro',
                'f8' => 'Roboto Condensed',
                'f9' => 'Oswald',
                'f10' => 'Raleway',
                'f11' => 'Sigmar',
                'f12' => 'Lobster',
                'f13' => 'Indie Flower',
                'f14' => 'Dancing Script',
                'f15' => 'Zhi Mang Xing',
               )
            )
            ) );
        $wp_customize->add_setting( 'bb_one_img' , array(
            'transport'   => 'refresh',
            ) );
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'bb_one_img', array(
            'section' => 'bottom_bar',
            'label' => 'Bottom Bar Image One',
            'width' => 550,
            'height' => 550
            )));
        $wp_customize->add_setting( 'bb_one_title' , array(
            'default'     => 'Title One',
            'transport'   => 'postMessage',
            ) );
            
        $wp_customize->add_control( 'bb_one_title', array(
            'label' => 'Title One',
            'section'	=> 'bottom_bar',
            'type'	 => 'text',
            ) ); 
        $wp_customize->add_setting( 'bb_one_d' , array(
            'default'     => 'Your Text Here',
            'transport'   => 'postMessage',
            ) );
                
        $wp_customize->add_control( 'bb_one_d', array(
            'label' => 'Description One',
            'section'	=> 'bottom_bar',
            'type'	 => 'textarea',
            ) );
        $wp_customize->selective_refresh->add_partial( 'bb_one_title', array(
            'selector' => '#bb-one h6',
            'render_callback' => function(){
                echo get_theme_mod('bb_one_title');
            },
            ) );
        $wp_customize->selective_refresh->add_partial( 'bb_one_d', array(
            'selector' => '#bb-one p',
            'render_callback' => function(){
                echo get_theme_mod('bb_one_d');
            },
            ) );
        $wp_customize->selective_refresh->add_partial( 'bb_one_img', array(
            'selector' => '#bb-one .row-img',
            'render_callback' => 'bb_one_img',
            ) );
        $wp_customize->add_setting( 'bb_two_img' , array(
            'transport'   => 'refresh',
            ) );
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'bb_two_img', array(
            'section' => 'bottom_bar',
            'label' => 'Bottom Bar Image two',
            'width' => 550,
            'height' => 550
        )));
        $wp_customize->add_setting( 'bb_two_title' , array(
            'default'     => 'Your Text Here',
            'transport'   => 'postMessage',
            ) );
        
        $wp_customize->add_control( 'bb_two_title', array(
            'label' => 'Tittle Two',
            'section'	=> 'bottom_bar',
            'type'	 => 'text',
            ) ); 
        $wp_customize->add_setting( 'bb_two_d' , array(
            'default'     => 'Your Text Here',
            'transport'   => 'postMessage',
            ) );
            
        $wp_customize->add_control( 'bb_two_d', array(
            'label' => 'Description Two',
            'section'	=> 'bottom_bar',
            'type'	 => 'textarea',
            ) );
        $wp_customize->selective_refresh->add_partial( 'bb_two_title', array(
            'selector' => '#bb-two h6',
            'render_callback' => function(){
                echo get_theme_mod('bb_two_title');
            },
            ) );
        $wp_customize->selective_refresh->add_partial( 'bb_two_d', array(
            'selector' => '#bb-two p',
            'render_callback' => function(){
                echo get_theme_mod('bb_two_d');
            },
            ) );
        $wp_customize->selective_refresh->add_partial( 'bb_two_img', array(
            'selector' => '#bb-three .row-img',
            'render_callback' => 'bb_two_img',
            ) );
        $wp_customize->add_setting( 'bb_three_img' , array(
            'transport'   => 'refresh',
            ) );
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'bb_three_img', array(
            'section' => 'bottom_bar',
            'label' => 'Bottom Bar Image Three',
            'width' => 550,
             'height' => 550
            )));
        $wp_customize->add_setting( 'bb_three_title' , array(
            'default'     => 'Title Three',
            'transport'   => 'postMessage',
            ) );
        
        $wp_customize->add_control( 'bb_three_title', array(
            'label' => 'Title Three',
            'section'	=> 'bottom_bar',
            'type'	 => 'text',
            ) ); 
        $wp_customize->add_setting( 'bb_three_d' , array(
            'default'     => 'Your Text Here',
            'transport'   => 'postMessage',
            ) );
            
        $wp_customize->add_control( 'bb_three_d', array(
            'label' => 'Description Three',
            'section'	=> 'bottom_bar',
            'type'	 => 'textarea',
            ) );
        $wp_customize->selective_refresh->add_partial( 'bb_three_title', array(
            'selector' => '#bb-three h6',
            'render_callback' => function(){
                echo get_theme_mod('bb_three_title');
            },
            ) );
        $wp_customize->selective_refresh->add_partial( 'bb_three_d', array(
             'selector' => '#bb-three p',
            'render_callback' => function(){
                echo get_theme_mod('bb_three_d');
            },
             ) );
        $wp_customize->selective_refresh->add_partial( 'bb_three_img', array(
            'selector' => '#bb-three .row-img',
            'render_callback' => 'bb_three_img',
            ) );
        
    

        // ****section one controls ****
        $wp_customize->add_setting( 'cd_section_one_display' , array(
            'default'     => true,
            'transport'   => 'refresh',
        ) );
      
        $wp_customize->add_control( 'cd_section_one_display', array(
            'label' => 'Display Section One',
            'section' => 'cd_section_one_area',
            'settings' => 'cd_section_one_display',
            'type' => 'radio',
            'choices' => array(
              'show' => 'Show Section One',
              'hide' => 'Hide Section One',
        ),
        ) );

        $wp_customize->add_setting( 'section_one_title' , array(
            'default'     => 'About Us',
            'transport'   => 'postMessage',
            ) );
        $wp_customize->add_control( 'section_one_title', array(
            'label' => 'Section Title',
            'section'	=> 'cd_section_one_area',
            'type'	 => 'text',
            ) );

        $wp_customize->selective_refresh->add_partial( 'section_one_title', array(
            'selector' => '#about h1',
            'render_callback' => function(){
                echo get_theme_mod('section_one_title');
            },
            ) );
        $wp_customize->add_setting( 'section_one_title_font', array(
            'default'    => 'f1', 
            'type'       => 'theme_mod', 
            'capability' => 'edit_theme_options', 
            
            ) 
            );
        $wp_customize->add_control( new WP_Customize_Control($wp_customize,'section_one_title_font_too_section', array(
               'label'      => __( 'Heading Text Font', 'parsmizban' ),
               'settings'   => 'section_one_title_font',
               'priority'   => 10, 
               'section'    => 'cd_section_one_area',
               'type'    => 'select',
               'choices' => array(
                'f1' => 'Roboto',
                'f2' => 'Open Sans',
                'f3' => 'Lato',
                'f4' => 'Martel Sans',
                'f5' => 'Amatic SC',
                'f6' => 'Cambay',
                'f7' => 'Source San Pro',
                'f8' => 'Roboto Condensed',
                'f9' => 'Oswald',
                'f10' => 'Raleway',
                'f11' => 'Sigmar',
                'f12' => 'Lobster',
                'f13' => 'Indie Flower',
                'f14' => 'Dancing Script',
                'f15' => 'Zhi Mang Xing',
               )
            )
            ) );
        $wp_customize->add_setting( 'section_one_img' , array(
            'transport'   => 'refresh',
            ) );
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'section_one_img', array(
            'section' => 'cd_section_one_area',
            'label' => 'Main Image',
            'width' => 600,
            'height' => 600
            )));
        $wp_customize->add_setting( 'section_one_heading' , array(
            'default'     => 'Title One',
            'transport'   => 'postMessage',
            ) );
        $wp_customize->add_control( 'section_one_heading', array(
            'label' => 'Section Headline',
            'section'	=> 'cd_section_one_area',
            'type'	 => 'text',
            ) );
        $wp_customize->selective_refresh->add_partial( 'section_one_heading', array(
            'selector' => '#about h2',
             'render_callback' => function(){
                echo get_theme_mod('section_one_heading');
            },
            ) );
    
        $wp_customize->add_setting( 'section_one_heading_font', array(
            'default'    => 'f1', 
            'type'       => 'theme_mod', 
            'capability' => 'edit_theme_options', 
            
            ) 
            );
        $wp_customize->add_control( new WP_Customize_Control($wp_customize,'section_one_heading_font_too_section', array(
            'label'      => __( 'Title Text Font', 'parsmizban' ),
            'settings'   => 'section_one_heading_font',
            'priority'   => 10, 
            'section'    => 'cd_section_one_area',
            'type'    => 'select',
            'choices' => array(
             'f1' => 'Roboto',
             'f2' => 'Open Sans',
             'f3' => 'Lato',
             'f4' => 'Martel Sans',
             'f5' => 'Amatic SC',
             'f6' => 'Cambay',
             'f7' => 'Source San Pro',
             'f8' => 'Roboto Condensed',
             'f9' => 'Oswald',
             'f10' => 'Raleway',
             'f11' => 'Sigmar',
             'f12' => 'Lobster',
             'f13' => 'Indie Flower',
             'f14' => 'Dancing Script',
             'f15' => 'Zhi Mang Xing',
            )
         )
         ) );

        $wp_customize->add_setting( 'about_dection' , array(
            'default'     => 'Description here',
            'transport'   => 'postMessage',
            ) );
        $wp_customize->add_control( 'about_dection', array(
            'label' => 'Description',
            'section'	=> 'cd_section_one_area',
            'type'	 => 'textarea',
            ) );
        $wp_customize->selective_refresh->add_partial( 'about_dection', array(
            'selector' => '#about p',
            'render_callback' => function(){
                echo get_theme_mod('about_dection');
            },
            ) );
        $wp_customize->add_setting( 'about_dection_font', array(
            'default'    => 'f1', 
            'type'       => 'theme_mod', 
            'capability' => 'edit_theme_options', 
            
            ) 
            );
        $wp_customize->add_control( new WP_Customize_Control($wp_customize,'about_dection_font_too_section', array(
            'label'      => __( 'Description Text Font', 'parsmizban' ),
            'settings'   => 'about_dection_font',
            'priority'   => 10, 
            'section'    => 'cd_section_one_area',
            'type'    => 'select',
            'choices' => array(
             'f1' => 'Roboto',
             'f2' => 'Open Sans',
             'f3' => 'Lato',
             'f4' => 'Martel Sans',
             'f5' => 'Amatic SC',
             'f6' => 'Cambay',
             'f7' => 'Source San Pro',
             'f8' => 'Roboto Condensed',
             'f9' => 'Oswald',
             'f10' => 'Raleway',
             'f11' => 'Sigmar',
             'f12' => 'Lobster',
             'f13' => 'Indie Flower',
             'f14' => 'Dancing Script',
             'f15' => 'Zhi Mang Xing',
            )
         )
         ) );
        $wp_customize->selective_refresh->add_partial( 'section_one_img', array(
            'selector' => '#about .fromleft',
            'render_callback' => 'cd_show_main_button',
            ) );
             // ****section Two controls ****
             $wp_customize->add_setting( 'section_two_display' , array(
                'default'     => true,
                'transport'   => 'refresh',
            ) );
          
            $wp_customize->add_control( 'section_two_display', array(
                'label' => 'Display Section One',
                'section' => 'cd_section_two_area',
                'settings' => 'section_two_display',
                'type' => 'radio',
                'choices' => array(
                  'show' => 'Show Section One',
                  'hide' => 'Hide Section One',
            ),
            ) );
            $wp_customize->add_setting( 'section_two_title' , array(
                'default'     => 'Our Team',
                'transport'   => 'postMessage',
                ) );
            
            $wp_customize->add_control( 'section_two_title', array(
                'label' => 'Main Headline',
                'section'	=> 'cd_section_two_area',
                'type'	 => 'text',
                ) );
            $wp_customize->selective_refresh->add_partial( 'section_two_title', array(
                'selector' => '.skills h1',
                'render_callback' => function(){
                    echo get_theme_mod('section_two_title');
                },
                ) );

                $wp_customize->add_setting( 'section_two_title_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'section_two_title_font_too_section', array(
                    'label'      => __( 'Main Heading Font', 'parsmizban' ),
                    'settings'   => 'section_two_title_font',
                    'priority'   => 10, 
                    'section'    => 'cd_section_two_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                 $wp_customize->add_setting( 'tm_name_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'tm_name_font_too_section', array(
                    'label'      => __( 'Team Member Name Font', 'parsmizban' ),
                    'settings'   => 'tm_name_font',
                    'priority'   => 10, 
                    'section'    => 'cd_section_two_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                 $wp_customize->add_setting( 'tm_title_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'tm_title_font_too_section', array(
                    'label'      => __( 'Team Member Job Title Font', 'parsmizban' ),
                    'settings'   => 'tm_title_font',
                    'priority'   => 10, 
                    'section'    => 'cd_section_two_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                 $wp_customize->add_setting( 'tm_inner_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'tm_inner_font_too_section', array(
                    'label'      => __( 'Team Member Inner Text Font', 'parsmizban' ),
                    'settings'   => 'tm_inner_font',
                    'priority'   => 10, 
                    'section'    => 'cd_section_two_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                $wp_customize->add_setting( 's_p_one_img' , array(
                    'transport'   => 'refresh',
                    ) ); 
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 's_p_one_img', array(
                    'section' => 'cd_section_two_area',
                    'label' => 'Person One Image',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'person_one_name' , array(
                    'default'     => 'Name here',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_one_name', array(
                    'label' => 'Person One Name',
                    'section'	=> 'cd_section_two_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'person_one_title' , array(
                    'default'     => 'Title',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_one_title', array(
                    'label' => 'Person One title',
                    'section'	=> 'cd_section_two_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'person_one_d' , array(
                    'default'     => 'Job Description',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_one_d', array(
                    'label' => 'Person One Job Description',
                    'section'	=> 'cd_section_two_area',
                    'type'	 => 'textarea',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_one_name', array(
                    'selector' => '#Pone h2',
                     'render_callback' => function(){
                        echo get_theme_mod('person_one_name');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_one_title', array(
                    'selector' => '#Pone p',
                     'render_callback' => function(){
                        echo get_theme_mod('person_one_title');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_one_title', array(
                    'selector' => '#Pone p',
                     'render_callback' => function(){
                        echo get_theme_mod('person_one_title');
                    },
                    ) );
                $wp_customize->add_setting( 'cd_service_three_dection' , array(
                    'default'     => 'Description here',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'cd_service_three_dection', array(
                    'label' => 'Description',
                    'section'	=> 'cd_section_two_area',
                    'type'	 => 'textarea',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'cd_service_three_dection', array(
                    'selector' => '#about p',
                    'render_callback' => 'cd_show_main_button',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'section_one_img', array(
                    'selector' => '#about .fromleft',
                    'render_callback' => 'cd_show_main_button',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_one_d', array(
                    'selector' => '#PoneI p',
                    'render_callback' => function(){
                        echo get_theme_mod('person_one_d');
                    },
                    ) );
                $wp_customize->add_setting( 's_p_two_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 's_p_two_img', array(
                    'section' => 'cd_section_two_area',
                    'label' => 'Person Two Image',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'person_two_name' , array(
                    'default'     => 'Name here',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_two_name', array(
                    'label' => 'Person Two Name',
                    'section'	=> 'cd_section_two_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'person_two_title' , array(
                    'default'     => 'Title',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_two_title', array(
                    'label' => 'Person Two title',
                    'section'	=> 'cd_section_two_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'person_two_d' , array(
                    'default'     => 'Job Description',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_two_d', array(
                    'label' => 'Person Two Job Description',
                    'section'	=> 'cd_section_two_area',
                    'type'	 => 'textarea',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_two_name', array(
                    'selector' => '#Ptwo h2',
                     'render_callback' => function(){
                        echo get_theme_mod('person_two_name');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_two_title', array(
                    'selector' => '#Ptwo p',
                     'render_callback' => function(){
                        echo get_theme_mod('person_two_title');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_two_d', array(
                    'selector' => '#PtwoI p',
                     'render_callback' => function(){
                        echo get_theme_mod('person_two_d');
                    },
                    ) );
                $wp_customize->add_setting( 's_p_three_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 's_p_three_img', array(
                    'section' => 'cd_section_two_area',
                    'label' => 'Person Three Image',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'person_three_name' , array(
                    'default'     => 'Name here',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_three_name', array(
                    'label' => 'Person Three Name',
                    'section'	=> 'cd_section_two_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'person_three_title' , array(
                    'default'     => 'Title',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_three_title', array(
                    'label' => 'Person Three title',
                    'section'	=> 'cd_section_two_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'person_three_d' , array(
                    'default'     => 'Job Description',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_three_d', array(
                    'label' => 'Person Three Job Description',
                    'section'	=> 'cd_section_two_area',
                    'type'	 => 'textarea',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_three_name', array(
                    'selector' => '#Pthree h2',
                     'render_callback' => function(){
                        echo get_theme_mod('person_three_name');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_three_title', array(
                    'selector' => '#Pthree p',
                    'render_callback' => function(){
                        echo get_theme_mod('person_three_title');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_three_d', array(
                    'selector' => '#PthreeI p',
                     'render_callback' => function(){
                        echo get_theme_mod('person_three_d');
                    },
                    ) );
                $wp_customize->add_setting( 'person_four_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                  
                $wp_customize->add_control( 'person_four_display', array(
                    'label' => 'Display Section One',
                    'section' => 'cd_section_two_area',
                    'settings' => 'person_four_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Person Four',
                      'hide' => 'Remove Person Four',
                ),
                ) );
                $wp_customize->add_setting( 'person_five_display' , array(
                    'default'     => true,
                        'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'person_five_display', array(
                    'label' => 'Display Section One',
                    'section' => 'cd_section_two_area',
                    'settings' => 'person_five_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Show Section One',
                      'hide' => 'Hide Section One',
                ),
                ) );
                // ****section Two Poeple add on ****    
                $wp_customize->add_setting( 's_p_four_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 's_p_four_img', array(
                    'section' => 'cd_section_two_a',
                    'label' => 'Person Three Image',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'person_four_name' , array(
                    'default'     => 'Name here',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_four_name', array(
                    'label' => 'Person Three Name',
                    'section'	=> 'cd_section_two_a',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'person_four_title' , array(
                    'default'     => 'Title',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_four_title', array(
                    'label' => 'Person Three title',
                    'section'	=> 'cd_section_two_a',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'person_four_d' , array(
                    'default'     => 'Job Description',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_four_d', array(
                    'label' => 'Person Three Job Description',
                    'section'	=> 'cd_section_two_a',
                    'type'	 => 'textarea',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_four_name', array(
                    'selector' => '#Pfour h2',
                     'render_callback' => function(){
                        echo get_theme_mod('person_four_name');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_four_title', array(
                    'selector' => '#Pfour p',
                    'render_callback' => function(){
                        echo get_theme_mod('person_four_title');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_four_d', array(
                    'selector' => '#PfourI p',
                     'render_callback' => function(){
                        echo get_theme_mod('person_four_d');
                    },
                    ) );
                $wp_customize->add_setting( 's_p_five_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 's_p_five_img', array(
                    'section' => 'cd_section_two_a',
                    'label' => 'Person Five Image',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'person_five_name' , array(
                    'default'     => 'Name here',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_five_name', array(
                    'label' => 'Person Three Name',
                    'section'	=> 'cd_section_two_a',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'person_five_title' , array(
                    'default'     => 'Title',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_five_title', array(
                    'label' => 'Person Five title',
                    'section'	=> 'cd_section_two_a',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'person_five_d' , array(
                    'default'     => 'Job Description',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'person_five_d', array(
                    'label' => 'Person Three Job Description',
                    'section'	=> 'cd_section_two_a',
                    'type'	 => 'textarea',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_five_name', array(
                    'selector' => '#Pfive h2',
                     'render_callback' => function(){
                        echo get_theme_mod('person_five_name');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_five_title', array(
                    'selector' => '#Pfive p',
                    'render_callback' => function(){
                        echo get_theme_mod('person_five_title');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'person_five_d', array(
                    'selector' => '#PfiveI p',
                     'render_callback' => function(){
                        echo get_theme_mod('person_five_d');
                    },
                    ) );
                    // ****section Three****  
                $wp_customize->add_setting( 'cd_section_three_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'cd_section_three_display', array(
                    'label' => 'Display Section Image Gallery',
                    'section' => 'cd_section_three_area',
                    'settings' => 'cd_section_three_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Show Section Three',
                      'hide' => 'Hide Section Three',
                    ),
                    ) );
            
                $wp_customize->add_setting( 'section_three_title' , array(
                    'default'     => 'Section Three',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'section_three_title', array(
                    'label' => 'Section Title',
                    'section'	=> 'cd_section_three_area',
                    'type'	 => 'text',
                    ) );
            
                $wp_customize->selective_refresh->add_partial( 'section_three_title', array(
                    'selector' => '#works h1',
                    'render_callback' => function(){
                        echo get_theme_mod('section_three_title');
                    },
                    ) );
                $wp_customize->add_setting( 'section_three_title_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'section_three_title_font_too_section', array(
                    'label'      => __( 'Gallary Title Font', 'parsmizban' ),
                    'settings'   => 'section_three_title_font',
                    'priority'   => 10, 
                    'section'    => 'cd_section_three_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                 $wp_customize->add_setting( 'cap_g_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'cap_g_font_too_section', array(
                    'label'      => __( 'Gallary Caption Font', 'parsmizban' ),
                    'settings'   => 'cap_g_font',
                    'priority'   => 10, 
                    'section'    => 'cd_section_three_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                $wp_customize->add_setting( 'g_p_one_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'g_p_one_img', array(
                    'section' => 'cd_section_three_area',
                    'label' => 'Image One',
                    'width' => 600,
                    'height' => 600
                    )));

                $wp_customize->add_setting( 'g_p_one_cap_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'g_p_one_cap_display', array(
                    'label' => 'Display Caption for Image One',
                    'section' => 'cd_section_three_area',
                    'settings' => 'g_p_one_cap_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Caption',
                      'hide' => 'Remove Caption',
                    ),
                    ) );
                $wp_customize->add_setting( 'g_p_one_cap' , array(
                    'default'     => 'Caption here',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'g_p_one_cap', array(
                    'label' => 'Caption For Image One',
                    'section'	=> 'cd_section_three_area',
                    'type'	 => 'text',
                    ) );
                
                $wp_customize->selective_refresh->add_partial( 'g_p_one_cap', array(
                    'selector' => '#gone h2',
                    'render_callback' => function(){
                        echo get_theme_mod('g_p_one_cap');
                    },
                    ) );
                $wp_customize->add_setting( 'g_p_two_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'g_p_two_img', array(
                    'section' => 'cd_section_three_area',
                    'label' => 'Image Two',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'g_p_two_cap_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'g_p_two_cap_display', array(
                    'label' => 'Display Caption For Image Two',
                    'section' => 'cd_section_three_area',
                    'settings' => 'g_p_two_cap_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Caption',
                      'hide' => 'Remove Caption',
                    ),
                    ) );
                $wp_customize->add_setting( 'g_p_two_cap' , array(
                    'default'     => 'Caption Here',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'g_p_two_cap', array(
                    'label' => 'Caption For Image Two',
                    'section'	=> 'cd_section_three_area',
                    'type'	 => 'text',
                    ) );
                
                $wp_customize->selective_refresh->add_partial( 'g_p_two_cap', array(
                    'selector' => '#gone h2',
                    'render_callback' => function(){
                        echo get_theme_mod('g_p_one_cap');
                    },
                    ) );
                $wp_customize->add_setting( 'g_p_three_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'g_p_three_img', array(
                    'section' => 'cd_section_three_area',
                    'label' => 'Image Three',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'g_p_three_cap_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'g_p_three_cap_display', array(
                    'label' => 'Display Caption For Image three',
                    'section' => 'cd_section_three_area',
                    'settings' => 'g_p_three_cap_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Caption',
                      'hide' => 'Remove Caption',
                    ),
                    ) );
                $wp_customize->add_setting( 'g_p_three_cap' , array(
                    'default'     => 'Section Three',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'g_p_three_cap', array(
                    'label' => 'Caption For Image Three',
                    'section'	=> 'cd_section_three_area',
                    'type'	 => 'text',
                    ) );
                    
                $wp_customize->selective_refresh->add_partial( 'g_p_three_cap', array(
                    'selector' => '#gone h2',
                    'render_callback' => function(){
                        echo get_theme_mod('g_p_three_cap');
                    },
                    ) );
                $wp_customize->add_setting( 'g_p_four_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'g_p_four_img', array(
                    'section' => 'cd_section_three_area',
                    'label' => 'Image Four',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'g_p_four_cap_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'g_p_four_cap_display', array(
                    'label' => 'Display Caption For Image Four',
                    'section' => 'cd_section_three_area',
                    'settings' => 'g_p_four_cap_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Caption',
                      'hide' => 'Remove Caption',
                    ),
                    ) );
                $wp_customize->add_setting( 'g_p_four_cap' , array(
                    'default'     => 'Section Three',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'g_p_four_cap', array(
                    'label' => 'Caption For Image Four',
                    'section'	=> 'cd_section_three_area',
                    'type'	 => 'text',
                    ) );
                
                $wp_customize->selective_refresh->add_partial( 'g_p_four_cap', array(
                    'selector' => '#gone h2',
                    'render_callback' => function(){
                        echo get_theme_mod('g_p_four_cap');
                    },
                    ) );
                $wp_customize->add_setting( 'g_p_five_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'g_p_five_img', array(
                    'section' => 'cd_section_three_area',
                    'label' => 'Image Five',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'g_p_five_cap_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'g_p_five_cap_display', array(
                    'label' => 'Display Caption For Image Five',
                    'section' => 'cd_section_three_area',
                    'settings' => 'g_p_five_cap_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Caption',
                      'hide' => 'Remove Caption',
                    ),
                    ) );
                $wp_customize->add_setting( 'g_p_five_cap' , array(
                    'default'     => 'Section Three',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'g_p_five_cap', array(
                    'label' => 'Caption For Image Five',
                    'section'	=> 'cd_section_three_area',
                    'type'	 => 'text',
                    ) );
                
                $wp_customize->selective_refresh->add_partial( 'g_p_five_cap', array(
                    'selector' => '#gone h2',
                    'render_callback' => function(){
                        echo get_theme_mod('g_p_five_cap');
                    },
                    ) );
                $wp_customize->add_setting( 'g_p_six_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'g_p_six_img', array(
                    'section' => 'cd_section_three_area',
                    'label' => 'Image Six',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'g_p_six_cap_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'g_p_six_cap_display', array(
                    'label' => 'Display Caption For Image Six',
                    'section' => 'cd_section_three_area',
                    'settings' => 'g_p_six_cap_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Caption',
                      'hide' => 'Remove Caption',
                    ),
                    ) );
                $wp_customize->add_setting( 'g_p_six_cap' , array(
                    'default'     => 'Section Three',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'g_p_six_cap', array(
                    'label' => 'Caption For Image Six',
                    'section'	=> 'cd_section_three_area',
                    'type'	 => 'text',
                    ) );
                    
                $wp_customize->selective_refresh->add_partial( 'g_p_six_cap', array(
                    'selector' => '#gone h2',
                    'render_callback' => function(){
                        echo get_theme_mod('g_p_six_cap');
                    },
                    ) );
                $wp_customize->add_setting( 'g_p_seven_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'g_p_seven_img', array(
                    'section' => 'cd_section_three_area',
                    'label' => 'Image Seven',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'g_p_seven_cap_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'g_p_seven_cap_display', array(
                    'label' => 'Display Caption For Image Seven',
                    'section' => 'cd_section_three_area',
                    'settings' => 'g_p_seven_cap_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Caption',
                      'hide' => 'Remove Caption',
                    ),
                    ) );
                $wp_customize->add_setting( 'g_p_seven_cap' , array(
                    'default'     => 'Section Three',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'g_p_seven_cap', array(
                    'label' => 'Caption For Image Seven',
                    'section'	=> 'cd_section_three_area',
                    'type'	 => 'text',
                    ) );
                    
                $wp_customize->selective_refresh->add_partial( 'g_p_seven_cap', array(
                    'selector' => '#gone h2',
                    'render_callback' => function(){
                        echo get_theme_mod('g_p_seven_cap');
                    },
                    ) );
                $wp_customize->add_setting( 'g_p_eight_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'g_p_eight_img', array(
                    'section' => 'cd_section_three_area',
                    'label' => 'Image Eight',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'g_p_eight_cap_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'g_p_eight_cap_display', array(
                    'label' => 'Display Caption For Image Eight',
                    'section' => 'cd_section_three_area',
                    'settings' => 'g_p_eight_cap_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Caption',
                      'hide' => 'Remove Caption',
                    ),
                    ) );
                $wp_customize->add_setting( 'g_p_eight_cap' , array(
                    'default'     => 'Section Three',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'g_p_eight_cap', array(
                    'label' => 'Caption For Image Eight',
                    'section'	=> 'cd_section_three_area',
                    'type'	 => 'text',
                    ) );
                    
                $wp_customize->selective_refresh->add_partial( 'g_p_eight_cap', array(
                    'selector' => '#gone h2',
                    'render_callback' => function(){
                        echo get_theme_mod('g_p_eight_cap');
                    },
                    ) );
                $wp_customize->add_setting( 'g_p_nine_img' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'g_p_nine_img', array(
                    'section' => 'cd_section_three_area',
                    'label' => 'Image Nine',
                    'width' => 600,
                    'height' => 600
                    )));
                $wp_customize->add_setting( 'g_p_nine_cap_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                    ) );
                  
                $wp_customize->add_control( 'g_p_nine_cap_display', array(
                    'label' => 'Display Caption For Image Nine',
                    'section' => 'cd_section_three_area',
                    'settings' => 'g_p_nine_cap_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Caption',
                      'hide' => 'Remove Caption',
                    ),
                    ) );
                $wp_customize->add_setting( 'g_p_nine_cap' , array(
                    'default'     => 'Section Three',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'g_p_nine_cap', array(
                    'label' => 'Caption For Image Nine',
                    'section'	=> 'cd_section_three_area',
                    'type'	 => 'text',
                    ) );
                    
                $wp_customize->selective_refresh->add_partial( 'g_p_nine_cap', array(
                    'selector' => '#gone h2',
                    'render_callback' => function(){
                        echo get_theme_mod('g_p_nine_cap');
                    },
                    ) );
                $wp_customize->selective_refresh->add_partial( 'g_p_one_img', array(
                    'selector' => '#gallery #gone',
                    'render_callback' => 'g_p_one_img',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'g_p_two_img', array(
                    'selector' => '#gallery #gtwo',
                    'render_callback' => 'g_p_two_img',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'g_p_three_img', array(
                    'selector' => '#gallery #gthree',
                    'render_callback' => 'g_p_three_img',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'g_p_four_img', array(
                    'selector' => '#gallery #gfour',
                    'render_callback' => 'g_p_four_img',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'g_p_five_img', array(
                    'selector' => '#gallery #gfive',
                    'render_callback' => 'g_p_five_img',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'g_p_six_img', array(
                    'selector' => '#gallery #gsix',
                    'render_callback' => 'g_p_six_img',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'g_p_seven_img', array(
                    'selector' => '#gallery #gseven',
                    'render_callback' => 'g_p_seven_img',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'g_p_eight_img', array(
                    'selector' => '#gallery #geight',
                    'render_callback' => 'g_p_eight_img',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'g_p_nine_img', array(
                    'selector' => '#gallery #gnine',
                    'render_callback' => 'g_p_enine_img',
                    ) );
                 // ****section Four  ****  
                $wp_customize->add_setting( 'cd_Sc_s_four' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                      
                $wp_customize->add_control( 'cd_Sc_s_four', array(
                    'label' => 'Display Section Four',
                    'section' => 'cd_section_four_area',
                    'settings' => 'cd_Sc_s_four',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Section Four',
                      'hide' => 'Remove Section Four',
                ),
                ) );
                $wp_customize->add_setting( 'section_four_title' , array(
                    'default'     => 'Section Heading',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'section_four_title', array(
                    'label' => 'Section Heading',
                    'section'	=> 'cd_section_four_area',
                    'type'	 => 'text',
                    ) );
            
                $wp_customize->selective_refresh->add_partial( 'section_four_title', array(
                    'selector' => '#design h1',
                    'render_callback' => function(){
                        echo get_theme_mod('section_four_title');
                    },
                    ) );
                $wp_customize->add_setting( 'section_four_title_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'section_four_title_too_section', array(
                    'label'      => __( 'Servies Title Font', 'parsmizban' ),
                    'settings'   => 'section_four_title_font',
                    'priority'   => 10, 
                    'section'    => 'cd_section_four_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                 $wp_customize->add_setting( 'section_four_tab_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'section_four_tab_too_section', array(
                    'label'      => __( 'Servies Tab Font', 'parsmizban' ),
                    'settings'   => 'section_four_tab_font',
                    'priority'   => 10, 
                    'section'    => 'cd_section_four_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                 $wp_customize->add_setting( 'four_inner_title_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'four_inner_title_font_too_section', array(
                    'label'      => __( 'Inner title Font', 'parsmizban' ),
                    'settings'   => 'four_inner_title_font',
                    'priority'   => 10, 
                    'section'    => 'cd_section_four_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                 $wp_customize->add_setting( 'four_inner_d_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'four_inner_d_font_too_section', array(
                    'label'      => __( 'Inner Description Font', 'parsmizban' ),
                    'settings'   => 'four_inner_d_font',
                    'priority'   => 10, 
                    'section'    => 'cd_section_four_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                $wp_customize->add_setting( 's_one_title' , array(
                    'default'     => 'Title',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 's_one_title', array(
                    'label' => 'Section One Title',
                    'section'	=> 'cd_section_four_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->selective_refresh->add_partial( 's_one_title', array(
                    'selector' => '#page1 h3',
                    'render_callback' => function(){
                        echo get_theme_mod('s_one_title');
                    },
                    ) );
                $wp_customize->add_setting( 'skill_img_one' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'skill_img_one', array(
                    'section' => 'cd_section_four_area',
                    'label' => 'Image One',
                    'width' => 1920,
                    'height' => 1080
                    )));
                $wp_customize->add_setting( 'I_one_title' , array(
                    'default'     => 'Inner Title One',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'I_one_title', array(
                    'label' => 'Inner Title One',
                    'section'	=> 'cd_section_four_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'I_one_title', array(
                    'selector' => '#page1 h2',
                    'render_callback' => function(){
                        echo get_theme_mod('I_one_title');
                    },
                    ) );
                $wp_customize->add_setting( 'I_one_d' , array(
                    'default'     => 'Inner One Description',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'I_one_d', array(
                    'label' => 'Inner Description One',
                    'section'	=> 'cd_section_four_area',
                    'type'	 => 'textarea',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'I_one_d', array(
                    'selector' => '#page1 p',
                    'render_callback' => function(){
                        echo get_theme_mod('I_one_d');
                    },
                    ) );
                $wp_customize->add_setting( 's_two_title' , array(
                    'default'     => 'Title',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 's_two_title', array(
                    'label' => 'Section Two Title',
                    'section'	=> 'cd_section_four_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->selective_refresh->add_partial( 's_two_title', array(
                    'selector' => '#page2 h3',
                    'render_callback' => function(){
                        echo get_theme_mod('s_two_title');
                    },
                    ) );
                $wp_customize->add_setting( 'skill_img_two' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'skill_img_two', array(
                    'section' => 'cd_section_four_area',
                    'label' => 'Image One',
                    'width' => 1920,
                    'height' => 1080
                    )));
                $wp_customize->add_setting( 'I_two_title' , array(
                    'default'     => 'Inner Title',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'I_two_title', array(
                    'label' => 'Inner Title One',
                    'section'	=> 'cd_section_four_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'I_two_title', array(
                    'selector' => '#page2 h2',
                    'render_callback' => function(){
                        echo get_theme_mod('I_two_title');
                    },
                    ) );
                $wp_customize->add_setting( 'I_two_d' , array(
                    'default'     => 'Inner Description Two',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'I_two_d', array(
                    'label' => 'Inner Description Two ',
                    'section'	=> 'cd_section_four_area',
                    'type'	 => 'textarea',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'I_two_d', array(
                    'selector' => '#page2 p',
                    'render_callback' => function(){
                        echo get_theme_mod('I_two_d');
                    },
                    ) );
                $wp_customize->add_setting( 's_three_title' , array(
                    'default'     => 'Title',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 's_three_title', array(
                    'label' => 'Section Three Title',
                    'section'	=> 'cd_section_four_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->selective_refresh->add_partial( 's_three_title', array(
                    'selector' => '#page3 h3',
                    'render_callback' => function(){
                        echo get_theme_mod('s_three_title');
                    },
                    ) );
                $wp_customize->add_setting( 'skill_img_three' , array(
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'skill_img_three', array(
                    'section' => 'cd_section_four_area',
                    'label' => 'Image Three',
                    'width' => 1920,
                    'height' => 1080
                    )));
                $wp_customize->add_setting( 'I_three_title' , array(
                    'default'     => 'Inner Title Three',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'I_three_title', array(
                    'label' => 'Inner Title Three',
                    'section'	=> 'cd_section_four_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'I_three_title', array(
                    'selector' => '#page3 h2',
                    'render_callback' => function(){
                        echo get_theme_mod('I_three_title');
                    },
                    ) );
                $wp_customize->add_setting( 'I_three_d' , array(
                    'default'     => 'Inner Title Three',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'I_three_d', array(
                    'label' => 'Inner Description Three',
                    'section'	=> 'cd_section_four_area',
                    'type'	 => 'textarea',
                    ) );
                $wp_customize->selective_refresh->add_partial( 'I_three_d', array(
                    'selector' => '#page3 p',
                    'render_callback' => function(){
                        echo get_theme_mod('I_three_d');
                    },
                    ) );
            // ****section Four  ****  

                $wp_customize->add_setting( 'contact_heading' , array(
                    'default'     => 'Section Heading',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'contact_heading', array(
                    'label' => 'Section Heading',
                    'section'	=> 'contact_area',
                    'type'	 => 'text',
                    ) );
            
                $wp_customize->selective_refresh->add_partial( 'contact_heading', array(
                    'selector' => '#contact h1',
                    'render_callback' => function(){
                        echo get_theme_mod('contact_heading');
                    },
                    ) );
                $wp_customize->add_setting( 'contact_heading_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'contact_heading_four_title_too_section', array(
                    'label'      => __( 'Servies Title Font', 'parsmizban' ),
                    'settings'   => 'contact_heading_font',
                    'priority'   => 10, 
                    'section'    => 'contact_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );
                 $wp_customize->add_setting( 'contact_inner_font', array(
                    'default'    => 'f1', 
                    'type'       => 'theme_mod', 
                    'capability' => 'edit_theme_options', 
                    
                    ) 
                    );
                $wp_customize->add_control( new WP_Customize_Control($wp_customize,'contact_inner_four_title_too_section', array(
                    'label'      => __( 'Inner Text Font', 'parsmizban' ),
                    'settings'   => 'contact_inner_font',
                    'priority'   => 10, 
                    'section'    => 'contact_area',
                    'type'    => 'select',
                    'choices' => array(
                     'f1' => 'Roboto',
                     'f2' => 'Open Sans',
                     'f3' => 'Lato',
                     'f4' => 'Martel Sans',
                     'f5' => 'Amatic SC',
                     'f6' => 'Cambay',
                     'f7' => 'Source San Pro',
                     'f8' => 'Roboto Condensed',
                     'f9' => 'Oswald',
                     'f10' => 'Raleway',
                     'f11' => 'Sigmar',
                     'f12' => 'Lobster',
                     'f13' => 'Indie Flower',
                     'f14' => 'Dancing Script',
                     'f15' => 'Zhi Mang Xing',
                    )
                 )
                 ) );     
                $wp_customize->add_setting( 'contact_title' , array(
                    'default'     => 'Contact us',
                    'transport'   => 'postMessage',
                    ) );
                $wp_customize->add_control( 'contact_title', array(
                    'label' => 'Section Heading',
                    'section'	=> 'contact_area',
                    'type'	 => 'text',
                    ) );
            
                $wp_customize->selective_refresh->add_partial( 'contact_title', array(
                    'selector' => '#contact h2',
                    'render_callback' => function(){
                        echo get_theme_mod('contact_title');
                    },
                    ) );
                $wp_customize->add_setting( 'contact_map' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                          
                $wp_customize->add_control( 'contact_map', array(
                    'label' => 'Display Map',
                    'section' => 'contact_area',
                    'settings' => 'contact_map',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Map',
                      'hide' => 'Remove Map',
                ),
                ) );
                $wp_customize->add_setting( 'code_map' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'code_map', array(
                    'label' => 'Inner Three Title',
                    'section'	=> 'contact_area',
                    'type'	 => 'textarea',
                    ) );


                        // **** Social media section controls
                $wp_customize->add_setting( 'fb_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                          
                $wp_customize->add_control( 'fb_display', array(
                    'label' => 'Display Facebook Icon',
                    'section' => 'cd_main_sm_area',
                    'settings' => 'fb_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Facebook Icon',
                      'hide' => 'Remove Facebook Icon',
                ),
                ) );
                $wp_customize->add_setting( 'fb_main_link' , array(
                    'default'     => 'https://www.facebook.com',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'fb_main_link', array(
                    'label' => 'Facebook Url',
                    'section'	=> 'cd_main_sm_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'ig_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                              
                $wp_customize->add_control( 'ig_display', array(
                    'label' => 'Instagram Icon',
                    'section' => 'cd_main_sm_area',
                    'settings' => 'ig_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Instagram Icon',
                      'hide' => 'Remove Instagram Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ig_main_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ig_main_link', array(
                    'label' => 'Instagram Url',
                    'section'	=> 'cd_main_sm_area',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'tw_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'tw_display', array(
                    'label' => 'Twitter Icon',
                    'section' => 'cd_main_sm_area',
                    'settings' => 'tw_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Twitter Icon',
                      'hide' => 'Remove Twitter Icon',
                ),
                ) );
                $wp_customize->add_setting( 'tw_main_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'tw_main_link', array(
                    'label' => 'Twitter Url',
                    'section'	=> 'cd_main_sm_area',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'yt_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'yt_display', array(
                    'label' => 'Youtube Icon',
                    'section' => 'cd_main_sm_area',
                    'settings' => 'yt_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Youtube Icon',
                      'hide' => 'Remove Youtube Icon',
                ),
                ) );
                $wp_customize->add_setting( 'yt_main_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'yt_main_link', array(
                    'label' => 'Youtube Url',
                    'section'	=> 'cd_main_sm_area',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'ln_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'ln_display', array(
                    'label' => 'Linkedin Icon',
                    'section' => 'cd_main_sm_area',
                    'settings' => 'ln_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Linkedin Icon',
                      'hide' => 'Remove Linkedin Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ln_main_link' , array(
                    'default'     => 'https://www.linkedin.com',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ln_main_link', array(
                    'label' => 'Linkedin Url',
                    'section'	=> 'cd_main_sm_area',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'ln_main_link' , array(
                    'default'     => 'https://www.linkedin.com',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ln_main_link', array(
                    'label' => 'Linkedin Url',
                    'section'	=> 'cd_main_sm_area',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'pin_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'pin_display', array(
                    'label' => 'Pinterest Icon',
                    'section' => 'cd_main_sm_area',
                    'settings' => 'pin_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Pinterest Icon',
                      'hide' => 'Remove Pinterest Icon',
                ),
                ) );

                $wp_customize->add_setting( 'pin_main_link' , array(
                    'default'     => 'https://www.pinterest.com/',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'pin_main_link', array(
                    'label' => 'Pinterest Url',
                    'section'	=> 'cd_main_sm_area',
                    'type'	 => 'text',
                ) );
                 // **** Social media person one controls
                 $wp_customize->add_setting( 'fb_p_one_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                          
                $wp_customize->add_control( 'fb_p_one_display', array(
                    'label' => 'Display Facebook Icon',
                    'section' => 'cd_person_one_sm',
                    'settings' => 'fb_p_one_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Facebook Icon',
                      'hide' => 'Remove Facebook Icon',
                ),
                ) );
                $wp_customize->add_setting( 'fb_p_one_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'fb_p_one_link', array(
                    'label' => 'Facebook Url',
                    'section'	=> 'cd_person_one_sm',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'ig_p_one_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                              
                $wp_customize->add_control( 'ig_p_one_display', array(
                    'label' => 'Instagram Icon',
                    'section' => 'cd_person_one_sm',
                    'settings' => 'ig_p_one_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Instagram Icon',
                      'hide' => 'Remove Instagram Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ig_main_p_one_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ig_main_p_one_link', array(
                    'label' => 'Instagram Url',
                    'section'	=> 'cd_person_one_sm',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'tw_p_one_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'tw_p_one_display', array(
                    'label' => 'Twitter Icon',
                    'section' => 'cd_person_one_sm',
                    'settings' => 'tw_p_one_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Twitter Icon',
                      'hide' => 'Remove Twitter Icon',
                ),
                ) );
                $wp_customize->add_setting( 'tw_main_p_one_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'tw_main_p_one_link', array(
                    'label' => 'Twitter Url',
                    'section'	=> 'cd_person_one_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'yt_p_one_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'yt_p_one_display', array(
                    'label' => 'Youtube Icon',
                    'section' => 'cd_person_one_sm',
                    'settings' => 'yt_p_one_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Youtube Icon',
                      'hide' => 'Remove Youtube Icon',
                ),
                ) );
                $wp_customize->add_setting( 'yt_main_p_one_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'yt_main_p_one_link', array(
                    'label' => 'Youtube Url',
                    'section'	=> 'cd_person_one_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'ln_p_one_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'ln_p_one_display', array(
                    'label' => 'Linkedin Icon',
                    'section' => 'cd_person_one_sm',
                    'settings' => 'ln_p_one_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Linkedin Icon',
                      'hide' => 'Remove Linkedin Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ln_main_p_one_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ln_main_p_one_link', array(
                    'label' => 'Linkedin Url',
                    'section'	=> 'cd_person_one_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'pin_p_one_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'pin_p_one_display', array(
                    'label' => 'Pinterest Icon',
                    'section' => 'cd_person_one_sm',
                    'settings' => 'pin_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Pinterest Icon',
                      'hide' => 'Remove Pinterest Icon',
                ),
                ) );
                $wp_customize->add_setting( 'pin_p_one_link' , array(
                    'default'     => 'https://www.pinterest.com',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'pin_p_one_link', array(
                    'label' => 'Pinterest Url',
                    'section'	=> 'cd_person_one_sm',
                    'type'	 => 'text',
                ) );
                 // **** Social media person two controls
                 $wp_customize->add_setting( 'fb_p_two_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                          
                $wp_customize->add_control( 'fb_p_two_display', array(
                    'label' => 'Display Facebook Icon',
                    'section' => 'cd_person_two_sm',
                    'settings' => 'fb_p_two_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Facebook Icon',
                      'hide' => 'Remove Facebook Icon',
                ),
                ) );
                $wp_customize->add_setting( 'fb_p_two_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'fb_p_two_link', array(
                    'label' => 'Facebook Url',
                    'section'	=> 'cd_person_two_sm',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'ig_p_two_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                              
                $wp_customize->add_control( 'ig_p_two_display', array(
                    'label' => 'Instagram Icon',
                    'section' => 'cd_person_two_sm',
                    'settings' => 'ig_p_two_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Instagram Icon',
                      'hide' => 'Remove Instagram Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ig_main_p_two_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ig_main_p_two_link', array(
                    'label' => 'Instagram Url',
                    'section'	=> 'cd_person_two_sm',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'tw_p_two_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'tw_p_two_display', array(
                    'label' => 'Twitter Icon',
                    'section' => 'cd_person_two_sm',
                    'settings' => 'tw_p_two_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Twitter Icon',
                      'hide' => 'Remove Twitter Icon',
                ),
                ) );
                $wp_customize->add_setting( 'tw_main_p_two_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'tw_main_p_two_link', array(
                    'label' => 'Twitter Url',
                    'section'	=> 'cd_person_two_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'yt_p_two_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'yt_p_two_display', array(
                    'label' => 'Youtube Icon',
                    'section' => 'cd_person_two_sm',
                    'settings' => 'yt_p_two_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Youtube Icon',
                      'hide' => 'Remove Youtube Icon',
                ),
                ) );
                $wp_customize->add_setting( 'yt_main_p_two_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'yt_main_p_two_link', array(
                    'label' => 'Youtube Url',
                    'section'	=> 'cd_person_two_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'ln_p_two_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'ln_p_two_display', array(
                    'label' => 'Linkedin Icon',
                    'section' => 'cd_person_two_sm',
                    'settings' => 'ln_p_two_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Linkedin Icon',
                      'hide' => 'Remove Linkedin Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ln_main_p_two_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ln_main_p_two_link', array(
                    'label' => 'Linkedin Url',
                    'section'	=> 'cd_person_two_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'pin_p_two_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'pin_p_two_display', array(
                    'label' => 'Pinterest Icon',
                    'section' => 'cd_person_two_sm',
                    'settings' => 'pin_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Pinterest Icon',
                      'hide' => 'Remove Pinterest Icon',
                ),
                ) );
                $wp_customize->add_setting( 'pin_p_two_link' , array(
                    'default'     => 'https://www.pinterest.com',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'pin_p_one_link', array(
                    'label' => 'Pinterest Url',
                    'section'	=> 'cd_person_two_sm',
                    'type'	 => 'text',
                ) );
                 // **** Social media person three controls
                 $wp_customize->add_setting( 'fb_p_three_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                          
                $wp_customize->add_control( 'fb_p_three_display', array(
                    'label' => 'Display Facebook Icon',
                    'section' => 'cd_person_three_sm',
                    'settings' => 'fb_p_three_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Facebook Icon',
                      'hide' => 'Remove Facebook Icon',
                ),
                ) );
                $wp_customize->add_setting( 'fb_p_three_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'fb_p_three_link', array(
                    'label' => 'Facebook Url',
                    'section'	=> 'cd_person_three_sm',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'ig_p_three_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                              
                $wp_customize->add_control( 'ig_p_three_display', array(
                    'label' => 'Instagram Icon',
                    'section' => 'cd_person_three_sm',
                    'settings' => 'ig_p_three_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Instagram Icon',
                      'hide' => 'Remove Instagram Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ig_main_p_three_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ig_main_p_three_link', array(
                    'label' => 'Instagram Url',
                    'section'	=> 'cd_person_three_sm',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'tw_p_three_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'tw_p_three_display', array(
                    'label' => 'Twitter Icon',
                    'section' => 'cd_person_three_sm',
                    'settings' => 'tw_p_three_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Twitter Icon',
                      'hide' => 'Remove Twitter Icon',
                ),
                ) );
                $wp_customize->add_setting( 'tw_main_p_three_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'tw_main_p_three_link', array(
                    'label' => 'Twitter Url',
                    'section'	=> 'cd_person_three_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'yt_p_three_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'yt_p_three_display', array(
                    'label' => 'Youtube Icon',
                    'section' => 'cd_person_three_sm',
                    'settings' => 'yt_p_three_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Youtube Icon',
                      'hide' => 'Remove Youtube Icon',
                ),
                ) );
                $wp_customize->add_setting( 'yt_main_p_three_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'yt_main_p_three_link', array(
                    'label' => 'Youtube Url',
                    'section'	=> 'cd_person_three_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'ln_p_three_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'ln_p_three_display', array(
                    'label' => 'Linkedin Icon',
                    'section' => 'cd_person_three_sm',
                    'settings' => 'ln_p_three_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Linkedin Icon',
                      'hide' => 'Remove Linkedin Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ln_main_p_three_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ln_main_p_three_link', array(
                    'label' => 'Linkedin Url',
                    'section'	=> 'cd_person_three_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'pin_p_three_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'pin_p_three_display', array(
                    'label' => 'Pinterest Icon',
                    'section' => 'cd_person_three_sm',
                    'settings' => 'pin_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Pinterest Icon',
                      'hide' => 'Remove Pinterest Icon',
                ),
                ) );
                $wp_customize->add_setting( 'pin_p_three_link' , array(
                    'default'     => 'https://www.pinterest.com',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'pin_p_three_link', array(
                    'label' => 'Pinterest Url',
                    'section'	=> 'cd_person_three_sm',
                    'type'	 => 'text',
                ) );
                 // **** Social media person four controls
                 $wp_customize->add_setting( 'fb_p_four_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                          
                $wp_customize->add_control( 'fb_p_four_display', array(
                    'label' => 'Display Facebook Icon',
                    'section' => 'cd_person_four_sm',
                    'settings' => 'fb_p_four_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Facebook Icon',
                      'hide' => 'Remove Facebook Icon',
                ),
                ) );
                $wp_customize->add_setting( 'fb_p_four_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'fb_p_four_link', array(
                    'label' => 'Facebook Url',
                    'section'	=> 'cd_person_four_sm',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'ig_p_four_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                              
                $wp_customize->add_control( 'ig_p_four_display', array(
                    'label' => 'Instagram Icon',
                    'section' => 'cd_person_four_sm',
                    'settings' => 'ig_p_four_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Instagram Icon',
                      'hide' => 'Remove Instagram Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ig_main_p_four_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ig_main_p_four_link', array(
                    'label' => 'Instagram Url',
                    'section'	=> 'cd_person_four_sm',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'tw_p_four_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'tw_p_four_display', array(
                    'label' => 'Twitter Icon',
                    'section' => 'cd_person_four_sm',
                    'settings' => 'tw_p_four_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Twitter Icon',
                      'hide' => 'Remove Twitter Icon',
                ),
                ) );
                $wp_customize->add_setting( 'tw_main_p_four_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'tw_main_p_four_link', array(
                    'label' => 'Twitter Url',
                    'section'	=> 'cd_person_four_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'yt_p_four_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'yt_p_four_display', array(
                    'label' => 'Youtube Icon',
                    'section' => 'cd_person_four_sm',
                    'settings' => 'yt_p_four_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Youtube Icon',
                      'hide' => 'Remove Youtube Icon',
                ),
                ) );
                $wp_customize->add_setting( 'yt_main_p_four_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'yt_main_p_four_link', array(
                    'label' => 'Youtube Url',
                    'section'	=> 'cd_person_four_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'ln_p_four_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'ln_p_four_display', array(
                    'label' => 'Linkedin Icon',
                    'section' => 'cd_person_four_sm',
                    'settings' => 'ln_p_four_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Linkedin Icon',
                      'hide' => 'Remove Linkedin Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ln_main_p_four_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ln_main_p_four_link', array(
                    'label' => 'Linkedin Url',
                    'section'	=> 'cd_person_four_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'pin_p_four_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'pin_p_four_display', array(
                    'label' => 'Pinterest Icon',
                    'section' => 'cd_person_four_sm',
                    'settings' => 'pin_p_four_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Pinterest Icon',
                      'hide' => 'Remove Pinterest Icon',
                ),
                ) );
                $wp_customize->add_setting( 'pin_p_four_link' , array(
                    'default'     => 'https://www.pinterest.com',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'pin_p_four_link', array(
                    'label' => 'Pinterest Url',
                    'section'	=> 'cd_person_four_sm',
                    'type'	 => 'text',
                ) );
                 // **** Social media person five controls
                 $wp_customize->add_setting( 'fb_p_five_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                          
                $wp_customize->add_control( 'fb_p_five_display', array(
                    'label' => 'Display Facebook Icon',
                    'section' => 'cd_person_five_sm',
                    'settings' => 'fb_p_five_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Facebook Icon',
                      'hide' => 'Remove Facebook Icon',
                ),
                ) );
                $wp_customize->add_setting( 'fb_p_five_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'fb_p_five_link', array(
                    'label' => 'Facebook Url',
                    'section'	=> 'cd_person_five_sm',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'ig_p_five_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                              
                $wp_customize->add_control( 'ig_p_five_display', array(
                    'label' => 'Instagram Icon',
                    'section' => 'cd_person_five_sm',
                    'settings' => 'ig_p_five_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Instagram Icon',
                      'hide' => 'Remove Instagram Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ig_main_p_five_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ig_main_p_five_link', array(
                    'label' => 'Instagram Url',
                    'section'	=> 'cd_person_five_sm',
                    'type'	 => 'text',
                    ) );
                $wp_customize->add_setting( 'tw_p_five_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'tw_p_five_display', array(
                    'label' => 'Twitter Icon',
                    'section' => 'cd_person_five_sm',
                    'settings' => 'tw_p_five_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Twitter Icon',
                      'hide' => 'Remove Twitter Icon',
                ),
                ) );
                $wp_customize->add_setting( 'tw_main_p_five_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'tw_main_p_five_link', array(
                    'label' => 'Twitter Url',
                    'section'	=> 'cd_person_five_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'yt_p_five_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'yt_p_five_display', array(
                    'label' => 'Youtube Icon',
                    'section' => 'cd_person_five_sm',
                    'settings' => 'yt_p_five_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Youtube Icon',
                      'hide' => 'Remove Youtube Icon',
                ),
                ) );
                $wp_customize->add_setting( 'yt_main_p_five_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'yt_main_p_five_link', array(
                    'label' => 'Youtube Url',
                    'section'	=> 'cd_person_five_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'ln_p_five_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'ln_p_five_display', array(
                    'label' => 'Linkedin Icon',
                    'section' => 'cd_person_five_sm',
                    'settings' => 'ln_p_five_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Linkedin Icon',
                      'hide' => 'Remove Linkedin Icon',
                ),
                ) );
                $wp_customize->add_setting( 'ln_main_p_five_link' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'ln_main_p_five_link', array(
                    'label' => 'Linkedin Url',
                    'section'	=> 'cd_person_five_sm',
                    'type'	 => 'text',
                ) );
                $wp_customize->add_setting( 'pin_p_five_display' , array(
                    'default'     => true,
                    'transport'   => 'refresh',
                ) );
                                  
                $wp_customize->add_control( 'pin_p_five_display', array(
                    'label' => 'Pinterest Icon',
                    'section' => 'cd_person_one_sm',
                    'settings' => 'pin_p_five_display',
                    'type' => 'radio',
                    'choices' => array(
                      'show' => 'Add Pinterest Icon',
                      'hide' => 'Remove Pinterest Icon',
                ),
                ) );
                $wp_customize->add_setting( 'pin_p_five_link' , array(
                    'default'     => 'https://www.pinterest.com',
                    'transport'   => 'refresh',
                    ) );
                $wp_customize->add_control( 'pin_p_five_link', array(
                    'label' => 'Pinterest Url',
                    'section'	=> 'cd_person_five_sm',
                    'type'	 => 'text',
                ) );
            // Footer Controls

            $wp_customize->add_setting( 'footer_font', array(
                'default'    => 'f1', 
                'type'       => 'theme_mod', 
                'capability' => 'edit_theme_options', 
                
                ) 
                );
            $wp_customize->add_control( new WP_Customize_Control($wp_customize,'footer_fout_title_too_section', array(
                'label'      => __( 'footer Text Font', 'parsmizban' ),
                'settings'   => 'footer_font',
                'priority'   => 10, 
                'section'    => 'footer_area',
                'type'    => 'select',
                'choices' => array(
                 'f1' => 'Roboto',
                 'f2' => 'Open Sans',
                 'f3' => 'Lato',
                 'f4' => 'Martel Sans',
                 'f5' => 'Amatic SC',
                 'f6' => 'Cambay',
                 'f7' => 'Source San Pro',
                 'f8' => 'Roboto Condensed',
                 'f9' => 'Oswald',
                 'f10' => 'Raleway',
                 'f11' => 'Sigmar',
                 'f12' => 'Lobster',
                 'f13' => 'Indie Flower',
                 'f14' => 'Dancing Script',
                 'f15' => 'Zhi Mang Xing',
                )
             )
             ) );
             $wp_customize->add_setting( 'footer_heading' , array(
                'default'     => 'Section Heading',
                'transport'   => 'postMessage',
                ) );
            $wp_customize->add_control( 'footer_heading', array(
                'label' => 'Section Heading',
                'section'	=> 'footer_area',
                'type'	 => 'text',
                ) );
        
            $wp_customize->selective_refresh->add_partial( 'footer_heading', array(
                'selector' => '#fab h3',
                'render_callback' => function(){
                    echo get_theme_mod('footer_heading');
                },
                ) );
            $wp_customize->add_setting( 'f_about_d' , array(
                'default'     => 'Footer about your busness here',
                'transport'   => 'postMessage',
                ) );
            $wp_customize->add_control( 'f_about_d', array(
                'label' => 'Footer Description',
                'section'	=> 'footer_area',
                'type'	 => 'textarea',
                ) );
            $wp_customize->selective_refresh->add_partial( 'f_about_d', array(
                'selector' => '#fab p',
                'render_callback' => function(){
                    echo get_theme_mod('f_about_d');
                },
                ) );
}   