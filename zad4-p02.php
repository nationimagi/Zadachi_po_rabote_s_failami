<!-- ...............PHP................ -->
<?php

$q1 = $_POST["question1"]; 
$q2 = $_POST["question2"]; 
$q3 = $_POST["question3"]; 

$c = 0;  //счетчик правильных ответов

if ($q1 == '12') $c=$c+1;  

if ($q2 == '23') $c=$c+1;  

if ($q3 == '32') $c=$c+1;  

$ee = "вывод.txt";
$e = fopen($ee,"w+"); //если файл существовал, то его содержимое уничтожается

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

<form method="POST" action="zad4-p03.php">

	<p align=center>
		Тест
	</p>
	<!-- ............... -->
	
	<!-- 4 вопрос -->
	<fieldset>
	
    <legend> <strong> 4 вопрос.</strong>  Название какой птицы в переводе с английского означает фамилия Элизабет из фильма "Пираты Карбиского Моря"? </legend>

    <div>
      <input type="radio" id="401" name="question4" value="41"
             checked>
      <label for="401"> Голубь </label>
    </div>

    <div>
      <input type="radio" id="402" name="question4" value="42">
      <label for="402"> Лебедь </label>
    </div>

    <div>
      <input type="radio" id="403" name="question4" value="43">
      <label for="403"> Воробей </label>
    </div>
	
	</fieldset>
	<!-- ............... -->
	
	<!-- 5 вопрос -->
	<fieldset>
	
    <legend> <strong>5 вопрос. </strong> Какое полное имя у Стайлза Стилински из сериала "Волчонок"? </legend>

    <div>
      <input type="radio" id="501" name="question5" value="51"
           checked>
      <label for="501"> Стивен </label>
    </div>

    <div>
      <input type="radio" id="502" name="question5" value="52">
      <label for="502"> Себастьян </label>
    </div>

    <div>
      <input type="radio" id="503" name="question5" value="53">
      <label for="503"> Мечислав </label>
    </div>
	
	</fieldset>
	<!-- ............... -->
	
	<!-- 6 вопрос -->
	<fieldset>
	
    <legend> <strong> 6 вопрос. </strong> Сколько крестражей было найдено до событий первого фильма "Гарри Поттер: Дары смерти"? </legend>

    <div>
      <input type="radio" id="601" name="question6" value="61"
           checked>
      <label for="601"> 1 </label>
    </div>

    <div>
      <input type="radio" id="602" name="question6" value="62">
      <label for="602"> 2 </label>
    </div>

    <div>
      <input type="radio" id="603" name="question6" value="63">
      <label for="603"> 3 </label>
    </div>
	
	</fieldset>
	<!-- ............... -->
	
	<!-- ........ кнопка ........ -->
	<p align=center>
		<input type="submit" value="Далее" />
	</p>
	
	<!-- ............... -->
	
</form>

</body>

</html> 
<!-- ...............   ................ -->