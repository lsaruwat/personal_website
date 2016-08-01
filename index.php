<?php
$dir    = getcwd();
$files = array_diff(scandir($dir), array('..', '.'));

foreach($files as $file)
{
	echo "<a href='" . $file . "' >" . $file . "</a></br>";
}
?>