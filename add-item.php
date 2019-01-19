<?php
include('conn.php');

session_start();
$shop_code=mysqli_real_escape_string($conn,$_SESSION["shop_code"]);


if(isset($_POST['sub']))
{
	
$item_name=mysqli_real_escape_string($conn,$_POST['item_name']);
$item_price=mysqli_real_escape_string($conn,$_POST['item_price']);
$type=mysqli_real_escape_string($conn,$_POST['type']);
$qty=mysqli_real_escape_string($conn,$_POST['qty']);
$item_brand=mysqli_real_escape_string($conn,$_POST['item_brand']);
	
	
	
		 if(isset($_FILES['fileToUpload'])) //Photo Upload
		{
			
			$dir="uploads/item_images/";
			 if (!file_exists($dir)) 
			 {
			   mkdir($dir, 0777, true);
			 }
			
			$target_dir = $dir;
			$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
			$filetype =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $file_t='img_';
			$time=round(microtime(true));
	        $time='_'.$time.'_';
			$new_name=$target_dir.$file_t.$time.$item_name.".".$filetype;
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$new_name))
	       {
				$new_name=$new_name;
			}
	  else{
		  $new_name=NULL;
	     }
		}
	
	else{
		  $new_name=$photo;
	     }
	
	
	$photo=$new_name;




	
	
	
    $query="INSERT INTO `all_item` (`shop_code`, `item`, `brand`, `type`, `price`, `qty`, `photo`) VALUES ('".$shop_code."','".$item_name."','".$item_brand."','".$type."','".$item_price."','".$qty."','".$photo."')";
	
	$data=mysqli_query($conn,$query);
	
	if($data)
	{
		header("Location:seller-dashboard.php");
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
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Add Item To Your Shop</h2>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="block-content">
                        <h1 style="margin-bottom:32px;">Item Details</h1>
                        <div class="clean-blog-post">
                            <div class="form-row">
                                <div class="col-lg-5"><label style="font-weight:bold;">Itme Name</label>
                                   <input class="form-control" type="text" name='item_name' placeholder="Item Name" required ><br/ clear='all'>
                                   
                                    <label style="font-weight:bold;">Item category</label>
                                   
                                   <div class="form-check"><input class="form-check-input" type="radio" name="type" value="grocery" id="formCheck-1" checked><label class="form-check-label" for="formCheck-1">Grocery</label></div>
                                   
                                   <div class="form-check"><input class="form-check-input" type="radio" name="type" value="stationary" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Stationary</label></div>
                                   <br/ clear='all'>
                                   
                                   <label style="font-weight:bold;">Item Price&nbsp;₹</label>
                                    <input
                                        class="form-control" type="number"  name='item_price' placeholder="₹ Item Price" min="1" max="100000" step="0" required>
                                        
                                        
                                        <div class="form-check"><input class="form-check-input" type="radio" name="qty" value='100 gm' id="formCheck-1"><label class="form-check-label" for="formCheck-1">Price /100 Gm</label></div>
                                        
                                        <div class="form-check"><input class="form-check-input" type="radio" name="qty" checked value='kg'  id="formCheck-1"><label class="form-check-label" for="formCheck-1">Price / KG</label></div>
                                        
                                        <div class="form-check"><input class="form-check-input" type="radio" name="qty" value='liter' id="formCheck-1"><label class="form-check-label" for="formCheck-1">Price / Liter</label></div>
                                        
                                        <div class="form-check"><input class="form-check-input" type="radio" name="qty" value='pics' id="formCheck-1"><label class="form-check-label" for="formCheck-1">Price / pics</label></div>
                                        
                                        <div class="form-check"><input class="form-check-input" type="radio" name="qty" value='pack' id="formCheck-1"><label class="form-check-label" for="formCheck-1">Price / pack</label></div>
                                </div>
                                
                                
                                
                                <div class="col"><label style="font-weight:bold;">Itme Brand Name</label><input class="form-control" type="text" name="item_brand" placeholder="Local / Brand" style="width:auto;"><br/ clear='all'>
                                  
                                  
                                  
                                  <label style="font-weight:bold;">Itme Photo</label><br/ clear='all'>
                                      
                                      
                                      
                                      <div class="row">
			   
									   <p><i>File must be in JPEG/JPG/PNG format</i></p>
									   <p><i>File size must be less than 3MB (3072 kb)</i></p>
										<input type="file" id="imgInp" name="fileToUpload" required /> <!-- Photo upload-->
										<br>
										<div  class="container" id="img_prv" style="max-height: 350px;max-width: 350px">
										<br>
										<img class="responsive-img" id="imgprv" src=# height="250px" weidth="250px" alt="please select image" style="border: 5px solid black;border-radius:10px;box-shadow: 0px 0px 10px gray"  />
										<div class="center-align">
									   <a id="delphoto" class="btn btn-danger active"><b>Remove Photo</b></a>
									   </div>
										</div>
								   </div>
                                        
                                        
                                        
                                        
                                        </div>
                                        
                                        
                                        
                                        
                            </div><button class="btn btn-primary" type="submit" name='sub' value="sub" style="margin-left:0;margin-right:0;margin-top:51px;">Submit</button></div>
                    </div>
                </form>
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
    
    
    
    
    
    
    
    
    
     <script  type="text/javascript" >
		 
		 
		 $(document).on("wheel", "input[type=number]", function (e) {
    $(this).blur();
     });
		
	$("#imgInp").change(function() {	
    var imgPath = $(this)[0].value;
    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	var size=Math.round((this.files[0].size)/1024);
	if(extn == "jpg" || extn == "jpeg")
		{
			if(size<3072)
				{
					readURL(this);
				}
			else
				
				{
					swal("File Must be lessthan 3 MB ( 3072 kb ) !", "Please Try Again !", "warning");
					
					
					

					$("#imgInp").val('');
					$("#img_prv").fadeOut("slow");
		        }
		  }
		
	else
		{
			swal("File Must be in JPG or JPEG Image format !", "Please Try Again !", "warning");
			
				
			$("#imgInp").val('');
			$("#img_prv").fadeOut("slow");
		}
});
		
function readURL(input) {
	$("#img_prv").fadeIn("slow");
  if (input.files && input.files[0]) 
  {
    var reader = new FileReader();
    reader.onload = function(e){
      $('#imgprv').attr('src', e.target.result);
	  
    }
    reader.readAsDataURL(input.files[0]);
  }
}
			
			
$('#delphoto').click(function(){
	 $('#img_prv').fadeOut("slow");
	 $('#imgInp').val('');
     } );

		
		
	
	</script>
        
    
    
    
</body>

</html>