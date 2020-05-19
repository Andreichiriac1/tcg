<?php
    include "config.php";
    if(!isset($_SESSION['username'])){
        header("location: index.php");
    }
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
               <!--page styles-->
        <link href="lib/summernote/summernote-bs4.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

          <div class="page-wrapper" id="page-wrapper">
             <aside id="page-aside" class=" page-aside aside-fixed">
                <div class="sidenav darkNav">
                    <a href="index.php" class="app-logo d-flex flex flex-row align-items-center overflow-hidden justify-content-center">
                        <i class="icon-Paper-Plane inline-icon rounded avatar32 d-inline-flex align-items-center justify-content-center"></i>
                        <span class="logo-text d-inline-flex"> <span class='font700 d-inline-block mr-1'>The Concept Group</span></span>
                    </a>
                    <div class="flex">
                        <div class="aside-content slim-scroll">
                            <ul class="metisMenu" id="metisMenu">
                                <li class="nav-title">Main<span class="nav-thumbnail">MN</span></li>
                                <li class="active"> <i class="icon-Gaugage nav-thumbnail"></i>
                                    <a href="dashboard.php">

                                        <span class="nav-text">
                                            Dashboard 
                                        </span>
                                    </a>
                                   
                                </li><!--Menu-item-->
                                <li> <i class="icon-Gaugage nav-thumbnail"></i>
                                    <a href="adauga-blog.php">

                                        <span class="nav-text">
                                            Adauga Blog 
                                        </span>
                                    </a>
                                   
                                </li><!--Menu-item-->

                            </ul>
                        </div><!-- aside content end-->
                    </div><!-- aside hidden scroll end-->
                </div><!-- sidenav end-->
            </aside><!-- page-aside end-->
            <main class="content">
                <header class="navbar page-header whiteHeader navbar-expand-lg">
                    <ul class="nav flex-row mr-auto">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link sidenav-btn h-lg-down">
                                <span class="navbar-toggler-icon"></span>
                            </a>
                            <a class="nav-link sidenav-btn h-lg-up" href="#page-aside"  data-toggle="dropdown" data-target="#page-aside">
                                <span class="navbar-toggler-icon"></span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav flex-row order-lg-2 ml-auto nav-icons">
                        <li class="nav-item dropdown user-dropdown align-items-center">
                            <a class="nav-link" href="#" id="dropdown-user" role="button" data-toggle="dropdown">
                                <span class="user-states states-online">
                                    <img src="images/avatar6.jpg" width="35" alt="" class=" img-fluid rounded-circle">
                                </span>
                                <span class="ml-2 h-lg-down dropdown-toggle">
                                    Hi, Admin
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                                <div class="text-center p-3 pt-0 b-b mb-5">
                                    <span class="mb-0 d-block font300 text-title fs-1x">Hi! <span class="font700">Admin</span></span>
                                    <span class="fs12 mb-0 text-muted">Administrator</span>
                                </div>
                                <a class="dropdown-item" href="logout.php"><i class="icon-Power"></i> logout</a>

                            </div>
                        </li>
                        <li class="h-lg-up nav-item">
                            <a href="#" class=" nav-link collapsed" data-toggle="collapse" data-target="#navbarToggler" aria-expanded="false">
                                <i class="icon-Magnifi-Glass2"></i>
                            </a>
                        </li>
                    </ul>
                </header>
                <div class="page-subheader mb-30">
                    <div class="container-fluid">
                        
                <div class="page-content">
                     <div class="container-fluid">
                         <h1>Blogurile Postate</h1>
                        <div class="row">
                <?php
                    $select = "SELECT * FROM `blog`";
                    $query = mysqli_query($connect, $select);
                    while($row = mysqli_fetch_array($query)){
                        echo '<div class="col-md-4">
                        <div class="card mb30">
                            <img class="card-img-top img-fluid" src="' . $row["bg"] . '" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">
                                    '. $row["title"] . '
                                </h4>
                                <a href="edit-blog.php?id='. $row["id"] . '" class="btn btn-primary">Editeaza</a> 
                                <a href="delete-blog.php?id='. $row["id"] . '" class="btn btn-primary">Sterge</a> 
                            </div>
                        </div>
                    </div><!--/col-->';
                    }
                ?>
                        </div>
                    </div>
                </div><!-- main end-->
               
            </main><!-- page content end-->
        </div><!-- app's main wrapper end -->
        <!-- Common plugins -->
        <script type="text/javascript" src="js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="js/appUi-custom.js"></script> 
             <script type="text/javascript" src="lib/summernote/summernote-bs4.min.js"></script>
        <script type="text/javascript" src="js/plugins-custom/summernote-custom.js"></script>
    </body>
</html>
