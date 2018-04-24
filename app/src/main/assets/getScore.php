<?php

include "dbFunctions.php";


$playerId = $_GET['player_id'];
$time = $_GET['time'];
$score = $_GET['score'];
// SQL query returns multiple database records.
$query = "SELECT * FROM mental_sum WHERE student_id = $playerId";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
if (!empty($row)) {
    $student = $row;
}
mysqli_close($link);

echo json_encode($playerId);
?>
