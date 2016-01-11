<div>
<?php
		$dir = "Photos";
		echo "here\n";
		// Открыть заведомо существующий каталог и начать считывать его содержимое
		
	if ($handle = opendir('Photos')) 
	{
		echo "Дескриптор каталога: $handle\n";
		echo "Файлы:\n";

		/* Именно этот способ чтения элементов каталога является правильным. */
		while (false !== ($file = readdir($handle))) 
		{ 
			echo "$file\n";
		}

		/* Этот способ НЕВЕРЕН. */
		while ($file = readdir($handle)) 
		{ 
			echo "$file\n";
		}

		closedir($handle);
	}
	
	
	
	
	
	
	
	include "connect.php";   
	if (!$dbcnx) // Если дескриптор равен 0 соединение не установлено
	{
		echo("<P>В настоящий момент сервер базы данных не доступен, поэтому 
           корректное отображение страницы невозможно.</P>");
	}
	else
	{
		$mydb = mysql_select_db("Students", $dbcnx);
		if($mydb)
		{
			echo("<P>База данных ушпешно выбран.</P>");
			$myquery = mysql_query("select * from Data;");
			if($myquery)
			{
					echo "<table border = 1>";
					echo "<tr><td>ID</td><td>Name</td><td>Age</td></tr>";
				while($author = mysql_fetch_array($myquery))
				{
					echo "<tr><td>".$author['id']."</td><td>".$author['name']."</td><td>".$author['age']."</td></tr>";
				}
				echo "</table>";
			}
		}
		else
		{
			echo("<P>нет</P>");
		}
	}
	
	
	
	
	if(mysql_close($dbcnx)) // разрываем соединение
	{
		echo("Соединение с базой данных прекращено");
	}
	else
	{
		echo("Не удалось завершить соединение");
	}
?>