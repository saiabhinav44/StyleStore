<?php require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
$user_id=$_SESSION['user_id'];
$query="update users_items set status='Confirmed' where user_id='$user_id'";
$res=mysqli_query($con,$query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Success Order</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            #x{
                color:green;
            }
        </style>
    </head>
    <body>
         <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <center>
                    <p>Thank You for ordering from StyleStore. The order shall be delivered to you shortly</p>
                    <hr>
                    <p>Order some more style items <a href="product.php" >here</a></p>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
