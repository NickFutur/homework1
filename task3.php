<?php
$age = mt_rand(0,130);
echo "Возраст: $age <br>";
if(18 <= $age && $age <= 65){
	echo "Вам еще работать и работать";
} elseif ($age > 65){
	echo "Вам пора на пенсию";
} elseif (1 <= $age && $age <= 17){
	echo "Вам ещё рано работать";
} else{
	echo "Неизвестный возраст";
}
