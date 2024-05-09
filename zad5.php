<!-- ...............PHP................ -->
<?php
date_default_timezone_set("Europe/Moscow");

$t1 = $_POST["texxt1"]; 
$t2 = $_POST["texxt2"]; 
$d = date('l jS \of F Y h:i:s A');

$gg = "гостевая книга.txt";
$g = fopen($gg,"a+"); 

	fwrite($g, $t1); //никнейм
	fwrite($g, ": ");
	fwrite($g, $t2); //отзыв
	fwrite($g, "<br>");
	fwrite($g, $d); //дата и время
	fwrite($g, "<br>-----------<br><br>");
	
fclose($g);  //------------------- гостевая книга.txt закрыт
?>
<!-- ...............   ................ -->

<!-- ...............HTML................ -->
<!DOCTYPE html>
<html> 

<head> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>

<!-- ........форма1........ -->
<form form method="post" action="zad5_gb.php">
	
	<h1>
	<p align=center>
		Спасибо за отзыв! 
	</p>
	</h1>
	<!-- ............... -->
	
	<p align=center>
		<input type="submit" name="butt1" value="Посмотреть отзывы" />
	</p>
	<!-- ............... -->
	
</form>
<!-- ........ ........ -->

<!-- ........форма2........ -->
<form form method="post" action="zad5.html">
	
	<p align=center>
		<input type="submit" name="butt2" value="Вернуться на первую страницу" />
	</p>

</form>
<!-- ........ ........ -->

</body>

</html> 
<!-- ...............   ................ -->