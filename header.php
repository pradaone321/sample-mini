<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo"><a href="<?php echo home_url(); ?>">株式会社○○</a></h1>
            <nav>
                <ul>
                    <li><a href="<?php echo home_url(); ?>" class="active">ホーム</a></li>
                    <li><a href="about.html">会社概要</a></li>
                    <li><a href="privacy.html">プライバシーポリシー</a></li>
                </ul>
            </nav>
        </div>
    </header>