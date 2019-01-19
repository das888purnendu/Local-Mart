<?php include('conn.php');
session_start();


$name=$_SESSION["name"];
$name=mysqli_real_escape_string($conn,$name);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>localmart</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="about-us.php" style="font-weight:normal;color:#000000;">About Us</a></li>
                </ul><a class="btn btn-primary" role="button" href="login.php" style="font-weight:bold;">LogOut</a></div>
        </div>
    </nav>
    <div class="card" style="padding-top:84px;">
        <div class="card-header">
            <h5 class="mb-0" style="font-weight:bold;">Admin Dashboard</h5>
        </div>
    </div><br/ clear='all'><br/ clear='all'>
    <h1 style="padding-left:14px;font-family:Bitter, serif;">Active Shops</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Shop Name</th>
                    <th>Star</th>
                    <th>Avg Visits</th>
                </tr>
            </thead>
            <tbody>
                
                   
                   
                   
                   
                    <?php

								$data=mysqli_query($conn,"SELECT * FROM `all_shop`  WHERE `all_shop`.`status` = 'verified'");

							

								while ($row = mysqli_fetch_assoc($data)) 
								{
									$sl=$row['sl'];
									$shop_name=$row['shop_name'];
									$rating=$row['rating'];
									$l1='shop-view-admin.php?sl='.$sl;
									
							echo '<tr><td><a href='.$l1.'>'.$shop_name.'</a></td><td>';
									
									if($rating==5)
									{
										echo '<div class="rating" style="height:29px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;"></div>';
									}
								
									
									elseif($rating==4)
									{
								
								echo '<div class="rating" style="height:29px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;"></div>';
									}
									
									elseif($rating==3)
									{
								echo '<div class="rating" style="height:29px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;"></div>';
									}
									
									elseif($rating==2)
									{
								echo '<div class="rating" style="height:29px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;"></div>';
									}
									
									elseif($rating==1)
									{
								echo '<div class="rating" style="height:29px;">
								<img src="assets/img/star.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;"></div>';
									}
									
									
									
									else{
								echo '<div class="rating" style="height:29px;">
								<img src="assets/img/star-empty.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;">
								<img src="assets/img/star-empty.svg" style="width:14px;"></div>';
									}
									echo '</td><td>218</td>';
								}
					
								
								
							
						?>
                </tr>
            </tbody>
        </table>
    </div><br/ clear='all'>
    <h1 style="padding-left:14px;font-family:Bitter, serif;">Pending For Review</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Owner Name</th>
                    <th>Shop Name</th>
                </tr>
            </thead>
            <tbody>
               
                
                    <?php

								$data=mysqli_query($conn,"SELECT * FROM `all_shop`  WHERE `all_shop`.`status` = 'pending'");

							

								while ($row = mysqli_fetch_assoc($data)) 
								{
									$sl=$row['sl'];
									$shop_name=$row['shop_name'];
									$owner=$row['owner'];
									$l2='shop-view-admin.php?sl='.$sl;
              

									echo'<tr><td><a href ='.$l2.'>'.$owner.'</a></td>';
									echo'<td>'.$shop_name.'</td></tr>';
								}
                ?>
                
                
            </tbody>
        </table>
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
</body>

</html>