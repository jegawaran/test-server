<?php 
$host = "127.0.0.1";
$port = 2788;

set_time_limit(0);

//Creating the socket in server

$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create the socket \n");

$result = socket_bind($socket ,$host ,$port) or die("Could not' bind the socket \n");

$result = socket_listen($socket, 3) or die("Could not'set up the socket to listen \n");

$pawn = socket_accept($socket) or die("Could not accept the incoming connection \n");

$input = socket_read($pawn, 1024) or die("Could not read the input \n");

$output = strrev($input). "\n";

socket_write($pawn, $output, strlen($output)) or die("Could not write the output \n");

socket_close($pawn);
socket_close($socket);


?>