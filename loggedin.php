<?php
    session_start();
    $status = "";
     $final="";
     $conn = mysqli_connect("shareddb-t.hosting.stackcp.net","udemy_diary-3133310f40","Vipul@7057","udemy_diary-3133310f40");
$email = $_SESSION['email'];
$mob= "select phone from users where email = '".$_SESSION['email']."'";
  if($result1  = mysqli_query($conn,$mob))
                    {
                        $final = mysqli_fetch_array($result1);
                    
                    
                    }

    if(array_key_exists("submit",$_POST))
    {
       
      $conn = mysqli_connect("shareddb-t.hosting.stackcp.net","udemy_diary-3133310f40","Vipul@7057","udemy_diary-3133310f40");
       if(mysqli_connect_error())
        {
           die("Failed to connect database");
        }
        if($_POST['textarea'] == "")
        {
            echo '<script>alert("Please add something in mail body")</script>'; 
        }
        else
        {
            $message = $_POST['textarea'];
            

    $query = "update users set diary = '".mysqli_real_escape_string($conn,sha1($message))."' where email = '".$_SESSION['email']."'";

            mysqli_query($conn,$query);
                $show = "select * from users where email = '".$_SESSION['email']."'";
                    
                    if($result  = mysqli_query($conn,$show))
                    {
                        $final = mysqli_fetch_array($result);

                    }
                    $id = $final['id'];
                    $encodeid = base64_encode($id);
                    
                
                if($_POST['receivername'] == "" )
                {
                    $to = $_POST['receiveremail'];
                    if($to == "adityasn743@gmail.com" || $to == "vipulzope58@gmail.com" || $to == "shantanuupase02@gmail.com" || $to == "johnson@cdac.in" || $to == "chintu@gmail.com" || $to == "placements-mumbai@cdac.in" )
                    {
                        echo "working";
                    }
                        else
                        {
                    $subject = "This message is sent from Inscribe Messenger";
                    $body = $_POST['textarea'].
                                        "
                    
                    
                 
Contact Us if this message is inappropriate by clicking on the link given below.
http://secret-messengercdac-com.stackstaging.com/mailsending.php
(".$encodeid.") ";
                    $headers = "anonymusbot07@gmail.com";

                    $headers = "anonymusbot07@gmail.com";
                  if(mail($to,$subject,$body,$headers))
                         {
                            $status.="Message Sent Successfully";
                         }
                        else
                        {
                            $status.="Message not sent successfully please try again";

                        }
                    }
                }
                else
                {
                    $show = "select * from users where email = '".$_SESSION['email']."'";

                    if($result  = mysqli_query($conn,$show))
                    {
                        $final = mysqli_fetch_array($result);

                    }
                    $id = $final['id'];
                    $encodeid = base64_encode($id);
                    
                    $recemail = "select * from receiver where name = '".$_POST['receivername']."'"; 

                    $recresult = mysqli_query($conn,$recemail);

                    $recfinal = mysqli_fetch_array($recresult);

                    $to = $recfinal['email'];
                    $subject = "This message is sent from Inscribe Messenger ";
                    $body = $_POST['textarea'].
                    "
                    
                    
                 
Contact Us if this message is inappropriate by clicking on the link given below.
http://secret-messengercdac-com.stackstaging.com/mailsending.php
(".$encodeid.")";
                    $headers = "anonymusbot07@gmail.com";

                    if(mail($to,$subject,$body,$headers))
                    {
                        $status = "Message Sent Successfully";
                    }
                    else
                    {
                        $status=  "Message not sent successfully please try again";

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Message Box</title>
    <style type="text/css">
      
         
        html { 
              background: url("textbg.jpg") no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }
        
        #logincontainer{
            background:none;
            
        }
        .lead p
        {
            font-weight: bold;
            color: white;
        }
        #details p
        {
            color: cornsilk;
        } 
        #details h1
        {
            color: cornsilk;
        }
        body{
            background:none;
    
        }
        #cantainer
        {
              margin:50px;
                color:aliceblue;
              
        }
        #dismisal{
             
                text-align: left;
                margin: 58px;
                
               
                
                
            }
        #textarea
        {
              background-color: beige;
   
        }
        #logoutButton{
                
                margin-bottom:40px;
            }
        #logo{
                width:55px;
                height:40px;
            }
      
      </style>
  </head>
  <body>
          <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#"><img src="logof.jpg" id="logo"></a>
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

<!--       ===================navbarend================-->
       

    
    
        <div class="cantainer" id="cantainer">
              <div class="row">
                <div class="col-md-6">
                   <form class="cantainer-fluid" method="post" style="background:none;">
                            <!-- <div class="form-group">
                                 <center><label for="exampleFormControlInput1" style="color:white;font-weight:bold">Enter Your Email address</label></center>
                                <input  type="email" class="form-control" name="sendemail" id="email" placeholder="Enter Your Email">
                              </div>  -->



                               <div class="form-group">
                                   <center><label for="exampleFormControlInput1"  style="color:white;font-weight:bold">Enter Receiver's Name<small id="emailHelp" style="color:skyblue;font-weight:bold" class="form-text">(Only for CDAC students)</small></label></center>
                                   
                                   <input type="text" class="form-control" name="receivername" id="email" placeholder="Enter Name">
                               </div> 


                                <center><h2>OR</h2></center>

                             <div>
                                   <div class="form-group">
                                    <center><label for="exampleFormControlInput1"  style="color:white;font-weight:bold">Enter Receiver's Email</label></center>
                                    <input type="text" class="form-control" name="receiveremail" id="email" placeholder="Enter Receiver's email">
                                  </div>
                             </div>
               
                   
                </div>
                 
                 
                 <div class="col-md-6">
               
                    <div class="container" id="thoughtbox">
                        
                        <div class="form-group">
                                <center><label for="thoughts" style="color:aliceblue;">Write Your <b>MESSAGE</b> here !</label></center>
                                <textarea class="form-control" id="textarea" name="textarea" rows="10"></textarea>
                            </div>
                            <center><button type="submit"  id="send"  name = "submit" class="btn btn-success">Send</button></center>
                     </div>
                        
                    </div>
                 </form>
                 
           </div>
           
       </div>
        
 
       
       <!-----------------------------------------Dismisal Box----------------------------------------------->
      <center>
           <div class="alert alert-success alert-dismissible fade show" role="alert" id="dismisal">
                  <h4 class="alert-heading"> <?php echo $status; ?> </h4>
                  <p><span><strong>Your Message:-</strong></span> <?php echo $_POST['textarea'] ?></p>
                  <hr>
                  <p class="mb-0">Sent By :- Anonymous</p>
                  <p class="mb-0">Recieved By :- <?php echo $_POST['receivername'].$_POST['receiveremail']  ?> </p>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
          </div>
      </center>
        
        
        
      <center><button type="submit" class="btn btn-primary" id="logoutButton"><a href='index.php?logout=1' style="color:white;">Log out</a></button></center>

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
    
    
    
    
    
    
    
    
    
  </body>
</html>