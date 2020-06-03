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
 * This class defines all code necessary to run plugins assets files.
 *
 * @since      3.0.0
 * @package    xscroll
 * @subpackage x-scroll-to-top-responsive/inc
 * @author     Jahid <contact@jahid.co>
 * 
 * 
 * */

class XSTR_assets{

    // Public poperty for plugin url & plugin version
    public $plugindir = XSTR_PLUGIN_URL;
    public $version = XSTR_VERSION;

    /**
     * Register action and filter
     * @package xscroll
     * @since    3.0.0
     * 
     */
    public function init()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'assets']);
        add_action( 'customize_controls_enqueue_scripts', [$this, 'customize_enqueue'] );
        add_action( 'customize_preview_init', [$this, 'customizer_live_preview'] );
    }

    /**
     * Plugin frontend assets
     * @package xscroll
     * @since    3.0.0
     * 
     */
    function assets(){
        wp_enqueue_style('xscroll-plugin-css', XSTR_PLUGIN_URL.'assets/css/custom.css', NULL, $this->version);        
        wp_enqueue_style('fontello', XSTR_PLUGIN_URL.'assets/css/fontello.css', NULL, $this->version);
        wp_enqueue_script('x-jquery-active', XSTR_PLUGIN_URL.'assets/js/active.js', array('jquery'), $this->version, true);
    
        $xscroll_size = XSTR_core::get_xstr_option('size', 30);
        $xscroll_border_radius = XSTR_core::get_xstr_option('border_radius', 10);
        $xscroll_icon_size = $xscroll_size/2;
        $xscroll_icon_color = XSTR_core::get_xstr_option('icon_color', '#ffffff');
        $xscroll_icon_bg_color = XSTR_core::get_xstr_option('icon_bg_color', '#dd3333');
        $xscroll_icon_hover_color = XSTR_core::get_xstr_option('icon_hover_color', '#ffffff');
        $xscroll_icon_hover_bg_color = XSTR_core::get_xstr_option('icon_hover_bg_color', '#000000');
        $xscroll_icon_position = XSTR_core::get_xstr_option('icon_position', 50);
        $xscroll_icon_position_tablet_mobile = XSTR_core::get_xstr_option('icon_position_tablet_mobile', 95);
        $xscroll_icon_show_tablet_mobile = XSTR_core::get_xstr_option('icon_show_tablet_mobile');
        $show_hide = $xscroll_icon_show_tablet_mobile == 1 ? 'block' : 'none';     

        
    
        $custom_css = "
            .scroll-to-top a{
                width: {$xscroll_size}px;
                height: {$xscroll_size}px;
                border-radius: {$xscroll_border_radius}%;
                font-size: {$xscroll_icon_size}px;
                color: {$xscroll_icon_color};
                background: {$xscroll_icon_bg_color};
                margin-left: -{$xscroll_icon_size}px;
            }
    
            .scroll-to-top:hover a {
                background: {$xscroll_icon_hover_bg_color};
                color: {$xscroll_icon_hover_color};
            }
    
            .scroll-to-top {
                left: {$xscroll_icon_position}%;
            }
    
            @media (max-width: 991px) {
                
                .scroll-to-top {
                    left: {$xscroll_icon_position_tablet_mobile}%;
                }
            }    
            
            @media (max-width: 767px) {
                .scroll-to-top {
                    left: {$xscroll_icon_position_tablet_mobile}%;
                    display: {$show_hide} !important;

                }
            }	
        ";
    
         wp_add_inline_style( 'xscroll-plugin-css', $custom_css );
    }
    
     /**
     * Rcustomizeview live preview assets
     * @package xscroll
     * @since    3.0.0
     */
    
    function customizer_live_preview(){
        wp_enqueue_script('xscroll-customizer', XSTR_PLUGIN_URL.'assets/js/xscroll-customizer-live-preview.js', array( 'jquery','customize-preview' ), $this->version,true);
    }
    
    
    /**
     * Customize Enqueue assets
     * @package xscroll
     * @since    3.0.0
     */
    
    function customize_enqueue() {
        wp_enqueue_style('fontello', XSTR_PLUGIN_URL.'assets/css/fontello.css', NULL, $this->version);
        wp_enqueue_style('previewcss', XSTR_PLUGIN_URL.'assets/css/previewcss.css', NULL, $this->version);
    
        wp_enqueue_script('custom-customize', XSTR_PLUGIN_URL.'assets/js/custom-customize.js', array( 'jquery', 'customize-controls'), $this->version,true);
    
    }
    
    
}




