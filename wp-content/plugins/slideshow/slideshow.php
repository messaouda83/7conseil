<?php
/*
Plugin Name: slideshow
Description: Plugin slideshow en homepage
Version: 0.1
Author: Messaouda Benchikh
*/

use function PHPSTORM_META\type;

add_action('init','slideshow_init' );
add_action('add_meta_boxes', 'slideshow_metaboxes');
add_action('save_post', 'slideshow_savepost', 10, 2);

function slideshow_init(){
    $labels= array(

'name'=>'Slide',
'singular_name'=>'Slide',
'add_new'=>'Ajout un slide',
'add_new_item'=>'Ajout un nouveau slide',
'edit_item'=> 'Editer un slide',
'new_item' => 'Nouvelle slide',
'view_item' => 'voir l\' Slide',
'search_items' => 'Recherche un slide',
'not_found' => 'aucun slide',
'not_found_in_trash' => 'aucun slide dans la corbeille',
'parent_item_colon' => '',
'menu_name'=>'Slides'

    );
    /* permet d'initialiser les fonctionnalité du slideshow*/
    register_post_type('slide', array(

        'public'=> true,
        'publicly_queryable' => false,
        'labels'=> $labels,
        'menu_position'=> 9,
        'capability_type'=> 'post',
        'supports'=> array('title', 'thumbnail'),
    ));
    /* Ajouter la taille de l'image */
    add_image_size('slider', 1920, 1501, true); 
}

/* Permet de gérer les metaboxes */
function slideshow_metaboxes(){

    add_meta_box('slideshow', 'Lien', 'slideshow_metabox', 'slide', 'normal', 'high');
}
/* Meta box pour gérer lesliens */
function slideshow_metabox($object){
    wp_nonce_field('slideshow', 'slideshow_nonce');
    ?>
<div class="meta-box-item-title">
<h4>Lien de ce slide</h4>
</div>
<div class="meta-box-item-content">
<input type="text" name="slideshow_link" style="width:1200px; " value="<?= get_post_meta($object->ID, '_link', true); ?>">
</div>
    <?php


}
function slideshow_savepost($post_id, $post){
if(!isset($_POST['slideshow_link']) || !wp_verify_nonce($_POST['slideshow_nonce'], 'slideshow')){
return $post_id;
}
$type= get_post_type_object($post->post_type);
if(current_user_can($type->cap->edit_post)){
    return $post_id; /* ne permet pas d'editer les post meta par quelqu'un */


}
update_post_meta($post_id,'_link', $_POST['slideshow_link']);

}
   /* Permet d'afficher le slide */
function slideshow_show($limit=10){
    /* on importe javascript */
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.5.1.min.js', array('jquery'), '3.5.1', true);
    wp_enqueue_script('caroufredsel',plugins_url().'/slideshow/js/jquery.carouFredSel-6.2.1-packed.js', null, '6.2.1', true);
    add_action('wp_footer','slideshow_script', 30);

    /*on écrit le code html */
$slides =new WP_Query("post_type= slide&posts_per_page=$limit");
/*Entourer les 2 slider par div */
echo '<div id="slideshow">';
while($slides->have_posts()){
    $slides->the_post();
    /*Récupération les informations contenant l'article */
    global $post;

    the_post_thumbnail('slider',array('style' =>'width:1920px!important;'));
    
}
echo '</div>';
}
function slideshow_script(){
    ?>
    <script type="text/javascript">
    (function($){
        $('#slideshow').caroufredsel();
    } )(jQuery);
    </script>
    <?php
}