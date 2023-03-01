<?php

echo "<b>Условие:</b> сумма картинок нарисованных фломастерами и карандашами не должна превышать общее количество картинок <br>";
const ALL_PICTURES = 80;
const CRAYON_PICTURES = 23;
const PENCILS_PICTURES = 40;
echo "<b>Всего картинок: </b>" . ALL_PICTURES . "<br>";
echo "<b>Нарисовано фломастерами: </b>" . CRAYON_PICTURES . "<br>";
echo "<b>Нарисовано карандашами: </b>" . PENCILS_PICTURES . "<br>";
$pictNoPaint = CRAYON_PICTURES+PENCILS_PICTURES;
if($pictNoPaint<=ALL_PICTURES){
	echo "<b>Нарисовано красками: </b>" . $paintsPictures = ALL_PICTURES - (CRAYON_PICTURES+PENCILS_PICTURES);
}else{
	echo "<b>Неверное количество всех картинок. Пожалуйста, проверьте условие</b>";
}

// Функция будет работать только при том условии, что константы введены верно, иначе она работать не будет
// Поэтому в условии прописано, что сумма картинок нарисованных фломастерами и карандашами не должна превышать общее количество картинок
