<?php

try {

include 'includes/DatabaseConnection.php';

$sql = 'SELECT review.id,
review.reviewtext,
review.reviewdate,
reviewer.name AS reviewer,
reviewer.email,
film.title AS film
FROM review
INNER JOIN reviewer ON reviewer.id = review.reviewerid
INNER JOIN film ON film.id = review.filmid
ORDER BY review.reviewdate DESC';

$result = $pdo->query($sql);

$reviews = $result->fetchAll(PDO::FETCH_ASSOC);

/* TOTAL REVIEW */

$totalReviews = $pdo->query('SELECT COUNT(*) FROM review')
                    ->fetchColumn();

$title = 'Film Reviews';

ob_start();
include 'templates/reviews.html.php';
$output = ob_get_clean();

}

catch (PDOException $e) {

$title = 'Database error';
$output = $e->getMessage();

}

include 'templates/layout.html.php';