<?php
include __DIR__ . '/index.php'; 
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
<?php foreach ($imgNamesArray as $imgNames) { ?>
<img src="http://localhost/sprint_f/lesson_4/gallery_loading/images/<?php echo $imgNames; ?> " height="200px">

<?php  } ?>

</body>
</html>