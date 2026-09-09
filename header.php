<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="l-header">
        <h1 class="l-header__logo">
            <a href="/"><img src="img/logo.svg" alt="SUPPLE"></a>
        </h1>
        <nav class="l-header__nav js-header-nav">
            <ul class="l-header__list">
                <li><a href="concept.html">CONCEPT</a></li>
                <li><a href="menu.html">MENU</a></li>
                <li><a href="shoplist.html">SHOPLIST</a></li>
                <li><a href="archive-blog.html">BLOG&<span class="pc-only">NEWS</span></a></li>
            </ul>
        </nav>
        <a href="#" onclick="event.preventDefault();" class="l-header__btn">ONLINE SHOP</a>
    </header>