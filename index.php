<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep as much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
    require __DIR__ .'/header.php';
    require __DIR__ .'/data.php';
?>

<h1 class = "title">fake news</h1>

<?php
foreach($articles as $article) {
    $title = $article['title'];
    $content = $article['content'];
    $author = $article['author'];
    $date = $article['publishedDate'];
    $likes = $article['likeCounter'];

    ?>
        <!-- Conent -->
        <h1> <?php echo $title ?> </h1>
        <h1> <?php echo $content ?> </h1>
        <h1> <?php echo $author ?> </h1>
        <h1> <?php echo $date ?> </h1>
        <h1> <?php echo $likes ?> </h1>
    <?php

}
?>
</body>

</html>
