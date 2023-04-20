<?php  



$conn1 = mysqli_connect('localhost','root','','event');

if (!$conn1) {
	echo "Connection failed!";
	exit();
}