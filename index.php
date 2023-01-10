<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Loader</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="header">
        <div class="container">
            <!-- navbar -->
            <div class="navbar">
                <div class="logo">
                    <img src="image/logo1.png" alt="">
                </div>
 
                <nav>
                    <ul >
                        <a href="index.php" class="menu"><li class="active">Home</li></a>
                        <a href="product.php" class="menu"><li>Product</li></a>
                        <a href="#" class="menu"><li>Work</li></a>
                        <a href="#" class="menu"><li>About</li></a>
                        <a href="contact.php" class="menu"><li>Contact</li></a>
                        
                    </ul>
                </nav>
 
            </div>
            <!-- end navbar -->
            <div class="row" style="padding-top: 8rem;">
 
                <!-- left text -->
                <div class="col-2">
                    <h1>Download Images From</h1>
                    <h1>Any URL in Bulk!.</h1>
                    <!-- <h1 class="text_info" >Personal Need</h1> -->
                    <p class="text_para" >Powerful image downloader tool that enables you to download all images from any website, Google Images.<br><br> Just copy and paste the URL, get all images, pictures immediately.</p> 
                    
                    <a class="button btn" href="#popup1" >Image Downloader  &#8594</a>            
 
                </div>
                <div id="popup1" class="overlay">
					<div class="popup">
						
      						<h2>File Download</h2>
								<a class="close" href="#">&times;</a>
							<div class="content">
								<br>
								Paste url of image, video, or pdf to download. This tool is made with vanilla javascript.
							</div>
      						<form action="#">
        						<input type="url" placeholder="Paste file url" required>
        						<button id="download">Download File</button>
      						</form>
    					
						
					</div>
				</div>
 
                <!-- end left text -->
 
                <!-- right image -->
                <div class="col-2">
                    <img src="image/img1.svg" alt="">
                </div>
            </div>
            
        </div>
    </div>

    <script type="text/javascript" src="script.js"></script>
 
</body>
</html>