<!-- ...............PHP................ -->
<?php

$q4 = $_POST["question4"]; 
$q5 = $_POST["question5"]; 
$q6 = $_POST["question6"]; 

$c = 0;  //счетчик правильных ответов

if ($q4 == '42') $c=$c+1;  

if ($q5 == '53') $c=$c+1;  

if ($q6 == '62') $c=$c+1;  

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
<form method="post" action="zad4-p04.php"> <!-- !!!!!!!!!!! -->

	<p align=center>
		Тест
	</p>
	<!-- ............... -->
	
	<!-- 7 вопрос -->
	<fieldset>
	
    <legend> <strong> 7 вопрос. </strong> Продолжите фразу: "Осёл! Нет никаких "мы" и нет никакого "наше", есть только я и..." </legend>

    <div>
      <input type="radio" id="701" name="question7" value="71"
             checked>
      <label for="701"> Моя жизнь </label>
    </div>

    <div>
      <input type="radio" id="702" name="question7" value="72">
      <label for="702"> Моё болото </label>
    </div>

    <div>
      <input type="radio" id="703" name="question7" value="73">
      <label for="703"> Принцесса Фиона </label>
    </div>
	
	</fieldset>
	<!-- ............... -->
	
	<!-- 8 вопрос -->
	<fieldset>
	
    <legend> <strong> 8 вопрос. </strong> Какой палец нужно захватить во время применения техники "пальцевый захват Уси"? </legend>

    <div>
      <input type="radio" id="801" name="question8" value="81"
           checked>
      <label for="801"> Безымянный </label>
    </div>

    <div>
      <input type="radio" id="802" name="question8" value="82">
      <label for="802"> Мизинец </label>
    </div>

    <div>
      <input type="radio" id="803" name="question8" value="83">
      <label for="803"> Указательный </label>
    </div>
	
	</fieldset>
	<!-- ............... -->
	
	<!-- 9 вопрос -->
	<fieldset>
	
    <legend> <strong> 9 вопрос. </strong> Как назывался самый опасный вид драконов в мультфильме "Как приручить дракона?" </legend>

    <div>
      <input type="radio" id="901" name="question9" value="91"
           checked>
      <label for="901"> Ночной кошмар </label>
    </div>

    <div>
      <input type="radio" id="902" name="question9" value="92">
      <label for="902"> Ночная фурия </label>
    </div>

    <div>
      <input type="radio" id="903" name="question9" value="93">
      <label for="903"> Адское отродье </label>
    </div>
	
	</fieldset>
	<!-- ............... -->
	
	<p align=center>
		<input type="submit" value="Далее" />
	</p>
	<!-- ............... -->	
	
</form>

</body>

</html> 
<!-- ...............   ................ -->