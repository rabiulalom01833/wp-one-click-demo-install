<?php


 
 


if ( class_exists( 'Kirki' ) ) {
Kirki::add_config( 'hin_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

 

Kirki::add_panel( 'hin_theme_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Hin Option', 'hin' ),
 ) );


//  Kirki::add_section( 'shortable_panel', array(
//     'title'          => esc_html__( 'DRAG DROP SECTION', 'kirki' ), 
//     'panel'          => 'hin_theme_panel',
//     'priority'       => 160,
// ) );

// Kirki::add_field( 'hin_config', [
// 	'type'        => 'sortable',
// 	'settings'    => 'sortable_setting',
// 	'label'       => esc_html__( 'This is the label', 'kirki' ),
// 	'section'     => 'shortable_panel',
// 	'default'     => [
// 		'option2',
// 		'option1', 
// 	],
// 	'choices'     => [
// 		'option1' => esc_html__( 'Hero', 'kirki' ),
// 		'option2' => esc_html__( 'About', 'kirki' ),
		 
// 	],
// 	'priority'    => 10,
// ] );



 /** Section - Top Bar  */

 Kirki::add_section( 'hin_section_top', array(
    'title'          => esc_html__( 'TOP BAR', 'kirki' ), 
    'panel'          => 'hin_theme_panel',
    'priority'       => 160,
) );

 /** Section - Show / Hide */
Kirki::add_field( 'hin_config', [
	'type'        => 'switch',
	'settings'    => 'hin_switch_setting',
	'label'       => esc_html__( 'Show Hide Section', 'kirki' ),
	'section'     => 'hin_section_top',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'kirki' ),
		'off' => esc_html__( 'Hide', 'kirki' ),
	],
    
] );


 /** Field - Phone */

Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'hin_top_phone',
	'label'    => esc_html__( 'Phone', 'kirki' ),
	'section'  => 'hin_section_top',
	'default'  => esc_html__( 'Type Phone' ),
	'priority' => 10,
    'transport' => 'postMessage',
	'js_vars' => array(array(
		'element'  => '.list_1',
			'function'  => 'html', 
			  
	)),
 
    'partial_refresh'    => [
		'hin_top_phone' => [
			'selector'        => '.list_1',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );


 /** Field - Address */

 Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'hin_top_address',
	'label'    => esc_html__( 'Address', 'kirki' ),
	'section'  => 'hin_section_top',
	'default'  => esc_html__( 'Type Address Here' ),
	'priority' => 10,
    'transport' => 'postMessage',
	'js_vars'   => [
		[
			'element'  => '.list_2',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_top_address' => [
			'selector'        => '.list_2',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );

 /** Field - Address */

 Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'hin_top_email',
	'label'    => esc_html__( 'Email', 'kirki' ),
	'section'  => 'hin_section_top',
	'default'  => esc_html__( 'Type Email Here' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.list_3',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_top_email' => [
			'selector'        => '.list_3',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );

 /** Field - Address */

 Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'hin_top_right_button',
	'label'    => esc_html__( 'Button', 'kirki' ),
	'section'  => 'hin_section_top',
	'default'  => esc_html__( 'Type Button' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.header-top-right-text',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_top_right_button' => [
			'selector'        => '.header-top-right-text',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );


/////////////////// Logo here ////////////////////


/** Section - Logo  */

Kirki::add_section( 'hin_section_logo', array(
    'title'          => esc_html__( 'LOGO', 'kirki' ), 
    'panel'          => 'hin_theme_panel',
    'priority'       => 160,
) );

Kirki::add_field( 'hin_config', [
	'type'        => 'image',
	'settings'    => 'hin_top_img_logo',
	'label'       => esc_html__( 'Logo Image', 'kirki' ), 
	'section'     => 'hin_section_logo',
	'priority' => 10,
	'transport'=> 'refresh', 
	'js_vars'   => [
		[
            'element'  => '.navbar-brand a  img',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_top_img_logo' => [
			'selector'        => '.navbar-brand',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );


////////////////// Hero Section ////////////////////


/** Section - Hero  */

Kirki::add_section( 'hin_section_hero', array(
    'title'          => esc_html__( 'HERO AREA', 'kirki' ), 
    'panel'          => 'hin_theme_panel',
    'priority'       => 160,
) );


 /** Section - Show / Hide */
 Kirki::add_field( 'hin_config', [
	'type'        => 'switch',
	'settings'    => 'hin_switch_hero_setting',
	'label'       => esc_html__( 'Show Hide Section', 'kirki' ),
	'section'     => 'hin_section_hero',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'kirki' ),
		'off' => esc_html__( 'Hide', 'kirki' ),
	],
    
] );

/** Field - Hero Title */

Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'hin_hero_title',
	'label'    => esc_html__( 'Name', 'kirki' ),
	'section'  => 'hin_section_hero',
	'default'  => esc_html__( 'I am Rabiul Alam' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.hero-text-home1 h3',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_hero_title' => [
			'selector'        => '.hero-text-home1 h3',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );


Kirki::add_field( 'hin_config', [
	'type'        => 'typography',
	'settings'    => 'hin_title_typography_setting',
	'label'       => esc_html__( 'Title Style', 'kirki' ),
	'section'     => 'hin_section_hero',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'   => [
		[
			'element'  => '.hero-text-home1 h3',
			'function'  => 'css', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_title_typography_setting' => [
			'selector'        => '.hero-text-home1 h3',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );

/** Field - Hero Position */

Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'hin_hero_position',
	'label'    => esc_html__( 'Position', 'kirki' ),
	'section'  => 'hin_section_hero',
	'default'  => esc_html__( 'I am a UI Ux Designer' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.hero-text-home1 h1',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_hero_position' => [
			'selector'        => '.hero-text-home1 h1',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );

/** Field - Hero Position */

Kirki::add_field( 'hin_config', [
	'type'     => 'textarea',
	'settings' => 'hin_hero_des',
	'label'    => esc_html__( 'Description', 'kirki' ),
	'section'  => 'hin_section_hero',
	'default'  => esc_html__( 'Libero habitasse sollicitudin aliquet venenatis iaculis
	placerat amet ligula, eleifend nonummy enim in volutpat diam.' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.hero-text-home1 h4',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_hero_des' => [
			'selector'        => '.hero-text-home1 h4',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );

/** Field - Hero Button */

Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'hin_hero_btn',
	'label'    => esc_html__( 'Button Name', 'kirki' ),
	'section'  => 'hin_section_hero',
	'default'  => esc_html__( 'Libero habitasse sollicitudin aliquet venenatis iaculis
	placerat amet ligula, eleifend nonummy enim in volutpat diam.' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.bttn-bgc-1',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_hero_btn' => [
			'selector'        => '.bttn-bgc-1',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );


/** Field - Hero url */

Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'hin_hero_url',
	'label'    => esc_html__( 'Button URL', 'kirki' ),
	'section'  => 'hin_section_hero',
	'default'  => esc_html__( 'Libero habitasse sollicitudin aliquet venenatis iaculis
	placerat amet ligula, eleifend nonummy enim in volutpat diam.' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.hero-text-home1 a',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_hero_url' => [
			'selector'        => '.hero-text-home1 a',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );

/** Field - Hero url */

Kirki::add_field( 'hin_config', [
	'type'     => 'url',
	'settings' => 'hin_hero_video_url',
	'label'    => esc_html__( 'Youtube Video URL', 'kirki' ),
	'section'  => 'hin_section_hero',
	'default'  => esc_html__( 'Libero habitasse sollicitudin aliquet venenatis iaculis
	placerat amet ligula, eleifend nonummy enim in volutpat diam.' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.open-videos',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_hero_video_url' => [
			'selector'        => '.open-videos',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );


/** Field - Hero Image */

Kirki::add_field( 'hin_config', [
	'type'        => 'image',
	'settings'    => 'hin_hero_thumb_image',
	'label'       => esc_html__( 'Your Image', 'kirki' ), 
	'section'     => 'hin_section_hero',
	'priority' => 10,
	'transport'=> 'postMessage', 
	'js_vars'   => [
		[
            'element'  => '.hero2-man-middle',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_hero_thumb_image' => [
			'selector'        => '.hero2-man-middle',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );

/** Field - Hero Background Image */

Kirki::add_field( 'hin_config', [
	'type'        => 'background',
	'settings'    => 'hero_image_background_setting',
	'label'       => esc_html__( 'Hero Backgroud Image', 'kirki' ),
 	'section'     => 'hin_section_hero',
	'default'     => [
		'background-color'      => '#dae3e8',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.bg-dark-white',
		],
	],
] );



////////////////// About Section ////////////////////


/** Section - About  */

Kirki::add_section( 'hin_section_about', array(
    'title'          => esc_html__( 'ABOUT ME', 'kirki' ), 
    'panel'          => 'hin_theme_panel',
    'priority'       => 160,
) );


 /** Section - Show / Hide */
 Kirki::add_field( 'hin_config', [
	'type'        => 'switch',
	'settings'    => 'hin_switch_about_setting',
	'label'       => esc_html__( 'Show Hide Section', 'kirki' ),
	'section'     => 'hin_section_about',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'kirki' ),
		'off' => esc_html__( 'Hide', 'kirki' ),
	],
    
] );

/** Field - About Title */

Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'hin_about_title',
	'label'    => esc_html__( 'About Title', 'kirki' ),
	'section'  => 'hin_section_about',
	'default'  => esc_html__( 'Let’s Introduce My self' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.section-title-2 h2',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_about_title' => [
			'selector'        => '.section-title-2 h2',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );

 /** Field - About Details */

Kirki::add_field( 'hin_config', [
	'type'     => 'textarea',
	'settings' => 'hin_about_details',
	'label'    => esc_html__( 'About Details', 'kirki' ),
	'section'  => 'hin_section_about',
	'default'  => esc_html__( 'Hi! My name is Alan Michaelis. I am a Web Developer, and I m very passionate a dedicated to my work. With 20years experience as a professional Web develop I have acquired the skills and knowledge necessary to make your project a suc cess. I enjoy every step of the design process,from discussion and collaboratio most satisfaction in seeing the finished do' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.section-title-2 p',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'hin_about_details' => [
			'selector'        => '.section-title-2 p',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );


Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'lists_1',
	'label'    => esc_html__( 'Birthday', 'kirki' ),
	'section'  => 'hin_section_about',
	'default'  => esc_html__( '01.07.1990' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.lists_1',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'lists_1' => [
			'selector'        => '.lists_1',
			'render_callback' => 'wp_get_document_title',
		],	
	  ],
] );

Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'lists_2',
	'label'    => esc_html__( 'City', 'kirki' ),
	'section'  => 'hin_section_about',
	'default'  => esc_html__( '01.07.1990' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.lists_2',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'lists_2' => [
			'selector'        => '.lists_2',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );

Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'lists_3',
	'label'    => esc_html__( 'Study', 'kirki' ),
	'section'  => 'hin_section_about',
	'default'  => esc_html__( '01.07.1990' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.lists_3',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'lists_3' => [
			'selector'        => '.lists_3',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );


Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'lists_4',
	'label'    => esc_html__( 'Website', 'kirki' ),
	'section'  => 'hin_section_about',
	'default'  => esc_html__( '01.07.1990' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.lists_4',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'lists_4' => [
			'selector'        => '.lists_4',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );


Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'lists_5',
	'label'    => esc_html__( 'Phone', 'kirki' ),
	'section'  => 'hin_section_about',
	'default'  => esc_html__( '01.07.1990' ),
	'priority' => 10,
	'transport'=> 'postMessage',
    'js_vars'   => [
		[
			'element'  => '.lists_5',
			'function'  => 'html', 
			  
		],
		 
	],
    'partial_refresh'    => [
		'lists_5' => [
			'selector'        => '.lists_5',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );




 /** Section - Services */

 Kirki::add_section( 'hin_section_services', array(
    'title'          => esc_html__( 'SERVICES', 'kirki' ), 
    'panel'          => 'hin_theme_panel',
    'priority'       => 160,
) );

 

 /** Field - Phone */

Kirki::add_field( 'hin_config', [
	'type'     => 'text',
	'settings' => 'hin_hin_section_services',
	'label'    => esc_html__( 'Section Title', 'kirki' ),
	'section'  => 'hin_section_services',
	'default'  => esc_html__( 'Services' ),
	'priority' => 10,
    'transport' => 'postMessage',
	'js_vars' => array(array(
		'element'  => '.section-title-2 h2',
			'function'  => 'html', 
			  
	)),
 
    'partial_refresh'    => [
		'hin_hin_section_services' => [
			'selector'        => '.section-title-2 h2',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],
] );


Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Services', 'kirki' ),
	'section'     => 'hin_section_services',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add Services', 'kirki' ),
		'field' => 'service_list_title',
	],
	'button_label' => esc_html__('Add New Services', 'kirki' ),
	'settings'     => 'service_repeater',
	'default'      => [
		[
			'service_list_icon' =>  'lni-microphone',
			'service_list_title' => __( 'Business Strategy ', 'kirki' ),
			'servicet_list_description' => __( 'Strategy develop customer organisa knowledge and market perspectivesti hat inform and provoke', 'kirki' ),
			
		],
		 
	],
	'fields' => [
		'about_list_icon' => [
			'type'        => 'select', 
			'label'       => esc_html__( 'Services Icon', 'kirki' ),
			'choices'     => [
				'lni-microphone' => esc_html__( 'Icon 1', 'kirki' ),
				'lni-users' => esc_html__( 'Icon 2', 'kirki' ),
				'lni-medall-alt' => esc_html__( 'Icon 3', 'kirki' ),
			 
			],
		],
		'service_list_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Services Title', 'kirki' ),
 			'default'     => '',
		],
		'servicet_list_description' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Services Description', 'kirki' ),
 			'default'     => '',
		],
	],
	'choices' => [
		'limit' => 6
	],

 
 
    'partial_refresh'    => [
		'service_repeater' => [
			'selector'        => '.services-text-timelined h4',
			'render_callback' => 'wp_get_document_title',
		],
	 
	],

] );
}