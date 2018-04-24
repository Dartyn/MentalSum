<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<style>
 body {
  background-color: #e6e6e6;
 }
 h1 {
  font-size: 4.5em;
 }

 button {
  font-size: 30px;
  width: 140px;
  height: 60px;
  border-radius: 5px;
 }

    #startPause {
     background-color: green;
     border-color: green;
    }

    #reset {
     background-color: gray;
     border-color: gray;
    }

 .container {
  margin: auto;
  margin-top: 200px;
  width: 400px;
  height: 400px;
 }
 #controls {
  margin-left: 7px;
  width: 310px;
  height:70px;
 }
</style>
<script src="js/stopwatch.js" type="text/javascript"></script>
</head>
<body>

<div class="container">
<h1><p id="output"><b>0:00:00:00</b></p></h1>
<div id="controls" align="center">
 <button id= "startPause" onclick="startPause()"><b id="start">Start</b></button>
 <button onclick="reset()" id="reset"><b id="reset">Reset</b></button>
</div>
</div>
</body>
</html>﻿