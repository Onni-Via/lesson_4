<?php
if (isset($_FILES['myimg']) ) {
    if (0 == $_FILES['myimg']['error'] && $_FILES['myimg']['type'] === 'image/png' || $_FILES['myimg']['type'] === 'image/jpeg') {
    $res = move_uploaded_file($_FILES['myimg']['tmp_name'], __DIR__ . '/images/' . $_FILES['myimg']['name']);
    } else {
        $message = "Ошибка загрузки изображения";
    }
}

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
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="myimg">
<button type="submit">Загрузить</button></form>
<?php echo $message; 
foreach ($imgNamesArray as $imgNames) { ?>
</br>
<img src="http://localhost/sprint_f/lesson_4/user_gallery/images/<?php echo $imgNames; ?> " height="300px"> 
<?php } ?>
</body>
</html>