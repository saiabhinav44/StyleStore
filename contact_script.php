<?php

require 'includes/common.php';
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$insert="insert into contact(name,email,message) values('$name','$email','$message')";
$res=mysqli_query($con,$insert) or die(mysqli_error($con));
header('location:contact.php');