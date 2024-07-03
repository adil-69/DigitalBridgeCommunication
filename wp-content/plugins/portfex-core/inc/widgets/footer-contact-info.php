<?php

class Portfex_footer_contact_info_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'portfex-footer-contact-info',  // Base ID
            'Portfex: Footer Contact Info'   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Portfex_footer_contact_info_Widget' );
        });
 
    }
 
    
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
		
		$phone_number = $instance['phone_number'];
		$phone_link = $instance['phone_link'];
		$email_address = $instance['email_address'];
		$email_link = $instance['email_link'];

	?>
	
		<div class="fcontact-info">	
			<p><a href="tel:<?php echo esc_attr($phone_link);?>"><?php echo esc_html($phone_number);?></a></p>
			<p><a href="mailto:<?php echo esc_attr($email_link);?>"><?php echo esc_html($email_address);?></a></p>
		</div>	
							

	<?php
	
	echo $args['after_widget'];
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'portfex' );
		$phone_number = ! empty( $instance['phone_number'] ) ? $instance['phone_number'] : esc_html__( '', 'portfex' );
		$phone_link = ! empty( $instance['phone_link'] ) ? $instance['phone_link'] : esc_html__( '', 'portfex' );
		$email_address = ! empty( $instance['email_address'] ) ? $instance['email_address'] : esc_html__( '', 'portfex' );		
		$email_link = ! empty( $instance['email_link'] ) ? $instance['email_link'] : esc_html__( '', 'portfex' );		
		
		?>
		
        <p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>


		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'phone_number' ) ); ?>"><?php echo esc_html__( 'Phone Number :', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone_number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone_number' ) ); ?>" type="text" value="<?php echo esc_attr( $phone_number ); ?>">
        </p>
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'phone_link' ) ); ?>"><?php echo esc_html__( 'Phone Link:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone_link' ) ); ?>" type="text" value="<?php echo esc_attr( $phone_link ); ?>">
        </p>		
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'email_address' ) ); ?>"><?php echo esc_html__( 'Email Address:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email_address' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email_address' ) ); ?>" type="text" value="<?php echo esc_attr( $email_address ); ?>">
        </p>	
		
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'email_link' ) ); ?>"><?php echo esc_html__( 'Email Link:', 'portfex' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email_link' ) ); ?>" type="text" value="<?php echo esc_attr( $email_link ); ?>">
        </p>	


        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['phone_number'] = ( !empty( $new_instance['phone_number'] ) ) ? $new_instance['phone_number'] : '';
        $instance['phone_link'] = ( !empty( $new_instance['phone_link'] ) ) ? $new_instance['phone_link'] : '';
        $instance['email_address'] = ( !empty( $new_instance['email_address'] ) ) ? $new_instance['email_address'] : '';
        $instance['email_link'] = ( !empty( $new_instance['email_link'] ) ) ? $new_instance['email_link'] : '';

        return $instance;
    }
 
}

$portfex_footer_contact_info = new Portfex_footer_contact_info_Widget();
