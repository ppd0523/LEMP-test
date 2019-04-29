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

		<?php
		if( isset($_GET['file']) ){
			$file = htmlspecialchars($_GET['file']);
			echo "<h2>$file</h2>";
			file_description($file);
		} else{
			echo "<h2>Welcome</h2>";
		}
		?>
	</body>
</html>
