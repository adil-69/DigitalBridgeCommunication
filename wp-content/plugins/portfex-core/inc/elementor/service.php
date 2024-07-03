<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexServiceWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-service';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Service' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_service',
			[
				'label' => esc_html__( 'Service', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

	
		$this->add_control(
			'ser_number',
			[
				'label' => esc_html__( 'Number', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '01',
			]
		);	
		
		$this->add_control(
			'ser_icon',
			[
				'label' => esc_html__( 'Icon Input SVG Code', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,

			]
		);	
	
		$this->add_control(
			'ser_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Web Development',
			]
		);	
	
		$this->add_control(
			'ser_content',
			[
				'label' => esc_html__( 'Content', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => ' Lorem Ipsum is simply dummy text of the printing and typesetting. ',
			]
		);		
		
		$this->add_control(
			'ser_link',
			[
				'label' => esc_html__( 'Link', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '#',
			]
		);	

		
		$this->end_controls_section();
		
		$this->start_controls_section(
		'portfex_service_style',
			[
				'label' => esc_html__( 'Style', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'service_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR ,
				'default' => '#222',
				'selectors' => [
					'{{WRAPPER}} .service svg path' => 'fill: {{VALUE}}',
				],
			]
		);			
	
		$this->add_control(
			'service_hover_textcolor',
			[
				'label' => esc_html__( 'Hover Text Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR ,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .service:hover h3, .service:hover p' => 'color: {{VALUE}}'					
				],
			]
		);		
		
		$this->add_control(
			'service_hover_iconcolor',
			[
				'label' => esc_html__( 'Hover Icon Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR ,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .service:hover path' => 'fill: {{VALUE}}',					
				],
			]
		);		
		
		$this->add_control(
			'service_hover_numbg',
			[
				'label' => esc_html__( 'Hover Number Background Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR ,
				'default' => '#C9F31D',
				'selectors' => [
					'{{WRAPPER}} .service:hover a' => 'background: {{VALUE}}',					
				],
			]
		);	
		
		$this->add_control(
			'service_hover_numcolor',
			[
				'label' => esc_html__( 'Hover Number Text Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR ,
				'default' => '#222222',
				'selectors' => [
					'{{WRAPPER}} .service:hover a' => 'color: {{VALUE}}',					
					'{{WRAPPER}} .service a::before' => 'border-color: {{VALUE}}',					
				],
			]
		);		
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$ser_number = $this->get_settings_for_display( 'ser_number' );
		$ser_icon = $this->get_settings_for_display( 'ser_icon' );
		$ser_title = $this->get_settings_for_display( 'ser_title' );
		$ser_content = $this->get_settings_for_display( 'ser_content' );
		$ser_link = $this->get_settings_for_display( 'ser_link' );
		
		?>
		
		<div class="service">
			<div class="ser-icon">
				<?php echo $ser_icon;?>
			</div>
			<h3><?php echo portfex_wp_kses($ser_title);?></h3>
			<p>
				<?php echo portfex_wp_kses($ser_content);?>
			</p>
			<a href="<?php echo esc_attr($ser_link);?>"><span><?php echo esc_attr($ser_number);?></span> <svg fill="none" viewBox="0 0 87 8"><path fill="#1C3F39" d="M86.354 4.354a.5.5 0 000-.708L83.172.464a.5.5 0 10-.707.708L85.293 4l-2.829 2.828a.5.5 0 10.708.708l3.182-3.182zM0 4.5h86v-1H0v1z"/></svg></a>
		</div>	
		
<?php

	}

}
