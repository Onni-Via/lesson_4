<?php
$message = '';
if (isset($_FILES['myimg']) ) {
    if (0 == $_FILES['myimg']['error'] && $_FILES['myimg']['type'] === 'image/png' || $_FILES['myimg']['type'] === 'image/jpeg') {
    	move_uploaded_file($_FILES['myimg']['tmp_name'], __DIR__ . '/images/' . $_FILES['myimg']['name']);
    } else {
        echo "Ошибка загрузки изображения";
    }
}
header('Location: http://localhost/sprint_f/lesson_4/user_gallery/index.php');
