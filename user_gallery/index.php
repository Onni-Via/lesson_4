<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$imgNamesArray = scandir(__DIR__ . '/images/');

$superfluous = ['.', '..'];
$imgNamesArray = array_diff($imgNamesArray, $superfluous); // в мануале найдена функция array_intersect, после чего найдена обратная функция

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Примитивная фотогалерея</title>
</head>
<body>
<form action="/sprint_f/lesson_4/user_gallery/upload.php" 
method="post" enctype="multipart/form-data">
<input type="file" name="myimg">
<button type="submit">Загрузить</button></form>
<?php foreach ($imgNamesArray as $imgNames) { ?>
</br>
<img src="http://localhost/sprint_f/lesson_4/user_gallery/images/<?php echo $imgNames; ?> " height="300px"> 
<?php } ?>
</body>
</html>