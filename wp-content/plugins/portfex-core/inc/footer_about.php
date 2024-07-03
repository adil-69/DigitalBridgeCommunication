<?php

class portfex_footer_about_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'portfex-footer-about',  // Base ID
            'portfex: Footer About'   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'portfex_footer_about_Widget' );
        });
 
    }
 
    
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
		
		$logo = $instance['logo'];
		$desc = $instance['desc'];
		$fsiname = $instance['fsiname'];
		$fslink = $instance['fslink'];
		$ssiname = $instance['ssiname'];
		$sslink = $instance['sslink'];
		$tsiname = $instance['tsiname'];
		$tslink = $instance['tslink'];
		$fosiname = $instance['fosiname'];
		$foslink = $instance['foslink'];
		
	?>


	<div class="footer-about">
		<div class="footer_logo">        
			<a href="<?php echo esc_url(home_url('/'));?>" class="site-logo"><img src="<?php echo esc_url($logo);?>" alt="<?php echo esc_attr(get_the_title());?>"></a>
		</div>
		<p><?php echo portfex_wp_kses($desc );?></p>
		
		<ul>
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
        $logo = ! empty( $instance['logo'] ) ? $instance['logo'] : esc_html__( '', 'portfex' );
        $desc = ! empty( $instance['desc'] ) ? $instance['desc'] : esc_html__( '', 'portfex' );
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
            <label for="<?php echo esc_attr( $this->get_field_id( 'logo' ) ); ?>"><?php echo esc_html__( 'Enter Logo url:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'logo' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'logo' ) ); ?>" type="text" value="<?php echo esc_attr( $logo ); ?>">
        </p>   

		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'desc' ) ); ?>"><?php echo esc_html__( 'Description:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'desc' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'desc' ) ); ?>" type="text" value="<?php echo esc_attr( $desc ); ?>">
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
        $instance['logo'] = ( !empty( $new_instance['logo'] ) ) ? $new_instance['logo'] : '';
        $instance['desc'] = ( !empty( $new_instance['desc'] ) ) ? $new_instance['desc'] : '';
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

$portfex_latest_post = new portfex_footer_about_Widget();

?>