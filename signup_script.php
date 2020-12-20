<?php
require 'includes/common.php';
$email=$name=$contact=$city=$address=$password="";
$email_err=$password_err="";
$email=$_POST['email'];
$name= mysqli_real_escape_string($con,$_POST['name']);
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$password=$_POST['password'];

$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email)){
header('location:index.php?email_error correct email');
}
$pass= md5($password);
if(strlen($password)<8){
header('location:index.php?password_error correct password');
}
$sel_qu="select id from users where email = '$email'";
$rel= mysqli_query($con,$sel_qu) or die(mysqli_error($con));
$num= mysqli_num_rows($rel);
if($num>0){
    $_SESSION['email_err']="Email is already exist";
    header('location: signup.php');
//  echo "Email is already exist";

}
else{
$insert_query="insert into users(name,email,password,contact,city,address) values('$name','$email','$pass','$contact','$city','$address')";
$res=mysqli_query($con,$insert_query) or die(mysqli_error($con));
$_SESSION['email']=$email;
$_SESSION['nam']=$email[0];
$_SESSION['name']=$name;
$_SESSION['user_id']=mysqli_insert_id($con);
header('location: product.php');
}

?>