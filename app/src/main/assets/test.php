<?php
$results = $_POST['scorage'];
$operator = $_POST['operator'];
$name = "";
$message = $results ;

$username = "root";
$password = "";         // No password for localhost
$db = "mental_sums";


$host = "localhost";
$link = mysqli_connect($host, $username, $password, $db) or
        die(mysqli_connect_error());
$query = "INSERT INTO mental_sum(score,name,operator) VALUES ('$results','$name','$operator')";

$result = mysqli_query($link, $query) or die('Error querying database');

mysqli_close($link);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="css/style.css" />

        <link href="css/themes/mental_sums.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/mentalSums.css" rel="stylesheet" type="text/css"/>
         <link href="css/style.css" rel="stylesheet" type="text/css"/> 


        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

        <script src="js/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        Score:
        <?php
        echo $message;
        echo 'helloooo';
        ?>
        <br/>
        Operator chosen:
        <?php
        echo $operator;
        ?>
        <-- <a href="index.php"  class="ui-btn ui-btn-inline ui-mini ui-shadow ui-corner-all ui-alt-icon ui-nodisc-icon ui-icon-back ui-btn-icon-notext">Back</a> -->
    </body>
</html>
