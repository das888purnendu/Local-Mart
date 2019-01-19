<?php
include("conn.php");

if(isset($_POST['sub']))
{
	$search= $_POST['search'];
	$search= mysqli_real_escape_string($conn,$search);
	
	if($search)
	{
		$link="item-search.php?search=$search";
		header("Location:".$link);
	}
}



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
    <style>
	
		#loading{
			text-align: center;
			background:url(assets/img/loading.gif) no-repeat center;
			height: 200px;
			
		}
	
	</style>
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
                </ul><a class="btn btn-primary" role="button" href="login.php" style="font-weight:bold;">LogIn</a></div>
        </div>
    </nav>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">All Items</h2>
                    <p>Here is the all items</p>
                </div>
                <div>
                    <div class="float-right">
                    
                  <form method="post">
                  	<form method="post">
                        <div class="float-right"><input name="search" type="search" placeholder="Type item Name" style="height:32px;">
                        
                        <button class="btn btn-primary" type="submit" name='sub' value="sub" style="width:auto;max-width:380px;min-width:50px;height:30px;padding:0;padding-left:23px;padding-right:18px;">Search</button></form>
                  </form>
                    </div>
                </div><br/ clear='all'><br/ clear='all'>
                <div class="content">
                    <div class="center-block">
                       
                        
                        
                        
                        <div class="col-md-12 center-block">
                            <div class="products">
                                <div class="row no-gutters">
                                   
                                   
                                    <?php

								$data1=mysqli_query($conn,"SELECT  DISTINCT `item` FROM `all_item`");
									
									while ($row1 = mysqli_fetch_assoc($data1)) 
								{
									$item1=$row1['item'];
									
									$query2="SELECT  *  FROM `all_item` where `all_item`.`item`='".$item1."'  ORDER BY `all_item`.`price` ASC";
									$data=mysqli_query($conn,$query2);

							

								while ($row = mysqli_fetch_assoc($data)) 
								{
									
									$sl=$row['shop_code'];
									$data2=mysqli_query($conn,"SELECT * FROM `all_shop` where `all_shop`.`sl`='".$sl."' ");
									$row2 = mysqli_fetch_assoc($data2);
									$shop_name=$row2['shop_name'];
									
									$item=$row['item'];
									$brand=$row['brand'];
									$qty=$row['qty'];
									$price=$row['price'];
									$photo=$row['photo']; 
									$l="'shop-view.php?sl=$sl'";
                                   
                                    echo '<div class="col-12 col-md-6 col-lg-4" style="margin:10px;max-width:300px;">
                                        <div class="clean-product-item">';
                                            echo '<div class="image"><img class="img-fluid d-block mx-auto" src="'.$photo.'" data-bs-hover-animate="pulse" style="width:auto;height:120px;"></div>';
                                           
                                            echo '<p style="font-weight:bold;">'.$item.'</p>';
                                            echo '<p>'.$brand.'</p><p><a href='.$l.'>'.$shop_name.' </a></p>';
                                            
										echo '<div class="about"><div class="price"><h3>₹'.$price.' /'.$qty.'</h3></div> </div></div></div>';
                                    
								
								}
								}
								
									?>
                                    
                                    
                                 
                                    
                                </div>
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link">1</a></li>
                                        
                                        <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
    <script>
		
				
			
		
		
		</script>
</body>

</html>