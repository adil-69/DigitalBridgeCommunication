<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexBlogWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-blog';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Blog' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_blog',
			[
				'label' => esc_html__( 'Blog', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

	
		$this->add_control(
			'blog_subtitle',
			[
				'label' => esc_html__( 'Subtitle', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'Latest Posts',
			]
		);	
		
		$this->add_control(
			'blog_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => 'Our Latest News  <br> And Blog',
			]
		);	

		$this->add_control(
			'number_posts',
			[
				'label' => esc_html__( 'Number of Posts', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '3',
			]
		);	
		
		$this->add_control(
			'btn_text',
			[
				'label' => esc_html__( 'Button Text', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'View All',
			]
		);		
		
		$this->add_control(
			'btn_link',
			[
				'label' => esc_html__( 'Button Link', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '#',
			]
		);	
		
		$this->end_controls_section();

	}
	
	protected function render(){		

		$blog_subtitle = $this->get_settings_for_display( 'blog_subtitle' );
		$blog_title = $this->get_settings_for_display( 'blog_title' );
		$number_posts = $this->get_settings_for_display( 'number_posts' );
		$btn_text = $this->get_settings_for_display( 'btn_text' );
		$btn_link = $this->get_settings_for_display( 'btn_link' );

		?>

		<!-- START Blog -->
		<section class="blog section-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title text-center wow fadeInUp">
							<span><?php echo esc_html($blog_subtitle);?></span>
							<h2><?php echo portfex_wp_kses($blog_title);?></h2>
						</div>						
					</div>
					
					<div class="col-12 wow fadeIn">				
						<?php
							// WP_Query arguments
							$args = array(
								'post_type'              => array( 'post' ),
								'posts_per_page'         => $number_posts,
							);

							// The Query
							$portfex_blog_query = new WP_Query( $args );

							// The Loop
							if ( $portfex_blog_query->have_posts() ) {
								while ( $portfex_blog_query->have_posts() ) {
									$portfex_blog_query->the_post();					
									
								?>

								<div class="single-blog">
									<div class="row">
										<div class="col-xl-3 col-md-3 col-12">
											<div class="post-meta">
												<span><i class="ti-time"></i> <?php echo get_the_time('M d, Y');?></span> 
												<span><i class="ti-book"></i> <?php echo portfex_reading_time();?></span> 
												<span><i class="ti-user"></i> <?php esc_html_e('By' , 'portfex');?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><?php echo esc_html( get_the_author() );?></a></span> 
											</div>
										</div>
										
										<div class="col-xl-6 col-md-6 col-12 text-center align-self-center">
											<h3><a href="<?php the_permalink();?>" ><?php the_title();?></a></h3>
										</div>
										
										<div class="col-xl-3 col-md-3 col-12 text-center align-self-center">
											<a href="<?php the_permalink();?>" class="blog_btn"><img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/icons/arrow-right.svg" alt="icon"></a>
										</div>
									</div>
									<div class="post_img">
										<?php the_post_thumbnail('portfex_blog_simage');?>
									</div>
								</div><!-- Single  Blog -->	
						
								<?php
								}
							} else {
								// no posts found
							}

							// Restore original Post Data
							wp_reset_postdata();
						?>	
							

						<?php if($btn_text){ ?>
						<div class="text-center mt-80">
							<a href="<?php echo esc_url($btn_link);?>" class="circle_btn"><?php echo esc_html($btn_text);?></a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>	
		<!-- START blog -->		


<?php


	}

}
