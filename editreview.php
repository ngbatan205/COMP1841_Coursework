<?php

include 'includes/DatabaseConnection.php';

if (isset($_POST['reviewtext'])) {

$sql = 'UPDATE review SET
reviewtext = :reviewtext
WHERE id = :id';

$s = $pdo->prepare($sql);

$s->bindValue(':reviewtext', $_POST['reviewtext']);
$s->bindValue(':id', $_POST['id']);

$s->execute();

header('Location: reviews.php');
exit();

}

$id = $_GET['id'];

$sql = 'SELECT id, reviewtext FROM review WHERE id = :id';

$s = $pdo->prepare($sql);

$s->bindValue(':id', $id);
$s->execute();

$review = $s->fetch();

$title = 'Edit Review';

ob_start();
include 'templates/editreview.html.php';
$output = ob_get_clean();

include 'templates/layout.html.php';