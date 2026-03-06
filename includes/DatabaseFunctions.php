<?php

function totalReviews($pdo){

$sql = "SELECT COUNT(*) FROM review";

$result = $pdo->query($sql);

$row = $result->fetch();

return $row[0];

}