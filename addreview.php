<?php

include 'includes/DatabaseConnection.php';

if (isset($_POST['reviewtext'])) {

$sql = 'INSERT INTO review SET
reviewtext = :reviewtext,
reviewdate = CURDATE(),
reviewerid = :reviewerid,
filmid = :filmid';

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':reviewtext', $_POST['reviewtext']);
$stmt->bindValue(':reviewerid', $_POST['reviewerid']);
$stmt->bindValue(':filmid', $_POST['filmid']);

$stmt->execute();

header('Location: reviews.php');
exit();

}

$reviewers = $pdo->query('SELECT id, name FROM reviewer')->fetchAll();

$films = $pdo->query('SELECT id, title FROM film')->fetchAll();

$title = 'Add Review';

ob_start();
include 'templates/addreview.html.php';
$output = ob_get_clean();

include 'templates/layout.html.php';