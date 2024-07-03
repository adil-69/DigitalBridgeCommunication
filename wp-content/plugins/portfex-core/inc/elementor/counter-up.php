<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexCounterUpWidget extends Elementor\Widget_Base{
	public function get_name() {
		
		return 'portfex-counter-up';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Counter Up' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_counter_up',
			[
				'label' => esc_html__( 'Counter Up', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
	

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'count_number', [
				'label' => esc_html__( 'Number', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);		
		
		$repeater->add_control(
			'count_text', [
				'label' => esc_html__( 'Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);	
		
		$repeater->add_control(
			'count_unit', [
				'label' => esc_html__( 'Unit', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);		
		

		$this->add_control(
			'counter_options',
			[
				'label' => esc_html__
				( 'Counter Options', 'portfex' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[																															
						'count_number' => '5.4',							
						'count_text' => 'Projects Completed',																																																																																																			
						'count_unit' => '+',																																																																																																			
																																																										
					],
		
				],

			]
		);	

		
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$counter_options = $this->get_settings_for_display( 'counter_options' );

			
		?>

		<!-- START Counter -->
		<section class="counter section-padding">
			<div class="container">
				<div class="row">
					<?php
						foreach ($counter_options as $item ) { ?>
						
							<div class="col-xl-3 col-sm-6 col-12 wow fadeIn">
								<div class="single-counter">
									<h4><?php echo esc_html($item['count_number']);?></h4><span><?php echo esc_html($item['count_unit']);?></span>
									<p><?php echo portfex_wp_kses($item['count_text']);?></p>
								</div>
							</div><!-- END Col -->	
								
					<?php } ?>					

				</div>
			</div>
		</section>
		<!-- END Counter -->

<?php
		
	}

}
