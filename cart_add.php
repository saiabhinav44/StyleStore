<?php
include 'includes/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$res=mysqli_query($con,$query) or die(mysqli_error($con));
header('location: product.php');
?>