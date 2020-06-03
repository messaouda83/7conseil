<?php 


/* @link       https://jahid.co/
 * @since      3.0.0
 *
 * @package    xscroll
 * @subpackage x-scroll-to-top-responsive/inc
 */

/**
 * This class.
 *
 * This class defines the custom customizer for the plugin.
 *
 * @since      3.0.0
 * @package    xscroll
 * @subpackage x-scroll-to-top-responsive/inc
 * @author     Jahid <contact@jahid.co>
 * 
 * 
 * */


add_action( 'customize_register', 'my_customize_register' );

function my_customize_register($wp_customize) {

    if( class_exists( 'WP_Customize_Control' ) ):

    //class definition must be within my_customie_register function
    class WP_Customize_Textarea_Control extends WP_Customize_Control {
        public $type = 'button';

        public function render_content() {
        ?>
            
                <p class="customize-control-text"><?php echo esc_html( $this->label ); ?></span>
                <a href="https://mbsy.co/convertkit/Jahid" target="_blank" class="mr_button" id="create-new-menu-submit" tabindex="0"><?php _e( 'Get A Free Trial!' ); ?></a>
            
        <?php
        }
    }
    endif;

  //other stuff
}