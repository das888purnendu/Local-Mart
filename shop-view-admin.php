<?php
  include("conn.php");
   $sl=$_GET['sl'];
   session_start();
   $_SESSION['shop_sl']=$sl;
   $sl=mysqli_real_escape_string($conn,$sl); 
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localmart</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Shop Details</h2>
                </div>
                <div class="block-content">
                    <div class="clean-blog-post">
                        <div class="row">
                           
                               
                               
                               
                               
                  <?php

	  $data=mysqli_query($conn,"SELECT * FROM `all_shop`  WHERE `all_shop`.`sl` = '".$sl."'");
      $row = mysqli_fetch_assoc($data);
				
	 	 	 	 	 	 	 	 	 	 	 	
	
	
			$status	=$row['status'];
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
								
								
		
		$l1="'allow-shop.php?sl=$sl'";
		$l2="'shop-reject.php?sl=$sl'";
		
		echo '<div class="col-lg-5"><img class="rounded img-fluid" src="'.$photo.'"></div><div class="col-lg-7">';		
									              
		echo '<h3>'.$shop_name.'</h3>';
								
								
		
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
									
								
					
			
				
		echo '<div class="info"><span class="text-muted" style="font-weight:bold;">Shop Owner Name :  '.$owner.'<br></span>';
								
		echo '<span class="text-muted" style="font-weight:bold;">Contact Number : '.$mobile.'<br></span></div>';
		
		echo '<div class="info"><span class="text-muted" style="font-size:19px;font-weight:bold;">Shop Registration Code : '.$sl.'<br></span>';
								
		echo '<br><span class="text-muted">Shop Open Time : '.$shop_open.'<br></span>
			<span class="text-muted">Shop Close Time : '.$shop_close.'<br></span></div>';
		
		echo '<p>Addrerss : '.$address.'<br><br></p>';
		
								if($status!='verified')
								{
										echo '<a class="btn btn-outline-primary active btn-sm" role="button" href='.$l1.'>Allow</a>';
								}
	
		
       echo '&nbsp;&nbsp; <button class="btn btn-success" type="button"  onClick="giveloc()">Givelocation</button>';
        
       echo '<a class="btn btn-outline-danger active btn-sm" role="button" href='.$l2.' style="margin-left:19px;">Reject</a>'
                                    
                              ?>      
                                    
                                  
                                    
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="container">
       
       
       
        <h3>Shop Location :</h3>
        
        
        
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
    <footer
        class="page-footer dark" style="padding:0px;">
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
var lat=24.096651;
var lon=88.252862;
/*getLocation();
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
    

}*/

	
	var x = Math.floor((Math.random() * 1000) + 1);
	var y = Math.floor((Math.random() * 1000) + 1);
	
	x=x/100000;
	y=y/100000;
	lat=lat+x;
	lon=lon+y;
	
	
		
 function giveloc(){
	 var sl= <?php echo($sl);?>
	 
	 if(lat !=null )
		 {
    
	  $.ajax({
	  type: 'POST',
      url: 'give-location.php',
      data: {
      	'l1' : lat,
	    'l2':lon,
	    'sl':sl,},
      success: function(response)
		{
      	if (response == '1' ) 
		{
			alert("Location Given !");
				
			  }
			}
	    });
		}
	 
	 
	 
	 
	 
	 else
		 {
			 alert("Please wait 5 Second and Try Again !");
		 }
	
		
 }
	
	
	</script>
</body>

</html>