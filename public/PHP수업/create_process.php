<?php
$title = htmlspecialchars($_GET['title']);
$content = htmlspecialchars($_GET['content']);

if( !empty($title) ){
    file_put_contents("data/".$title, $content);
}

header("Location: /index.php");
?>
