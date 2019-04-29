<?php
$old_title = htmlspecialchars($_POST['old_title']);
$title = htmlspecialchars($_POST['title']);
$content = htmlspecialchars($_POST['content']);
rename("data/".$old_title, "data/".$title);
file_put_contents("data/".$title, $content);
header('Location: /index.php?file='.$title);
?>
