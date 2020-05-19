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
             ul{
                color: #0f52ba;
            }
             ul li{
                padding: 5px;
            }

            .consultancy{
                background-color: #0061BC;
                width: 50%;
                padding: 10px;
                margin: 5px auto;
                border-radius: 25px;
            }
            form input{
                display: block;
                width: 100%;
                margin: 10px;
                height: 40px;
                border: none;
                outline: none;
                background-color: rgba( 0, 97, 188, .1);
                padding: 0px 10px;
                border-bottom: 1px solid #0061BC;
                transition: all .3s ease-in-out;
            }
            form input[type = submit]{
                display: block;
                width: 100%;
                margin: 10px;
                height: 40px;
                border: none;
                outline: none;
                background-color: rgba( 0, 97, 188, 1);
                padding: 0px 10px;
                color: white;
                font-weight: 600;
                font-size: 1rem;
                transition: all .3s ease-in-out;
            }
            form textarea{
                display: block;
                width: 100%;
                margin: 10px;
                height: 150px;
                border: none;
                outline: none;
                background-color: rgba( 0, 97, 188, .1);
                padding: 5px 10px;
                border-bottom: 1px solid #0061BC;
                transition: all .3s ease-in-out;
            }
            form input:focus{
                box-shadow: 1px 3px 5px rgba(0, 0, 0, .1);
                background-color: rgba( 0, 97, 188, .1);
            }
            form textarea:focus{
                box-shadow: 1px 3px 5px rgba(0, 0, 0, .1);
                background-color: rgba( 0, 97, 188, .1);
            }
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
                        <li class="nav-item dropdown active">
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
                        <li class="nav-item">
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

        <div class="page-titles-img title-space-lg bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}' style='background-image: url("img/servicesBg.jpg")'>
            <div class="container">
                <div class="row">
                    <div class=" col-md-8 ml-auto mr-auto">
                        <h1 class='text-uppercase consultancy' style="font-size: 1.9rem;">MARKET STUDIES</h1>
                        <p style="font-size: 1rem;">BE DATA DRIVEN AND NOT EMOTIONS DRIVEN.</p>
                     </div>
                </div>
            </div>
        </div><!--page title end-->
       
        <div class="container pt70 pb30">
            <div class="row">
                <div class="col-md-8">
                    <div class="servicesPagesText">
                        <h1 class="h5">In Real Estate it’s easy to get emotional. You see the land and immediately imagine the opportunities, how an entire community will live there, how the entire area will develop, making your amazing vision a reality</h1> <br>
                        <p><br>
                        Unfortunately, it’s not always like this, especially if you take into consideration the slow development of the Real Estate market, into an economic context that manifests cyclically in upturns and downturns.
                        <br>
                        That’s why we deeply recommend that you always start with an honest and straightforward study of the market, giving you real data to base your vision on.    
                        </p><br>
                         <p>The Concept Group provides two types of Market Studies:</p>    
                        <ul>
                            <li>Competition Check (real offer in the area and similar areas)</li>
                            <li>Full Market Study (real offer and real demand, trends and financial scenarios built on the key data revealed by the study)</li>
                        </ul>    
                        <p>Need honest data to base your arguments? We can help. <a href="contact.php">Call us</a></p>  <br><br>         
                        <h1 class="text-center h5">Clients that have already benefited of this service:</h1>
                        <ul class="clients-grid mb0 clearfix">
                            <li><img style="height: 120px; padding: 10px; text-align: center" src="clients/Gloria Jeans/gloriajeanscoffee.jpg" class="img-fluid" alt="Clients"></li>
                            <li><img style="height: 120px; padding: 10px; text-align: center" src="clients/metal hammer brau/hammer.png" class="img-fluid" alt="Clients"></li>
                            <li><img style="height: 120px; padding: 10px; text-align: center" src="clients/Kiddo play academy/logo-498-32589886-20180323162653.png" class="img-fluid" alt="Clients"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6"><input type="text" name="fName" placeholder="First Name" required></div>
                            <div class="col-md-6"><input type="text" name="lName" placeholder="Last Name" required></div>
                        </div>
                        <input type="text" name="organization" placeholder="Organization" required>
                        <input type="text" name="email" placeholder="Email Address" required>
                        <input type="text" name="phone" placeholder="Phone" required>
                        <textarea name="msg" placeholder="Message" required></textarea>
                        <input type="submit" name="send" value="Submit">
                    </form>
                </div>
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
