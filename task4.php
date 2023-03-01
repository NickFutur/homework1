<?php
$day = mt_rand(1,8);
echo "Число: $day <br>";
switch($day){
	case 5:
	case 4:
	case 3:
	case 2:
	case 1:
		echo "Это рабочий день";
		break;
	case 7:
	case 6:
		echo "Это выходной день";
		break;
	default:
		echo "Неизвестный день";
}
