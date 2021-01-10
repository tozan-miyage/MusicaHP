<?php get_header(); ?>

<!-- =============================================
stylist.css
============================================= -->

<section id="stylist">
    <div class="row content">
        <div class="col-12 content-wrapper">
            <div class="content-headding">
                <h2>[<span>stylist</span>]</h2>
            </div>
        </div>
    </div>

    <!-- ---------自己紹介ー--------- -->
    <div id="self-introduction" class="row content">
        <div class="col-12">
            <div class="stylist-imgbox">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stylist/stylist-img1.jpg" alt="">
            </div>
        </div>
        <div class="col-12 menus">
            <div class="content-sentence">
                <div class="menu-book-wrapper">
                    <div class="menu">真栄平 拓也</div>
                    <div class="supplement-box">
                        <span class="supplement">Maehira Takuya</span>
                    </div>
                </div>
                <div class="menu-book-wrapper">
                    <div class="menu">美容歴<span>20</span>年</div>
                    <div class="supplement-box">
                        <span class="supplement">1978年生まれ</span>
                    </div>
                </div>
                <div class="menu-book-wrapper">
                    <div class="menu">シャンプーソムリエ
                    </div>
                    <div class="supplement-box">
                        <span class="supplement">サクロサイエンティフィックアカデミー修了</span>
                    </div>
                </div>
                <div class="menu-book-wrapper">
                    <div class="menu">趣味</div>
                    <div class="supplement-box">
                        <span class="supplement">音楽/イラスト/雑学/本</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 salon-look">
            <div class="stylist-imgbox">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stylist/treatments-img1.jpg" alt="">
            </div>
        </div>
        <div class="col-6 salon-look">
            <div class="stylist-imgbox">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stylist/treatments-img2.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="row info-buttons">
        <div class="col-6 button">
            <div class="tel">
                follow me!
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>