<?php

declare(strict_types=1);

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.


function getAuthorById($id) {
    require __DIR__ .'/data.php';
    foreach($authors as $author) {
        if ($author['id'] == $id) {
            return $author['name'];
            break;
        }
    }
}