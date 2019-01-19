<?php

include("conn.php");
session_start();


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalMart</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navbar-Fixed-Side.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
</head>

<body>
  
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand text-primary logo" href="index.php" style="font-size:30px;font-family:Montserrat, sans-serif;height:40px;padding:0px;font-weight:bold;font-style:italic;">Local Mart</a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php" style="font-weight:bold;color:#020625;">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="shop-list.php" style="font-style:normal;font-weight:normal;color:#000000;">Shops</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php" style="font-weight:normal;color:#000000;">Register</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="font-weight:normal;color:#000000;">About Us</a></li>
                </ul><a class="btn btn-primary" role="button" href="login.php" style="font-weight:bold;">LogIn</a></div>
        </div>
    </nav><br clear='all'/><br clear='all'><br clear='all'> 
    <div class="highlight-phone" style="background-color:rgba(80,149,252,0.46);background-image:url(&quot;assets/img/banner.jpg&quot;);background-size:cover;background-repeat:no-repeat;background-position:top;color:rgb(72,74,77);">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="background-color:rgba(255,255,255,0);">
                    <div class="intro">
                        <h2>Welcome To Local Market</h2>
                        <p style="background-color:rgba(255,255,255,0);color:#100b18;font-weight:normal;font-style:oblique;">Here we offered you to chose product Smartly &amp; wisely, with maximum profits and nearest of your location. Lets do it</p><a class="btn btn-primary" role="button" href="item-view.php">View items</a></div>
                </div>
                <div class="col-sm-4">
                    <div class="d-none d-md-block iphone-mockup"><img src="assets/img/iphone.svg" class="device">
                        <div class="screen" style="background-image:url(&quot;assets/img/Ecommerce-1030x7302.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 
    <main class="page landing-page">
        <section class="clean-block features" style="padding:0px;">
            <div class="container">
                <div class="block-heading" style="background-position:center;background-size:cover;">
                    <h2 class="text-monospace text-capitalize text-center text-info bg-light" style="font-family:'Source Sans Pro', sans-serif;font-weight:bold;">Our site provides</h2><img class="img-thumbnail img-fluid" src="assets/img/2017_07_10_29623_1499659396._large.jpg" style="height:231px;width:376px;max-height:231px;">
                    <p>Our site has many features, which helps the common peoples to find there useful things on their local place using internet and it is also helpfull for shopkeeper also.<a class="btn btn-primary active btn-lg" role="button" href="shop-list.php">View Nearest Best Shops</a></p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-basket icon"></i>
                        <h4>Smartly Buy Items</h4>
                        <p>Our site provides you a smart buy featers. You can search your items, Our site provides you a lot of items with different shops, you can chose any products.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-bag icon"></i>
                        <h4>All Items In One Place</h4>
                        <p>Our site has 100+ shops details which provides more than 1000+ products. We are surving the all products in our site.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-note icon"></i>
                        <h4>Quick Memo Support</h4>
                        <p>Our sites provides a amazing features, which is Quick Memo, you can chose your products, and you can create a memo and send Item Request to the seller shop.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-user-following icon"></i>
                        <h4>All Verified Shops</h4>
                        <p>Our site has 100+ shops. Which is verified by our team and with licenced shop. Any Fake Shop details are not available in our site.<br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-call-out icon"></i>
                        <h4>24 hr Support</h4>
                        <p>Our site provides you 24hr Support. For any helps please mail us at : localmart.home@gmail.com &nbsp; or Call us on +91 7000000001, We are always ready to helps you<br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-map icon"></i>
                        <h4>Google Map Support</h4>
                        <p>Our site provides you a smart way to &nbsp;find the shortest path of the shop via google maps. We are strongly suggest you to use the google maps for finding particular shop.<br></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <hr>
    <div class="projects-horizontal">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Top Rated Verified Shops </h2>
                <p class="text-center">This is our Top rated shops, Which is now ranked in our sites for providing best quality products in the locality. This ranking Considered based on Users Shoping, Feedbacks and Rating.<br></p>
            </div>
            <div class="row projects">
               
               
               
                <?php

				$data=mysqli_query($conn,"SELECT * FROM `all_shop` ORDER BY `all_shop`.`rating` DESC LIMIT 4");

             
                
				while ($row = mysqli_fetch_assoc($data)) 
				{
					
					$sl	=$row['sl'];
					$shop_name =$row['shop_name'];
					$owner =$row['owner'];
					$email=$row['email'];
					$mobile=$row['mobile'];
					$address=$row['address'];
					$rating=$row['rating'];
					$photo=$row['photo'];
					$l1='shop-view.php?sl='.$sl;
									
                echo '<div class="col-sm-6 item">
                    <div class="row">';
                        echo '<div class="col-md-12 col-lg-5"><a href="'.$l1.'"><img class="img-fluid" src="'.$photo.'"></a></div>';
                        echo '<div class="col">';
                            echo '<h3 class="name"><a href="'.$l1.'">'.$shop_name.'</a></h3>';
					
					
                            if($rating==5)
									{
										echo '<div class="rating" style="height:29px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;"></div>';
									}
								
									
									else
									{
								
								echo '<div class="rating" style="height:29px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;"></div>';
									}
								
								
								
                            echo '<p class="description">'.$owner.', '.$email.', '.$mobile.', '.$address.'</p>
                        </div>
                    </div>
               </div>';
					
					
				}
                ?>
                
               
                
            </div>
        </div>
    </div>
    <hr>
    <div class="map-clean" style="height:676px;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Office</h2>
                <p class="text-center">Near GCETTB, Berhampore, Murshidabad, Westbengal, India</p>
            </div><iframe allowfullscreen="" frameborder="0" width="100%" height="450" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDwDYm7_fnAEBuOjEKfi-a9fX9XA4V8yMM&amp;q=gcettb%2Cberhampore%2Cwestbengal&amp;zoom=15"></iframe></div>
    </div>
    <footer class="page-footer dark" style="padding:0px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="registration.php">Registration</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="contact-us.php">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Localmart</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/Basic-fancyBox-Gallery.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    
    
    
    
    
    
    
      <script>
var lat;
var lon;
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
	lat = position.coords.latitude;
	lon = position.coords.longitude;
    

}
getLocation();






</script> 
    
    
    
</body>

</html>