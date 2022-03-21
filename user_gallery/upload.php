<?php 
$imgNamesArray = scandir(__DIR__ . '/images/');
unset($imgNamesArray[(array_search('.', $imgNamesArray))]);
unset($imgNamesArray[(array_search('..', $imgNamesArray))]);

if (isset($_FILES['myimg']) ) {
    if (0 == $_FILES['myimg']['error'] && $_FILES['myimg']['type'] === 'image/png' || $_FILES['myimg']['type'] === 'image/jpeg') {
    $res = move_uploaded_file($_FILES['myimg']['tmp_name'], __DIR__ . '/images/' . $_FILES['myimg']['name']);
    } else {
        echo "Ошибка загрузки изображения";
    }
}
