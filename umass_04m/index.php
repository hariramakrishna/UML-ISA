<?php
if (isset($_POST['formsubmitted'])) {
	
	if (empty($_POST['Name'])) {//if no name has been supplied 
        $error[] = 'Please Enter a name ';//add to array "error"
    } else {
        $name = $_POST['Name'];//else assign it a variable
    }
	
    if (empty($_POST['Email'])) {
        $error[] = 'Please Enter your Email ';
    } else {
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['Email'])) {
           //regular expression for email validation
            $Email = $_POST['Email'];
        } else {
             $error[] = 'Your EMail Address is invalid  ';
        }
    }
	
    if (empty($_POST['Message'])) {//if no name has been supplied 
        $error[] = 'Please Enter your Last Name ';//add to array "error"
    } else {
        $message = $_POST['Message'];//else assign it a variable
    }
	
	
    include './smtp/Send_Mail.php';
    $to="hariramakrishna_gurram@student.uml.edu";
    $subject='Message from Website - ' .$name. ' - ' .$Email. ' ';
    $body='<h5><i>Dear</i> <b>ISA,</b></br></br>' .$message. '</br></br><em>please do not reply to this email</em>';
    Send_Mail($to,$subject,$body);
    $_POST['Message'] = "";
				
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indian Student Association - UMass Lowell</title>
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="img/umass-logo2.png" height="150" width="125"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-about" class="page-scroll">About</a></li>
            <li><a href="#tf-team" class="page-scroll">Team</a></li>
            <li><a href="#tf-services" class="page-scroll">Services</a></li>

            <li><a href="#tf-works" class="page-scroll">Event Clicks</a></li>
            
            <li><a href="#tf-contact" class="page-scroll">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Welcome to <strong><span class="color">ISA-UMass Lowell</span></strong></h1>
                <p class="lead">We are a Non-Profit organization with <strong>years of experience</strong> and with <strong>extraordinary people</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/02.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4>About us</h4>
                            <h2>Some words <strong>about us</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro">Our objectives are to preserve the rich cultural heritage of India, to ensure a homely atmosphere for Indian students living away from home and to unite Indians and people of other races by celebrating and learning from diversity.</p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>foster understanding about India and her culture among the UMass community</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Skills</strong> - <em>Some dummy description</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>new bulet</strong> - <em>some description.........</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Meet <strong>our team</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/p.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Radhika Manohar</h3>
                                <p>President-ISA</p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/s.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Hari Rama Krishna Gurram</h3>
                                <p>Secretary - ISA</p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/vp.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Godwin Michael</h3>
                                <p>Vice President - ISA</p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/sen.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Valli Tangirala</h3>
                                <p>Senator - ISA</p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/as.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Sudheer Reddy Yata</h3>
                                <p>Alternate Senator - ISA</p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/w.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Preethi Gurrala</h3>
                                <p>Webmaster - ISA</p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/harsh.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Harsh Sangvi</h3>
                                <p>IDRF President</p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/dilip.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Dilip</h3>
                                <p>Vice President</p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/harsha.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Harsha Vardhan</h3>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/mayur.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Mayur Kamalakar</h3>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/riddi.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Riddhi Shah</h3>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <!--   ADD NEXT GUY HERE
                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/NEXT-GUY.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>NEXT GUY NAME</h3>
                                <p>NEXT GUY CAPTION</p>
                                <p></p>
                            </div>
                        </div>
                    </div> -->

                </div>
                
            </div>
        </div>
    </div>

    <!-- Services Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Take a look at <strong>our services</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em>add some random italic text here.....</em></small>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 service">
                    <a href="register.html#tf-register" class="fa fa-desktop" ></a>
                    <h4><strong>Register</strong></h4>
                    <p>fill up the forms for pick-ups and temporary accomodations</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
					<a href="guidelines.html#tf-guidelines" class="fa fa-list-ul" ></a>
                    <h4><strong>Guidelines</strong></h4>
                    <p>Guidelines for the new Admits..</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
					<a href="events.html#tf-events" class="fa fa-bullhorn" ></a>
                    <h4><strong>Events</strong></h4>
                    <p>Take a look at the upcomming Events.</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
					<a href="gallery.html" class="fa fa-camera" ></a>
                    <h4><strong>Gallery</strong></h4>
                    <p>Some of our event clicks</p>
                </div>
            </div>
        </div>
    </div>
	



    <!-- Portfolio Section
    ==========================================-->
    <div id="tf-works">
	<div class="overlay">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2>Our Events at a <strong>Glance</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em>Again some dummy text goes here in italics. Need to be discussed with team.</em></small>
            </div>
           <div class="space"></div>
            <div class="categories">
                
                <ul class="cat">
                    <li class="pull-left"><h4>Filter by Type:</h4></li>
                    <li class="pull-right">
                        <ol class="type">
                            <li><a href="#" data-filter="*" class="active">All</a></li>
                            <li><a href="#" data-filter=".web">Diwali</a></li>
                            <li><a href="#" data-filter=".photography">Independence Day</a></li>
                            <li><a href="#" data-filter=".app" >Holi</a></li>
                            <li><a href="#" data-filter=".branding" >Dandhiya</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="img/portfolio/01.jpg" data-lighter>
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="img/portfolio/02.jpg" data-lighter>
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/02.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#" data-lighter>
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#" data-lighter>
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/04.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#" data-lighter>
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/05.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#" data-lighter>
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/06.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#" data-lighter>
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/07.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#" data-lighter>
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/08.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
			</div>
        </div>
    </div>


    
    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Feel free to <strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>Fell free to type-in your questions below. We will get back to you with an Answer.</em></small>            
                    </div>

                    <form action="index.php" method="post" class="registration_form">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label for="Name">Full Name</label>
                                    <input type="text" class="form-control" name="Name" id="Name" placeholder="Your full name">
                            </div>
                            </div>						
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Email">Email address</label>
                                    <input type="email" class="form-control" name="Email" id="Email" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Message">Message</label>
                            <textarea class="form-control" name="Message" rows="3" placeholder="Enter your Message"></textarea>
                        </div>
                        
                        
						
						<div class="submit">
							<input type="hidden" name="formsubmitted" value="TRUE" />
							<button type="submit" class="btn tf-btn btn-default">Submit</button>
						</div>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p><b>Report any issues   <a href="mailto:HariRamaKrishna_gurram@student.uml.edu?Subject=Issues%20found%20on%20ISA%20page" target="_top">HariRamaKrishna_Gurram@student.uml.edu</a></b></p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/groups/isa.uml/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script> -->
	<script src="./jquery/jquery.lighter.js" type="text/javascript"></script>
	<link href="./jquery/jquery.lighter.css" rel="stylesheet" type="text/css" />

  </body>
</html>

