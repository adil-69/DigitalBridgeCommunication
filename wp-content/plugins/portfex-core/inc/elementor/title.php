<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexTitleWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-title';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Title' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'sec_title_alignment',
			[
				'label' => esc_html__( 'Alignment', 'portfex' ),
				'type' => \Elementor\Controls_Manager::SELECT ,
				'default' => '1',
				'options' => [
					'1'  => esc_html__( 'Left', 'portfex' ),
					'2' => esc_html__( 'Center', 'portfex' ),
	
				],
				
			]
		);	
	
		$this->add_control(
			'sec_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Section Title',
			]
		);	
		
		$this->add_control(
			'sec_content',
			[
				'label' => esc_html__( 'Content', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => 'Title Content ',
			]
		);		
		
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$sec_title_alignment = $this->get_settings_for_display( 'sec_title_alignment' );
		$sec_title = $this->get_settings_for_display( 'sec_title' );
		$sec_content = $this->get_settings_for_display( 'sec_content' );
		
		?>

		<div class="section-title 
			<?php if($sec_title_alignment=='1' ){
				echo esc_attr(' text-start');
			}else{
				echo esc_attr(' text-center');
			} ?> wow fadeInUp">
			<span><?php echo portfex_wp_kses($sec_title);?></span>
			<h2><?php echo portfex_wp_kses($sec_content);?></h2>
		</div>
						
<?php

	}

}
