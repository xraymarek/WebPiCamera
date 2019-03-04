<?php

/* *************************************************** */
/* WebPiCamera by https://github.com/xraymarek  */
/* *************************************************** */

?>
<html>
<head>
<title>Pi Camera</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<style>
body{
background-color:grey;
}
</style>
<script>
function na2(){
width.value = width.value / 2;
height.value = height.value / 2;
}
function x2(){
width.value = width.value * 2;
height.value = height.value * 2;
}
function na2v(){
widthv.value = widthv.value / 2;
heightv.value = heightv.value / 2;
fps.value = 42;
fps.max = 42;
}
function x2v(){
widthv.value = width.value * 2;
heightv.value = height.value * 2;
fps.value = 15;
fps.max = 15;
}



$(function(){

$('#makephoto').ajaxForm(
{url: 'http://localhost/makephoto.php',
dataType: 'text',
type: 'GET',
success: function(response){
var resp = JSON.parse(response);
if(resp.error == 0){
datax.innerHTML = (
"<img width=400 height=300 src='http://localhost/"+resp.photoid+".jpg'></img>");
}
else
{}
;}});

$('#makevid').ajaxForm(
{url: 'http://localhost/makevid.php',
dataType: 'text',
type: 'GET',
success: function(response){
var resp = JSON.parse(response);
if(resp.error == 0){
datax.innerHTML = (
"<iframe width=400 height=300 src='http://localhost/"+resp.photoid+".mp4'></iframe>");
}
else
{}
;}});

});
</script>
</head>
<body>
<center>

<table border=1>
<tr><td>
<form id="makephoto">
<table border=0>
<tr><td>Width:</td><td><input type="number" id="width" name="width" min=324 max=2592 value=1296></td></tr>
<tr><td>Height:</td><td><input type="number" id="height" name="height" min=243 max=1944 value=972></td></tr>
<tr><td>Quality:</td><td><input type="number" name="quality" min=1 max=100 value=85></td></tr>
<tr><td>Time (ms):</td><td><input type="number" name="time" min=10 max=2000 value=700></td></tr>
</table>

<input type="submit" value="Make Photo">
</form>
<button onclick="na2();">/2</button>
<button onclick="x2();">x2</button>
</td>
<td>
<form id="makevid">
<table border=0>
<tr><td>Width:</td><td><input type="number" id="widthv" name="width" min=1296 max=2592 value=1296></td></tr>
<tr><td>Height:</td><td><input type="number" id="heightv" name="height" min=972 max=1944 value=972></td></tr>
<tr><td>FPS:</td><td><input type="number" id="fps" name="fps" min=1 max=42 value=42></td></tr>
<tr><td>Time (s):</td><td><input type="number" id="timev" name="time" min=1 max=15 value=5></td></tr>
</table>

<input type="submit" value="Make Video">
</form>
<button onclick="na2v();">/2</button>
<button onclick="x2v();">x2</button>
</td></tr>
</table>
<div id="datax">
</div>
</body>
</html>