<?php
include __DIR__ . '/function.php';

if(isset($_POST['newNote'])){
	if (0 === $_POST['newNote']) {
		$guestBook[] = $_POST['newNote'];
	}

}