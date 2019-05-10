<?php
session_start();
include 'baza.php';

$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$active = $_POST['active'];


$sql = "INSERT INTO users(first_name, last_name, user_name, email, active) 
VALUES('$first_name', '$last_name', '$user_name', '$email', '$active')";

$result = mysqli_query($conn, $sql);