
<?php 
require 'includes/common.php';
if(isset($SESSION['email'])){
    header('location: product.php');
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
        <title>Signup Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            #x{
                margin-top: 60px;
                margin-bottom:170px;
            }
             footer{
                background-color: #000;
                color:#fff; 
                font-size:14px;
                height:30px;
            }
            body{
            background-image: url('img/background2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            
            }                
            .navbar-brand{
                height: 50px;
                width:300px;
                padding-top: 0px;
            }
            .error{
             color: #ff9999;
            }
        </style> 
    <script src="includes/app.js" defer> </script>
    </head>
    <body>
      <?php include 'includes/header.php' ?>
        <div id="x">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2  col-md-5 col-md-offset-1 ">
                    <h1>SIGN UP</h1>
                    <form method="post" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control"  id="name" value="" placeholder="Name" title="Enter valid name" required>
                        <span class="error" id="one"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="mail" placeholder="Email" title="enter valid email" required>
                         <span class="error" id="two"></span>
                        <span class="error" id="backvalid"><?php echo $_SESSION['email_err']; ?></span>
                    </div>
                         <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" title="atleast 8 characters which contain at least one numeric digit, one uppercase and one lowercase letter" autocomplete required>
                         <span class="error" id="three"></span>    
                    </div>
                         <div class="form-group">
                             <input type="number" name="contact" class="form-control" id="contact" placeholder="Contact" title="must contain 10 digits" required>
                             <span class="error" id="four"></span>
                    </div>
                         <div class="form-group">
                             <input type="text" name="city" class="form-control" id="city" placeholder="City" title="Enter valid city" required>
                              <span class="error" id="five"></span>
                    </div>
                         <div class="form-group">
                             <input type="text" name="address" class="form-control" id="address" placeholder="Address"title="Enter valid address" required>
                              <span class="error" id="six"></span>
                    </div>
                        <input type="submit" class="btn btn-success">
                        <input type="reset" id="resets" class="btn btn-danger">
                     </form>
                </div>
            </div>
        </div>
        </div>
        
        <?php include 'includes/footer.php' ?>
        <script>
           const resetContent= () => {
    nameErr.textContent="";
    mailErr.textContent="";
    passwordErr.textContent="";
    contactErr.textContent="";
    cityErr.textContent="";
    addressErr.textContent="";
    backValidEmail.textContent="";
    <?php $_SESSION['email_err']=""; ?>
};
        </script>
    </body>
</html>
