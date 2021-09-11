<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
            
        }
        
  
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "vipulzope58@gmail.com";
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } 
            $emailTo = "adityasoni4599@gmail.com";
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } 
            $emailTo = "shantanuupase02@gmail.com";
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } 
            else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
        
        
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Contact Us</title>
    
    <style type="text/css">
    html{
        background-color:#ACBBAC;
    }
    #logo{
                width:55px;
                height:40px;
            }
      
 
    </style>
    
  </head>
  <body style="background:none">
      
      <!-------------------------------------------NavBar---------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >
          <a class="navbar-brand" href="index.php"><img src="logof.jpg" id="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="aboutus.html">ABOUT US</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="mailsending.php" >CONTACT US</a>
              </li>

              <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                 OUR OTHER VENTURES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                  <a class="dropdown-item" href="#">Read &amp; Develop</a>
                  <a class="dropdown-item" href="#">Shopping App</a>
                  <a class="dropdown-item" href="#">Tomorrowland</a>
                  <a class="dropdown-item" href="#">Food App</a>
                </div>
              </li>

            </ul>
          </div>
    </nav>

  
       <!-------------------------------------------NavBar End --------------------------------------------------->
    
       <img style="width:100%;height:350px;margin-bottom:25px" src="contactus.jpg" class="img-fluid" alt="Responsive image">
<div class="container">
  <div class="row">
    <div class="col-md" style="margin-bottom:20px;">
                      <div class="container">
                      
                    <h1>Get In Touch!</h1>
                    
                    <p class="lead">Please mail us your query and we will be in touch with lightening speed</p>
                      
                      <div id="error"><? echo $error.$successMessage; ?></div>
                      
                      <form method="post">
                  <fieldset class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    <small class="text-muted">We'll never share your email with anyone else.</small>
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" >
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="exampleTextarea">What would you like to ask us?</label>
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                  </fieldset>
                  <center><button type="submit" id="submit" class="btn btn-success">Send</button></center>
                </form>
                          
                        </div>
    </div>
    <div class="col-md">
        <h1>Connect With Us:</h1>
        <hr>
       
        <div class="container">
            <p class="lead"><b>Connect with us on social media</b></p>
            <div class="row">
                 
                <div class="col-sm">
                   <i class="fa fa-facebook-square" aria-hidden="true" style="font-size:20px;"> Facebook</i>
                </div>
                <div class="col-sm">
                    <i class="fa fa-instagram" aria-hidden="true" style="font-size:20px;"> Instagram</i>
                </div>
                <div class="col-sm">
                    <i class="fa fa-twitter-square" aria-hidden="true" style="font-size:20px;"> Twitter</i>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="container">
        <p class="lead"><b>R&amp;D India</b></p>
        <p class="lead"><b>Address</b>:-</p>
        <p class="lead"><b>Phone</b>:-</p>
        </div>
        
        
        
      
    </div>
    
  </div>
</div>
      
        
        
         <!----------------------------------footer----------------------------------------->
     
       <div id="finish-jumbotron" style="margin-top: 100px" >
          <div class="jumbotron jumbotron-fluid" style="background-color: black; margin-bottom: 0;">
                  <div class="container">
                      <center><img src="logof.jpg" style="margin-bottom:10px;"></center>
                      <center><p class="lead" style="font-size: 12px;color: whitesmoke">  INSCRIBE MESSENGER </p></center>
                      
                  </div>
              </div>
          
          
          </div>
        
       
        

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
          
    <script type="text/javascript">
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#subject").val() == "") {
                  
                  error += "The subject field is required.<br>"
                  
              }
              
              if ($("#content").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })
          
    </script>
          
  </body>
</html>