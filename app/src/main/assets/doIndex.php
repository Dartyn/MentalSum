<?php
$number = $_POST['qty'];
$operator = $_POST['operate'];
/* if(empty($operator)){
  echo("You did not select any operator.");
  } */
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script>

        </script>
    </head>
    <body>
        <div id="firstNum"></div>
        <div id="operate"></div>
        <div id="secondNum"></div>
        =
        <input type="text" id="answer">
        <?php
// put your code here
        ?>
    </body>
</html>
