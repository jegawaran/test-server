<?php 

echo 'Name: Jegatheeswaran Sundaravadivel<br><br>';


?>


<html>
<body>
<head>
<style>
img {
    height: 250px;
    width: 200px;
    background-color: powderblue;
}
</style>

<button onclick="before()"  onmouseover="before()">Before</button>

<img id="myImage" src="img/pic_bulboff.gif" style="width:200px">

<button onclick="now()" onmouseover="now()">Now</button>
</head>

</body>
</html>

<script>

function before(){
	
	document.getElementById('myImage').src='img/j1.jpg';
	var idvalue = document.getElementById('myImage');
	//window.alert(idvalue);
}

function now() {
	
	document.getElementById('myImage').src='img/j2.jpg';
}
</script>
