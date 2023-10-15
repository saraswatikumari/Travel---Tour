<?php

$con=mysqli_connect('localhost','root','','project');

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$city=$_POST['phone'];
$phone=$_POST['city'];
$destination=$_POST['destination'];


$sql="INSERT INTO `bk`(`id`,`fname`,`lname`,`email`,`phone`,`city`,`destination`) VALUES (0,'$firstname','$lastname','$email','$city','$phone','$destination')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	header('location:booking.html');
}


?>