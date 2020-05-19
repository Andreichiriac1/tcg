<?php

include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>    
        <!-- Bootstrap-->
        <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Common Plugins CSS -->
        <link href="css/plugins/plugins.css" rel="stylesheet">
        <!--fonts-->
        <link href="lib/line-icons/line-icons.css" rel="stylesheet">
        <link href="lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet"><link href="css/main.css" rel="stylesheet">
    </head>
    <body class='bg-light'>

        <div class="page-wrapper" id="page-wrapper">

            <main class="content">

                <div class="container flex d-flex">
                    <div class='row flex align-items-center'>
                        <div class='col-lg-4 mt-60 mb-60 col-md-6 col-sm-12 ml-auto mr-auto'>
                            <div class="bg-white shadow-sm overflow-hidden rounded">
                                <div class="p-4 text-center bg-dark-active text-white">
                                    <a href="index.php" class="avatar avatar60 ml-auto mr-auto bg-gradient-primary text-white rounded-circle">  
                                        <i class="icon-Paper-Plane"></i> </a>
                                    <h5 class='text-center h5 pt-10 mb-0 text-white'>Welcome back, Please login!</h5>
                                    <?php
                                        if(isset($_SESSION["error"]) && $_SESSION["error"] == true){
                                            echo "<div class='error'><p style='margin: 0;'>User or Password Wrong</p></div>";
                                            $_SESSION["error"] = false;
                                        }
                                    ?>
                                </div>
                                <div class="p-3 pt-30 pb-30">

                                    <form role="form" method="post" action="log.php">
                                        <div class="input-icon-group">
                                            <div class="d-flex flex flex-row">
                                                <label class="flex d-flex mr-auto" for='pass'>Username</label>
                                            <div class="flex d-flex ml-auto justify-content-end">
                                            </div>
                                           </div>
                                            <div class='input-icon-append'>
                                                <i class="fa fa-user"></i>
                                                <input placeholder="Username" name="user" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="input-icon-group">
                                           <div class="d-flex flex flex-row">
                                               <label class="flex d-flex mr-auto" for='pass'>password</label>
                                            
                                               
                                           </div>
                                            <div class='input-icon-append'>
                                                <i class="fa fa-lock"></i>
                                                <input id="pass" placeholder="Password" name="pass" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-gradient-primary btn-block btn-lg">Sign In</button>
                                    
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- main end-->
                
                
            </main><!-- page content end-->
        </div><!-- app's main wrapper end -->
        <!-- Common plugins -->
        <script type="text/javascript" src="js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="js/appUi-custom.js"></script> 
    </body>
</html>
