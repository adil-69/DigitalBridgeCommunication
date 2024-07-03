<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexContactFormWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-contact-form';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Contact Form' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_contact_form',
			[
				'label' => esc_html__( 'Contact Form', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'sec_shortcode',
			[
				'label' => esc_html__( 'Shortcode', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
			]
		);
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$sec_shortcode = $this->get_settings_for_display( 'sec_shortcode' );
		
		?>
		
		<div class="contact-form">
			<?php echo do_shortcode($sec_shortcode);?>
		</div>					
<?php

	}

}
