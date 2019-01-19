<?php
include("conn.php");


if(isset($_POST['sub']))
{
	$email=htmlspecialchars($_POST['email']);
    $email=mysqli_real_escape_string($conn,$email);
	
	
	$name=htmlspecialchars($_POST['name']);
	$name=mysqli_real_escape_string($conn,$name);
	$name= ucwords(strtoupper($name));
	
	$pass=htmlspecialchars($_POST['pass']);
	$pass=mysqli_real_escape_string($conn,$pass);
	
	$query="INSERT INTO `user` (`email`,`name`, `password`) VALUES ('".$email."','".$name."','".$pass."')";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		
		$query2="INSERT INTO `all_shop` (`owner`, `email`) VALUES ('".$name."','".$email."')";
	    $data2=mysqli_query($conn,$query2);
		
		
		mysqli_close($conn);
		header("Location:success.php");
	}
	else
	{
		echo '<script type="text/javascript">';
		echo 'alert("Something Wrong !");';
		echo '</script>';
	}
		
		
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-LocalMart</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    
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

<body style="background-color:rgb(255,255,255);">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand text-primary logo" href="index.php" style="font-size:30px;font-family:Montserrat, sans-serif;height:40px;padding:0px;font-weight:bold;font-style:italic;">Local Mart</a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php" style="font-weight:bold;color:#020625;">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="shop-list.php" style="font-style:normal;font-weight:normal;color:#000000;">Shops</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="registration.php" style="font-weight:normal;color:#000000;">Register</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="about-us.php" style="font-weight:normal;color:#000000;">About Us</a></li>
                </ul><a class="btn btn-primary" role="button" href="login.php" style="font-weight:bold;">LogIn</a></div>
        </div>
    </nav>
    <section style="height:55px;"></section>
    <div class="register-photo" style="background-color:rgba(195,195,204,0.21);background-image:url(&quot;assets/img/scenery/image1.jpg&quot;);background-position:center;background-repeat:no-repeat;">
        <div class="form-container" style="background-color:#f4ebeb;">
            <div class="image-holder" style="background-image:url(&quot;assets/img/2017_07_10_29623_1499659396._large.jpg&quot;);"></div>
            
            
            
            <form method="post">
                <h2 class="text-center"><strong>Create</strong>&nbsp;Account.</h2>
                
                <div class="form-group"><input class="form-control" type="text" name="name" required placeholder="Name" maxlength="100" minlength="1"  autofocus ></div>
                
                <div class="form-group"><input id="email" class="form-control" type="email" name="email" required placeholder="Email ID" maxlength="100" minlength="1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  inputmode="email"></div>
                
                <div class="form-group"><input id="pass-1" class="form-control" type="password" name="pass" placeholder="Password" maxlength="100" minlength="1"></div>
                
                <div class="form-group"><input id="pass-2" class="form-control" type="password" name="password-repeat" placeholder="Confrim Password" maxlength="100" minlength="1"></div>
                
                <div class="form-group">
                         <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" name="check" value="yes" required="">I agree to the license terms.</label></div>
                </div>
                
                <div class="form-group"><button class="btn btn-primary btn-block" name="sub" value="sub" type="submit">Sign Up</button></div>
                
                <a href="login.php" class="already">You already have an account? Login here.</a>
                
                </form>
                
                
                
                
        </div>
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
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <script>
	
	$('#pass-2').bind('change',function() {
	
var pass1 = document.getElementById("pass-1").value;
var pass2 = document.getElementById("pass-2").value;



if(pass1 != pass2)
{
	alert("Password Not Same !")
	
  $("#pass-1").val("");
  $("#pass-2").val("");
}
	});
		
		
		
		
		
		
	</script>
	
<script type="text/javascript">		
		
$('#email').on('blur', function(){
	
 	var email = $('#email').val();
 	if (email != '') {
	
 	$.ajax({
	  type: 'POST',
      url: 'checkmail.php',
      data: {
      	'email' : email},
		
      success: function(response)
		{
      	if (response == '1' ) 
		{
			alert("This Email Id Already Exists!");
			 $('#email').val('');
				
			  }
			}
	    });
	}
		else{
			return;
		}
 });
	
	
	</script>
</body>

</html>