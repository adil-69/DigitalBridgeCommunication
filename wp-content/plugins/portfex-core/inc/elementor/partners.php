<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexPartnersWidget extends Elementor\Widget_Base{
	public function get_name() {
		
		return 'portfex-partners';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Partners' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_partners',
			[
				'label' => esc_html__( 'Partners', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
	

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'part_img', [
				'label' => esc_html__( 'Logo', 'portfex' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
			]
		);		
		
		$repeater->add_control(
			'part_link', [
				'label' => esc_html__( 'Link', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);	
		
		$this->add_control(
			'partner_options',
			[
				'label' => esc_html__
				( 'Partner Options', 'portfex' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[																																					
						'part_link' => '#',																																																																																																																																																																																																																																																															
					],
		
				],

			]
		);	

		
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$partner_options = $this->get_settings_for_display( 'partner_options' );

			
		?>

		<!-- START Partners -->
		<section class="clients mb130 wow fadeIn">
			<div class="container">
				<div class="client-slider owl-carousel text-center">
					<?php
						foreach ($partner_options as $item ) { ?>
						
						<div class="client">
							<a href="<?php echo esc_url($item['part_link']);?>"><img src="<?php echo esc_url($item['part_img']['url']);?>" alt="client logo"></a>
						</div>
						
					<?php } ?>					
								
					
				</div>
			</div>
		</section>
		<!-- START Partners -->
	
<?php
		
	}

}
