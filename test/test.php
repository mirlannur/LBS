<html>
<head>
	<title>Roll</title>
	<link type = "style-sheet"href = "styleRoll.css">
	<script language = "javascript" type = "text/javascript" src = "jquery-1.11.3.js"></script>
	<script language = "javascript" type = "text/javascript" src = "func.js"></script>
</head>
<body>
	<center>
		<ul id = "photo" style = "padding: 0px; position: relative left : 500px">
		<?php
			$dir = 'Photos';
			if ($handle = opendir($dir)) 
			{
				$opac = 1;
				$coun = count_files($dir);
				while (false !== ($file = readdir($handle)))  
					if($file != "." && $file != "..")
					{
						echo "<li class = \"Roll\"style = \"opacity: ".$opac."; float: left; width: 600px; height: 400px;  top: 0px; left: 0px;\">
						<image class = \"Roll1\" title = ".$file." alt = ".$file." src = \"Photos\\".$file."\" Width = \"100%\" Height = \"100%\">
						</li>";
						$opac -= 1 / $coun;
					}
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
		</ul>
		<p>here1</p>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>	
		
		<p>here7</p>
	</center>
</body>
</html>
















