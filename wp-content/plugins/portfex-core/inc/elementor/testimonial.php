<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexTestimonialWidget extends \Elementor\Widget_Base{
	
	public function get_name() {
		
		return 'portfex-testimonial';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Testimonial' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_testimonial',
			[
				'label' => esc_html__( 'Testimonial', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'tes_style',
			[
				'label' => esc_html__( 'Style', 'portfex' ),
				'type' => \Elementor\Controls_Manager::SELECT ,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'White', 'portfex' ),
					'2'  => esc_html__( 'Black', 'portfex' ),
				],
			]
		);
		
		$this->add_control(
			'testi_bg_image',
			[
				'label' => esc_html__( 'Background Image', 'portfex' ),
				'type' => \Elementor\Controls_Manager::MEDIA ,
			]
		);
		
		$this->add_control(
			'testi_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'What Clients Say’s.',
			]
		);	
		

		$this->add_control(
			'testi_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => 'Let\'s Look Our Customer’s <br>
				Testimonials',
			]
		);	
	
		$this->add_control(
			'testi_numb_of_posts',
			[
				'label' => esc_html__( 'Reviews', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '-1',
			]
		);	
		
		$this->end_controls_section();	

	}
	
	protected function render(){		

		$testi_bg_image = $this->get_settings_for_display( 'testi_bg_image' )['url'];
		$testi_sub_title = $this->get_settings_for_display( 'testi_sub_title' );
		$testi_title = $this->get_settings_for_display( 'testi_title' );
		$testi_numb_of_posts = $this->get_settings_for_display( 'testi_numb_of_posts' );
		$tes_style = $this->get_settings_for_display( 'tes_style' );

		?>

		<!-- START Testimonials -->
		<section class="testimonials section-padding <?php if($tes_style == '2'){ echo esc_attr('black-testimonials'); }?>" style="background-image: url(<?php echo esc_url($testi_bg_image);?>);">	
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title <?php if($tes_style == '1'){ echo esc_attr('white-title'); }?>  wow fadeInUp">
							<span><?php echo portfex_wp_kses($testi_sub_title);?></span>
							<h2><?php echo portfex_wp_kses($testi_title);?></h2>
						</div>
					</div>

					<div class="col-12 wow fadeIn">
						<div class="testimonial-slider owl-carousel">

							<?php
								// WP_Query arguments
								$args = array(
									'post_type'              => array( 'testimonials' ),
									'posts_per_page'         => $testi_numb_of_posts,
								);

								// The Query
								$portfex_blog_query = new WP_Query( $args );

								// The Loop
								if ( $portfex_blog_query->have_posts() ) {
									while ( $portfex_blog_query->have_posts() ) {
										$portfex_blog_query->the_post();					
										$portfex_test_rating_text = get_post_meta(get_the_ID(), '_portfex_test_rating_text', true);
										$portfex_test_rating_opt = get_post_meta(get_the_ID(), '_portfex_test_rating_opt', true);
										$portfex_test_designation = get_post_meta(get_the_ID(), '_portfex_test_designation', true);
									?>
				
									<div class="testimonial">
										<span class="avarage_rating"><?php echo esc_html($portfex_test_rating_text);?></span>
										<span class="trating">
											<?php if($portfex_test_rating_opt == '2'){ ?>										
												<i class='bx bxs-star'></i>
												<i class='bx bxs-star'></i>
											<?php }elseif($portfex_test_rating_opt == '3'){ ?>
												
												<i class='bx bxs-star'></i>
												<i class='bx bxs-star'></i>
												<i class='bx bxs-star'></i>
					
											<?php }elseif($portfex_test_rating_opt == '4'){ ?>
												<i class='bx bxs-star'></i>
												<i class='bx bxs-star'></i>
												<i class='bx bxs-star'></i>
												<i class='bx bxs-star'></i>	
											<?php }elseif($portfex_test_rating_opt == '5'){ ?>
												<i class='bx bxs-star'></i>
												<i class='bx bxs-star'></i>
												<i class='bx bxs-star'></i>
												<i class='bx bxs-star'></i>
												<i class='bx bxs-star'></i>	
											<?php }else{ ?>
												<i class='bx bxs-star'></i>							
											<?php } ?>
										</span>
										<?php the_content();?>
										<div class="testi-bottom">									
											<?php the_post_thumbnail('portfex_testimonial');?>
											<div class="tbotext">
												<h4><?php the_title();?></h4>
												<span><?php echo esc_html($portfex_test_designation);?></span>
											</div>					
										</div>					
									</div>	

						
									<?php
									}
								} else {
									// no posts found
								}

								// Restore original Post Data
								wp_reset_postdata();
							?>
									
						</div>					
					</div>					
				</div>
			</div>
			<?php 
				if($tes_style == '1'){ ?>
				<div class="shape1">
					<svg fill="none" viewBox="0 0 217 261"><path stroke="#fff" stroke-opacity=".16" d="M150.336 256.833L3.229 117.565M182.388 219.614L35.28 80.346M219.972 183.63L72.864 44.362M252.146 143.216L105.039 3.948"/></svg>
				</div>			
				<div class="shape2">
					<svg fill="none" viewBox="0 0 350 350"><path fill="#fff" fill-opacity=".16" fill-rule="evenodd" d="M59.814 68.701c66.153-2.152 130.411 7.76 192.773 29.737 19.212 7.096 36.985 16.666 53.32 28.71 12.751 9.896 21.524 22.542 26.318 37.94 2.464 16.991-1.865 32.03-12.988 45.117-11.345 12.493-24.447 22.633-39.306 30.42a396.501 396.501 0 01-66.309 27.344l-1.367 1.367a3875.006 3875.006 0 0084.082-15.381c.911.684.911 1.367 0 2.051-28.847 11.935-58.697 20.024-89.551 24.267-4.262-1.072-6.54-3.807-6.836-8.203a16.768 16.768 0 012.393-7.177c16.15-23.472 34.493-45.233 55.029-65.284.672-.404 1.128-.175 1.367.684a1476.232 1476.232 0 01-42.724 63.232c-.456.456-.456.912 0 1.368a413.528 413.528 0 0061.865-31.104c12.479-7.913 23.758-17.369 33.838-28.369 7.405-8.662 11.621-18.688 12.646-30.078-.52-10.111-4.052-18.997-10.596-26.66-13.86-14.528-30.152-25.58-48.876-33.155-52.711-23.122-107.855-36.338-165.43-39.648a825.824 825.824 0 00-83.398-1.025v-2.051a713.304 713.304 0 0143.75-4.102z" clip-rule="evenodd" opacity=".897"/></svg>
				</div>					
			<?php } ?>

		</section>	
		<!-- START Testimonials -->		
		
		<?php 


	}

}
