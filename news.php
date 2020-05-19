<?php
    include 'admin/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>The concept group</title>    
        <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">  
        <!-- Plugins CSS -->
        <link href="css/plugins/plugins.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet"><link href="css/main.css" rel="stylesheet">
        <style>
            
        </style>
    </head>

    <body data-spy="scroll" data-darget=".navbar-seconday">
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div><!--/preloader-->

        <!-- Pushy Menu -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-transparent bg-faded nav-sticky">
            <!--  -->

            <!--  -->
            <div class="container">
                <!--  -->

                <!--  -->
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--  -->

                <!--  -->
                <a class="navbar-brand" href="index.php">
                    <br>
                </a>
                <!--  -->

                <!--  -->
                <div  id="navbarNavDropdown" class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="index.php">Home</a>
                        </li>
                        <!--  -->

                        <!--  -->
                        <li class="nav-item dropdown ">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">About</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="aboutUs.php" class="dropdown-item ">About Us</a></li>
                                <li><a href="our-team.php" class="dropdown-item" >Our Team</a></li>
                                <li><a href="our-values.php" class="dropdown-item ">Our Values</a></li>
                                <li><a href="faqs.php" class="dropdown-item">FAQs</a></li>
                            </ul>
                        </li>
                        <!--  -->

                        <!--  -->
                        <li class="nav-item dropdown ">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">SERVICES</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="services-overview.php" class="dropdown-item">Overview</a></li>
                                <li><a href="sales-management.php" class="dropdown-item">Sales Management</a></li>
                                <li><a href="sales-training.php" class="dropdown-item">Sales Training</a></li>
                                <li><a href="sales-outsourcing.php" class="dropdown-item">Sales Outsourcing</a></li>
                                <li><a href="marketing.php" class="dropdown-item">Marketing</a></li>
                                <li><a href="consultancy.php" class="dropdown-item">Consultancy</a></li>
                                <li><a href="investment.php" class="dropdown-item">Investment</a></li> 
                                <li><a href="market-studies.php" class="dropdown-item">Market Studies</a></li> 
                                <li><a href="pr.php" class="dropdown-item">PR</a></li> 
                                <li><a href="social-media.php" class="dropdown-item">Social Media</a></li> 
                            </ul>
                        </li>
                        <!--  -->


                        <!--  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">PORTFOLIO</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="our-customer.php" class="dropdown-item">OUR CUSTOMERS</a></li>
                                <li><a href="portfolio.php" class="dropdown-item">PORTFOLIO</a></li>
                            </ul>
                        </li>
                        <!--  -->


                        <!--  -->
                        <li class="nav-item active">
                            <a class="nav-link " href="news.php">NEWS</a>
                        </li>
                        <!--  -->

                        <!--  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">LEARNING CENTER</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="on-sale.php" class="dropdown-item">On Sales</a></li>
                                <li><a href="podcast.php" class="dropdown-item">Podcast</a></li>
                                <li><a href="events.php" class="dropdown-item">Events</a></li>
                                <li><a href="vlog.php" class="dropdown-item">Vlog</a></li>
                                
                            </ul>
                        </li>
                        <!--  -->

                        <!--  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">COMPANIES</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="https://theconcept.ro" class="dropdown-item">THE CONCEPT</a></li>
                                <li><a href="https://heritage-properties.ro" class="dropdown-item">HERITAGE-PROPERTIES</a></li>
                                <li><a href="https://rexperia.com" class="dropdown-item">REXPERIA</a></li>
                            </ul>
                        </li>
                        <!--  -->
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact</a>
                        </li>

                       
                    </ul>        
                </div>

            </div>
        </nav>

        <div class="page-titles-img title-space-lg bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}' style='background-image: url("img/news.jpg")'>
            <div class="container">
                <div class="row">
                    <div class=" col-md-8 ml-auto mr-auto">
                        <h1 class='text-uppercase'>NEWS & UPDATES</h1>
                        <p>DATA, INFO & OPINIONS FROM OUR PROFESSIONALS</p>
                     </div>
                </div>
            </div>
        </div><!--page title end-->
        
        <div class="container pt50 pb50">
            <div class="row">
                <?php
                    $select = "SELECT * FROM `blog`";
                    $query = mysqli_query($connect, $select);
                    while($row = mysqli_fetch_array($query)){
                        echo '<div class="col-md-4">
                        <div class="card mb30">
                            <img class="card-img-top img-fluid" src="admin/' . $row["bg"] . '" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">
                                    '. $row["title"] . '
                                </h4>
                                <a href="the-news.php?id='. $row["id"] . '" class="btn btn-primary">Read more</a> 
                            </div>
                        </div>
                    </div><!--/col-->';
                    }
                ?>
                

            </div>

           <div class="text-center d-flex justify-content-center align-items-center">
                    <nav aria-label="Page navigation example" class="mb20 ">
                        <ul class="pagination pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav><!--/.pagination-->
           </div>
        </div>

        <footer class="footer footer-dark pt50 pb30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  ml-auto mr-auto text-center">
                        <ul class="social-icons list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>Facebook
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>twitter
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-instagram"></i>instagram
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-behance"></i>Behance
                                </a>
                            </li>
                        </ul>
                        <h4><i class="fa fa-phone"></i> 1800-355-4322</h4>
                        <h4><i class="fa fa-envelope"></i> support@assan.com</h4>
                        <p>&copy; Copyright 2018. Assan 3.0</p>
                    </div>
                </div>
            </div>
        </footer>

        <!--back to top-->
        <a href="#" class="back-to-top hidden-xs-down" id="back-to-top"><i class="ti-angle-up"></i></a>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="js/plugins/plugins.js"></script> 
        <script src="js/assan.custom.js"></script> 
</body></html>
<?php
include 'modal.php';
?>
