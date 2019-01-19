<?php
include('conn.php');
session_start();
$email=$_SESSION["email"];
$email=mysqli_real_escape_string($conn,$email);

$name=$_SESSION["name"];
$name=mysqli_real_escape_string($conn,$name);

$query1="SELECT * FROM `all_shop` where email='".$email."'";
$res1 = mysqli_query ($conn,$query1);
$row1 = mysqli_fetch_assoc($res1);



$shop_code=$row1['sl'];
$_SESSION["shop_code"]=$shop_code;
$st=$row1['status'];
$mobie=$row1['mobile'];
$shop_name=$row1['shop_name'];
$shop_address=$row1['address'];
$photo=$row1['photo'];
$ratting=$row1['rating'];
$rate_1=$row1['one_star'];
$rate_2=$row1['two_star'];
$rate_3=$row1['three_star'];
$rate_4=$row1['four_star'];
$rate_5=$row1['five_star'];
$lati=$row1['lati'];
$longi=$row1['longi'];
$shop_open=$row1['shop_open'];
$shop_close=$row1['shop_close'];

$rate_cal= $rate_1*1 + $rate_2*2 + $rate_3*3 + $rate_4*4 + $rate_5*5;
$rate_total= $rate_1 + $rate_2+ $rate_3+ $rate_4 + $rate_5;
if($rate_total !=0)
{
	$final_rate=$rate_cal/$rate_total;
}
else
{
	$final_rate=0;
}




if(isset($_POST['sub']))
{
	if(isset($_POST['shop_name']))
	{
		$shop_name=mysqli_real_escape_string($conn,$_POST['shop_name']);
	}
	
	if(isset($_POST['mobile']))
	{
		$mobie=mysqli_real_escape_string($conn,$_POST['mobile']);
	}
	
	if(isset($_POST['address']))
	{
		$shop_address=mysqli_real_escape_string($conn,$_POST['address']);
	}
	
	if(isset($_POST['shop_open']))
	{
		$shop_open=mysqli_real_escape_string($conn,$_POST['shop_open']);
	}
	
	if(isset($_POST['shop_close']))
	{
		$shop_close=mysqli_real_escape_string($conn,$_POST['shop_close']);
	}

	
	
	
	
		 if(isset($_FILES['fileToUpload'])) //Photo Upload
		{
			
			$dir="uploads/shop_images/";
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
			$new_name=$target_dir.$file_t.$time.$shop_name.".".$filetype;
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$new_name))
	       {
				$new_name=$new_name;
			}
		else{
		    $new_name=$photo;
	        }
	 
		}
	
	else{
		  $new_name=$photo;
	     }
	
	
	$photo=$new_name;
	
	
	$query2="UPDATE `all_shop` SET `shop_name` = '".$shop_name."', `mobile` = '".$mobie."', `address` = '".$shop_address."',`shop_open` = '".$shop_open."', `shop_close` = '".$shop_close."', `photo` = '".$photo."' WHERE `all_shop`.`sl` = ".$shop_code." ";
	
	$data2=mysqli_query($conn,$query2);
	
	if($data2)
	{
		header("Location:seller-dashboard.php");
	}
	
	else
	{
		echo '<script type="text/javascript">';
		echo 'alert("Something went wrong !");';
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
    <div class="card" style="padding-top:84px;">
        <div class="card-header">
            <h5 class="mb-0" style="font-weight:bold;">Seller Account Dash Board &nbsp; || &nbsp;<strong>Shop Registration Code : <?php echo $shop_code; ?></strong><br></h5>
        </div>
        <div class="card-body" style="color:rgb(18,213,38);font-weight:bold;">
           
           <?php
			
			if ($st=='verified')
			{
              echo '<p class="card-text">Your Shop is Now Active. Fully verified shop.</p>';
			}
			
			else
			{
				echo '<p class="card-text" style="color:rgb(213,18,18);">Your Shop is Not Verified. Please verify your shop for Enlisting your shop to this site.&nbsp;</p>';
			}
            
            
		   ?>
            
        </div>
    </div>
    
    
    <br/ clear='all'>
    
    
    
    <div class="intro">
        <h2 class="text-center" style="font-weight:bold;">Welcome Mr. <?php echo $name; ?></h2>
        <p class="text-center">Here you can view and control your shop</p>
    </div><br/ clear='all'>
    <div class="contact-clean" style="padding-top:0px;padding-bottom:5px;">
       
       
        <form method="post" enctype="multipart/form-data">
            <h2 class="text-center">Set Your Shop Front</h2>
            <p>Shop Name</p>
            
            <div class="form-group">
            
            <input class="form-control" type="text" name="shop_name" value="<?php echo($shop_name) ?>" required>

            </div>
            
            
            
            
            <p>Shop Mobile Number</p>
            
            <div class="form-group">
            <input class="form-control is-invalid" type="number" name="mobile" value="<?php echo($mobie) ?>" required ></div>
            
            
            <p>Shop Open Time (please mention AM/PM)</p>
            
            <div class="form-group">
            <input class="form-control is-invalid" type="text" name="shop_open" value="<?php echo($shop_open) ?>" required  ></div>
            
            
            
            <p>Shop Close Time (please mention AM/PM)</p>
            
            <div class="form-group">
            <input class="form-control is-invalid" type="text" name="shop_close" value="<?php echo($shop_close) ?>" required  ></div>
            
            
            <p>Shop Address</p>
            
            <div class="form-group"><textarea class="form-control" rows="14" name="address" required><?php echo($shop_address) ?></textarea></div>
            
            <p>Shop Front Image</p>
                 
            
             <div class="row">
			   <?php  echo($photo); ?>
			   <p><i>File must be in JPEG/JPG/PNG format</i></p>
			   <p><i>File size must be less than 3MB (3072 kb)</i></p>
				<input type="file" id="imgInp" name="fileToUpload" /> <!-- Photo upload-->
				<br>
				<div  class="container" id="img_prv" style="max-height: 350px;max-width: 350px">
				<br>
				<img class="responsive-img" id="imgprv" src="<?php  echo($photo); ?>" height="250px" weidth="250px" alt="your shop image" style="border: 5px solid black;border-radius:10px;box-shadow: 0px 0px 10px gray"  />
				<div class="center-align">
			   <a id="delphoto" class="btn btn-danger active"><b>Remove Photo</b></a>
			   </div>
				</div>
           </div>
            
            
            
            
            
            
            
          
            
            <div class="form-group"><button class="btn btn-primary" type="submit" name="sub" value="sub">set</button></div>
            
            
        </form>
    </div>
    
    
    
    <div class="highlight-clean" style="padding-top:0;">
        <div class="container" style="margin:0px;margin-top:76px;padding-right:0px;padding-left:0px;">
           
            <div class="buttons">
            
            
            <?php 
				
				if($st=='verified')
				{
					echo ' <a class="btn btn-primary" role="button" href="add-item.php">Add a new item</a>';
					echo '<a class="btn btn-danger active" role="button" href="item-delete.php">delete item</a>';
				}
				else
				{
					echo '<p class="card-text" style="color:rgb(213,18,18);">Your Shop is Not Verified. Please verify your shop for Use Add item</p>';
					
					echo ' <a class="btn btn-primary disabled" role="button" href="add-item.php">Add a new item</a>';
					echo '<a class="btn btn-danger disabled active" role="button" href="item-delete.php">delete item</a>';
				}
           
            ?>
            
            </div>
            
        </div>
    </div>
    
    
    
    <br/ clear='all'><br/ clear='all'>
    <h1 style="padding-left:14px;font-family:Bitter, serif;">7 Days Activity</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Visits</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>17-12-2018</td>
                    <td>206</td>
                </tr>
                <tr>
                    <td>16-12-2018</td>
                    <td>181</td>
                </tr>
                <tr>
                    <td>15-12-2018</td>
                    <td>221</td>
                </tr>
                <tr>
                    <td>14-12-2018</td>
                    <td>154</td>
                </tr>
                <tr>
                    <td>13-12-2018</td>
                    <td>175</td>
                </tr>
                <tr>
                    <td>12-12-2018</td>
                    <td>203</td>
                </tr>
                <tr>
                    <td>11-12-2018</td>
                    <td>140</td>
                </tr>
            </tbody>
        </table>
    </div><br/ clear='all'><br/ clear='all'>
    <h1 style="padding-left:14px;font-family:Bitter, serif;">Rating View</h1>
    <h3 style="padding-left:14px;font-family:Bitter, serif;">Your Shop Rate : <?php echo($final_rate) ?>&nbsp;<img src="assets/img/star.svg" style="width:35px;"></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Star</th>
                    <th>Count</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="rating" style="height:29px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star.svg"
                                style="width:14px;"></div>
                    </td>
                    <td><?php echo($rate_5) ?></td>
                </tr>
                <tr>
                    <td>
                        <div class="rating" style="height:29px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star-empty.svg"
                                style="width:14px;"></div>
                    </td>
                    <td><?php echo($rate_4) ?></td>
                </tr>
                <tr>
                    <td>
                        <div class="rating" style="height:29px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star-empty.svg" style="width:14px;"><img src="assets/img/star-empty.svg"
                                style="width:14px;"></div>
                    </td>
                    <td><?php echo($rate_3) ?></td>
                </tr>
                <tr>
                    <td>
                        <div class="rating" style="height:29px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star-empty.svg" style="width:14px;"><img src="assets/img/star-empty.svg" style="width:14px;"><img src="assets/img/star-empty.svg"
                                style="width:14px;"></div>
                    </td>
                    <td><?php echo($rate_2) ?></td>
                </tr>
                <tr>
                    <td>
                        <div class="rating" style="height:29px;"><img src="assets/img/star.svg" style="width:14px;"><img src="assets/img/star-empty.svg" style="width:14px;"><img src="assets/img/star-empty.svg" style="width:14px;"><img src="assets/img/star-empty.svg" style="width:14px;"><img src="assets/img/star-empty.svg"
                                style="width:14px;"></div>
                    </td>
                    <td><?php echo($rate_1) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="contact-clean" style="padding-top:0px;padding-bottom:5px;">
       <form>
            <h2 class="text-center">Generate Rating Code</h2>
            <p>Rating Code Below</p><input class="form-control" type="text" id="rate-code" placeholder="Press Generate"><button class="btn btn-primary" type="button" onClick="makeid()">Generate</button></form>
    </div>
    <div class="container">
        <h1>Your Shop Location</h1>
        
        <?php
	if($lati !=NULL and $longi!= NULL)
	{
		echo '<iframe allowfullscreen frameborder="0" width="100%" height="450" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDwDYm7_fnAEBuOjEKfi-a9fX9XA4V8yMM&amp;q='.$lati.'+%2C'.$longi.'&amp;zoom=15"></iframe>';
		
		
		
		
	}
		else
		{
			echo '<p class="card-text" style="color:rgb(213,18,18);">Your Shop is Not Verified. Please verify your shop for Use Google Map Embed</p>';
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
        
   <script>
	
	function makeid() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 5; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));
		
		
		
		var shop_code= <?php echo($shop_code);?>
		
		$.ajax({
	  type: 'POST',
      url: 'rate-code.php',
      data: {
      	'shop_code' : shop_code,
	  'rate_code':text,},
		
      success: function(response)
		{
      	if (response == '1' ) 
		{
			$("#rate-code").val(text);
				
			  }
			}
	    });
		
		

 
}


	   
	   
	   
	
	
	
	</script>
        
        
</body>

</html>