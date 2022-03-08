<?php
include 'connection.php';
$name=$_POST['name'];
$phnumber=$_POST['phonenumber'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$voterid=$_POST['voterid'];
$querry="insert into booking values('$name','$phnumber','$email','$aadhar','$voterid')";
mysqli_query($conn,$querry);
// header("Location: ../index.html");



?>