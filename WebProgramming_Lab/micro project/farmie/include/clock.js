function clock()
{
var today = new Date();
var hours = today.getHours();
var minutes = today.getMinutes();
var seconds = today.getSeconds();
var time_holder; // holds the time

var ampm = ((hours >= 12) ? " PM" : " AM");

hours = ((hours == 0) ? "12" : (hours > 12) ? hours - 12 : hours);

minutes = ((minutes < 10) ? "0" + minutes : minutes);
seconds = ((seconds < 10) ? "0" + seconds : seconds);

time_holder = hours + ":" + minutes + ":" + seconds + ampm;

document.getElementById('jsClock').innerHTML = time_holder;


// keep the clock ticking
setTimeout("clock()", 1000);
}