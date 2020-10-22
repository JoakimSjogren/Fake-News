<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep as much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
    require __DIR__ .'/header.php';
    require __DIR__ .'/data.php';
?>
<header>
    <a href = "index.php" class = "logo"><h1 class = "title">fake news</h1></a>
</header>
<?php
foreach($articles as $article) {
    $id = $article['id'];
    $title = $article['title'];
    $content = $article['content'];
    $author = $article['author'];
    $date = $article['publishedDate'];
    $likes = $article['likeCounter'];
    $linkToArticle = '/article.php?id=' . $id;
    $thumbnail = $article['thumbnail'];
    ?>
    <main class = "article-container">
        <a class = "article-button" href = "<?php echo $linkToArticle ?>">
            <!-- Article content -->
            <img src="<?php echo $thumbnail?>" width="100%">
            <h2 class = "article-title"> <?php echo $title ?> </h2>
            <p> <?php echo $content . '<br>'?> </p>
            <p> <?php echo $author . '  -' . $date?> </p>
            
            <p> <?php echo $likes ?> </p>
        </a>
    </main>
    <?php


}
?>
</body>

</html>
