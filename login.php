<?php 
require 'includes/common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            #x{
                /*border:1px solid orange;*/
                margin-top: 100px;
                margin-left: 50px;
                height:530px
            }
             footer{
                background-color: #000;
                color:#fff; 
                font-size:14px;
                height:30px;
            }
            .navbar-brand{
                height: 50px;
                width:300px;
                padding-top: 0px;
            }
            #err{
                color:#ff9999;
            }
        </style>
    </head>
    <body>
        <?php include 'includes/header.php' ?> 
   
        <div id="x">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>LOGIN</h2>
                        </div>
                        <div class="panel-body">
                            <h4><i>Login to make a purchase</i></h4>
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" id='input1' class="form-control" name="email" required>
                            </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" id="input2" name="password" class="form-control" required>
                                </div>
                                <input type="submit" value="Login" class="btn btn-primary" >
                            </form>
                            <span id='err'> <center> <?php echo $_SESSION['error_msg'] ?> </center></span>
                        </div>
                        <div class="panel-footer">
                            <h4>Don't have an account? <a href="signup.php">Register</a></h4>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
        <?php include 'includes/footer.php'  ?>
        <script>
            const input1=document.getElementById('input1');
            const input2=document.getElementById('input2');
            const ele=document.getElementById('err');
            console.log(input1,input2,ele);
            const removeErr= () => {
                ele.textContent="";
                <?php $_SESSION['error_msg']=""; ?>
            };
            input1.addEventListener('focus',removeErr);
            input2.addEventListener('focus',removeErr);
        </script>
    </body>
</html>