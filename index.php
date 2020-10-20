<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep as much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
    require __DIR__ .'/header.php';
    require __DIR__ .'/data.php';
?>
<header>
<h1 class = "title">fake news</h1>
</header>
<?php
foreach($articles as $article) {
    $title = $article['title'];
    $content = $article['content'];
    $author = $article['author'];
    $date = $article['publishedDate'];
    $likes = $article['likeCounter'];

    ?>
    <main class = "article-container">
        <!-- Article content -->
        <p> <?php echo $title ?> </p>
        <p> <?php echo $content ?> </p>
        <p> <?php echo $author ?> </p>
        <p> <?php echo $date ?> </p>
        <p> <?php echo $likes ?> </p>
    </main>
    <?php


}
?>
</body>

</html>
