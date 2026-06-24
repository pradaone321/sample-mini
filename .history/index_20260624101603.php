<?php get_header(); ?>
    <main>
        <section class="fv">
            <div class="fv-image">
            <img src="<?php echo get_theme_file_uri('images/fv-background.jpg');?>" alt="株式会社○○のメインビジュアル">
            </div>
            <div class="fv-content">
                <h2>ようこそ、株式会社○○へ</h2>
                <p>私たちはお客様の成功をサポートします</p>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <div class="news-section">
                    <aside class="news-sidebar">
                        <h2>お知らせ</h2>
                    </aside>
                    <div class="news-main">
                        <div class="news-list-simple">

<?php
 if (have_posts()) : while(have_posts() : the_post();)
?>
                            <article class="news-item-simple">
                                <time datetime="2024-01-15">2024.01.15</time>
                                <span class="news-category category-release">Release</span>
                                <p class="news-text"><a href="news.html#news1">新サービス開始のお知らせ。この度、新サービスを開始いたしました。詳細はこちらをご覧ください。</a></p>
                            </article>
                            <article class="news-item-simple">
                                <time datetime="2024-01-10">2024.01.10</time>
                                <span class="news-category category-news">News</span>
                                <p class="news-text"><a href="news.html#news2">年末年始の営業について。年末年始の営業時間についてお知らせいたします。</a></p>
                            </article>
                            <article class="news-item-simple">
                                <time datetime="2024-01-05">2024.01.05</time>
                                <span class="news-category category-news">News</span>
                                <p class="news-text"><a href="news.html#news3">新年のご挨拶。新年あけましておめでとうございます。本年もよろしくお願いいたします。</a></p>
                            </article>

                            <?php
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content bg-light">
            <div class="container">
                <div class="cta-section">
                    <h2>会社概要</h2>
                    <p>私たちは、お客様のビジネス成長を支援することを使命として、高品質なサービスとソリューションを提供しています。創業以来、多くのお客様にご信頼いただき、業界をリードする企業として成長してまいりました。お客様の成功が私たちの成功であり、常に最善のサービスを提供することをお約束いたします。</p>
                    <a href="about.html" class="btn-primary">会社概要を見る</a>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>