<?php
session_destroy();
session_start();

    $error = "";
 if(array_key_exists("submit",$_POST))
      {
        $conn = mysqli_connect("shareddb-t.hosting.stackcp.net","udemy_diary-3133310f40","Vipul@7057","udemy_diary-3133310f40");
       if(mysqli_connect_error())
              {
                  die("Failed to connect database");
              }
        
          if($_POST['email'] == "")
          {
              $error = $error."email is required<br>";
          } 
          if($_POST['password'] == "")
          {
              $error .= "password is required<br>";
          }
          if($error!="")
          {
              $error = "There are some error(s) in your form<br>".$error;
          }
          else
          {
              $email = $_POST['email'];
              $password = $_POST['password'];
               $_SESSION['email'] = $email;
              $query = "select * from users where email = '".mysqli_real_escape_string($conn,$email)."'";
              $result = mysqli_query($conn,$query);
                
              $row = mysqli_fetch_array($result);
               if(isset($row))
                {
                    $hashed = base64_encode($_POST['password']);
                    
                    if($hashed == $row['password'])
                    {
                       
                      header("location:loggedin.php");
                    }
                     else
                    {
                        $error = "<p>That email and password don't match</p>";
                    }

                }
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Log In</title>
      <style type="text/css">
          
          *{
              margin:0;
              padding:0;
          }*
          #toplogo{
              width:30px;
              height:30px;
          }
          #navigation{
              /*margin-top:20px;*/
              
              font-weight:600;}
          #image-side{
              width:529px;
              height:700px;
          }
          body{
              background-color: #F1F5F9;
          }
         
          .clear-float{
		clear:both;
	    }
          .no-gutter > [class*='col-'] {
                
                padding-left:0;
        }
          
          #formS{
              background-color:white;
              margin-top:5px;
              padding:40px 30px 10px 30px ;
              border-top: 5px solid black;
              width:100%;
              height:80%;

          }
          
          #container{
              margin-top:30px;
          }
          
           #logo{
                width:55px;
                height:40px;
            }
      </style>
  </head>
  <body>

     <!--------------------------------NAVBARS--------------------------------------------->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
            <li class="nav-item">
                <a class="nav-link" href="mailsending.php">CONTACT US</a>
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


          
    
      <!-----------------------------image side------------------------->
    <div id="container">
        <div class="row justify-content-around">
       

            <div class="col-md-4">
                
                         <img src="loginn.png"  class="img-fluid" alt="Responsive image" style="height: 700px">
                   
            </div>
        <div class="col-md-4">
            
            <div id="formS">
             <form method="POST">
                <div id="error"><?php echo $error; ?></div>

                 <h5>My Inscribe Messenger Account</h5>
                 <p style="color:grey;margin-top:20px;">Ready to have some fun. You can Log in here and send message to anybody secretly.</p>
                 <p style="margin-top: 20px; margin-bottom:20px;color:grey">
                    Log In to your iM Account
                 </p>
                  <div class="form-group">
                      <label for="email">EMAIL</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">

                  </div>
                  <div class="form-group">
                      <label for="password">PASSWORD</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
 
                 <center><button type="submit" name="submit" class="btn btn-danger" style="margin-bottom: 30px">Log In</button></center>
                
                 <center><p><a href="signupfinal.php" style="color:gray">Don't have an Account ?</a></p></center>
                <center><p><a href="forgotpassword.php" style="color:gray">Forgot Password!</a></p></center>
                 
            </form>
         </div>
        
       </div>
        
        
        
        
        
        
        </div>
    </div>

      
      
      <!--------------------------------sign in form -------------------------------->
     
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>