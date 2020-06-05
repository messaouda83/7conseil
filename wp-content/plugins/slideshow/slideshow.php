<?php
/*
Plugin Name: slideshow
Description: Plugin slideshow en homepage
Version: 0.1
Author: Messaouda Benchikh
*/

add_action('init','slideshow_init' );
function slideshow_init(){
    $labels= array(

'name'=>'Slide',
'singular_name'=>'Slide',
'add_new'=>'Ajout un slide',
'add_new_item'=>'Ajout un nouveau slide',
'edit_item'=> 'Editer un slide',
'new_item' => 'Nouvelle slide',
'view_item' => 'voir le slide',
'search_items' => 'Recherche un slide',
'not_found' => 'aucun slide',
'not_found_in_trash' => 'aucun slide dans la corbeille',
'parent_item_colon' => '',
'menu_name'=>'Slides'

    );
    /* permet d'initialiser les fonctionnalité du slideshow*/
    register_post_type('slide', array(

        'public'=>true,
        'publicly_queryable' =>false,
        'labels'=> $labels,
        'menu_position'=> 9,
        'capability_type'=> 'post',
        'supports'=> array('title', 'thumbnail'),
    ));
    /* Ajouter la taille de l'image */
    add_image_size('slider', 1200, 600, true);
}
   /* Permet d'afficher le slide */
function slideshow_show($limit=10){
    /* on importe javascript */
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.5.1.min.js', array('jquery'), '3.5.1', true);
    wp_enqueue_script('caroufredsel',plugins_url().'/slideshow/js/jquery.carouFredSel-6.2.1-packed.js', null, '6.2.1', true);
    add_action('wp_footer','slideshow_script');

    /*on écrit le code html */
$slides =new WP_Query("post_type= slide&posts_per_page=$limit");
/*Entourer les 2 slider par div */
echo '<div id="slideshow">';
while($slides->have_posts()){
    $slides->the_post();
    /*Récupération les informations contenant l'article */
    global $post;
    the_post_thumbnail('slider');
    
}
echo '</div>';
}
function slideshow_script(){
    ?>
    <script type="text/javascript">
    </script>
    <?php
}