<div>
<?php
		$dir = "Photos";
		echo "here\n";
		// ������� �������� ������������ ������� � ������ ��������� ��� ����������
		
	if ($handle = opendir('Photos')) 
	{
		echo "���������� ��������: $handle\n";
		echo "�����:\n";

		/* ������ ���� ������ ������ ��������� �������� �������� ����������. */
		while (false !== ($file = readdir($handle))) 
		{ 
			echo "$file\n";
		}

		/* ���� ������ �������. */
		while ($file = readdir($handle)) 
		{ 
			echo "$file\n";
		}

		closedir($handle);
	}
	
	
	
	
	
	
	
	include "connect.php";   
	if (!$dbcnx) // ���� ���������� ����� 0 ���������� �� �����������
	{
		echo("<P>� ��������� ������ ������ ���� ������ �� ��������, ������� 
           ���������� ����������� �������� ����������.</P>");
	}
	else
	{
		$mydb = mysql_select_db("Students", $dbcnx);
		if($mydb)
		{
			echo("<P>���� ������ ������� ������.</P>");
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
			echo("<P>���</P>");
		}
	}
	
	
	
	
	if(mysql_close($dbcnx)) // ��������� ����������
	{
		echo("���������� � ����� ������ ����������");
	}
	else
	{
		echo("�� ������� ��������� ����������");
	}
?>