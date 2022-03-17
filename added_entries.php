<?php
include __DIR__ . '/function.php';

if(isset($_POST['newNote'])){
	$guestBook = $_POST['newNote'];
	$record = fopen(__DIR__ . '/guest_posts.txt', 'a');
	fwrite($record, $guestBook);
	fwrite($record, "\n");
	fclose($record);
}
header('Location: http://localhost/sprint_f/lesson_4/index.php');
