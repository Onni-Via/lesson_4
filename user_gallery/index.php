<?php
include __DIR__ . '/upload.php';

$imgNamesArray = scandir(__DIR__ . '/images/');
unset($imgNamesArray[(array_search('.', $imgNamesArray))]);
unset($imgNamesArray[(array_search('..', $imgNamesArray))]);
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
<?php foreach ($imgNamesArray as $imgNames) { ?>
<img src="http://localhost/sprint_f/lesson_4/user_gallery/images/<?php echo $imgNames; ?> " height="200px">
<?php  } ?>
</body>
</html>