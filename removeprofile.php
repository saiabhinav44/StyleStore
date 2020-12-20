<?php
require 'includes/common.php';
$val=0;
$userid=$_SESSION['user_id'];
$sql2="update users set status='$val' where id='$userid'";
$rel= mysqli_query($con,$sql2);
$path="uploads_profile/profile".$_SESSION['user_id']."."."jpg";
if(!unlink($path)){
    echo 'you have an error';
}
else{
    header('location:setting.php?deleteSuccess');
}