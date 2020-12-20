<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
$repass=$_POST['repass'];
$pass=md5($oldpass);
$new=md5($newpass);
$user_id=$_SESSION['user_id'];
$que="select password from users where id='$user_id'";
$rel=mysqli_query($con,$que) or die(mysqli_error($con));
$row= mysqli_fetch_array($rel);
$de=$row['password'];
if($newpass != $repass){
    echo "New password and Re-type password dosn't match";
}
else{
    if($de === $pass){
        $query="update users set password='$new' where id='$user_id'";
        $reu=mysqli_query($con,$query) or die(mysqli_error($con));
        header('location: product.php');
    }
    else{
     echo "enter correct old password";   
    }
}
?>