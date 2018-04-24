<?php
include "dbFunctions.php";

$query = "SELECT * FROM mental_sum order by player_id";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $playerId[] = $row;
}
mysqli_close($link);

echo json_encode($playerId);

?>
