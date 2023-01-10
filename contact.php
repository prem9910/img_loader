<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="contact/fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="contact/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="contact/css/style.css">
    <link rel="stylesheet" href="contact/css/menu-style.css">


    <title>Contact Form</title>
  </head>
  <body>
  <div class="header">
        <div class="container1">
            <!-- navbar -->
            <div class="navbar">
                <div class="logo" >
                    <img src="contact/images/logo1.png" alt="">
                </div>
 
                <nav>
                    <ul >
                        <a href="index.php" class="menu"><li >Home</li></a>
                        <a href="product.php" class="menu"><li>Product</li></a>
                        <a href="#" class="menu"><li>Work</li></a>
                        <a href="#" class="menu"><li>About</li></a>
                        <a href="#" class="menu"><li class="active">Contact</li></a>
                        
                    </ul>
                </nav>
 
            </div>
            <!-- end navbar -->
<div class="row" style="padding-top: 4rem;">
    
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">Let's talk about everything!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas debitis, fugit natus?</p>

              <p><img  src="contact/images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                
 
                
           
            
        </div>
    </div>


    
    

    <script src="contact/js/jquery-3.3.1.min.js"></script>
    <script src="contact/js/popper.min.js"></script>
    <script src="contact/js/bootstrap.min.js"></script>
    <script src="contact/js/jquery.validate.min.js"></script>
    <script src="contact/js/main.js"></script>

  </body>
</html>