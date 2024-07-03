<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexResumeWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-resume';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Resume' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_resume',
			[
				'label' => esc_html__( 'Resume', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
	
		$this->add_control(
			'resume_number',
			[
				'label' => esc_html__( 'Number', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '01',
			]
		);		
		
		$this->add_control(
			'resume_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Computer Science',
			]
		);	
		
		$this->add_control(
			'resume_date',
			[
				'label' => esc_html__( 'Date', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'March 2013 - 2016',
			]
		);	
		
		
		$this->end_controls_section();		
	}
	
	protected function render(){		

		$resume_number = $this->get_settings_for_display( 'resume_number' );
		$resume_date = $this->get_settings_for_display( 'resume_date' );
		$resume_title = $this->get_settings_for_display( 'resume_title' );
		
		?>

		<div class="single-expert">
			<div class="row">
				<div class="col-4 align-self-center">
					<span class="exnumber"><?php echo esc_html($resume_number);?></span>
				</div>
				<div class="col-8">
					<div class="excontent">
						<span class="exdate"><?php echo esc_html($resume_date);?></span>
						<h4><?php echo esc_html($resume_title);?></h4>
					</div>
				</div>
			</div>						
		</div>
						
<?php
	}

}
