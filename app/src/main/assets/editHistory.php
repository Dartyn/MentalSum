<?php

include("dbFunctions.php");

    $id = $_POST['studentid'];
    $code = $_POST['modulecode'];
    $class = $_POST['class'];
    $playerId = $_GET['player_id'];
    $name = $_GET['name'];
    $score = $_GET['score'];
    $operator =$_GET['operator'];

    $query = "update mental_sum set operator='$operator"
            . " where score='$score'";
//echo $insertQuery;
    $status = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);

