<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hello CSS</title>
    <style>
    a{
        color:black;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <h1>WEB</h1>
    
    <ol>
        <li><a href="index.php?file=PHP">PHP</a></li>
        <li><a href="index.php?file=Javascript">Javascript</a></li>
        <li><a href="index.php?file=Python">Python</a></li>
        <li><a href="index.php?file=CSS">CSS</a></li>        
    </ol>
    
    <?php
    echo file_get_contents("data/".$_GET['file']);
    ?>
</body>
</html>
