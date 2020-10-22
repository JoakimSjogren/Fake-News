<?php
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';

    $id = $_GET['id'];

    
    foreach($articles as $article) {
        if ($article['id'] == $id) {
            $title = $article['title'];
            $thumbnail = $article['thumbnail'];
            $content = $article['content'];
            $author = $article['author'];
            $date = $article['publishedDate'];
            $likes = $article['likeCounter'];   
            require __DIR__.'/header.php';
            ?>
            <header>
            <a href = "index.php" class = "logo"><h1 class = "title">fake news</h1></a>
            </header>
            <main class = "article-container">
                <!-- Article content -->
                <h2> <?php echo $title ?> </h2>
                <img src="<?php echo $thumbnail?>" width="100%">
                <p> <?php echo $content ?> </p>
                <p> <?php echo $author ?> </p>
                <p> <?php echo $date ?> </p>
                <p> <?php echo $likes ?> </p>
                <p> <?php echo $id ?> </p>
        </main>

        <?php

        //Break out of loop when right article has been found
        break;
        }

    }
   

?>