//This is javascript
var time = 0;
var running = 0;
var tenths=0, mins=0, secs=0, hours=0;
function startPause(){
 if(running == 0){
  running = 1;
  increment();
 document.getElementById("start").innerHTML = "Pause";
 document.getElementById("startPause").style.backgroundColor = "red"; 
 document.getElementById("startPause").style.borderColor = "red";
 }
 else{
  running = 0;
 document.getElementById("start").innerHTML = "Resume"; 
 document.getElementById("startPause").style.backgroundColor = "green"; 
 document.getElementById("startPause").style.borderColor = "green";
 }
}
function reset(){
 running = 0;
 time = 0;
 document.getElementById("start").innerHTML = "Start";
 document.getElementById("output").innerHTML = "0:00:00:00";
 document.getElementById("startPause").style.backgroundColor = "green"; 
 document.getElementById("startPause").style.borderColor = "green";
}
function increment(){
 if(running == 1){
  setTimeout(function(){
   time++;
   mins = Math.floor(time/10/60);
   secs = Math.floor(time/10 % 60);
   hours = Math.floor(time/10/60/60); 
   tenths = time % 10;
   if(mins < 10){
    mins = "0" + mins;
   } 
   if(secs < 10){
    secs = "0" + secs;
   }
   document.getElementById("output").innerHTML = hours + ":" + mins + ":" + secs + ":" + tenths + "0";
   increment();
  },100)
 }
}
function loop() {
 var para = document.createElement("p");
 var node = document.createTextNode(hours + ":" + mins + ":" + secs + ":" + tenths + "0");
 para.appendChild(node);
 var element = document.getElementById("div1");
 element.appendChild(para);
 //document.getElementById("output").innerHTML = hours + ":" + mins + ":" + secs + ":" + tenths + "0";
}﻿