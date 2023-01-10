<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Loader</title>
    <link rel="stylesheet" href="style.css">

</head>
<body >
 
    <div class="header">
        <div class="container" >
            <!-- navbar -->
            <div class="navbar" >
                <div class="logo">
                    <img src="image/logo1.png" alt="">
                </div>
 
                <nav>
                    <ul>
                        <a href="index.php" class="menu"><li >Home</li></a>
                        <a href="product.php" class="menu"><li class="active">Product</li></a>
                        <a href="#" class="menu"><li>Work</li></a>
                        <a href="#" class="menu"><li>About</li></a>
                        <a href="contact.php" class="menu"><li>Contact</li></a>
                        
                    </ul>
                </nav>
 
            </div>
            <!-- end navbar -->
            <div class="row" style="padding-top: 4rem;" >
 
                <!-- left text -->
                <div class="col-2 product">
                    <h1>Image Editor</h1>
                    <p class="text_para">The Free Online Image Editor lets you edit images ONLINE! </p>
                    <img src="image/img-editor.svg" alt=""><br>
                    <a class="button btn" href="img-editor/img-editor.html" >Image Editor  &#8594</a>
 
                </div>

                <div class="col-2 product">
                    <h1>Image Downloader</h1>
                    <p class="text_para" >Just copy and paste the URL, get all images, pictures immediately.</p>
                    <img src="image/img2.svg" alt=""><br>
                    <a class="button btn" href="#popup2" >Image Downloader  &#8594</a> 
 
                </div>
                <!-- start image editor popup -->
                <!-- <div id="popup1" class="overlay">
                    <div class="popup">
                        
                            <h2></h2>
                                <a class="close" href="#">&times;</a>
                            <div class="content">
                                <br>
                                Paste url of image, video, or pdf to download. This tool is made with vanilla javascript.
                            </div>
                            <form action="#">
                                <input type="url" placeholder="Paste file url" required>
                                <button id="downloadSVG">Download File</button>
                            </form>
                        
                        
                    </div>
                </div> -->
                <!-- end image editor popup -->
                <div id="popup2" class="overlay">
                    <div class="popup">
                        
                            <h2>File Download</h2>
                                <a class="close" href="#">&times;</a>
                            <div class="content">
                                <br>
                                Paste url of image, video, or pdf to download. This tool is made with vanilla javascript.
                            </div>
                            <form action="#">
                                <input type="url" placeholder="Paste file url" required>
                                <button id="downloadSVG">Download File</button>
                            </form>
                        
                        
                    </div>
                </div>

                
 
                <!-- end left text -->
 
                <!-- right image -->
                <!-- <div class="col-2">
                    <img src="image/img1.svg" alt="">
                </div> -->
            </div>
            
        </div>
    </div>

    <script type="text/javascript" src="script.js"></script>
 
</body>
</html>