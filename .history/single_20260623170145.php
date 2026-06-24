<?php get_header(); ?>

    <main>
        <section class="content">
            <div class="container">
                <div class="news-detail-wrapper">

                <?php if (have_posts()) : 
                    while (have_posts()) : 
                        the_post(); ?>
                    <?php endwhile;
                    endif; ?>
                    <article class="news-detail">
                        <div class="news-detail-header">
                            <div class="news-meta">
                                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                    <?php echo get_the_date('Y.m.d'); ?>
                                </time>
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
                <?php 
                 endwhile;
                 endif 
                >


                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>


