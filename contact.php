<?php require 'includes/common.php';  ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact us</title>
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
            
        </style>
    </head>
    <body>
        <?php include 'includes/header.php' ?><br><br><br>
            
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>LIVE SUPPORT</h2>
                    <h4>24 hours | 7 days a Week | 365 days a Year Live Technical Support </h4>
                    <p>Our experts can devise a program based on your specific needs for all major markets. We will take into consideration standards and regulations relevant to specific products in your destination markets. 

Employ our consultancy services to deliver products that meet customer and consumer expectations. Contact us today to find out how we can support your business.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/tec_support.png" alt="technical" class="img-rounded" height="250px" >
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <h2>CONTACT US</h2>
                <form method="post" action="contact_script.php">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Message:</label>
                        <textarea class="form-control" cols="50" rows="5" name="message"  required>
                        </textarea>
                    </div>
                    <input type="submit" class="btn btn-success">
                </form>
                </div>
                <div class="col-md-6">
                    <h2>Company Information</h2>
                    <p>500 Lorem Ipsum Dolor Sit</p>
                    <p>22-56-2-9 Sit Amet,Lorem</p>
                    <p>USA</p>
                    <p>Phone:(00) 222 666 444</p>
                    <p>Fax:(000) 000 00 000</p>
                    <p>Email:info@mycompany.com</p>
                    <p>Follow on:Facebook,Twitter</p>
                </div>
            </div>
        </div>
        
       
        
        <?php include 'includes/footer.php' ?>
    </body>
</html>

