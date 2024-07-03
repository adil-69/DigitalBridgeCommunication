<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexContactInfoWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-contact-info';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Contact Info' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_contact_info',
			[
				'label' => esc_html__( 'Contact Info', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'sec_icon',
			[
				'label' => esc_html__( 'Icon', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'bx bx-phone-call',
			]
		);
		
		$this->add_control(
			'sec_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Phone Number',
			]
		);	
		
		$this->add_control(
			'sec_content',
			[
				'label' => esc_html__( 'Content', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => '+88987 58 62 54',
			]
		);		
		
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$sec_icon = $this->get_settings_for_display( 'sec_icon' );
		$sec_title = $this->get_settings_for_display( 'sec_title' );
		$sec_content = $this->get_settings_for_display( 'sec_content' );
		
		?>
		
		<div class="contact-info">	
			<div class="cicon">
				<i class="<?php echo esc_attr($sec_icon);?>"></i>
			</div>
			<h4><?php echo portfex_wp_kses($sec_title);?></h4>
			<p><?php echo portfex_wp_kses($sec_content);?></p>
		</div>

						
<?php

	}

}
