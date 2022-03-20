<?php
include __DIR__ . '/function.php';

if(isset($_POST['newNote'])){
	$guestBookEntries = readsGuestPosts();
	$guestBookEntries[] = $_POST['newNote'];
	file_put_contents(__DIR__ . '/guest_posts.txt', implode("\n", $guestBookEntries));
}
header('Location: http://localhost/sprint_f/lesson_4/guest_book/index.php');
