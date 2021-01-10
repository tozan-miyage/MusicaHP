<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ブートストラップ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </script>
    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- リセットCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <!-- スワイパー -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
</head>

<body <?php body_class();?>>
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