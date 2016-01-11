<?php
	$dir = 'Photos';
	if ($handle = opendir($dir))
	{
		$coun = count_files($dir);
		$n = 0;
		echo "<ul class=\"slidewrapper\">";
		while (false !== ($file = readdir($handle)))  
		{
			if($file != "." && $file != "..")
			{
					echo "<li class = \"slide\">
					<image src = \"".$dir."\\".$file."\" Width = \"100%\" Height = \"100%\">
					</li>";
				++$n;
			}
		}
		echo "</ul>";
		closedir($handle);
	}
	function count_files($dir)
	{
		$handle1 = opendir($dir);
		$count = 0;
		while (false !== ($file1 = readdir($handle1)))  
			if($file1 != "." && $file1 != "..")
			{
				++$count;
			}
		closedir($handle1);
		return $count;
	}
?>