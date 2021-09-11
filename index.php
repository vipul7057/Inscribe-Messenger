<?php

session_destroy();

?>

<html>
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home</title>

        <style type="text/css">

            html { 
              background: url("") no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            background-image: linear-gradient(to right,#20002c,#cbb4d4);
            }

            body{
                background: none;
            }
            
            #logo{
                width:55px;
                height:40px;
            }
           
            #iconContain{
                width:500px;
                margin-top:70px;
                margin-left: auto;
                margin-right: auto;
                
            }
            .center {
              display: block;
              margin-left: auto;
              margin-right: auto;
              width: 50%;
            }
            
            #iconContain a : hover{
                background-color: aqua;
            }
            
            #timedate {
  font: small-caps lighter 43px/150% "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
  text-align:center;
  width: 50%;
  font-size:25px;
  color:#fff;
  
  
}
            
          
        </style>

  </head>
  <body onLoad="initClock()">
       
       <!-------------------------------------------NavBar---------------------------------------------------->
        <nav class="navbar  navbar-expand-lg navbar-dark bg-dark"  style="margin-bottom:30px;">
          <a class="navbar-brand" href="#"><img src="logof.jpg" id="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
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

  
       <!-------------------------------------------NavBar End --------------------------------------------------->
 <div class="container">
  <div class="row">
    <div class="col-sm">
    
    </div>
    <div class="col-sm">
     <center>
 <div id="timedate" >
    <a id="mon">January</a>
    <a id="d">1</a>,
    <a id="y">0</a><br />
    <a id="h">12</a> :
    <a id="m">00</a>:
    <a id="s">00</a>:
    <a id="mi">000</a>
  </div>
    </center>
    </div>
    <div class="col-sm">
    
    </div>
  </div>
</div>
 
 

       <div class="jumbotron jumbotron-fluid" style="margin-top:10px; background:none;">
        <div class="container">
         <center><a href="loginfinal.php"> <img  src="loginHome.png" class="center" style="width:200px;height:200px;" id="lg"></a></center>
          <center><p style="margin-top:10px; color: #DFD9E2"> Already a User ? Click Here to Log In !</p></center>
             
         <hr>
          <center><a href="signupfinal.php"> <img  src="signupHome.png" class="center" style="width:200px;height:200px" id="su"></a></center>
          <center><p style="margin-top:10px; color: #DFD9E2"> Not a User ? Click Here to Sign Up !</p></center>
        </div>
       </div>
     
      
     
     <!----------------------------------footer----------------------------------------->
     
      <div id="finish-jumbotron" style="margin-top: 100px; " >
          <div class="jumbotron jumbotron-fluid" style="background-color: black; margin-bottom: 0;">
                  <div class="container">
                      <center><img src="logof.jpg" style="margin-bottom:10px;"></center>
                      <center><p class="lead" style="font-size: 12px;color: whitesmoke">  INSCRIBE MESSENGER </p></center>
                      <!-- hitwebcounter Code START -->

                <center><a href="https://www.hitwebcounter.com" target="_blank">
<img src="https://hitwebcounter.com/counter/counter.php?page=7353669&style=0006&nbdigits=5&type=page&initCount=0" title="Web Counter" Alt="counter free"   border="0" >
</a>   </center> 
                    
                  </div>
              </div>
          
          
          </div>
              

          
     

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
   <script type="text/javascript">
   
   Number.prototype.pad = function(n) {
  for (var r = this.toString(); r.length < n; r = 0 + r);
  return r;
};

function updateClock() {
  var now = new Date();
  var milli = now.getMilliseconds(),
    sec = now.getSeconds(),
    min = now.getMinutes(),
    hou = now.getHours(),
    mo = now.getMonth(),
    dy = now.getDate(),
    yr = now.getFullYear();
  var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  var tags = ["mon", "d", "y", "h", "m", "s", "mi"],
    corr = [months[mo], dy, yr, hou.pad(2), min.pad(2), sec.pad(2), milli];
  for (var i = 0; i < tags.length; i++)
    document.getElementById(tags[i]).firstChild.nodeValue = corr[i];
}

function initClock() {
  updateClock();
  window.setInterval("updateClock()", 1);
}
   
   </script>

  


  </body>
</html>

















