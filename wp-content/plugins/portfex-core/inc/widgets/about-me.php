<?php

class Portfex_about_me_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'portfex-about-me',  // Base ID
            'Portfex: About Me'   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Portfex_about_me_Widget' );
        });
 
    }
 
    
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
		
		$image = $instance['image'];
		$fname = $instance['fname'];
		$designation = $instance['designation'];
		$bio = $instance['bio'];
		$fsiname = $instance['fsiname'];
		$fslink = $instance['fslink'];
		$ssiname = $instance['ssiname'];
		$sslink = $instance['sslink'];
		$tsiname = $instance['tsiname'];
		$tslink = $instance['tslink'];
		$fosiname = $instance['fosiname'];
		$foslink = $instance['foslink'];

	?>
	<div class="about-me-widget">
		<img src="<?php echo esc_url($image);?>" alt="image">
		<h4><?php echo esc_html($fname);?></h4>
		<span><?php echo esc_html($designation);?></span>
		<p>
			<?php echo esc_html($bio);?>
		</p>
		<ul class="amsocail-link">
			<?php if($fslink){ ?>
				<li>
					<a href="<?php echo esc_url($fslink);?>">
						<i class="<?php echo esc_attr($fsiname);?>"></i>
					</a>
				</li>
			<?php } if($sslink){ ?>
				<li>
					<a href="<?php echo esc_url($sslink);?>">
						<i class="<?php echo esc_attr($ssiname);?>"></i>
					</a>
				</li>
			<?php } if($tslink){ ?>
				<li>
					<a href="<?php echo esc_url($tslink);?>">
						<i class="<?php echo esc_attr($tsiname);?>"></i>
					</a>
				</li>
			<?php } if($foslink){ ?>
				<li>
					<a href="<?php echo esc_url($foslink);?>">
						<i class="<?php echo esc_attr($fosiname);?>"></i>
					</a>
				</li>
			<?php } ?>
		</ul>
	</div>	

	<?php
	
	echo $args['after_widget'];
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'portfex' );
        $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
        $fname = ! empty( $instance['fname'] ) ? $instance['fname'] : esc_html__( 'Md. Masum Billah', 'portfex' );
        $designation = ! empty( $instance['designation'] ) ? $instance['designation'] : esc_html__( 'CEO and Founder ', 'portfex' );
        $bio = ! empty( $instance['bio'] ) ? $instance['bio'] : esc_html__( ' ', 'portfex' );
        $fsiname = ! empty( $instance['fsiname'] ) ? $instance['fsiname'] : esc_html__( '', 'portfex' );
        $fslink = ! empty( $instance['fslink'] ) ? $instance['fslink'] : esc_html__( '', 'portfex' );
        $ssiname = ! empty( $instance['ssiname'] ) ? $instance['ssiname'] : esc_html__( '', 'portfex' );
        $sslink = ! empty( $instance['sslink'] ) ? $instance['sslink'] : esc_html__( '', 'portfex' );
        $tsiname = ! empty( $instance['tsiname'] ) ? $instance['tsiname'] : esc_html__( '', 'portfex' );
        $tslink = ! empty( $instance['tslink'] ) ? $instance['tslink'] : esc_html__( '', 'portfex' );
        $fosiname = ! empty( $instance['fosiname'] ) ? $instance['fosiname'] : esc_html__( '', 'portfex' );
        $foslink = ! empty( $instance['foslink'] ) ? $instance['foslink'] : esc_html__( '', 'portfex' );
        
		?>
		
        <p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>"><?php echo esc_html__( 'Image:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>" type="text" value="<?php echo esc_attr( $image ); ?>">
        </p>
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'fname' ) ); ?>"><?php echo esc_html__( 'Full Name:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fname' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fname' ) ); ?>" type="text" value="<?php echo esc_attr( $fname ); ?>">
        </p>
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'bio' ) ); ?>"><?php echo esc_html__( 'Bio:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'bio' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'bio' ) ); ?>" type="text" value="<?php echo esc_attr( $bio ); ?>">
        </p>	
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'designation' ) ); ?>"><?php echo esc_html__( 'Designation:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'designation' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'designation' ) ); ?>" type="text" value="<?php echo esc_attr( $designation ); ?>">
        </p>	

		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'fsiname' ) ); ?>"><?php echo esc_html__( 'First Social Icon Name:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fsiname' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fsiname' ) ); ?>" type="text" value="<?php echo esc_attr( $fsiname ); ?>">
        </p>
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'fslink' ) ); ?>"><?php echo esc_html__( 'First Social Link:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fslink' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fslink' ) ); ?>" type="text" value="<?php echo esc_attr( $fslink ); ?>">
        </p>
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'ssiname' ) ); ?>"><?php echo esc_html__( 'Second Social Icon Name:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'ssiname' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'ssiname' ) ); ?>" type="text" value="<?php echo esc_attr( $ssiname ); ?>">
        </p>
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'sslink' ) ); ?>"><?php echo esc_html__( 'Second Social Link:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'sslink' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'sslink' ) ); ?>" type="text" value="<?php echo esc_attr( $sslink ); ?>">
        </p>		
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'tsiname' ) ); ?>"><?php echo esc_html__( 'Third Social Icon Name:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tsiname' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tsiname' ) ); ?>" type="text" value="<?php echo esc_attr( $tsiname ); ?>">
        </p>
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'tslink' ) ); ?>"><?php echo esc_html__( 'Third Social Link:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tslink' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tslink' ) ); ?>" type="text" value="<?php echo esc_attr( $tslink ); ?>">
        </p>		
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'fosiname' ) ); ?>"><?php echo esc_html__( 'Fourth Social Icon Name:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fosiname' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fosiname' ) ); ?>" type="text" value="<?php echo esc_attr( $fosiname ); ?>">
        </p>
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'foslink' ) ); ?>"><?php echo esc_html__( 'Fourth Social Link:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'foslink' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'foslink' ) ); ?>" type="text" value="<?php echo esc_attr( $foslink ); ?>">
        </p>

        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['image'] = ( !empty( $new_instance['image'] ) ) ? $new_instance['image'] : '';
		$instance['fname'] = ( !empty( $new_instance['fname'] ) ) ? $new_instance['fname'] : '';
		$instance['designation'] = ( !empty( $new_instance['designation'] ) ) ? $new_instance['designation'] : '';
		$instance['bio'] = ( !empty( $new_instance['bio'] ) ) ? $new_instance['bio'] : '';
		$instance['fsiname'] = ( !empty( $new_instance['fsiname'] ) ) ? $new_instance['fsiname'] : '';
        $instance['fslink'] = ( !empty( $new_instance['fslink'] ) ) ? $new_instance['fslink'] : '';
        $instance['ssiname'] = ( !empty( $new_instance['ssiname'] ) ) ? $new_instance['ssiname'] : '';
        $instance['sslink'] = ( !empty( $new_instance['sslink'] ) ) ? $new_instance['sslink'] : '';
        $instance['tsiname'] = ( !empty( $new_instance['tsiname'] ) ) ? $new_instance['tsiname'] : '';
        $instance['tslink'] = ( !empty( $new_instance['tslink'] ) ) ? $new_instance['tslink'] : '';
        $instance['fosiname'] = ( !empty( $new_instance['fosiname'] ) ) ? $new_instance['fosiname'] : '';
        $instance['foslink'] = ( !empty( $new_instance['foslink'] ) ) ? $new_instance['foslink'] : '';
 
        return $instance;
    }
 
}

$portfex_about_me= new Portfex_about_me_Widget();
