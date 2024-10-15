<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--Google font links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">

        <title><?php get_the_title();?></title>

        <?php
        wp_head();
        ?>
    </head>

    <body>
        <header id="header">
            <?php
                if(function_exists('the_custom_logo')){
                     $custom_logo_id = get_theme_mod('custom_logo');
                     $logo= wp_get_attachment_image_src($custom_logo_id);
                    //the_custom_logo();
                }
                //the_custom_logo();
            ?>
            <img id="header-img" src=<?php echo $logo[0] ?> alt="bottle of water" width="150px" height="90px">
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<nav id="nav-bar">%3$s</nav>',
                    )
                );
            ?>
        </header>