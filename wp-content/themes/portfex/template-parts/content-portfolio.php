<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfex
 */
 
$port_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'portfex_portfolio', false, '' );
				
?>

<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
	<div class="project">
		<?php the_post_thumbnail('portfex_portfolio');?>
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