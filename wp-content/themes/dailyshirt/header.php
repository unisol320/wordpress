<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://dailyshirt.de/wp-content/themes/dailyshirt/assets/img/favicon/favicon-16x16.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
    <title>Startseite - Daily Shirt</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top nav_size">
        <div class="logo_wrapper">
            <a class="navbar-brand" href="#">
                <img src="<?php bloginfo('template_directory') ?>/img/images.png" class="logo-img" width="120" height="120" alt="">
            </a>
        </div>
        <div class="logo_text_wrapper"><p class="logo_text">BORN IN THE 80s</p></div>
        <button class="navbar-toggler btn-dark" style="margin-left: 87%; border:1px solid black;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-brand navbar_text_wrapper"><span>AUTHENTIC BRANDS AND FABRICS</span>  </div>

        <div class="menu_wrapper">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
				wp_nav_menu( array(
					'theme_location'  => '',
					'menu'            => '',
					'container'       => 'ul',
					'container_class' => 'navbar-nav mr-auto',
					'container_id'    => '',
					'menu_class'      => 'navbar-nav mr-auto',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => new Description_Walker,
				) );
				?>
            </div>
        </div>

        <a class="inst_logo" href="#">
            <img src="<?php bloginfo('template_directory') ?>/img/3bfa47828d8d62b924f12ca314d6b400.jpg" width="24" height="24" alt="">
        </a>
    </nav>
</header>
<main>