<?php get_header();?>
<section class="page-wrap mt-5 ">
<div class="container">
<section class="row">
<!-- <div class="col-lg-3">
        if(is_active_sidebar('page-sidebar')):
         dynamic_sidebar('page-sidebar'); 
         endif;
</div> -->
<div class="col-lg-9">
        <h1 class="mb-3"><?php the_title(); ?></h1>
        <?php get_template_part('includes/section', 'content'); ?>
</div>

</section>
</div>
</section>
<?php get_footer();?>