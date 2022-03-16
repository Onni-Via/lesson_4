<?php
include __DIR__ . '/function.php'; 
echo readsGuestPosts();

$guestBook = readsGuestPosts();

foreach ($guestBook as $note) {
    echo $note;
}
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Гостевая книга</title>
</head>
<body>
<form action="/added_entries" method="post" enctype="multipart/form-data">
    <input type="text" name="newNote">
    <input name="submitNote" type="submit" value="Отправить">
</form>
</body>
</html>