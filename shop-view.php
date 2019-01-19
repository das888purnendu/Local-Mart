<?php
include("conn.php");
$sl=mysqli_real_escape_string($conn,$_GET['sl']);

if(isset($_POST['sub']))
{
	$search= $_POST['search'];
	$search= mysqli_real_escape_string($conn,$search);
	
	if($search)
	{
		$link="shop-view-search.php?sl=$sl"."&search=$search";
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
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark" style="padding:20px;">
            <div class="container">
                <div class="block-heading" style="background-color:#ffffff;padding:0px;margin:0px;">
                   
                   
                   
                   
                                
                  <?php

	  $data=mysqli_query($conn,"SELECT * FROM `all_shop`  WHERE `all_shop`.`sl` = '".$sl."'");
      $row = mysqli_fetch_assoc($data);
				
	 	 	 	 	 	 	 	 	 	 	 	
	
	
	
			$shop_name =$row['shop_name'];
			$owner =$row['owner'];
			$email=$row['email'];
			$mobile=$row['mobile'];
			$address=$row['address'];
			$lati=$row['lati'];
			$longi=$row['longi'];
			$shop_open=$row['shop_open'];
			$shop_close=$row['shop_close'];
			$rating=$row['rating'];
			$photo=$row['photo'];
			$l1="' shop-review.php?sl=$sl'";
                  
                   
                   
                   
                    echo '<h2 class="text-info" style="margin:32px;">'.$shop_name.'</h2>';
                    echo '<span class="text-muted" style="font-size:19px;font-weight:bold;">Shop Registration Code : '.$sl.'<br></span>';
						
                    echo '<img class="img-thumbnail img-fluid" src="'.$photo.'">';
                    
                    
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
									
								
					
                    
                    echo '<p>&nbsp;<strong>Shop Owner Name :&nbsp;</strong>Mr. '.$owner.'</p>';
                    echo '<p><strong>Shop Address :&nbsp;</strong>'.$address.'</p>';
                    echo '<p><strong>Contact Number :&nbsp;</strong>'.$mobile.'</p>';
                    echo '<p><strong>Shop Open Time :&nbsp;</strong>'.$shop_open.'</p>';
                    echo '<p><strong>Shop Close Time :&nbsp;</strong>'.$shop_close.'</p><br/ clear="all">';
                    
                    echo '<div class="form-group"><a class="btn btn-success" role="button" href='.$l1.'>Give Rating</a></div>'
                    
                    
                    
                   ?> 
                    
                    
                </div>
                
                
                
                <div>
                    <div class="float-right">
                    <form method="post">
                        <div class="float-right"><input name="search" type="search" placeholder="Type item Name" style="height:32px;">
                        
                        <button class="btn btn-primary" type="submit" name='sub' value="sub" style="width:auto;max-width:380px;min-width:50px;height:30px;padding:0;padding-left:23px;padding-right:18px;">Search</button></form></div>
                </div>
                
                <br/ clear='all'>
                
                
                <div class="content">
                    <div class="items">
                      
                      
                       <?php

								$data=mysqli_query($conn,"SELECT * FROM `all_item` WHERE `all_item`.`shop_code` = '".$sl."'");

							

								while ($row = mysqli_fetch_assoc($data)) 
								{
									$sl=$row['sl'];
									$item=$row['item'];
									$brand=$row['brand'];
									$qty=$row['qty'];
									$price=$row['price'];
									$photo=$row['photo']; 
                       
                       
                        echo '<div class="product">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-3">
                                    <div class="product-image"><img class="img-fluid d-block mx-auto image" src="'.$photo.'"></div>
                                </div>';
                                echo '<div class="col-md-5 product-info">
                                    <p style="font-weight:bold;">'.$item.'</p>';
							
							
                                    echo '<div class="product-specs"><div><span>Brand :&nbsp;</span><span class="value" style="font-size:14px;">&nbsp;'.$brand.'</span></div></div> </div>';
											
                                echo '<div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantity</label>
                                <p class="lead" style="font-size:26px;font-weight:400;">Per '.$qty.'</p>';
									
                                echo '</div><div class="col-6 col-md-2 price"><span>₹'.$price.'</span></div></div></div>';
                        
                      }
                        ?>
                        
                        
                        
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item"><a class="page-link">1</a></li>
                                
                                <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
									
									    
     <?php
	if($lati !=NULL and $longi!= NULL)
	{
		echo '<iframe allowfullscreen frameborder="0" width="100%" height="450" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDwDYm7_fnAEBuOjEKfi-a9fX9XA4V8yMM&amp;q='.$lati.'+%2C'.$longi.'&amp;zoom=15"></iframe>';
		
		
		
		
	}
		else
		{
			echo '<p class="card-text" style="color:rgb(213,18,18);">This Shop is Not Verified.</p>';
		}
	
	
		?>
									
									
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
</body>

</html>