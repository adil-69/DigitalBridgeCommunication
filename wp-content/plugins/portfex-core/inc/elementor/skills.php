<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexSkillsWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-skills';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Skills' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_skills',
			[
				'label' => esc_html__( 'Skills', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
	
		$this->add_control(
			'skills_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Photoshop',
			]
		);	
		
		$this->add_control(
			'resume_percent',
			[
				'label' => esc_html__( 'Percent', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '75',
			]
		);	

		$this->add_control(
			'resume_bg_color',
			[
				'label' => esc_html__( 'Background', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR ,
				'default' => '#1C3F39',
				'selectors' => [
					'{{WRAPPER}} .skillbar .filled' => 'background: {{VALUE}}',
				],
			]
		);	
		
		
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$skills_title = $this->get_settings_for_display( 'skills_title' );
		$resume_percent = $this->get_settings_for_display( 'resume_percent' );

		?>
		
		<div class="single_skill">
			<h5><?php echo esc_html($skills_title);?></h5>
			<span class="spercent"><?php echo esc_html($resume_percent);?>%</span>
			<div class="skillbar"><span class="filled" data-percent="<?php echo esc_attr($resume_percent);?>"></span></div>
		</div>	
		

<?php
	}

}
