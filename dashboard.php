<?php

// Start the session
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smile Foundation</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Hello <?php echo $_SESSION['name']; ?></h3>
    <a  href="about_us.php" class="w3-bar-item w3-button">About us</a>
    <a  href="blog.php" class="w3-bar-item w3-button">Blogs</a>
    <a  href="services.php" class="w3-bar-item w3-button">Upcoming Events</a>
    <a  href="gallery.php" class="w3-bar-item w3-button">Gallery</a>
    <a  href="contact_us.php" class="w3-bar-item w3-button">Contact us</a>
</div>
<div style="margin-left:25%;">
    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                smilefoundation@gmail.com
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                +876 987 666 5433
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 folouws">

                        <ul class="ulright">
                            <li> <small>Folow Us </small>:</li>
                            <li>
                                <i class="fab fa-facebook-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                        <a href="logout.php"><button class="btn btn-sm btn-success">Sign out</button></a>
                    </div>
                </div>
            </div>
        </div>
        
    </header>


    
    <!--  ************************* Page Title Starts Here ************************** -->

    
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Wecome to Dashboard</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Dashboard</li>
                </ul>
            </div>
        </div>
    </div>


    <!--  ************************* dashboard Starts Here ************************** -->

    <h2 style="padding:10px;">Your Details:</h2>

        <table class="table">
                            <tr>
                                <td>Name</td>
                               
                                <td><?php echo $_SESSION['name']; ?></td>
                            </tr>
                            <tr>
                                <td>Phone number</td>
                                
                                <td><?php echo $_SESSION['phone']; ?></td>
                            </tr>
                            <tr>
                                <td>Email address</td>
                                
                                <td style="text-transform: lowercase;"><?php echo $_SESSION['email']; ?></td>
                            </tr>
                        </table>


                    </a>
    

    
    <h2 style="padding:10px;">Events Volunteered:</h2>
    <table style="margin:10px;">
  <tr>
    <th>Event</th>
    <th>Location</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Italy</td>
  </tr>
</table> <br><br>

<h2 style="padding:10px;">Previous Donations:</h2>
    <table style="margin:10px;">
  <tr>
    <th>Event</th>
    <th>Amount</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Rs. 2000</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Rs. 5000</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Rs. 1000</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Rs. 5000</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Rs. 10,000</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Rs. 10,000</td>
  </tr>
</table>

    
    <!--  ************************* Footer Starts Here ************************** -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Smile Foundation, a non-profit organization in india is to empower underprivileged children, youth and women through relevant education, innovative healthcare and market-focused livelihood programmes.
                    </p>
                    <p>We aim to achieve behavioural, social and economic transformation for all girls towards an India where all children have equal opportunities to access quality education.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="about_us.php">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="blog" href="blog.php">Blogs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="events" href="services.php">Upcoming Events</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="gallery.php">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="contact_us.php">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Smile Foundation <br>
                        Mumbai <br>
                        Maharashtra, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="mailto:smilefoundation@gmail.com" class="">smilefoundation@gmail.com</a><br>
                        Web: <a href="index.php" class="">www.smilefoundation.org</a>
                    </address>

                </div>
            </div>

            <h2>Subscribe to our Newsletter</h2>
            <form action="sendemail.php" method="post">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email Address">
                </div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
            <div class="nav-box row clearfix">
                <div class="inner col-md-9 clearfix">
                    <ul class="footer-nav clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about_us.php">About US</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="services.php">Our Work</a></li>
                        <li><a href="blog.php">Blogs</a></li>
                        <li><a href="contact_us.php">Contact US</a></li>
                    </ul>


                </div>

                <div class="donate-link col-md-3"><a href="donate1.php" class="btn btn-primary "><span class="btn-title">Donate Now</span></a></div>
            </div>

        </div>


    </footer>
    <div class="copy">
        <div class="container">
            <a href="index.php">2021 &copy; All Rights Reserved </a>

            <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>

    </div>

    </div>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>