<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexButtonsWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-buttons';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Buttons' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_buttons',
			[
				'label' => esc_html__( 'Buttons', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'sec_button_style',
			[
				'label' => esc_html__( 'Style', 'portfex' ),
				'type' => \Elementor\Controls_Manager::SELECT ,
				'default' => '1',
				'options' => [
					'1'  => esc_html__( 'Yellow White', 'portfex' ),
					'2'  => esc_html__( 'Yellow Black', 'portfex' ),
					'3'  => esc_html__( 'Border', 'portfex' ),	
				],
				
			]
		);	
	
		$this->add_control(
			'sec_text',
			[
				'label' => esc_html__( 'Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Book Now',
			]
		);	
		
		$this->add_control(
			'sec_link',
			[
				'label' => esc_html__( 'Link', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '#',
			]
		);		
		
		$this->add_control(
			'sec_onwindow',
			[
				'label' => esc_html__( 'Open New Window', 'portfex' ),
				'type' => \Elementor\Controls_Manager::SWITCHER ,
			]
		);	
		
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$sec_button_style = $this->get_settings_for_display( 'sec_button_style' );
		$sec_text = $this->get_settings_for_display( 'sec_text' );
		$sec_link = $this->get_settings_for_display( 'sec_link' );
		$sec_onwindow = $this->get_settings_for_display( 'sec_onwindow' );
		
		if($sec_button_style == '2'){ ?>
			<a href="<?php echo esc_url($sec_link);?>" <?php if($sec_onwindow == true){ echo 'target="_blank"';}?> class="yellow_btn yb2"><?php echo esc_html($sec_text);?></a>
		<?php }elseif($sec_button_style == '3'){ ?>
			<a href="<?php echo esc_url($sec_link);?>" <?php if($sec_onwindow == true){ echo 'target="_blank"';}?> class="border-btn"><?php echo esc_html($sec_text);?></a>
		<?php }else{ ?>		
			<a href="<?php echo esc_url($sec_link);?>" <?php if($sec_onwindow == true){ echo 'target="_blank"';}?> class="yellow_btn"><?php echo esc_html($sec_text);?></a>
		<?php } 

	}

}
