<?php
include __DIR__ . '/function.php'; 
  
$guestBook = readsGuestPosts();

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Гостевая книга</title>
</head>
<body>
<h1>Гостевая книга</h1>
<p><strong>Добавьте свою запись в гостевую книгу</strong></p>
<form action="/sprint_f/lesson_4/added_entries.php" method="post" enctype="multipart/form-data">
    <input type="text" name="newNote">
    <input name="submitNote" type="submit" value="Отправить">
<h2>Записи гостевой книги</h2>
<?php foreach ($guestBook as $note) {
    echo $note;
} ?>
</form>
</body>
</html>