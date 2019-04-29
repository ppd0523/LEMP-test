<?php 
function data_files(){
	$files = scandir('data/');
   	array_splice($files, 0, 2);
	echo '<ol>';
	foreach($files as $file){
	        $file = htmlspecialchars($file);
       		echo "<li><a href='index.php?file=$file'>$file</a></li>\n";
	}
	echo '</ol>';
}

function file_description($file){
	$basename = basename($file);
	echo htmlspecialchars(file_get_contents('data/'.$basename));
}
?>
