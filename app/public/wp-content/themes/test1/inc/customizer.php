<?php 

/**
 * Fany Lab Theme Customizer
 *
 * @package Fancy Lab
 */

function fancy_lab_customizer( $wp_customize ){

	// Copyright Section

	$wp_customize->add_section(
		'sec_copyright', array(
			'title'			=> 'Copyright Settings',
			'description'	=> 'Copyright Section'
		)
	);

			// Field 1 - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label'			=> 'Copyright',
					'description'	=> 'Please, add your copyright information here',
					'section'		=> 'sec_copyright',
					'type'			=> 'text'
				)
			);

	/*--------------------------------------------------------------------------------*/
	// Slider Section

	$wp_customize->add_section(
		'sec_slider', array(
			'title'			=> 'Slider Settings',
			'description'	=> 'Slider Section'
		)
	);	

			// Field 1 - Slider Page Number 1

			$wp_customize->add_setting(
				'set_slider_page1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page1', array(
					'label'			=> 'Set slider page 1',
					'description'	=> 'Set slider page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

			// Field 2 - Slider Button Text Number 1

			$wp_customize->add_setting(
				'set_slider_button_text1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text1', array(
					'label'			=> 'Button Text for Page 1',
					'description'	=> 'Button Text for Page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 3 - Slider Button URL Number 1

			$wp_customize->add_setting(
				'set_slider_button_url1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url1', array(
					'label'			=> 'URL for Page 1',
					'description'	=> 'URL for Page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);	

			/*---------------------------------------*/

			// Field 4 - Slider Page Number 2

			$wp_customize->add_setting(
				'set_slider_page2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page2', array(
					'label'			=> 'Set slider page 2',
					'description'	=> 'Set slider page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

			// Field 5 - Slider Button Text Number 2

			$wp_customize->add_setting(
				'set_slider_button_text2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text2', array(
					'label'			=> 'Button Text for Page 2',
					'description'	=> 'Button Text for Page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 6 - Slider Button URL Number 2

			$wp_customize->add_setting(
				'set_slider_button_url2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url2', array(
					'label'			=> 'URL for Page 2',
					'description'	=> 'URL for Page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);			

			/*---------------------------------------*/

			// Field 7 - Slider Page Number 3

			$wp_customize->add_setting(
				'set_slider_page3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page3', array(
					'label'			=> 'Set slider page 3',
					'description'	=> 'Set slider page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

			// Field 8 - Slider Button Text Number 3

			$wp_customize->add_setting(
				'set_slider_button_text3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text3', array(
					'label'			=> 'Button Text for Page 3',
					'description'	=> 'Button Text for Page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 9 - Slider Button URL Number 3

			$wp_customize->add_setting(
				'set_slider_button_url3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url3', array(
					'label'			=> 'URL for Page 3',
					'description'	=> 'URL for Page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);

				/*--------------------------------------------------------------------------------*/
	// Home Page Settings

	$wp_customize->add_section(
		'sec_home_page', array(
			'title'			=> 'Home Page and Blog Settings',
			'description'	=> 'Home Page Section'
		)
	);	

			// Field 1 -

			$wp_customize->add_setting(
				'set_popular_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_num', array(
					'label'			=> 'Popular Products Max Number',
					'description'	=> 'Popular Products Max Number',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);			
			// Field 2 -

			$wp_customize->add_setting(
				'set_popular_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_col', array(
					'label'			=> 'Popular Products Max Columns',
					'description'	=> 'Popular Products Max Columns',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);			
			// Field 3 - 

			$wp_customize->add_setting(
				'set_new_arrivals_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_num', array(
					'label'			=> 'New Arrivals Max Number',
					'description'	=> 'New Arrivals Max Number',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);			
			// Field 4 - 

			$wp_customize->add_setting(
				'set_new_arrivals_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_col', array(
					'label'			=> 'New Arrivals Max Columns',
					'description'	=> 'New Arrivals Max Columns',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);			


}
add_action( 'customize_register', 'fancy_lab_customizer' );