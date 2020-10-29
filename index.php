<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep as much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
    require __DIR__ .'/header.php';
    require __DIR__ .'/data.php';


require __DIR__.'/functions.php';
foreach($articles as $article) {
    
    
    $id = $article['id'];
    $title = $article['title'];

    //Preview content
    $previewContentLength = 80;
    $content = $article['content'];
    if (strlen($content) < $previewContentLength) {
     $content = $article['content'];
    }
    else {
        $content = substr($article['content'], 0, $previewContentLength) . "...";
    }

    $authorId = $article['authorId'];
    $date = $article['publishedDate'];
    $linkToArticle = '/article.php?id=' . $id;
    $thumbnail = $article['thumbnail'];
    
    //Author name
    $authorName = getAuthorById($authorId);
    
    ?>
    <main class = "article-container">
        <a class = "article-button" href = "<?php echo $linkToArticle ?>">
        
            <!-- Article content -->
            <img src="<?php echo $thumbnail?>" width="100%">
            <h2 class = "article-title"> <?php echo $title ?> </h2>
            <p class = "content"> <?php echo $content . '<br>'?> </p>
           <em> <p> <?php echo $authorName . '  -' . $date?> </p> </em>
        </a>
    </main>
    <?php


}
?>
</body>

</html>
