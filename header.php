<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fuild">

        <!-- ==========================================================
        header.css
        ========================================================== -->
        <header>
            <div class="row header">
                <div class="col-12 header-wrapper">
                    <div class="main-logo">
                        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/Musica_logo_new.jpg" alt="Musicaのロゴマーク"></h1>
                    </div>
                </div>
            </div>
            <div class="row navi">
                <div class="col-12 navi-wrapper">
                    <ul>
                        <li>salon</li>
                        <li>menu</li>
                        <li class="small-font">ご予約</li>
                        <li>stylist</li>
                        <li>instagram</li>
                        <li>news</li>
                        <li>schedule</li>
                    </ul>
                </div>
                <div class="next-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/right-arrow-icon.svg" alt=""></i></div>
            </div>
        </header>