<?php get_header();?>

<section class="page-wrap mt-5">

    <div class="container">
 <section class="row">
    <div class="col-lg-3">
        <?php if(is_active_sidebar('blog-sidebar')):?>
        <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php endif;?>
   </div>
</section>
<div class="col-lg-9">
    <?php get_template_part('includes/section', 'archive'); ?>
   <?php previous_posts_link(); ?>
   <?php next_posts_link(); ?>
   <?php wp_link_pages() ;?>

 </div>
     <?php
     
  /*   
    global $wp_query;
    $big = 999999999;
    echo paginate_links(
        array(

        'base' => str_replace($big, '%#%' , esc_url(get_pagenum_link($big))),
        'format' =>'?paged=%#%',
        'current'=> max(1, get_query_var('paged')),
        'total'=> $wp_query->max_num_pages
        )
        ); */

    
    ?> 

    </div>
    
</section>

<?php get_footer();?>