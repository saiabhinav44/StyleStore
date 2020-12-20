<?php
require 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$pas= md5($password);
function test_input($input_field){
    $input_field= htmlspecialchars(stripcslashes(strip_tags($input_field)));
    return $input_field;
}
$sel_qu="select id,email,name from users where email='$email'";
$res= mysqli_query($con, $sel_qu);
$num= mysqli_num_rows($res);

$sel_qu1="select id,email,name from users where password ='$pas'"; 
$res1= mysqli_query($con, $sel_qu1);
$num1= mysqli_num_rows($res1);
if($num==0){
   
    header('location:index.php?error=emailNotExist&active=true');
    exit();
}
if($num1==0){
    header('location:index.php?error=InvalidPassword&active=true');
    exit();
} 
if($num>0 && $num1>0){
    $row= mysqli_fetch_array($res);
    $_SESSION['nam']=$email[0];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['user_id']=$row['id'];
    header('location: product.php'); 
}
?>