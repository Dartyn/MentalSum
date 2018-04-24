<?php
include "dbFunctions.php";


    $code = $_GET['modulecode'];
    $id = $_GET['studentid'];

$query = "DELETE FROM mental_sum";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $playerId[] = $row;

mysqli_close($link);

echo json_encode($playerId);

}
?>
