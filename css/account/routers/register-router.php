<?php
include '../includes/connect.php';
$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$phone = $_POST['phone'];

function number($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}

$sql = "INSERT INTO users (name, username, password, contact) VALUES ('$name', '$username', '$password', $phone);";
if($con->query($sql)==true){
$user_id =  $con->insert_id;

$sql = "INSERT INTO info(customer_id) VALUES ($user_id)";
if($con->query($sql)==true){
	$info_id =  $con->insert_id;
	$cc_number = number(16);
	$cvv_number = number(3);
	$sql = "INSERT INTO order_info(info_id, number) VALUES ($info_id, $number)";
	$con->query($sql);
}
}
header("location: ../login.php");
?> 