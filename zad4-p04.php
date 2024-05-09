<!-- ...............PHP................ -->
<?php

$q7 = $_POST["question7"]; 
$q8 = $_POST["question8"]; 
$q9 = $_POST["question9"]; 

$c = 0;  //счетчик правильных ответов

if ($q7 == '72') $c=$c+1;  

if ($q8 == '83') $c=$c+1;  

if ($q9 == '92') $c=$c+1;  

$ee = "вывод.txt";
$e = fopen($ee,"a+"); //если файл существовал, то его содержимое уничтожается
	
	$str_copy = file_get_contents($ee); //копируем содержимое файла в строчку
	
	$str_copy = (int)$str_copy; //строка "123" нужно преобразовать ее в тип integer
	$c = $str_copy + $c;
	
	file_put_contents($ee, null); //очистка содержимого
	
	fwrite($e, $c);
	
fclose($e);  //------------------- файл вывод.txt закрыт

?>
<!-- ...............   ................ -->

<!-- ...............HTML................ -->
<!DOCTYPE html>
<html> 

<head> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>

<form method="post" action="zad4-rez.php"> <!-- !!!!!!!!!!! -->

	<p align=center>
		Тест
	</p>
	<!-- ............... -->
	
	<!-- 10 вопрос -->
	<fieldset>
	
    <legend> <strong> 10 вопрос. </strong> Сколько правил изначально было в тетради смерти? </legend>

    <div>
      <input type="radio" id="1001" name="question10" value="101"
             checked>
      <label for="1001"> 70 </label>
    </div>

    <div>
      <input type="radio" id="1002" name="question10" value="102">
      <label for="1002"> 54 </label>
    </div>

    <div>
      <input type="radio" id="1003" name="question10" value="103">
      <label for="1003"> 118 </label>
    </div>
	
	</fieldset>
	<!-- ............... -->
	
	<!-- 11 вопрос -->
	<fieldset>
	
    <legend> <strong> 11 вопрос. </strong> Какая фея из Винкс первой получила превращение "Энчантикс"? </legend>

    <div>
      <input type="radio" id="1101" name="question11" value="111"
           checked>
      <label for="1101"> Флора </label>
    </div>

    <div>
      <input type="radio" id="1102" name="question11" value="112">
      <label for="1102"> Стелла </label>
    </div>

    <div>
      <input type="radio" id="1103" name="question11" value="113">
      <label for="1103"> Лейла </label>
    </div>
	
	</fieldset>
	<!-- ............... -->
	
	<!-- 12 вопрос -->
	<fieldset>
	
    <legend> <strong> 12 вопрос. </strong> Какой любимый вид сыра у Плагга из мультфильма "Леди Баг и Супер-Кот"? </legend>

    <div>
      <input type="radio" id="1201" name="question12" value="121"
           checked>
      <label for="1201"> Чеддер </label>
    </div>

    <div>
      <input type="radio" id="1202" name="question12" value="122">
      <label for="1202"> Пармезан </label>
    </div>

    <div>
      <input type="radio" id="1203" name="question12" value="123">
      <label for="1203"> Камамбер </label>
    </div>
	
	</fieldset>
	<!-- ............... -->
	
	<p align=center>
		<input type="submit" value="Завершить" />
	</p>
	<!-- ............... -->	
	
</form>

</body>

</html>
<!-- ...............   ................ -->