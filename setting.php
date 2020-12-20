<?php   
     require 'includes/common.php';
     if(!isset($_SESSION['email'])){
          header('location: index.php'); 
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
        <title>Settings</title>
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
               margin-bottom: 317px;
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
            .container1{
                position: relative;
                width: 71px;
                height: 71px;
            }
            .imgs{
             opacity: 1;
             display: block;
             transition: .5s ease;
             backface-visibility:visible;
            }
            .middle{
                transition: .5s ease;
                opacity: 0;
                position: absolute;
                top:50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%,-50%);
                text-align: center;
            }
            .container1:hover  .imgs{
                opacity: 0.3;
            }
            .container1:hover  .middle{
                opacity: 1;
            }
            .text{
                color:#222;
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
      
         <?php include 'includes/header.php' ?><br><br><br>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-sm-7 col-md-4 col-md-offset-2">
                    <h1>Change Password</h1>
                    <form method="post" action="setting_script.php">            

                        <div class="form-group">
                            <input type="password" name="oldpass" placeholder="Old Password" class="form-control">
                        </div>
                         <div class="form-group">
                            <input type="password" name="newpass" placeholder="New Password" class="form-control">
                        </div>
                         <div class="form-group">
                            <input type="password" name="repass"  placeholder="Re-type New Password" class="form-control">
                        </div>
                        <input type="submit" value="Change" class="btn btn-primary">
                    </form>
                </div>
                </div>
        </div> 
         <div id="x">
             
         </div>
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <div class="panel panel-primary">
                        <div class="panel-heading" style="padding-top: 0px;height:18px; ">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="panel-body container-fluid">
                            
                                <div class="row">
                                    <div class="col-xs-4">
                                        <h4>Current Photo</h4>
                                        <?php if($row[0]==0){  ?> 
                                        <img src="img/avater.jpg" src="avarther1" width="130px" height="130px">
                                        <?php } else{  ?>
                                        <img src="uploads_profile/profile<?php echo $_SESSION['user_id'];  ?>.jpg" height="130px" width="130px;" class="imgs">
                                        <?php }  ?>
                                    </div>
                                    <div class="col-xs-8">
                                        <h4>Upload a photo</h4>
                                        <p>You can upload a JPG,PNG file (the size limit is 4MB)</p>
                                        <?php  if(isset($_GET['error'])){
                                            if($_GET['msg']=="Toobig"){
                                             echo '<p style="color:red;text-align:center;">Your file is too Big</p>';   
                                            }else if($_GET['msg']=="uperror"){
                                               echo '<p style="color:red;text-align:center;">There was an error uploading your file</p>'; 
                                            }else if($_GET['msg']=="type"){
                                              echo '<p style="color:red;text-align:center;">you cannot upload files of this type!</p>';  
                                            }
                                        }   
                                        ?>
                                        <form action="upload.php" method="post" enctype="multipart/form-data">
                                            <input type="file" name="file"><hr>
                                            <button type="submit" name="submit" class="btn btn-primary">Upload Photo</button>
                                            <a href="removeprofile.php" class="btn btn-danger">remove</a>
                                        </form>
                                    </div>
                                </div>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
      </div>
    </div>

  </div>
</div> 
        <?php include 'includes/footerinner.php' ?>
        <?php  
       if(isset($_GET['error'])){ ?>
        <script> $('#myModal1').modal('show'); </script>
     <?php  }
?>
    </body>
</html>

