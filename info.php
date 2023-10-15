<?php
include_once('infop.php');
if(isset($_POST['goa'])) {
	$que="SELECT * FROM `information` WHERE pname='Goa'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['kerala'])) {
	$que="SELECT * FROM `information` WHERE pname='Kerala'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['mysore'])) {
	$que="SELECT * FROM `information` WHERE pname='Mysore'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['ladakh'])) {
	$que="SELECT * FROM `information` WHERE pname='Ladakh'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['agra'])) {
	$que="SELECT * FROM `information` WHERE pname='Taj Mahal'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['india_gate'])) {
	$que="SELECT * FROM `information` WHERE pname='India Gate'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['hampi'])) {
	$que="SELECT * FROM `information` WHERE pname='Hampi'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['rajasthan'])) {
	$que="SELECT * FROM `information` WHERE pname='Rajasthan'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['manali'])) {
	$que="SELECT * FROM `information` WHERE pname='Manali'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['srinagar'])) {
	$que="SELECT * FROM `information` WHERE pname='Srinagar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['amritsar'])) {
	$que="SELECT * FROM `information` WHERE pname='Amritsar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['jogfalls'])) {
	$que="SELECT * FROM `information` WHERE pname='Jog Falls'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['search_p'])) {
	$search = $_POST['search_p'];
	$que="SELECT * FROM `information` WHERE pname='$search'";
	$result = mysqli_query($db, $que);
}
?>