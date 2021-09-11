<?php
 
    session_start();
    $error="";
    $user = "";
    function generatePIN($digits = 4)
              {
                    $i = 0; //counter
                    $pin = ""; //our default pin is blank.
                    while($i < $digits)
                    {
                        //generate a random number between 0 and 9.
                        $pin .= mt_rand(0, 9);
                        $i++;
                    }
                        return $pin;
              }
 
                $pin = generatePIN();
                
            

    if(array_key_exists("submit",$_POST))
    {
    $conn = mysqli_connect("shareddb-t.hosting.stackcp.net","udemy_diary-3133310f40","Vipul@7057","udemy_diary-3133310f40");
       if(mysqli_connect_error())
        {
             die("Failed to connect database");
        }
        if($_POST['email'] == "")
        {
          $error = $error."Email is required<br>";
        }    
        if($_POST['username'] == "")
        {
          $error = $error."Username is required<br>";
        } 
        if($_POST['password'] == "")
        {
          $error .= "Password is required<br>";
        }
        if($_POST['confirmpassword'] == "")
        {
          $error .= "Confirmation of Password is required<br>";
        }
        if($_POST['phone'] == "")
        {
          $error .= "Phone is required<br>";
        }
        if($_POST['dob'] == "")
        {
          $error .= "Date of Birth is required<br>";
        }
        if($error!="")
        {
         $error = "There are some error(s) in your form<br>".$error;
        }
        else
        {
              $query = "select id from users where email = '".mysqli_real_escape_string($conn
                ,$_POST['email'])."'LIMIT 1";
                   
                $check = mysqli_query($conn,$query);
                if(mysqli_num_rows($check) > 0)
                {
                    $user.="This Email had already taken";
                }
                
              else
              {
                 
             
                  
                  $gender = $_POST['gender'];
                  $password = $_POST['password'];
                  $confirmpassword = $_POST['confirmpassword'];
                  
                  $show  = "select * from users";
                  $result = mysqli_query($conn,$show);
                  $final = mysqli_fetch_array($result);
                      
                  $username = $final['username'];
                  if($_POST['username'] == $username)
                      {
                          $user.="This username is already taken";
                      }
                  else
                  {
                        if($password == $confirmpassword)
                        {

                          $insert = "insert into users(email,username,password,confirmpassword,phone,gender,DOB) values('".mysqli_real_escape_string($conn,$_POST['email'])."' ,
                          '".mysqli_real_escape_string($conn,$_POST['username'])."' ,
                          '".mysqli_real_escape_string($conn,$_POST['password'])."' ,
                          '".mysqli_real_escape_string($conn,$_POST['confirmpassword'])."' ,
                          '".mysqli_real_escape_string($conn,$_POST['phone'])."' ,
                          '".$gender."' ,
                          '".mysqli_real_escape_string($conn,$_POST['dob'])."')";

                          if(!mysqli_query($conn,$insert))
                          {
                              $error = "<p>Failed to sign up</p>";
                          }
                          else
                          {
                                    $updatepass = "update users set password = '".base64_encode($password)."'
                                    where email = '".$_POST['email']."'";
                                    mysqli_query($conn,$updatepass); 
                                    $test = false;


                                          $updateconfirm = "update users set confirmpassword = '".base64_encode($confirmpassword)."'
                                          where email = '".$_POST['email']."'";
                                        $update = "update users set ran = '".$pin."' where email = '".$_POST['email']."'";
                                          mysqli_query($conn,$update);
                                          


                                            mysqli_query($conn,$updateconfirm);
                                            $to = $_POST['email'];
                                            $subject = "This is a Verification Mail";
                                            $body = "(.$pin.)";
                                            $headers = "anonymusbot07@gmail.com";
                        
                                            $headers = "anonymusbot07@gmail.com";
                                          if(mail($to,$subject,$body,$headers))
                                                 {
                                                    $status.="OTP Sent Successfully";
                                                 }
                                                else
                                                {
                                                    $status.="OTP not sent successfully please try again";
                        
                                                }
                                                
                                             $_SESSION['email'] = $_POST['email'];
                                             
                                             header("location:otp.php");

                            }

                        }
                      else
                      {
                          $user.="Password did not match";
                      }  
                  }
              }
               if($user!="")
                {
                    $user = "There are some error(s) in your form<br>".$user;
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

    <title>New User!</title>
      <style type="text/css">
          
          
          #toplogo{
              width:30px;
              height:30px;
          }
          #navigation{
              /*margin-top:20px;*/
              
              font-weight:600;
          }
         
          body{
              background-color: #F1F5F9;
          }
         
          .clear-float{
		clear:both;
	       }
          
          #container{
              width:620px;
          }
            
          .formS{
              background-color:white;
              font-family: Work Sans,sans-serif; 
              font-weight:bold;
              margin-top:30px;
              padding:30px 40px 30px 40px;
              border-top: 5px solid black;

          }
          
          #create-account{
              margin-top: 40px;
              float:left;
          }
           #logo{
                width:55px;
                height:40px;
            }
      
      </style>
  </head>
  <body>
   
      <!--------------------------------NAVBARS---------------------------------------->
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

      <!-----------------------------image------------------------->
     <div id="coverpic" style="background-color:black">
         <center><img src="signup.png" class="img-fluid" alt="Responsive image" style="width:1400px;height:400px;"></center>
      </div>

      <!--------------------------------heading------------------>
      
     <center> <div class="container-sm">
          <center><h4 style="margin-top: 30px;">YOUR INSCRIBE MESSENGER ACCOUNT</h4></center>
          <center><h5 style="color:darkgrey">iM User Account Registration</h5></center>
         <center><p style="color:grey">By creating a iM Account, you can use this account in the future as well. Want to send some secret message to someone ! DIVE-IN NOW!</p></center>
         
          <hr>
      <!-----------------------------------FORM------------------------------------------>   
    <center> <div class="formS" >
        <div id="user" style ="color:#DF013A"><?php echo $user; ?></div>
      <form method = "POST">
              <div class="form-group">
                <label for="email" style="float:left;">EMAIL ADDRESS</label>
                <input type="email" class="form-control" id="email" name = "email" aria-describedby="emailHelp">

              </div>

              <div class="form-group">
                <label for="username" style="float:left;">USERNAME</label>
                <input type="text" class="form-control" id="username" name = "username" aria-describedby="emailHelp">

              </div>

              <div class="form-group">
                <label for="password"  style="float:left;">PASSWORD</label>
                <input type="password" class="form-control" id="password" name = "password">
              </div>
                <div class="form-group">
                 <label for="confirmPassword"  style="float:left;">CONFIRM PASSWORD</label>
                <input type="password" class="form-control" id="confirmPassword" name = "confirmpassword">
              </div>
     
              <div class="form-row">
                <div class="form-group col-md-6">
                          <label for="phone" style="float:left;">PHONE</label>
                          <input type="text" pattern="[7-9]{1}[0-9]{9}" class="form-control" id="phone" name = "phone" >
                </div>
              </div>
              
               <div class="form-row">
                <div class="form-group col-md-6">
                          <label for="dob" style="float:left;">DATE OF BIRTH</label>
                          <input type="date" class="form-control" id="dob" name = "dob" placeholder="YYYY/MM/DD">
                </div>
              </div>
              
              
             
              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">GENDER</legend>
                  <div class="col-sm-10">
                      <div class="form-row">
                    <div class="form-check" style="margin-right: 20px;">
                      <input class="form-check-input" type="radio" name="gender" id="Male" value="male">
                      <label class="form-check-label" for="gridRadios1" style="font-weight: normal">
                        MALE
                      </label>
                    </div>
                    <div class="form-check" style="margin-right: 20px;">
                      <input class="form-check-input" type="radio" name="gender" id="Female" value="female">
                      <label class="form-check-label" for="gridRadios2" style="font-weight: normal">
                        FEMALE
                      </label>
                    </div>
                    <div class="form-check " style="margin-right: 20px;">
                      <input class="form-check-input" type="radio" name="gender" id="other" value="Other" >
                      <label class="form-check-label" for="gridRadios3" style="font-weight: normal">
                        OTHER
                      </label>
                    </div>
                  </div>
                </div>
                 </div>
              </fieldset>
              
              
              <fieldset class="form-group">
                 <button type="submit" class="btn btn-danger" id="create-account" name = "submit">CREATE ACCOUNT</button>
              </fieldset>
        </form>
        </div></center>
         </div></center>
     
                
               
         
         
      

      
     
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>