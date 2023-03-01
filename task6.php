<!DOCTYPE>
<html>
<head>
	<title>task 6</title>
</head>
<body style="display: flex;justify-content: center; flex-direction: column; align-items: center;">
<table cellpadding="5" style="text-align: center;">
    <tr>  <h1 style="text-align: center">Таблица умножения</h1></tr>
<?php
	for($i=1; $i<11;$i++)
	{
		print '<tr>';
		for ($j=1;$j<11;$j++)
		{
			$Multiplication = $i*$j;
			if($i%2 == 0 && $j%2 == 0){
				print '<td>';
				print '(' . ($Multiplication) . ')';
				print '</td>';
			}elseif ($i%2 != 0 && $j%2 != 0){
				print '<td>';
				print '[' . ($Multiplication) . ']';
				print '</td>';
			}else{
				print '<td>';
				print ($Multiplication);
				print '</td>';
			}

		}
		print '</tr>';
	}
	?>
</table>
</body>
</html>
