<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>7conseil</title>
    <?php wp_head(); ?>
    
</head>
<body>
 




<header>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


        <nav class="navbar navbar-expand-lg bg fixed-top">
            <a class="navbar-brand text-bold font-italic col-2" href="#"><?php bloginfo('name') ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction(this)">
          
                <span class="navbar-toggler-icon "></span>
                <span class="navbar-toggler-icon "></span>
                <span class="navbar-toggler-icon "></span>
            
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

<?php
wp_nav_menu( array(
    'theme_location'  => 'top-menu',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarSupportedContent',
    'menu_class'      => 'navbar-nav mr-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) );

?>

 <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">

        <div class="search-box">
            <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search here..." />
            <button type="submit" id="searchsubmit" value="Search" class="search-btn"><i class="fa fa-search"></i></button>
        </div>
</form>
</div>

        </nav>
        <?php
if ( has_header_image() ) {
    $header_image_data = get_theme_mod( 'header_image_data' );
    echo wp_get_attachment_image( $header_image_data->attachment_id, 'full' );
}
?> 
 
    </header>
