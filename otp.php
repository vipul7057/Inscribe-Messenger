<?php
session_start();

    $message="";
    $error = "";
    
    if(array_key_exists("submit",$_POST))
    {
    $conn = mysqli_connect("shareddb-t.hosting.stackcp.net","udemy_diary-3133310f40","Vipul@7057","udemy_diary-3133310f40");
       if(mysqli_connect_error())
        {
             die("Failed to connect database");
    
        }
        
        $email = $_SESSION['email'];
        
         $otpQuery = "select ran from users where email = '".mysqli_real_escape_string($conn
                ,$_SESSION['email'])."'LIMIT 1";
       
        $result = mysqli_query($conn,$otpQuery);
        
        $final = mysqli_fetch_array($result);
        
        $otp = $final['ran'];
        echo $final['email'];
       
            if($otp!=$_POST['otp'])
            {
                 $message="OTP didnot match. Please Try Again !";
            }
            else
            {
                //echo "match";
                header("location:loginfinal.php");
              
            }
        
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Enter OTP!</title>
    <style type="text/css">
        body{
            background-color: #EAEDED;
        }
        .formS{
              background-color:white;
              font-family: Work Sans,sans-serif; 
              font-weight:bold;
              margin-top:100px;
              padding:40px 40px 30px 40px;
              border-top: 5px solid black;
              width: 400px;
              height: 350px;
          }
          .navbar{
              fixed:top;
          }
          
          #logo{
             width: 40px;
              height: 35px; 
          }
      </style>
  </head>
  <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
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
       
        <center> <div class="formS">
            <div><?php echo $message ?></div><br>
              <p style="color:gray">An OTP has been sent to your registered Email Address.</p>
                 <form method="post">

        <div class="form-group">
                      <label for="otp">Enter OTP</label>
                            <input type="text" class="form-control" id="otp" name="otp">
                          </div>
                         
                            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>