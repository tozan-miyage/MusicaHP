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

<body>
    <div class="container-fuild">

        <!-- ==========================================================
        header.css
        ========================================================== -->
        <header>
            <div class="row header">
                <div class="col-12 header-wrapper">
                    <div class="main-logo">
                        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Musica_logo_new.jpg" alt="Musicaのロゴマーク"></h1>
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
                <div class="next-btn"><img src="./images/right-arrow-icon.svg" alt=""></i></div>
            </div>
        </header>

        <main>
            <!-- =======================================
            top.css
            ======================================= -->
            <section id="top" class="top">
                <div class="row top-image">
                    <div class="col-12 top-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top1.png" alt="">
                    </div>
                </div>
            </section>

            <!-- ============================================
            content.css
            ============================================ -->
            <section id="salon">
                <div class="row content">
                    <div class="col-12 content-wrapper">
                        <div class="content-headding">
                            <h2>[<span>salon</span>]</h2>
                        </div>
                        <div class="concept">
                            <h3>大切な頭皮と髪だからこそ<br>
                                納得のいく安心施術を</h3>
                        </div>
                        <div class="content-sentence">
                            <p>ムジカでは、ご来店のお客様へお悩み、ご要望を確認し、頭皮と髪の状態をチェックします。</p>
                            <p>その上で、施術内容と料金を説明、施術いたします。</p>
                            <p>気になることは気兼ねなくご相談ください。</p>
                            <p>お一人ずつのご案内ですので、頭皮や白髪のご相談など、それぞれの状態に合わせたケアをていねいにお伝えさせていただきます。</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <!-- ============================================
            footer.css
            class="top"はtop.cssを採用
            ============================================ -->
            <section id="footer" class="top">
                <div class="row top-image">
                    <div class="col-12 top-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/footer.png" alt="">
                    </div>
                </div>

                <div class="row info">
                    <div class="col-12 info-wrapper">
                        <p>〒901-0306
                        </p>
                        <p>沖縄県糸満市西崎町3-158 102
                        </p>
                        <p>tel：098-851-7140
                        </p>
                        <p>営業時間：9:30〜19:00
                        </p>
                        <p>定休日：月曜日（営業の日も有）
                        </p>
                    </div>
                </div>
                <div class="row info-buttons">
                    <div class="col-6 button">
                        <div class="tel">
                            098-851-7140
                        </div>
                    </div>
                    <div class="col-6 button">
                        <div class="book-instagram">
                            メッセージ予約
                        </div>
                    </div>
                    <div class="col-6 button">
                        <div class="google-map">
                            googleMAP
                        </div>

                    </div>
                </div>

                <div class="copy-right">
                    copyright hair salon Musica
                </div>
            </section>

        </footer>
        <!-- ブートストラップ用jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- swiper -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>
        <!-- 実装 -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>
    </div>
</body>

</html>