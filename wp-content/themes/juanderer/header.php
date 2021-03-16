<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Juanderer Travels</title>


    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<?php wp_head();?>
</head>

<body>

<div id="page">

    <header class="header menu_fixed">
        <div id="logo">
            <?php
             if (function_exists('the_custom_logo')) {
                 $custom_logo_id = get_theme_mod('custom_logo');
                 $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
//                            var_dump($logo);
//                            exit();
             }?>
            <a href="<?= get_home_url(); ?>">
                <img src="<?php echo $logo;?>" height="70" alt="" class="logo_normal">
                <img src="<?php echo $logo;?>" height="70" alt="" class="logo_sticky">
            </a>
        </div>
        <a href="#menu" class="btn_mobile">
            <div class="hamburger hamburger--spin" id="hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </a>
        <nav id="menu" class="main-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => ''
        )); ?>
        </nav>
    </header>
    <!-- /header -->


