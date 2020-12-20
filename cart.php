<?php  
require 'includes/common.php';

if(!isset($_SESSION['email'])){
 header('location: login.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cart </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            #foot{
                width:100%;
                background-color: #222;
                color:whitesmoke;
            }
            #foot a{
                display:inline-block;
                text-decoration: none;
                color:whitesmoke;
            }
            *{
                box-sizing: border-box;
                margin: 0px;
                padding: 0px;
                font-family: 'Roboto', sans-serif;
            }
            #x{
/*                margin-top: 100px;
                margin-bottom: 413px;*/
            }
             #y{
                margin-top: 100px;
                margin-bottom: 458px;
            }
            td,th{
                padding: 10px;
                text-align:justify;
                font-size: 20px;
            }
            td{
                font-size: 18px;
            }
            #z{
                /*background-color: whitesmoke;*/
                border-bottom: 0px;
            }
            footer{
                background-color: #000;
                color:#fff; 
                font-size:14px;
                height:36px;
            }
            .navbar-brand{
                height: 50px;
                width:300px;
                padding-top: 0px;
            }
            .nice{
                margin:10px;
                padding:5px;
                
            }
            .real{
                border-radius: 50px;
                margin-top: 9px;
                margin-left: 5px;
                background-color: #222;
                color:#9d9d9d;
                border-color: #222;
                font-size: medium;
            }
            .dropdown-menu{
                min-width: 300px;
                background-color: whitesmoke;
            }
            .middle{
                display: none;
            }
            .dropdown-menu-right #gh::before{
                content:"";
                position: absolute;
                bottom: 100%;
                left: 90%;
                margin-left: -14px;
                border-width: 14px;
                border-style: solid;
                border-color: transparent transparent whitesmoke transparent;
            }
             .btn:hover{
                color:#9d9d9d;
            }
            .remo{
                height:561px;
                /*border:2px solid red;*/
            }
            .remo1{
                border:1px solid rgba(0,0,0,.15);
                border-radius: 10px;
                margin: 10px;
                background-color: #FFF;
                box-shadow:20px 20px 50px 10px pink inset,0 10px 12px rgba(0,0,0,.175);
            }
            .row{
                width: inherit;
            }
            table{
                width:100%;
                /*border:1px solid rgba(0,0,0,.15);*/
                /*border-radius: 10px;*/
            }
            tr{
                width:calc(inherit - 30px);
                height:50px;
                border-bottom: 1px solid rgba(0,0,0,.15);
            }
            #remove{
                height:20px;
                border-radius: 20px;
                padding-top:1px;
            }
            body{
                background-color:rgba(0,255,0,0.5);
            }
            .heart1{
                color:rgba(0,0,0,0.2);
            }
            .heart1:hover{
                color:#F00;
            }
            .setcolor{
              color:#F00;  
            }
        </style>
    </head>
    <body>
      
        <?php include 'includes/header.php';
        $user_id=$_SESSION['user_id'];
        $query="select ui.id,i.price,ui.item_id,i.name from users_items ui INNER JOIN users u on u.id=ui.user_id INNER JOIN items i on i.id=ui.item_id where user_id='$user_id'";
        $res= mysqli_query($con, $query) or die(mysqli_error($con));
        $num= mysqli_num_rows($res);
        $sum=$num;
        $l=1;
        if($num==0){  ?>
<!--//           echo 'add items to the card first';-->
<div id="y"> <br><br><br>
        <div class="container remo">
            <div class="row">
                <div class="col-xs-12  col-md-5 col-md-offset-1">
                    
                    <h1>Add Items to the Cart First!</h1>
                 
                </div>
            </div>  
        </div>
</div>
     <?php   }
        else{
            $total=0;
        ?>
<!--<div id="x">--><br><br><br>
        <div class="container remo">
            <div class="row remo1">
                <!--<div class="col-xs-12 col-md-5 col-md-offset-1 col-sm-5">  col-xs-5 col-xs-offset-2 -->
<!--                <div>
                    <p>Shopping Cart</p>
                </div>-->
                <table>
                  
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <?php
                    while($sum){
                       $row= mysqli_fetch_array($res); 
                    
                    ?>
                    <tr>
                        <td><?php echo $l; ?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-heart heart1" id="heart"></span>
                            </td>
                        <td><?php echo $row[3]; ?> </td>
                        <td><?php echo $row[1]; ?></td>
                        <td><a href="cart_remove.php?id=<?php echo $row[2] ?>" class='btn btn-danger' id="remove"><span  class="glyphicon glyphicon-remove"></span></a> </td>
                    </tr>
                    <?php 
                    $total+=$row[1];
                    $sum=$sum-1;
                    $l=$l+1;
                    }
                    
                    ?>
                    <tr id="z">
                        <td></td>
                        <td>Total</td>
                        <td>Rs <?php echo $total; ?>/-</td>
                        <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td> 
                        
                    </tr>
                </table>
            <!--</div>-->
            </div>
        </div>
        <!--</div>-->
            <?php  } ?> 
       <?php  include 'includes/footerinner.php' ?>
        <script>
     const Ele=document.getElementById("heart");       
             const fun=function(){
              Ele.classList.toggle("setcolor");  
            };
           
            Ele.addEventListener('click',fun);
           
        </script>
    </body>
</html>
