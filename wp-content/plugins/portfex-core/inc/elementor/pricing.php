<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexPricingWidget extends Elementor\Widget_Base{
	public function get_name() {
		
		return 'portfex-pricing';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Pricing' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_pricing',
			[
				'label' => esc_html__( 'Pricing', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
	

		$this->add_control(
			'pricing_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Full Time',
			]
		);		
		
		$this->add_control(
			'pricing_ptext',
			[
				'label' => esc_html__( 'Pricing Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Start at',
			]
		);		
		
		$this->add_control(
			'pricing_price',
			[
				'label' => esc_html__( 'Price', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '$250.00',
			]
		);		
		
		$this->add_control(
			'pricing_content',
			[
				'label' => esc_html__( 'Content', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => 'Mockup Design in Figma',
			]
		);		
		
		$this->add_control(
			'pricing_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Choose Plan',
			]
		);	
		
		$this->add_control(
			'pricing_btn_link',
			[
				'label' => esc_html__( 'Button Link', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '#',
			]
		);
		
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$pricing_title = $this->get_settings_for_display( 'pricing_title' );
		$pricing_ptext = $this->get_settings_for_display( 'pricing_ptext' );
		$pricing_price = $this->get_settings_for_display( 'pricing_price' );
		$pricing_content = $this->get_settings_for_display( 'pricing_content' );
		$pricing_btn_text = $this->get_settings_for_display( 'pricing_btn_text' );
		$pricing_btn_link = $this->get_settings_for_display( 'pricing_btn_link' );
	
		?>
		
		<div class="pricing">
			<h3><?php echo esc_html($pricing_title);?></h3>
			<div class="price text-center">
				<span><?php echo esc_html($pricing_ptext);?></span>
				<?php echo esc_html($pricing_price);?>
			</div>
			
			<ul>
			<?php
				$pricing_list_items = explode("\n", $pricing_content);

				foreach( $pricing_list_items as $prcing_list_item ) {
					echo '<li>'. portfex_wp_kses( trim( $prcing_list_item ) ) .'</li>';
				} ?>
			</ul>
			<a href="<?php echo esc_url($pricing_btn_link);?>" class="border-btn"><?php echo esc_html($pricing_btn_text);?></a>
		</div>
		

<?php
		
	}

}
