<?php 
include 'includes/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$query="delete from users_items where user_id='$user_id' and item_id='$item_id'";
$res=mysqli_query($con,$query) or die(mysqli_error($con));
header('location: cart.php');
?>