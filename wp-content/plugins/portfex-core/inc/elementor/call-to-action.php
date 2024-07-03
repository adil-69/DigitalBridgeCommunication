<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexCallToActionWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-call-to-action';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Call To Action' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_call_to_action',
			[
				'label' => esc_html__( 'Call To Action', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'sec_bg_img',
			[
				'label' => esc_html__( 'Background Image', 'portfex' ),
				'type' => \Elementor\Controls_Manager::MEDIA ,
			]
		);
		
		$this->add_control(
			'sec_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => 'Let\'s Start Creating together',
			]
		);	
		
		$this->add_control(
			'sec_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Hire Me',
			]
		);		
		
		$this->add_control(
			'sec_btn_link',
			[
				'label' => esc_html__( 'Button Link', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '#',
			]
		);		
		
		
		$this->end_controls_section();

		$this->start_controls_section(
		'portfex_cta_style',
			[
				'label' => esc_html__( 'Style', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'cta_background_color', [
				'label' => esc_html__( 'Background Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#C9F31D',
				'selectors' => [
					'{{WRAPPER}} .call-to-action' => 'background: {{VALUE}}',
				],
			]
		);		
		
		$this->add_control(
			'cta_title_color', [
				'label' => esc_html__( 'Title Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#222',
				'selectors' => [
					'{{WRAPPER}} .call-to-action h2' => 'color: {{VALUE}}',
				],
			]
		);		

		$this->add_control(
			'cta_btn_text', [
				'label' => esc_html__( 'Button Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#222',
				'selectors' => [
					'{{WRAPPER}} .border-btn-2' => 'color: {{VALUE}}',
				],
			]
		);	
		
		
		$this->add_control(
			'cta_btn_bor_color', [
				'label' => esc_html__( 'Button Border Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#1C3F39',
				'selectors' => [
					'{{WRAPPER}} .border-btn-2' => 'border-color: {{VALUE}}',
				],
			]
		);		
		
		$this->add_control(
			'cta_hbtn_bg', [
				'label' => esc_html__( 'Button Hover BG', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .border-btn-2::before' => 'background-color: {{VALUE}}',
				],
			]
		);	
		
		$this->add_control(
			'cta_hbtn_text', [
				'label' => esc_html__( 'Button Hover Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#222',
				'selectors' => [
					'{{WRAPPER}} .border-btn-2:hover, .border-btn-2:focus' => 'color: {{VALUE}}',
				],
			]
		);		
		
		
		$this->end_controls_section();
		
	}
	
	protected function render(){		

		$sec_bg_img = $this->get_settings_for_display( 'sec_bg_img' )['url'];
		$sec_title = $this->get_settings_for_display( 'sec_title' );
		$sec_btn_text = $this->get_settings_for_display( 'sec_btn_text' );
		$sec_btn_link = $this->get_settings_for_display( 'sec_btn_link' );
		
		?>
		
		<!-- Start Call To Action -->		
		<div class="container call-to-action text-center" style="background-image: url(<?php echo esc_url($sec_bg_img);?>);">
			<h2><?php echo portfex_wp_kses($sec_title);?></h2>
			<?php if($sec_btn_text): ?>
			<a href="<?php echo esc_html($sec_btn_link);?>" class="border-btn-2"><?php echo esc_html($sec_btn_text);?></a>
			<?php endif; ?>
		</div>	
		<!-- End Call To Action -->
		
						
<?php

	}

}
