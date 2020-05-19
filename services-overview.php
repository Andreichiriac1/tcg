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
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <style>
            .listServices ul{
                color: #0f52ba;
            }
            .listServices ul li{
                padding: 5px;
                font-size: 1rem;
            }
            .quote{
                display: block;
                margin: 0px auto;
                padding: 10px 0px;
                width: 30px;
            }
            .quote::before{
                color: #555;
                font-size: 3rem;
            }
            .quotes{
                text-align: center;
                font-family: 'Playfair Display', serif;
                font-size: 1rem;
                letter-spacing: 1px;
                line-height: 25px;
            }
            .citated{
                text-align: center;
                font-family: 'Kaushan Script', cursive;
                font-size: 1.4rem;
                color: #222;
            }
            .showMore1{
                display: block;
                color: #333;
                font-weight: 600;
                margin: 10px 0px;
                font-size: 1rem;
            }
            .showMore2{
                display: block;
                color: #333;
                font-weight: 600;
                margin: 10px 0px;
                font-size: 1rem;
            }
            #showMore1{
                display: none;
            }
            #showMore2{
                display: none;
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
                        <h1 class='text-uppercase'>SALES OUTSOURCING</h1>
                        <p>SALES TEAMS DEDICATED PER EACH PROJECT</p>
                     </div>
                </div>
            </div>
        </div><!--page title end-->
       
        <div class="container pt70 pb30">
           
        <div class="row">
            <div class="col-md-6">
                <p style="text-align: justify;font-size: 1rem;padding: 10px;font-weight: 600;">We believe that Sales are first and foremost procedural and then (and only then) art & talent. That’s why we use a very disciplined and structured method to design, implement and manage the Marketing & Sales Process and, therefore, the right Plan that fits the needs and size of your project and activity.</p>
            </div>
            <div class="col-md-6" style="border-left: 1px solid #B9B9B9">
                <p style="text-align: justify;font-size: 1rem;padding: 10px;">At The Concept Group we’ve used our sales & leadership expertise to sell more than 2.000 Units in Residential Compounds (both apartments and houses) and save Real Estate Developers from the headaches that the entire Sales & Marketing Process involves. With over 10 years of real-world experience, we understand the intricacies of our industry and can help you maximize the profit of your development. 
</p>

              
            </div>
        </div>
        <br>
        <p style="text-align:center ;font-size: 1rem;">So, what are your biggest plans and challenges?.. Let’s talk 😉</p>
<br>
            <div class="row">

                <div class="col-lg-4 mb40">
                    <div class="image-card-title-overlay">
                        <a class="card-link" href="sales-outsourcing.php"></a>
                        <div class="card-overlay">
                            <div class="overlay-inner">
                            <h3 class="text-white text-muted">SALES OUTSOURCING</h3>
                                <p class="text-white text-muted"style="font-size:1rem;">
                                Dedicated Project Sales Teams		
                                </p>
                            </div>
                        </div>
                        <img src="img/servicesBg.jpg" alt="" class="img-fluid">
                    </div>
                </div><!--/col-->

                <div class="col-lg-4 mb40">
                    <div class="image-card-title-overlay">
                        <a class="card-link" href="marketing.php"></a>
                        <div class="card-overlay">
                            <div class="overlay-inner">
                                <h3 class="text-white text-muted" >MARKETING</h3>
                                <p class="text-white text-muted" style="font-size:1rem;">
                                Online & Offline
                                </p>
                            </div>
                        </div>
                        <img src="img/servicesBg.jpg" alt="" class="img-fluid">
                    </div>
                </div><!--/col-->

                <div class="col-lg-4 mb40">
                    <div class="image-card-title-overlay">
                        <a class="card-link" href="consultancy.php"></a>
                        <div class="card-overlay">
                            <div class="overlay-inner">
                            <h3 class="text-white text-muted">CONSULTANCY</h3>
                                <p class="text-white text-muted"style="font-size:1rem;">
                                In Pre-Development & During Development
                                </p>
                            </div>
                        </div>
                        <img src="img/servicesBg.jpg" alt="" class="img-fluid">
                    </div>
                </div><!--/col-->


                <div class="col-lg-4 mb40">
                    <div class="image-card-title-overlay">
                        <a class="card-link" href="sales-management.php"></a>
                        <div class="card-overlay">
                            <div class="overlay-inner">
                            <h3 class="text-white text-muted">SALES MANAGEMENT</h3>
                                <p class="text-white text-muted"style="font-size:1rem;">
                                Your Teams, Our Managers
                                </p>
                            </div>
                        </div>
                        <img src="img/servicesBg.jpg" alt="" class="img-fluid">
                    </div>
                </div><!--/col-->

                <div class="col-lg-4 mb40">
                    <div class="image-card-title-overlay">
                        <a class="card-link" href="sales-training.php"></a>
                        <div class="card-overlay">
                            <div class="overlay-inner">
                            <h3 class="text-white text-muted">SALES TRAINING</h3>
                                <p class="text-white text-muted"style="font-size:1rem;">
                                With your team
                                	 
                                </p>
                            </div>
                        </div>
                        <img src="img/servicesBg.jpg" alt="" class="img-fluid">
                    </div>
                </div><!--/col-->

                <div class="col-lg-4 mb40">
                    <div class="image-card-title-overlay">
                        <a class="card-link" href="investment.php"></a>
                        <div class="card-overlay">
                            <div class="overlay-inner">
                            <h3 class="text-white text-muted">INVESTMENT</h3>
                                <p class="text-white text-muted"style="font-size:1rem;">
                                Land & Buildings Sale & Acquisition
                                </p>
                            </div>
                        </div>
                        <img src="img/servicesBg.jpg" alt="" class="img-fluid">
                    </div>
                </div><!--/col-->


                <div class="col-lg-4 mb40">
                    <div class="image-card-title-overlay">
                        <a class="card-link" href="market-studies.php"></a>
                        <div class="card-overlay">
                            <div class="overlay-inner">
                            <h3 class="text-white text-muted">MARKET STUDIES</h3>
                                <p class="text-white text-muted"style="font-size:1rem;">
                                Land & Buildings Sale & Acquisition

                                </p>
                            </div>
                        </div>
                        <img src="img/servicesBg.jpg" alt="" class="img-fluid">
                    </div>
                </div><!--/col-->

                <div class="col-lg-4 mb40">
                    <div class="image-card-title-overlay">
                        <a class="card-link" href="pr.php"></a>
                        <div class="card-overlay">
                            <div class="overlay-inner">
                            <h3 class="text-white text-muted">PR</h3>
                                <p class="text-white text-muted"style="font-size:1rem;">
                                Content & Press Distribution
                                </p>
                            </div>
                        </div>
                        <img src="img/servicesBg.jpg" alt="" class="img-fluid">
                    </div>
                </div><!--/col-->

                <div class="col-lg-4 mb40">
                    <div class="image-card-title-overlay">
                        <a class="card-link" href="social-media.php"></a>
                        <div class="card-overlay">
                            <div class="overlay-inner">
                            <h3 class="text-white text-muted">SOCIAL MEDIA</h3>
                                <p class="text-white text-muted" style="font-size:1rem;">
                                Content & Promotion
                                </p>
                            </div>
                        </div>
                        <img src="img/servicesBg.jpg" alt="" class="img-fluid">
                    </div>
                </div><!--/col-->

            </div>

            <h1 class="h3 text-center">The full range of services we offer includes</h1><br>
            <div class="row listServices">
                <div class="col-md-6">
                <h1 class="h4">BEFORE STARTING SALES</h1><br>
                    <ul>
                        <li>Market Studies</li>
                        <li>Identifying Target Audience</li>
                        <li>Designing Sales Strategy (matching target audience’s needs)</li>
                        <li>Assistance in Project Design, Units Mix, Partitioning, Floor Plan (with architects and key decision makers)</li>
                        <li>Pricing Strategy</li>
                        <li>Financial Scenarios on different strategies</li>
                        <div id="showMore1">

                        <li>Designing Marketing Plan</li>
                        <li>Branding</li>
                        <li>Art & Copywriting for Project Materials</li>
                        <li>Website Design</li>
                        <li>Social Media Setup (Facebook, Instagram, LinkedIn)</li>
                        <li>Online Marketing Campaigns</li>
                        <li>Video</li>
                        <li>PR Articles</li>
                        <li>Preparing Sales Teams</li>
                        <li>Recruiting (if necessary)</li>
                        <li>Setting Up the Sales Process</li>
                        <li>Integrating the Sales Process in Efficient Online Tools (CRMs, Calendars, Reports, Drive)</li>
                        <li>Creating Sales Pitch (major benefits, key financial, technical and urbanistic details)</li>
                        <li>Consultancy in Setting Up the Sales Office</li>
                        </div>
                        <a href="#" class="showMore1">Show More</a>
                    </ul>
                </div>
                <div class="col-md-6">
                <h1 class="h4">AFTER STARTING SALES</h1><br>
                    <ul>
                        <li>Sales Outsourcing (Dedicated Sales Teams)</li>
                        <li>Sales Management (Your Teams, Our Managers)</li>
                        <li>After-Sale Clients’ Management (after PreSPA until Final SPA and beyond)</li>
                        <li>Property Manual (when Handling the property)</li>
                        <li>Sales Training (With your teams) - free with ours</li>
                        <li>Continuous Management & Optimization of the Campaigns</li>
                        <div id="showMore2">
                        <li>Monthly Video w. Project Status</li>
                        <li>Social Media Content & Posts</li>
                        <li>Recurrent Sales Management Meetings</li>
                        <li>Website & Social Media Updates</li>
                        <li>Social Media Lives (Facebook, Instagram, Youtube)</li>
                        <li>Interviews with key decision makers from your company</li>
                        <li>Podcasts</li>
                        <li>Management of Real Estate Fairs (if included in the marketing plan)</li>
                        <li>Investment Opportunities (new land plots for development)</li>
                        </div>
                        <a href="#" class="showMore2">Show More</a>
                    </ul>
                </div>
            </div>

            <span class="quote"></span><br>
            <p class="quotes">
                Sales are a complex process in any industry, especially in Real Estate. We know it’s a headache for you as a Real Estate Developer or Investor because it involves a lot of details, lots of procedures, people management, leadership, follow-up, documents, clients changing their mind overnight, people and again people. Not anymore. We’ve dedicated our lives to simplify and manage this complex process and with more than 10 years of real-world experience, we’ve mastered it to a degree of excellence. And we don’t stop here. 
We continuously learn from our clients (basically from you, as our clients are the developers) and we successfully represent many key Real Estate players in the Romanian & CEE Market. We’d love to get to know you and help you overcome the complex challenges awaiting you in your further developments. Let’s talk and find where we can be of service to you.
</p>
<br> <p class="citated">
    Daniel Tudor, CEO & Founder The Concept Group
        </p>
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
        <script>
            $(document).ready(function(){
                $(".showMore1").on("click", function(e){
                    e.preventDefault();
                    $("#showMore1").slideToggle();
                    var text = $(this).text();
                    $(this).text(text == "Show More" ? "Show Less" : "Show More");
                });
                $(".showMore2").on("click", function(e){
                    e.preventDefault();
                    $("#showMore2").slideToggle();
                    var text = $(this).text();
                    $(this).text(text == "Show More" ? "Show Less" : "Show More");
                });
            });
        </script>
</body></html>
<?php
include 'modal.php';
?>
