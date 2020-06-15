<?php get_header();?>
<!--code php slideshow_show(); -->
<div class="context">
        <h1>Bienvenue au Seven Conseil</h1>
       
</div>


<div class="area" >
<canvas></canvas>
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
</div >
<section class="page-wrap ">
<!-- echo do_shortcode('[smartslider3 slider="1"]'); code php-->
<div class="container">
<h1 class="mb-3"><?php the_title(); ?></h1>
<?php get_template_part('includes/section', 'content'); ?>
</div>
</section>
<?php get_footer();?>