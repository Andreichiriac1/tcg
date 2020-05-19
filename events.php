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
            .card-photo{
                height: 100%;
                width: 100%;
            }
            .card-photo img{
                object-fit: cover;
                height: 100%;
                width: 100%;
            }
            .img-author, .img-author img{
                border-radius: 50%;
                height: 50px;
                width: 50px;
                object-fit: cover;
            }
            .buttons-news{
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .buttons-news a{
                background-color: orange;
                padding: 5px 15px;
                border-radius: 50px;
                color: white;
                transition: all .3s ease-in-out;
            }
            .buttons-news a:hover{
                box-shadow: 0px 3px 5px rgba(100, 0, 0, .2);
            }
            @media all and (max-width: 800px){
                .card-title-news{
                    font-size: .9rem !important;
                }
                .img-author, .img-author img{
                    border-radius: 50%;
                    height: 30px;
                    width: 30px;
                    object-fit: cover;
                }
                .card-date-news{
                    font-size: .7rem !important;
                }
                .buttons-news a{
                    padding: 10px;
                }
                .buttons-news a:nth-child(4){
                    display: none;
                }
            }
        </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
                        <li class="nav-item ">
                            <a class="nav-link " href="news.php">NEWS</a>
                        </li>
                        <!--  -->

                        <!--  -->
                        <li class="nav-item dropdown active">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">LEARNING CENTER</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="on-sale.php" class="dropdown-item">On Sales</a></li>
                                <li><a href="podcast.php" class="dropdown-item ">Podcast</a></li>
                                <li><a href="events.php" class="dropdown-item active">Events</a></li>
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

        <div class="page-titles-img title-space-lg bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}' style='background-image: url("img/podcastBg.jpg")'>
            <div class="container">
                <div class="row">
                    <div class=" col-md-8 ml-auto mr-auto">
                        <h1 class='text-uppercase' >EVENTS</h1>
                        <p>EDUCATIONAL PODCASTS ON SALES & REAL ESTATE</p>
                     </div>
                </div>
            </div>
        </div><!--page title end-->
        
        <div class="container pt50 pb50">


            <div class="card  bg-white mb30">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-photo">
                            <img src="img/news.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10 col-10">
                                    <h1 class="h5 card-title-news">The Most Efficient Techniques for Gaining Trust & Closing in Real Estate	</h1>
                                </div>
                                <div class="col-md-2 col-2">
                                    <div class="img-author">
                                      <img src="img/news.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h1 class="h6 card-date-news">Wednesday, Jun 10, 11:15, EEST</h1>
                                </div>
                                <div class="col-md-10">
                                    <p class="card-text-news">
                                    In more than 100.000 Calls and 5.000 Meetings in the last two years, The Concept team found that the entire Sales Process in Real Estate can be reduced to two elements. Learn what are the most efficient techniques to propel these two elements. Register now!

                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <div class="buttons-news">
                                        <a href="#" class="btn-news">Workshop</a>
                                        <a href="#" class="btn-news">Bucharest RO</a>
                                        <a href="#" class="btn-news">Register</a>
                                        <a href="#" class="btn-news"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div><!--/card-->


            <div class="card  bg-white mb30">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-photo">
                            <img src="img/news.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10 col-10">
                                    <h1 class="h5 card-title-news">Real Estate Fundamentals	</h1>
                                </div>
                                <div class="col-md-2 col-2">
                                    <div class="img-author">
                                      <img src="img/news.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h1 class="h6 card-date-news">Saturday, Nov 9, 11:00, EET</h1>
                                </div>
                                <div class="col-md-10">
                                    <p class="card-text-news">
                                    Learn from our CEO, Daniel Tudor, what are the fundamentals when considering investing in Real Estate. Workshop held under Money Masterclass Event by Andy Szekely.
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <div class="buttons-news">
                                        <a href="#" class="btn-news">Workshop</a>
                                        <a href="#" class="btn-news">Bucharest RO</a>
                                        <a href="#" class="btn-news">More Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div><!--/card-->

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
