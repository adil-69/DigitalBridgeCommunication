<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexPortfolioImgWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-portfolio-img';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Portfolio Image' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_portfolio_img',
			[
				'label' => esc_html__( 'Portfolio Image', 'portfex' ),
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
		
		
		$this->end_controls_section();
	}
	
	protected function render(){		
	
		$sec_img = $this->get_settings_for_display( 'sec_img' )['url'];
		
		?>
		
		<div class="pdimage">
			<a href="<?php echo esc_url($sec_img);?>" class="popbtn"><img src="<?php echo esc_url($sec_img);?>" alt="portfolio image"></a>
		</div>		
<?php

	}

}
