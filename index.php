<?php 
require 'includes/common.php';
require 'includes/globals.php';
if(isset($_SESSION['email']))
    {
    header('location: products.php'); 
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
        <title>StyleStore</title>
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
            #banner_image{
                padding-top: 75px;
                 padding-bottom: 50px;
                text-align: center;
                 color: #f8f8f8;
                background: url(img/intro-bg_1.jpg) no-repeat center center;
                 background-size: cover;
                 margin-bottom: 20px;
            }
            #belowmargin{
                margin-bottom: 2px;
            }
            #banner_content{
                position: relative;
                padding-top: 6%;
                padding-bottom: 6%;
                margin-top: 12%;
                margin-bottom: 12%;
                background-color: rgba(0, 0, 0, 0.7);
                max-width: 660px;
            }
            footer{
                padding: 10px 0;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
            }
            *{
                font-family: 'Roboto', sans-serif;
            }
            .navbar-brand{
                height: 50px;
                width:300px;
                padding-top: 0px;
            }
        </style>
    </head>
    <body style="background-color:whitesmoke;">
         <?php include 'includes/header.php' ?>
        
        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                     <h1>We sell lifestyle</h1>
                        <p>Flat 40% OFF on premium brands</p>
                    <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
                </center>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <div class="thumbnail">
                       <img src="img/sony_a7_dslr.jpg" alt="img1">
                
                <div class="caption">
                    <h3>Sony DSLR A7</h3>
                    <p>Price:Rs.36000.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(1)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
                </div>
                <div class="col-md-4">
                   <div class="thumbnail">
                       <img src="img/Citizen_500.jpg" alt="img1" height="470px">
                
                <div class="caption">
                    <h3>Citizen Model #500</h3>
                    <p>Price:Rs.6000.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(1)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
                </div>
                <div class="col-md-4">
                   <div class="thumbnail">
                       <img src="img/Men_Full_Sleeves_shirt.jpg" alt="img1">
                       
                <div class="caption">
                    <h3>Full Sleeves Shirt</h3>
                    <p>Price:Rs.800.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(1)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
                </div>
            </div>
            
        </div>
        <div id="belowmargin"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <img src="img/wat1.jpg" alt="watchs" style="width:100%;height:500px; ">
           <div class="carousel-caption">
              <h1></h1>
              <p style="font-size:3vw;">An expensive watch doesn't just tell you the time, It speaks of  your time as well.</p>
          </div>
      </div>

      <div class="item">
          <img src="img/DSLR.jpg" alt="camera" style="width:100%;height:500px; ">
          <div class="carousel-caption">
              <h1></h1>
              <p style="font-size:3vw;">Taking an image, freezing a moment, reveals how rich reality truly is.</p>
          </div>
      </div>
    
      <div class="item">
          <img src="img/shirt.jpg" alt="shirt" style="width:100%;height:500px;">
           <div class="carousel-caption">
              <h1></h1>
              <p style="font-size:3vw;">No Matter How You Feel.Get Up,Dress Up,Show Up And Never Give Up.</p>
          </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        
        
        <?php include 'includes\footer.php' ?>
        <?php  
       if(isset($_GET['active'])){ ?>
        <script> $('#myModal').modal('show'); </script>
     <?php  }
?>
    </body>
</html>
