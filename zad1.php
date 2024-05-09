<?php

$str = $_POST["texxt"];
$ff = "бд.txt"; 
$tt = "временно.txt"; 
$ee = "вывод.txt";

$f = fopen($ff,"r"); 
$t = fopen($tt,"r+"); 
$e = fopen($ee,"a+"); 

file_put_contents("временно.txt", null); //очистка содержимого
file_put_contents("вывод.txt", null);

while(!feof($f)){ 

	//------------------- копируем содержимое библиотеки во временный файл, где можно будет удалять содержимое

	file_put_contents("временно.txt", null); //очистка содержимого
	fwrite($t, fgets($f));
	$str_copy = file_get_contents($tt); //копируем содержимое файла в строчку


	//------------------- разделяем строчку на (4) элемента
	$mark = explode(" ", $str_copy); 
	/*
	echo $mark[1]; // оценка1
	echo $mark[2]; // оценка2
	echo $mark[3]; // оценка3
	*/
	
	$sum_m=$mark[1]+$mark[2]+$mark[3];
	//echo $sum_m . "<br>";
	
	//------------------- сравнение суммы оценок с введенным числом
	if ( $sum_m >= $str ){
		fwrite($e, $mark[0]);
		fwrite($e, " ");
		fwrite($e, $sum_m);
		fwrite($e, "<br>");
	}
	

} //конец while

fclose($t);  //------------------- файл временно.txt закрыт
fclose($e);  //------------------- файл вывод.txt закрыт
fclose($f);  //------------------- файл библиотека.txt закрыт


//------------------- вывод текста из файла вывод.txt
$e = fopen("вывод.txt","r");

if (filesize($ee) == null) { //если в файле ничего нет
	echo "По Вашему запросу ничего не найдено.";
}
  
while(!feof($e)){ 
	echo fgets($e); 
}

fclose($e);
//------------------- 


?>