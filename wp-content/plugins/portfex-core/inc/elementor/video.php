<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexVideoWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-video';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Video' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_video',
			[
				'label' => esc_html__( 'Video', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'vid_bg_img',
			[
				'label' => esc_html__( 'Background Image', 'portfex' ),
				'type' => \Elementor\Controls_Manager::MEDIA ,
			]
		);
		
		
		$this->add_control(
			'vid_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Play',
			]
		);	
		
		$this->add_control(
			'vid_url',
			[
				'label' => esc_html__( 'Video Url', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'https://www.youtube.com/watch?v=AnkK7HKkp80',
			]
		);		
		
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$vid_bg_img = $this->get_settings_for_display( 'vid_bg_img' )['url'];
		$vid_title = $this->get_settings_for_display( 'vid_title' );
		$vid_url = $this->get_settings_for_display( 'vid_url' );
		
		?>
		

		<!-- START Video -->
		<div class="container wow fadeIn">	
			<div class="video-area" style="background-image: url(<?php echo esc_url($vid_bg_img);?>);">						
				<a href="<?php echo esc_url($vid_url);?>" class="vid-btn"><?php echo esc_html($vid_title);?></a>			
			</div>
		</div>
		
						
<?php

	}

}
