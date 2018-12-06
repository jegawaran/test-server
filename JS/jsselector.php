<?php echo "Javascript";?>
<!--
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$('button').click(function(){
		$(".third").hide();
	});
	
});
</script>
<title>javascript for ct</title>
</head>
<body>
</body>
<p> Hi this is jegatheeswaran </p>
<p class="third"> third person</p>
<p> Hi this is lavanya </p>

<button> click here </button>
</html> -->

<html>
<head>
<script>
function addNode(){
	var newP = document.createElement("p");
	var text = doucmnet.createTextNode("This is the new text");
	newp.appendChild(text);
	doucmnet.getElementById("first").appendChild(newp);
}
</script>
<title>javascript for ct</title>
</head>
<body>
</body>
<p> Hi this is jegatheeswaran </p>
<p id="first"> third person</p>
<p> Hi this is lavanya </p>

<button> click here </button>
</html> 