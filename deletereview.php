<?php

include 'includes/DatabaseConnection.php';

try {

$sql = 'DELETE FROM review WHERE id = :id';

$s = $pdo->prepare($sql);

$s->bindValue(':id', $_POST['id']);

$s->execute();

}

catch (PDOException $e) {

$title = 'Database error';
$output = $e->getMessage();
include 'templates/layout.html.php';
exit();

}

header('Location: reviews.php');