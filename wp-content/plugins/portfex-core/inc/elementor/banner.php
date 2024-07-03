<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexBannerWidget extends Elementor\Widget_Base{
	public function get_name() {
		
		return 'portfex-banner';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Banner' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_banner',
			[
				'label' => esc_html__( 'Banner', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
	
		$this->add_control(
			'sec_bicon1',
			[
				'label' => esc_html__( 'Icon 1', 'portfex' ),
				'type' => \Elementor\Controls_Manager::MEDIA ,
			]
		);		
		
		$this->add_control(
			'sec_bicon2',
			[
				'label' => esc_html__( 'Icon 2', 'portfex' ),
				'type' => \Elementor\Controls_Manager::MEDIA ,
			]
		);		
		
		$this->add_control(
			'sec_bicon3',
			[
				'label' => esc_html__( 'Icon 3', 'portfex' ),
				'type' => \Elementor\Controls_Manager::MEDIA ,
			]
		);		
		
		$this->add_control(
			'sec_bicon4',
			[
				'label' => esc_html__( 'Icon 4', 'portfex' ),
				'type' => \Elementor\Controls_Manager::MEDIA ,
			]
		);	
		
		$this->add_control(
			'sec_img',
			[
				'label' => esc_html__( 'Section Image', 'portfex' ),
				'type' => \Elementor\Controls_Manager::MEDIA ,
			]
		);	


		$this->add_control(
			'sec_subtitle',
			[
				'label' => esc_html__( 'SubTitle', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => 'Hello I’m Masum !',
			]
		);			
		
		$this->add_control(
			'sec_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => 'A UI/UX <span>Designer</span>',
			]
		);		
		
		
		$this->add_control(
			'sec_content',
			[
				'label' => esc_html__( 'Content', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => 'Solution-oriented mindset, problem-solving enthusiasm, positive attitude 
				towards challenges, overcoming obstacles with enthusiasm .',
			]
		);		
		
		$this->add_control(
			'sec_fbtn_text',
			[
				'label' => esc_html__( 'First Button Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Hire Me',
			]
		);	
		
		$this->add_control(
			'sec_fbtn_link',
			[
				'label' => esc_html__( 'First Button Link', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '#',
			]
		);		
		
		$this->add_control(
			'sec_sbtn_text',
			[
				'label' => esc_html__( 'Second Button Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Download CV',
			]
		);	
		
		$this->add_control(
			'sec_sbtn_link',
			[
				'label' => esc_html__( 'Second Button Link', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '#',
			]
		);	
		

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'social_icon', [
				'label' => esc_html__( 'Icon', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);		
		
		$repeater->add_control(
			'social_link', [
				'label' => esc_html__( 'Link', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);		

		$this->add_control(
			'social_options',
			[
				'label' => esc_html__
				( 'Social Options', 'portfex' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[																															
						'social_icon' => 'bx bxl-facebook',							
						'social_link' => '#',																																																																																																			
																																																										
					],
		
				],

			]
		);	
		
		$this->end_controls_section();
		
		$this->start_controls_section(
		'portfex_banner_style',
			[
				'label' => esc_html__( 'Style', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'banner_background_color', [
				'label' => esc_html__( 'Background Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#1C3F39',
				'selectors' => [
					'{{WRAPPER}} .home-banner' => 'background: {{VALUE}}',
				],
			]
		);		
		
		$this->add_control(
			'banner_title_color', [
				'label' => esc_html__( 'Title Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .home_banner_content h3 , .home_banner_content h2' => 'color: {{VALUE}}',
				],
			]
		);		
		
		$this->add_control(
			'banner_title_spancolor', [
				'label' => esc_html__( 'Title Span Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#C9F31D',
				'selectors' => [
					'{{WRAPPER}} .home_banner_content h2 span' => 'color: {{VALUE}}',
				],
			]
		);		
		
		$this->add_control(
			'banner_desc_color', [
				'label' => esc_html__( 'Description Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .home_banner_content p' => 'color: {{VALUE}}',
				],
			]
		);		
		
		$this->add_control(
			'banner_fbtn_text', [
				'label' => esc_html__( 'First Button Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#222',
				'selectors' => [
					'{{WRAPPER}} .home_banner_content .yellow_btn' => 'color: {{VALUE}}',
				],
			]
		);		
		
		$this->add_control(
			'banner_fbtn_bg', [
				'label' => esc_html__( 'First Button BG', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#C9F31D',
				'selectors' => [
					'{{WRAPPER}} .home_banner_content .yellow_btn' => 'background: {{VALUE}}',
				],
			]
		);		
		
		$this->add_control(
			'banner_fbtn_border_color', [
				'label' => esc_html__( 'First Button Border', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#C9F31D',
				'selectors' => [
					'{{WRAPPER}} .home_banner_content .yellow_btn' => 'border-color: {{VALUE}}',
				],
			]
		);	
		
		$this->add_control(
			'banner_fbtn_hbg', [
				'label' => esc_html__( 'First Button Hover BG', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .home_banner_content .yellow_btn:before' => 'background-color: {{VALUE}}',
				],
			]
		);		

		
		$this->add_control(
			'banner_fbtn_htext', [
				'label' => esc_html__( 'First Button Hover Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#222',
				'selectors' => [
					'{{WRAPPER}} .yellow_btn:hover,.yellow_btn:focus' => 'color: {{VALUE}}',
				],
			]
		);		
		

		$this->add_control(
			'banner_sbtn_text', [
				'label' => esc_html__( 'Second Button Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .home_banner_content .normal_btn' => 'color: {{VALUE}}',
				],
			]
		);	
		
		$this->add_control(
			'banner_shbtn_text', [
				'label' => esc_html__( 'Second Button Hover Color', 'portfex' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'label_block' => true,
				'default' => '#C9F31D',
				'selectors' => [
					'{{WRAPPER}} .home_banner_content .normal_btn:hover, .home_banner_content .normal_btn:focus' => 'color: {{VALUE}}',
				],
			]
		);		
		

		$this->end_controls_section();

	}
	
	protected function render(){		
		$sec_bicon1 = $this->get_settings_for_display( 'sec_bicon1' )['url'];
		$sec_bicon2 = $this->get_settings_for_display( 'sec_bicon2' )['url'];
		$sec_bicon3 = $this->get_settings_for_display( 'sec_bicon3' )['url'];
		$sec_bicon4 = $this->get_settings_for_display( 'sec_bicon4' )['url'];
		$sec_img = $this->get_settings_for_display( 'sec_img' )['url'];
		$sec_subtitle = $this->get_settings_for_display( 'sec_subtitle' );
		$sec_title = $this->get_settings_for_display( 'sec_title' );
		$sec_content = $this->get_settings_for_display( 'sec_content' );
		$sec_fbtn_text = $this->get_settings_for_display( 'sec_fbtn_text' );
		$sec_fbtn_link = $this->get_settings_for_display( 'sec_fbtn_link' );
		$sec_sbtn_text = $this->get_settings_for_display( 'sec_sbtn_text' );
		$sec_sbtn_link = $this->get_settings_for_display( 'sec_sbtn_link' );
		$social_options = $this->get_settings_for_display( 'social_options' );
			
		?>
			
		<section class="home-banner" style="background-image: url('<?php echo esc_url($sec_img);?>');">		
			<div class="container">			
				<div class="row">
					<div class="col-xl-6 col-lg-12 col-12 align-self-center">
						<div class="home_banner_content">					
							<h3 class="wow fadeInUp"><?php echo portfex_wp_kses($sec_subtitle);?></h3>
							<h2 class="wow fadeInUp"><?php echo portfex_wp_kses($sec_title);?></h2>
							<p class="wow fadeInDown">
								<?php echo portfex_wp_kses($sec_content);?>
							</p>
							<?php if($sec_fbtn_text){ ?>
							<a href="<?php echo esc_url($sec_fbtn_link);?>" class="yellow_btn wow fadeInLeft"><?php echo esc_html($sec_fbtn_text);?></a>
							<?php } if($sec_sbtn_text){ ?>
							<a href="<?php echo esc_url($sec_sbtn_link);?>" class="normal_btn wow fadeInRight"><?php echo esc_html($sec_sbtn_text);?></a>
							<?php } ?>
						</div>
					</div><!-- End Col -->
				</div>
			</div>
			
			<div class="about-con">
				<img src="<?php echo esc_url($sec_bicon4);?>" alt="about-icon">
			</div>
			
			<div class="social_link">
				<ul>
					<?php
						foreach ($social_options as $item ) { ?>						
							<li><a href="<?php echo esc_attr($item['social_link']);?>"><i class="<?php echo esc_attr($item['social_icon']);?>"></i></a></li>																	
					<?php } ?>
				</ul>
			</div>
			<div class="bshape_1">
				<img src="<?php echo esc_url($sec_bicon1);?>" alt="shape">
			</div>			
			
			<div class="bshape_2">
				<img src="<?php echo esc_url($sec_bicon2);?>" alt="shape">
			</div>			
			
			<div class="bshape_3">
				<img src="<?php echo esc_url($sec_bicon3);?>" alt="shape">
			</div>
		</section>

<?php
		
	}

}
