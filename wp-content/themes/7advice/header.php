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
        <nav class="navbar navbar-expand-lg my-navbar-color fixed-top bg">
            <a class="navbar-brand text-bold font-italic col-2" href="#"><?php bloginfo('name') ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction(this)">
          
                <span class="navbar-toggler-icon bar1"></span>
                <span class="navbar-toggler-icon bar2"></span>
                <span class="navbar-toggler-icon bar3"></span>
            
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php

        wp_nav_menu(

            array(

                'theme_location'  => 'top-menu',
                // 'menu'  => 'Top Bar',
                // 'menu_class' => 'top-bar', // Attribue une classe
                'menu_class' => 'navbar-nav mr-auto top-bar',
                'container' => 'false'
            )

        );

        ?>
                <!-- <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul> -->
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
 <div class="context">
        <h1>Bienvenue au sevenConseil</h1>
    </div>


<div class="area" >
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
    </header>
