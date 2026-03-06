<?php

try {

$pdo = new PDO(
'mysql:host=localhost;dbname=review_film;charset=utf8',
'root',
''
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch (PDOException $e) {

$title = 'Database error';

$output = 'Unable to connect to database server: ' .
$e->getMessage();

include 'templates/layout.html.php';
exit();

}