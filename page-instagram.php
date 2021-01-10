<?php get_header(); ?>
<main>
    <section id="instagram">
        <div class="row content">
            <div class="col-12 content-wrapper">
                <div class="content-headding">
                    <h2>[<span>instagram</span>]</h2>
                </div>
            </div>
        </div>
        <div class="row content">
            <div class="col-12">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="instagram-feed">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>