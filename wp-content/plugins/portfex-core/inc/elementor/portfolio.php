<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PortfexPortfolioWidget extends Elementor\Widget_Base{
	public function get_name() {
		
		return 'portfex-portfolio';
	}
	public function get_icon() {
		
		return 'eicon-post-excerpt';
	}
	public function get_title() {
		return esc_html__('Portfolio' , 'portfex');
	}
	
	public function get_categories() {
		return ['portfex-category'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
		'portfex_portfolio',
			[
				'label' => esc_html__( 'Portfolio', 'portfex' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'port_style',
			[
				'label' => esc_html__( 'Style', 'portfex' ),
				'type' => \Elementor\Controls_Manager::SELECT ,
				'default' => '1',
				'options' => [
					'1' => esc_html__( '1', 'portfex' ),
					'2'  => esc_html__( '2', 'portfex' ),
				],
			]
		);
		
		$this->add_control(
			'sec_subtitle',
			[
				'label' => esc_html__( 'Subtitle', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => 'My Projects',
			]
		);			
		
		$this->add_control(
			'sec_title',
			[
				'label' => esc_html__( 'Title', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA ,
				'default' => 'Showcase Your Talent with our Latest Works',
			]
		);		
		
		$this->add_control(
			'sec_nub_post',
			[
				'label' => esc_html__( 'Number of Posts', 'portfex' ),
				'type' => \Elementor\Controls_Manager::TEXT ,
				'default' => '-1',
			]
		);		
				

		$this->end_controls_section();

	}
	
	protected function render(){
		
		$port_style = $this->get_settings_for_display( 'port_style' );
		$sec_subtitle = $this->get_settings_for_display( 'sec_subtitle' );
		$sec_title = $this->get_settings_for_display( 'sec_title' );
		$sec_nub_post = $this->get_settings_for_display( 'sec_nub_post' );
		
		if($port_style == '2'){ ?>
		<!-- START Portfolio -->
		<section class="portfolio section-padding">
			<?php if($sec_subtitle && $sec_title) : ?>
			<div class="container">				
				<div class="row">
					<div class="col-12">
						<div class="section-title wow fadeInUp">
							<span><?php echo esc_html($sec_subtitle);?></span>
							<h2><?php echo portfex_wp_kses($sec_title);?></h2>
						</div>
					</div>
				</div>
			</div>	
			<?php endif;?>
			<div class="container-fluid wow fadeIn">			
				<div class="project-slider owl-carousel">
						<?php
						
						// WP_Query arguments
						$args = array(
							'post_type'              => array( 'work' ),
							'posts_per_page'         => $sec_nub_post,
						);

						// The Query
						$portfex_works_query = new WP_Query( $args );

						// The Loop
						if ( $portfex_works_query->have_posts() ) {
							while ( $portfex_works_query->have_posts() ) {
								$portfex_works_query->the_post();
								$port_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'portfex_portfolio', false, '' );
						
								?>
								
								<div class="project">
									<div class="port_img">
										<?php the_post_thumbnail('portfex_portfolio');?>
									</div>
									<span class="cat">
									<?php $cat_name = get_the_terms(get_the_id(), 'work_cat');
										if ( ! empty( $cat_name ) && ! is_wp_error($cat_name) ){
											 foreach ( $cat_name as $term ) { 
											 
											 $category_link    = get_term_link( $term->term_id );
											 
											 ?>
												
												<a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($term->name); ?></a>
											
											<?php }
											
										} ?>
										
									</span>
									<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
									<a href="<?php echo esc_url($port_image_url['0']);?>" class="port-btn popbtn">
										<svg fill="none" viewBox="0 0 43 52"><path fill="#1C3F39" d="M41.983 1.128A1 1 0 0040.88.242l-8.948.974a1 1 0 00.217 1.989l7.953-.866.866 7.952a1 1 0 101.988-.216l-.974-8.947zM1.78 51.626L41.768 1.863 40.21.61.22 50.374l1.56 1.252z"/></svg>
									</a>
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
		</section>
		<!-- END Portfolio -->			
		<?php }else{ ?>
		<!-- START Portfolio -->
		<section class="portfolio-grid section-padding">	
			<div class="container">	
				<?php if($sec_subtitle && $sec_title) : ?>
				<div class="row">
					<div class="col-12">
						<div class="section-title wow fadeInUp">
							<span><?php echo esc_html($sec_subtitle);?></span>
							<h2><?php echo portfex_wp_kses($sec_title);?></h2>
						</div>
					</div>
				</div>
				<?php endif;?>
				
				<div class="row">
					<?php
	
						// WP_Query arguments
						$args = array(
							'post_type'              => array( 'work' ),
							'posts_per_page'         => $sec_nub_post,
						);

						// The Query
						$portfex_works_query = new WP_Query( $args );

						// The Loop
						if ( $portfex_works_query->have_posts() ) {
							while ( $portfex_works_query->have_posts() ) {
								$portfex_works_query->the_post();								
								$port_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'portfex_portfolio', false, '' );
						
								?>
								<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
									<div class="project">
										<div class="port_img">
											<?php the_post_thumbnail('portfex_portfolio');?>
										</div>
										<span class="cat">
										<?php $cat_name = get_the_terms(get_the_id(), 'work_cat');
											if ( ! empty( $cat_name ) && ! is_wp_error($cat_name) ){
												 foreach ( $cat_name as $term ) { 
												 $category_link    = get_term_link( $term->term_id );
												 
												 ?>
													
													<a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($term->name); ?></a>
												
												<?php }
												
											} ?>
											
										</span>
										<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
										<a href="<?php echo esc_url($port_image_url['0']);?>" class="port-btn popbtn">
											<svg fill="none" viewBox="0 0 43 52"><path fill="#1C3F39" d="M41.983 1.128A1 1 0 0040.88.242l-8.948.974a1 1 0 00.217 1.989l7.953-.866.866 7.952a1 1 0 101.988-.216l-.974-8.947zM1.78 51.626L41.768 1.863 40.21.61.22 50.374l1.56 1.252z"/></svg>
										</a>
									</div>					
								</div><!-- END Col -->		

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
		</section>
		<!-- END Portfolio -->
		
		<?php } ?>


<?php
	}

}
