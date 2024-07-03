<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexAboutImgWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-about-img';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('About Image' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_about_img',
			[
				'label' => esc_html__( 'About Image', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'sec_img',
			[
				'label' => esc_html__( 'Section Image', 'portfex' ),
				'type' => \Elementor\Controls_Manager::MEDIA ,
			]
		);	
		
		$this->add_control(
			'sec_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Hire Me',
			]
		);		
		
		
		$this->add_control(
			'sec_btn_link',
			[
				'label' => esc_html__( 'Button Link', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '#',
			]
		);		
		
		
		$this->end_controls_section();
	}
	
	protected function render(){		
	
		$sec_img = $this->get_settings_for_display( 'sec_img' )['url'];
		$sec_btn_text = $this->get_settings_for_display( 'sec_btn_text' );
		$sec_btn_link = $this->get_settings_for_display( 'sec_btn_link' );
		
		?>
		
		<div class="about-img">
			<img src="<?php echo esc_url($sec_img);?>" alt="about image">
			<a href="<?php echo esc_url($sec_btn_link);?>" class="ab_btn"><?php echo esc_html($sec_btn_text);?> <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/icons/arrow-up.svg" alt="arrow"></a>
		</div>		
<?php

	}

}
