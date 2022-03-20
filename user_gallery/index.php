<?php
if (isset($_FILES['myimg']) ) {
    if (0 == $_FILES['myimg']['error']) {
    $res = move_uploaded_file($_FILES['myimg']['tmp_name'], __DIR__ . '/images/' . $_FILES['myimg']['name'] . $validType);
    }
}

if ($_FILES['myimg']['type'] == 'image/png') {
	$validType = '.png';
} elseif ($_FILES['myimg']['type'] == 'image/jpeg') {
	$validType = '.jpg';
} else { 
	$res = 'Не допустимый тип файла';
	echo $res; // я ожидаю что файлы загружатбся не будут, вместо этого получу строку, но мой код все равно файл загружает+строка. Почему?
 } 

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Примитивная фотогалерея</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="myimg">
<button type="submit">Загрузить</button></form>
</body>
</html>