<?php get_header();?>

<section class="page-wrap ">
<!-- echo do_shortcode('[smartslider3 slider="1"]'); code php-->
<div class="container">
<h1><?php the_title(); ?></h1>
<?php get_template_part('includes/section', 'content'); ?>
</div>
</section>
<?php get_footer();?>