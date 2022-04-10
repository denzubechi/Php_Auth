<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
     <link rel ="icon" href="BROFORCE.png" type="image/x-icon">
	<link href="IT/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">  
     <link rel="stylesheet" href="css2/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css2/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css2/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css2/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css2/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css2/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css2/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css2/style.css" type="text/css">
     <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css" >	
 <style>
     body{
       
         
     }
     .search{
         background-color:#002e4e;
          margin-left: 3%;
    padding: 3px;
    border-radius: 50px;
         text-align: center;
         color: white;
     }
    .section-title {
text-align:center;
margin-top: 1em;
background-color: #ecf0f1;
padding: .5em 0;
border-radius: .3em;
}
     .bg-dar{
             background-color:beige;
         color:azure;
         
     }
.service {
border-radius: .3em;
background-color: #34495e;
text-align: center;
padding: 3em 2em 1em 2em;
color: white;
}
.service .glyphicon {
font-size: 5em;
}
     #head{
         font-family: Courier New;
         text-align: center;
         font-size: 20px;
         
     }
       .circular{
         
           position: relative;
           width: 200px;
           height: 200px;
           overflow: hidden;
           border-radius: 50%;
       }
       .circular img{
           width: 100%;
           height: auto;
           
       }
 .circular--landscape {
  display: inline-block;
  position: relative;
  width: 200px;
  height: 200px;
  overflow: hidden;
  border-radius: 50%;
}

.circular--landscape img {
  width: auto;
  height: 100%;
  margin-left: -50px;
}
       .circular--squar {
  border-radius: 50%;
}
       .circular--square  {
  border-top-left-radius: 50% 50%;
  border-top-right-radius: 50% 50%;
  border-bottom-right-radius: 50% 50%;
  border-bottom-left-radius: 50% 50%;
           
}
     .fixed-nav-bar{
         position: fixed;
         top: 0;
         left: 0;
         z-index: 9999;
         width: 100%;
         height: 50px;
         background-color: #00a087;
     }
       #basic{
           
           background:#5b9dd9;
           color: aliceblue;
           font-family: Constantia;
       }
     .fixed-header{
         width:100%;
         position: fixed;
         background: aquamarine;
         padding: 10px 0;
         color: antiquewhite;
     }
     .fixed-header{
         top:0;
     }
     .container{
         width: 80%;
         margin:0 auto;
     }
    </style>
    
               
		
      <script src="jquery.min.js"></script>  
    <title>AirrrUniverse.com</title>
    </head>
    <body>
		<div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="#">AIRRR UNIVERSE</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="welcome.php">Home</a></li>
                            <li><a href="airrrprofile.php">Profile</a></li>
                            <li><a href="./portfolio.html">Portfolio</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./team.html">Team</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
							<li><a href="logout.php">Sign Out?</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-1">
                    <div class="header__right">
                        <div class="header__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                        <div class="header__right__search">
                            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
		
	<!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our services</h2>
                        <img src="img/icon/ti.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/icon/si-1.png" alt="">
                        <h4>Photos & Video</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/icon/si-2.png" alt="">
                        <h4>Wedding Makeup</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/icon/si-3.png" alt="">
                        <h4>Restaurant</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/icon/si-4.png" alt="">
                        <h4>Live Music & DJ</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/icon/si-5.png" alt="">
                        <h4>Wedding cake</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/icon/si-6.png" alt="">
                        <h4>Honeymoons</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
		
		
		
		
		<!--
        <div class=" fixed-nav-bar">
     <header id="head" class="bg-dar" style="text-align:center; color-white">Becoming You</header>
        <nav class=" navbar  navbar-expand-sm navbar-dark" style="background-color:#002e4e"><!--or md--><!--
        <a href="welcome.php" class="navbar-brand" style="font-family:Courier New" >AIRRR UNIVERSE</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto "><!--mr-auto align left--><!--
            <li class="nav-item active">
            
            <a href="welcome.php" class="nav-link">Home</a>    
            </li>
               <li class="nav-item">
            <a href="airrrprofile.php" class="nav-link">Profile</a>    
            </li>
               <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
               role="button" data-toggle="dropdown">Plartforms</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Photography</a>
                    <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">View Our portfolio</a>
                 <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Trainings</a>
                   </div>
            </li>
              <li class="nav-item">
            <a href="#" class="nav-link">About</a>    
            </li>
             <li class="nav-item">
            <a href="logout.php" class="nav-link">Sign Out?</a>    
            </li>
            <li class="nav-item">
            <form role="search" method="get" class="search-form" action="http://localhost:81/welcome.php/">
                <div class="search">
								
                    <input type="search"  class="search" placeholder="Search" value="" name="s" />
				</div>
					
            </form>
            </li>
            </ul>				
	
             
                </div>
            
        </nav> 
        </div> --><!--
         <br>
        <br><p></p>
        <div id="MagicCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <img class="d-block w-100" src="electric_lamborghini_hypercar_yacht-wallpaper-1366x768.jpg" alt="First Slide">
                <div class="carousel-caption">
                <h3></h3><br>
                    <br>
                    
                </div>
            </div>
            <div class="carousel-item ">
            <img class="d-block w-100" src="need.jpg" alt="Second Slide">
                <div class="carousel-caption">
                <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="mercedes_benz_vision_avtr_2020_electric_car-wallpaper-1366x768(1).jpg" alt="Third Slide">
                <div class="carousel-caption">
                <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="underwater_movie_2020-wallpaper-1366x768.jpg" alt="Fourtht Slide">
                <div class="carousel-caption">
                <h3></h3>
                    <p></p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#MagicCarousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
              <a class="carousel-control-next" href="#MagicCarousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        
        </div>  <div id="head">
		<div>  <h6>Hi, <b id="test"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to AIRRR Universe.</h6></div>
    </div>
     
 <br>
    <div class="container">
<h5 class="section-title"><strong>Our Mission</strong></h5>
<div class="row">
<div class="col-md-4">
<div class="service">
<span  class="next.png"  aria-hidden="true">
  
    </span>
    <img src="407885d1261684528-slider-carrier-icon-requests-post-them-here-batman1.png" height="120" width="110" />
<h4><strong>Aspire for Greater Heights</strong></h4>
<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<i class="fa fa-user fa-lg"></i> sed do eiusmod tempor  -
    incididunt ut labore et dolore magna aliqua</h6>
</div >
</div >
<div class="col-md-4">
<div class="service">
       <img src="BROFORCE.png" height="120" width="110" />
<h4><strong>Becoming an Acheiver</strong></h4>
<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor  -
    incididunt ut labore et dolore magna aliqua</h6>
</div >
</div >
<div class="col-md-4">
<div class="service">
<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
       <img src="1368721558.png" height="120" width="110" />
<h4><strong>Web Services</strong></h4>
<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor  -
    incididunt ut labore et dolore magna aliqua</h6>
</div >
</div >
        </div ></div>
    
    <div class="container">
<h4 class="section-title"><strong>Our Team</strong></h4>
<div class="row">
<div class="col-md-3" style="text-align:center;">
    <div class="circular">
<img src="IMG_1340.jpg" alt="Team" class="img-circle"></div>
<h6><strong>Chukwuma Anita</strong></h6>
<em>Digital Enthiusast</em>
</div >
<div class="col-md-3" style="text-align:center;">
    <div class="circular">
<img src="SAM.jpg" alt="Team" class="img-circle"></div>
<h6><strong>Chukwuma Samuel</strong></h6>
<em>Web Developer</em>
    </div >
<div class="col-md-3" style="text-align:center;">
    <div class="circular">
<img src="IMG_20191222_170852_5.jpg" alt="Team" class="img-circle"></div>
<h6><strong>Chukwuma Daniel</strong></h6>
<em>Media Specalist</em>
</div >
<div class="col-md-3" style="text-align:center;">
    <div class="circular">
         <img src="IMG.jpg" alt="Team" class="img-circle"></div>
<h6><strong>Sah Meey</strong></h6>
<em>Ethical Hacker</em>
</div >
</div >
</div>
  
  
         <footer class="fixed-footer ">Copyright©AirrrUniverse.com.
            <br>Developed by Chukwuma Samuel
        <div class="footer-img">
        <a href="https://www.twitter.com/AirrrUniverse">&nbsp;<img src="twitter_25.png"></a>
        <a href="https://www.Skype.com/AirrUniverse">&nbsp;<img src="Skype.png" height="25" width="25"></a>&nbsp;
        <a href="https://www.instagram.com/AirrUniverse">&nbsp;<img src="instagram.webp"></a>&nbsp;
        <a href="https://www.WhatsApp.com/AirrrUniverse"><img src="whatsapp-6in3.png" height="25" width="25"></a>&nbsp;
        <a href="https://www.youtube.com"><img src="Youtube.webp"></a>
            
        </div>
        </footer>     
      <style>  
       .fixed-footer{
         width:100%;
        
         background: black;
         padding: 10px 0;
         color: dimgrey;
        text-align: center;
     } 
		</style>
        
-->

    
    
    
    
    
    
    
    
 
<!-- Js Plugins -->
<script src="js2/jquery-3.3.1.min.js"></script>
<script src="js2/bootstrap.min.js"></script>
<script src="js2/jquery.magnific-popup.min.js"></script>
<script src="js2/mixitup.min.js"></script>
<script src="js2/jquery.nice-select.min.js"></script>
<script src="js2/isotope.pkgd.min.js"></script>
<script src="js2/masonry.pkgd.min.js"></script>
<script src="js2/jquery.slicknav.js"></script>
<script src="js2/owl.carousel.min.js"></script>
<script src="js2/main.js"></script>
 
  
</body>
</html>