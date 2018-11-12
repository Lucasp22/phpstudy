<?php
	$user = ['name' => 'Tiago', 'email' => 'test@test.com', 'age' => 30];

	$user = serialize($user); //for save the array in a cookie

	setcookie('user', $user, time() + (86400 * 30));

	$user =  unserialize($_COOKIE['user']);

	print_r($user);
