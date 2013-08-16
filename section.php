<?php
/*
	Section: Placeholder
	Author: Martyn Bowis
	Author URI: http://www.netdesign.co.nz
	Description: A simple image placeholder with options for width, height, text and colors. Great for mockups. Based on placeholder.it
	Class Name: PageLinesPlaceholder
	Filter: component
	Loading: active
*/

class PageLinesPlaceholder extends PageLinesSection {

	function section_opts(){
		$opts = array(
	
			array(
				'title'	=> __( 'Placeholder', 'pagelines' ), 
				'type'	=> 'multi',
				'span'	=> 2,
				'opts'	=> array(
					array(
						'default'		=> 350,
						'type' 			=> 'text',
						'key'			=> 'placeholder_width',
						'label' 		=> __( 'Width', 'pagelines' ),
					),
					array(
						'default'		=> 150,
						'type' 			=> 'text',
						'key'			=> 'placeholder_height',
						'label' 		=> __( 'Height', 'pagelines' ),
					),
					array(
						'default'		=> '',
						'type' 			=> 'text',
						'key'			=> 'placeholder_text',
						'label' 		=> __( 'Text', 'pagelines' ),
						'help'			=> __( 'Enter text you wish to display. Use plus symbol, +, instead of spaces.', 'pagelines' )
					),
					array(
						'default'		=> '000000',
						'type' 			=> 'text',
						'key'			=> 'placeholder_color_bkgd',
						'label' 		=> __( 'Background Color', 'pagelines' ),
						'help'			=> __( 'Enter color of background.  Default is light grey (CCCCCC).', 'pagelines' )
					),
					array(
						'default'		=> 'ffffff',
						'type' 			=> 'text',
						'key'			=> 'placeholder_color_text',
						'label' 		=> __( 'Text Color', 'pagelines' ),
						'help'			=> __( 'Pick color of text.  Default is darker grey (949494).', 'pagelines' )
					),
					
				)
			),

		);

		return $opts;

	}

	function section_template() {
		
		$output = '<img src="http://placehold.it/' . $this->opt('placeholder_width') . 'x' . $this->opt('placeholder_height') . '/' . $this->opt('placeholder_color_bkgd') . '/' . $this->opt('placeholder_color_text') . '/&text=' . $this->opt('placeholder_text') . '">'; // $this->opt('placeholder_image');
		
		printf('<div class="base-wrapper pl-animation-group">%s</div>', $output);
	
		
	}
}


