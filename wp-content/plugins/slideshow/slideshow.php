<?php
/*
Plugin Name: slideshow
Description: Plugin slideshow en homepage
Version: 0.1
Author: Messaouda Benchikh
*/

add_action('init','slideshow_init' );
function slideshow_init(){
    /* permet d'initialiser les fonctionnalité du slideshow*/
    register_post_type('slide', array(

        'public'=>true,
        'label'=>'slides',
    ));
}
   /* Permet d'afficher le slide */
function slideshow_show(){
echo "slideshow";

}