<?php get_header(); ?>

<!-- =============================================
menu.css
============================================= -->

<section id="menu">
    <div class="row content">
        <div class="col-12 content-wrapper">
            <div class="content-headding">
                <h2>[<span>menu</span>]</h2>
                <!-- <p>全てシャンプー・スタイリング込</p> -->
            </div>
            <?php
            $args = array(
                'post_type' => array('cut','color','perm', 'straight_perm', 'head_spa'),
                'order' =>  'ASC',
            );
            $menu_query = new WP_Query($args);
            $post_index = 0;
            ?>
            <?php if ($menu_query->have_posts()) : ?>
                <?php while ($menu_query->have_posts()) : ?>
                    <?php $menu_query->the_post(); ?>
                    <div class="concept menu-hedding">
                        <h3><?php the_title(); ?><span><?php the_content(); ?></span></h3>
                    </div>
                    <div class="content-sentence">
                        <?php
                        $fields = get_fields();
                        ?>
                        <?php if ($fields) : ?>
                            <?php foreach ($fields as $name => $value) : ?>
                                <?php if ($value !== "") : ?>
                                    <div class="menu-price-wrapper">
                                        <div class="menu"><?php echo $name; ?></div>
                                        <div class="price">¥<?php echo number_format($value); ?></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <!-- <div class="menu-price-wrapper">
                            <div class="menu">男性カット</div>
                            <div class="price">¥3,370</div>
                        </div>
                        <div class="menu-price-wrapper">
                            <div class="menu">高校生カット</div>
                            <div class="price">¥3,060</div>
                        </div> -->
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>