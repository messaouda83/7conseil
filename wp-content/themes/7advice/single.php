<?php get_header();?>

<section class="page-wrap mt-5 mb-5">

    <div class="container">
        <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('blog-small');?>" alt ="<?php the_title(); ?>"class="img-fluid mb-3 img-thumbnail">
        <?php endif;?>
    <h1 class="mb-3"><?php the_title(); ?></h1>
        <?php get_template_part('includes/section', 'blogcontent'); ?>
        <?php wp_link_pages(); ?>
    </div>
    
</section>

<?php get_footer();?>