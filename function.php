<?php

function readsGuestPosts() {
	return file(__DIR__ . '/guest_posts.txt');
};

/*$a = file(__DIR__ . '/guest_posts.txt');
var_dump($a);*/