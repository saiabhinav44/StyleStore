<?php 
    require 'includes/common.php';
    $set=1;
if(isset($_POST['submit'])){
    $file=$_FILES['file'];
//    print_r($file);
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    $fileExt=explode('.',$fileName);
    $fileActualExt= strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png');
    if(in_array($fileActualExt,$allowed)){
        if($fileError==0){
            if($fileSize<=4000000){
                $fileNameNew="profile".$_SESSION['user_id'].".".$fileActualExt;
                $fileDestination='uploads_profile/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                $sql="update users set status='$set' where id='$_SESSION[user_id]'";
                $res= mysqli_query($con,$sql) or die(mysqli_error($con));
                header("location:setting.php?uploadsuccess");
            }
            else{
//                echo "Your file is too Big";
                header('location:setting.php?error=true&msg=Toobig');
            }
        }
        else{
//         echo "There was an error uploading your file";   
            header('location:setting.php?error=true&msg=uperror');
        }
    }
    else{
//        echo "you cannot upload files of this type!";
        header('location:setting.php?error=true&msg=type');
    }
}