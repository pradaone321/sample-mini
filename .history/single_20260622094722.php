<?php get_header(); ?>

    <main>
        <section class="content">
            <div class="container">
                <div class="news-detail-wrapper">
                    <article class="news-detail">
                        <div class="news-detail-header">
                            <div class="news-meta">
                                <time datetime="<?php echo get_the_date('Y-m-d'); ?></time>
                                <span class="news-category category-release">Release</span>
                            </div>
                            <h1 class="news-title"><?php the_title(); ?></h1>
                        </div>
                        <div class="news-eyecatch">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="news-body">
                            <?php the_content(); ?>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>


