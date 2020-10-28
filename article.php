<?php
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';
    $id = $_GET['id'];

    
    foreach($articles as $article) {
        if ($article['id'] == $id) {
            $title = $article['title'];
            $thumbnail = $article['thumbnail'];
            $content = $article['content'];
            $authorId = $article['authorId'];
            $date = $article['publishedDate'];
            $likes = $article['likeCounter'];   

            //Get author name by id
            $authorName = getAuthorById($authorId);
            
            printArticle($title, $thumbnail, $content,$authorName,$date,$likes);
        //Break out of loop when the right article has been found
        break;
        }

    }
   
    function printArticle($title, $thumbnail, $content,$author,$date,$likes){
        require __DIR__ . '/header.php';
        ?>
        <main class = "article-container">
            <!-- Article content -->
            <h2 class = "article-title"> <?php echo $title ?> </h2>
            <img src="<?php echo $thumbnail?>" width="100%">
            <p> <?php echo $content ?> </p>
            <p> <?php echo $author ?> </p>
            <p> <?php echo $date ?> </p>
            <p> <?php echo $likes ?> </p>
    </main>

    <?php
    }
?>