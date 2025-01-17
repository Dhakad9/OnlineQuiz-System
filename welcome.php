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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>

<html>
<head>
    <title> PV Tec. Company </title>
    <link rel="stylesheet" href="Bstyle.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                                                                                                                                       
                                                                                                                                       </head>
<body>
    
   <!-----NavigationBar---->
    <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="https://www.larutadelsorigens.cat/wallpic/full/49-496057_vijay-name-wallpaper-hd-vijay-name-image-3d.png"  width="150px" height="240"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#team">OUR TEAM</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#price">PRICE PLANS</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#testimonial">TESTIMONIALS</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
    
    
    </section>
    <!------Slider------>
    <div id="Slider"> 
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
<img class="d-block img-fluid" src="imag/samson.jpg">
     <div class="carousel-caption">
         <h5>How To Make A website</h5>
</div>
      </div>
    <div class="carousel-item">
<img class="d-block img-fluid" src="imag/carl.jpg">
       <div class="carousel-caption">
         <h5 class="rd">Create A Beautiful Website</h5>    
        </div>
    </div>
    <div class="carousel-item">
<img class="d-block img-fluid" src="imag/nasa.jpg">
       <div class="carousel-caption">
           <h5>Business Website Design</h5>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
</div>
<!------About------->
<section id="about">
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>About Us</h2>
<div class="about-content">
  Prince Vijay is available for free for as long as you want, but if you require professional features like your own domain name or priority support, you must choose from one of their 6 premium plans ranging from “Combo” to “Business VIP”. The cheapest ad-free plan with a custom domain name costs $11 per month.
  
</div>
    <button type="botton" class="btn btn-primary"> Read More>></button>
    
</div>        
<div class="col-md-6" skills-bar>
  <p> Adobe Photoshop </p>
    <div class="progress">
    <div class="progress-bar" style="width: 80%;">80%</div>
    </div>
     <p> Ui Desig</p>
    <div class="progress">
    <div class="progress-bar" style="width: 85%;">85%</div>
    </div>
         <p>WordPress</p>
    <div class="progress">
    <div class="progress-bar" style="width: 75%;">75%</div>
    </div>
         <p> Graphical Designing</p>
    <div class="progress">
    <div class="progress-bar" style="width: 50%;">50%</div>
        
</div>         
</div>
</div>    
</div>
    
    
    </section>
<!------Services------->
<section id="services">
<div class="container">
    <h1>Our Services</h1>
    <div class="row">
<div class="col-md-3  text-center">
        <div class="icon">
            <i class="fa fa-desktop"></i>
        </div>
        <h3>Web Development</h3>
    <style>body{color: red;}</style>
        <p>Front-end web developers are responsible for how a website looks. They create the site's layout and integrate graphics, applications (such as a retail checkout tool), and other content. They also write webdesign programs in a variety of computer languages, such as HTML or JavaScript.</p>

        </div>
<div class="col-md-3  text-center">
        <div class="icon">
            <i class="fa fa-tablet"></i>
        </div>
        <h3>App Development</h3>
        <p>Application development is the process of creating a computer program or a set of programs to perform the different tasks that a business requires. From calculating monthly expenses to scheduling sales reports, applications help businesses automate processes and increase efficiency.</p>
        </div>
 <div class="col-md-3  text-center">
        <div class="icon">
            <i class="fa fa-line-chart"></i>
        </div>
        <h3>Digital Marketing</h3>
        <p>Digital marketing is the marketing of products or services using digital technologies, mainly on the Internet, but also including mobile phones, display advertising, and any other digital medium.</p>
        </div>
 <div class="col-md-3  text-center">
        <div class="icon">
            <i class="fa fa-paint-brush"></i>
        </div>
        <h3>Graphic Designing</h3>
        <p>Graphic design ``is the process of visual communication and problem-solving through the use of typography, photography, and illustration. ... Graphic designers create and combine symbols, images and text to form visual representations of ideas and messages.</p>
        </div>
    </div>
    </div>
    </section>
    <!------Team Mambers------->
<section id="team">
<div class="container">
    <h1>Our Team</h1>
    <div class="row">
    <div class="col-md-3 profile-pic text-center">
        <div class="img-box">
        <img src="imag/IMG_20181116_122106_63111.jpg" class="img-responsive">
<ul>
    <a href="#"><li><i class="fa fa-facebook"></i></li></a>
    <a href="#"><li><i class="fa fa-instagram"></i></li></a>
    <a href="#"><li><i class="fa fa-twitter"></i></li></a>
</ul>
        </div>
        <h2>Vijay Dhakad</h2>
        <h3>Founder / CEO</h3>
        <p>This Is the vijay dhakad,i'm the founder of this business website,which help you to create a website in new and modern way with the help of advance AI and ML. </p>
        </div>
        </div>
    </div>
    </section>
    <!------promo------->
<section id="promo">
<div class="container">
    <p>Get Free Domain Name and Web Hosting</p> 
<a href="#contact" class="btn btn-primary">Contact Us</a>
    </div>
    </section>
<!------Price Plan------->
    <section id="price">
<div class="container">
    <h1>Price Plan</h1>
    <div class="row">
    <div class="col-md-3">
        <div class="single-price">
        <div class="price-head">
          <h2>Free</h2> 
            <p>Rs.0/<span> month</span></p>
            
            </div>
        <div class="price-content">
            <ul>
            <li><i class="fa fa-check-circle"></i>5GB Space</li>
            <li><i class="fa fa-check-circle"></i>10GB Bandwith</li>
            <li><i class="fa fa-times-circle"></i>15 Email Account</li>
            <li><i class="fa fa-times-circle"></i>Unlimited Domain</li>
            <li><i class="fa fa-times-circle"></i>Unlimite Support</li>
            </ul>
            </div>
            <div class="price-button">
            <a class="buy-btn" href="#">Join Free</a>
            </div>
        </div>
        </div>
    <div class="col-md-3">
        <div class="single-price">
        <div class="price-head">
          <h2>Start Up</h2> 
            <p>Rs.749/<span>month</span></p> 
            </div>
        <div class="price-content">
            <ul>
            <li><i class="fa fa-check-circle"></i>10GB Space</li>
            <li><i class="fa fa-check-circle"></i>100GB Bandwith</li>
            <li><i class="fa fa-check-circle"></i>15 Email Account</li>
            <li><i class="fa fa-times-circle"></i>Unlimited Domain</li>
            <li><i class="fa fa-times-circle"></i>Unlimite Support</li>
            </ul>
            </div>
            <div class="price-button">
            <a class="buy-btn" href="#">Buy Now</a>
            </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="single-price">
        <div class="price-head">
          <h2>Business</h2> 
            <p>Rs.2999/<span> month</span></p>
            
            </div>
        <div class="price-content">
            <ul>
            <li><i class="fa fa-check-circle"></i>50GB Space</li>
            <li><i class="fa fa-check-circle"></i>200GB Bandwith</li>
            <li><i class="fa fa-check-circle"></i>50 Email Account</li>
            <li><i class="fa fa-check-circle"></i>Unlimited Domain</li>
            <li><i class="fa fa-times-circle"></i>Unlimite Support</li>
            </ul>
            </div>
            <div class="price-button">
            <a class="buy-btn" href="#">Buy Now</a>
            </div>
        </div>
        </div>
                   
    <div class="col-md-3">
        <div class="single-price">
        <div class="price-head">
          <h2>Advanced</h2> 
            <p>Rs.7999/<span> month</span></p>
            
            </div>
        <div class="price-content">
            <ul>
            <li><i class="fa fa-check-circle"></i>100GB Space</li>
            <li><i class="fa fa-check-circle"></i>350GB Bandwith</li>
            <li><i class="fa fa-check-circle"></i>100 Email Account</li>
            <li><i class="fa fa-check-circle"></i>Unlimited Domain</li>
            <li><i class="fa fa-check-circle"></i>Unlimite Support</li>
            </ul>
            </div>
            <div class="price-button">
            <a class="buy-btn" href="#">Buy Now</a>
            </div>
        </div>
             </div>
             
        </div>
    </div>
        </div>
    </section>
<!-----------Testimonials----------->
<section id="testimonial">
<div class="container">
    <h1>Testimonials</h1>
    <p class="text-center">Buy or join the various plan of busines website for various services </p>
    <div class="row">
    <div class="col-md-4 text-center">
        <div class="profile">
        <img src="imag/IMG_20181116_122106_63111.jpg" class="user">
            <blockquote> Prince Vijay is available for free for as long as you want, but if you require professional features like your own domain name or priority support, you must choose from one of their 6 premium plans ranging from “Combo” to “Business VIP”. The cheapest ad-free plan with a custom domain name costs $11 per month.</blockquote>
        <h3>Sarkar</h3><span> Co-Founder at business website</span>
        </div>
        </div>
    </div>
    </div>
    </section>
    <!-------------Get in Touch------------->
    <section id="contact">
    <div class="container">
        <h1>Get in Touch</h1>
        <div class="row">
        <div class="col-md-6">
           <form class= "contact-form"
           <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
            <br>
               <div class="form-group">
            <input type="Number" class="form-control" placeholder="Phone No.">
            </div>
               <div class="form-group">
            <input type=" Email" class="form-control" placeholder="Email id.">
            </div>
               <div class="form-group">
                   <textarea class="form-control" rows="4" placeholder="Message"></textarea>
            
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
            </form>  
            </div>
       
    </div>
        </div>


    </section>
<!--------Fotter--------->
<section id="footer">
<div class="container text-center">
    <p>" Made With <i class="fa fa-heart-o"></i> By Prince Vijay "</p>
    </div>
</section>
<!-------footer close------>
<script src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
    </body> 

</html>