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
        <title>Manage Products </title>
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
                margin-top:70px;
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
                border-radius:5px;
            }
            .middle{
                display: none;
            }
            .imgs{
                box-shadow:0px 1px 5px 1px #ff9999; 
                border-radius: 50%
            }
            body{
                /*background-image: url('https://cb.cbeditz.com/download/iHmapiyXW9wFXkbUEWu90zDFLgqaYZmjG8zuuWoO3XvsSSHSdisYsAvoaa3ADST9wL3hh6USEQe9zscZLGAnE0d2UErvKJItzr1K2X4iOWxNUYsL2QWi7kLZzjvBUgBT96gtNeDpYWQ64uEAd6udPB6LHgngBJeMGDANkdZVxphlRsS1PtOD3HEjlAMjBevsD4qiLzMh/large');*/
             /*background-image:url('https://i.pinimg.com/564x/1b/30/80/1b30806bed30a7d071752948d00e75f8.jpg');*/   
             /*background-repeat: no-repeat;*/
/*             background-image: url('https://cdn.pixabay.com/photo/2013/08/28/12/03/plumage-176723__340.jpg');
             background-attachment: fixed;*/
            background-color: whitesmoke;
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
        </style>
    </head>

    <body>
        
         <?php 
         include 'includes/header.php'; ?>
         <?php include 'includes/check_if_added.php';
         ?> <br><br><br>
        
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our StyleStore!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place</p>
            </div>
        </div>
        <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Canon_EOS_1.jpg" alt="img1">  <!-- 5.jpg  -->
                
                <div class="caption">
                    <h3>Cannon EOS</h3>
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
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Nikon_D3500_2.jpg" alt="img2">   <!-- 2.jpg  -->
                <div class="caption">
                    <h3>Nikon DSLR</h3>
                    <p>Price:Rs.40000.00</p>
                     <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(2)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/sony_dslr_3.jpg" alt="img1">  <!-- 3.jpg -->
                
                <div class="caption">
                    <h3>Sony DSLR</h3>
                    <p>Price:Rs.45000.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(3)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/olympus_dslr_4.jpg" alt="img1"> <!-- 4.jpg -->
               
                <div class="caption">
                    <h3>Olympus DSLR</h3>
                    <p>Price:Rs.50000.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(4)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
            </div>
        </div>
            
            
            <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Titan_301_5.jpg" alt="img1">  <!-- 9.jpg -->
                
                <div class="caption">
                    <h3>Titan Model #301</h3>
                    <p>Price:Rs.13000.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(5)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/titan_201_6.jpg" alt="img2"> <!-- 10.jpg -->
                
                <div class="caption">
                    <h3>Titan Model #201</h3>
                    <p>Price:Rs.3000.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(6)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/hmt_7.jpg" alt="img1">  <!-- 11.jpg -->
                
                <div class="caption">
                    <h3>HMT Milan</h3>
                    <p>Price:Rs.8000.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(7)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/leuba_8.jpg" alt="img1"> <!-- 12.jpg -->
               
                <div class="caption">
                    <h3>Faber Luba #111</h3>
                    <p>Price:Rs.18000.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(8)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
            </div>
        </div>
            
            
            <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/8.jpg" alt="img1">
                
                <div class="caption">
                    <br>
                    <h3>H&W</h3>
                    <p>Price:Rs.800.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(9)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/6.jpg" alt="img2">
                
                <div class="caption">
                    <h3>Luis Phil</h3>
                    <p>Price:Rs.1000.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(10)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/13.jpg" alt="img1">
                
                <div class="caption">
                    <h3>Jhon Zok</h3>
                    <p>Price:Rs.1500.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(11)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php 
                      }
                    }
                    ?>
                    <!--<button class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/14.jpg" alt="img1">
               
                <div class="caption">
                    <h3>Jhalsani</h3>
                    <p>Price:Rs.1300.00</p>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{
                      if(check_if_added_to_cart(12)){  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                      }
                      else{
                     ?>
                    <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
         <?php if(isset($_SESSION['email'])) {
             include 'includes/footerinner.php'
             ?>
         <?php
         }else
          include 'includes/footer.php'
         ?>
    </body>
</html>

