<?php

$dsn = 'mysql:dbname=malltest;host=172.18.107.96;port=3306';
$username = 'devmall';
$password = 'devmall';

try{
	$pdo = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
	die('Could not connect to the database'.$e);
}

var_dump($pdo);die;


