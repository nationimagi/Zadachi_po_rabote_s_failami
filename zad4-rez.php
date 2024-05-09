<!-- ...............PHP................ -->
<?php

$q10 = $_POST["question10"]; 
$q11 = $_POST["question11"]; 
$q12 = $_POST["question12"]; 

$c = 0;  //счетчик правильных ответов

if ($q10 == '101') $c=$c+1;  

if ($q11 == '113') $c=$c+1;  

if ($q12 == '123') $c=$c+1;  

$ee = "вывод.txt";
$e = fopen($ee,"a+"); //если файл существовал, то его содержимое уничтожается
	
	$str_copy = file_get_contents($ee); //копируем содержимое файла в строчку
	
	$str_copy = (int)$str_copy; //строка "123" нужно преобразовать ее в тип integer
	$c = $str_copy + $c;
	
	file_put_contents($ee, null); //очистка содержимого
	
	//fwrite($e, $c);
	
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

<form method="post" action="zad4.html"> <!-- !!!!!!!!!!! -->

	<p align=center>
		Результаты теста 
	</p>
	<!-- ............... -->
	
	<p align=center>
		<?php echo($c); ?> правильных ответов. Вы восхитительны!
	</p>
	
	<p align=center>
		<input type="submit" value="Пройти тест заново" />
	</p>
	<!-- ............... -->	

</form>

</body>

</html> 
<!-- ...............   ................ -->