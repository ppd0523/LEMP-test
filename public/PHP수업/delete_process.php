<?php
$title = $_POST['title'];
unlink("data/".$title);
header('Location: /index.php');
?>
