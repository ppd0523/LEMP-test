<?php
require_once("lib/files.php");

?>

<!DOCTYPE html>
<html>
	<?php require("view/head.php"); ?>
	<body>
		<a href="index.php"><h1>WEB</h1></a>

		<?php data_files(); ?>	

		<a href="create.php">Create</a>

        <?php
        if( isset($_GET['file']) ){
        ?>
		<a href="update.php?file=<?=$_GET['file'];?>">Update</a>
		<form action="delete_process.php" method="POST">
        <?php
        $title = $_GET['file'];
        echo "<input type='hidden' name='title' value='$title'>";
        ?>
        <input type="submit" value="delete">
		</form>

        <?php
        }
        ?>   

		<form action="update_process.php" method="POST">
        <?php
        $basename = basename($_GET['file']);
        $basename = htmlspecialchars($basename);
        $content = htmlspecialchars(file_get_contents("data/".$basename));
        echo "<input type='hidden' name='old_title' value='$basename'>";
        echo "<p><input type='text' name='title' placeholder='Title' value='$basename'></p>";
        echo "<p><textarea type='text' name='content' placeholder='description'>$content</textarea></p>";
        ?>
		<p><input type="submit"></p>
		</form>

	</body>
</html>
