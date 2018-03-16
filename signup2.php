<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sylverline Hospital Sysytem</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #f1f1f1}

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }
</style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="img/Sylverline-logo1.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Home</a></li>
                <li>
                  <div class="dropdown">
                    <button class="dropbtn">Sign-up</button>
                    <div class="dropdown-content">
                      <a href="signup.php">As Patient</a>
                      <a href="signup2.php">As Doctor</a>
                      <a href="admin.php">Admin</a>

                    </div>
                  </div>
                </li>
                <li>
                  <div class="dropdown">
                    <button class="dropbtn">Sign-in</button>
                    <div class="dropdown-content">
                      <a href="login.php">As Patient</a>
                      <a href="login2.php">As Doctor</a>
                      <a href="admin2.php">Admin</a>

                    </div></div></li>


                  </ul>
                </div>
              </div>
            </div>
          </nav>
          <div class="container">
            <div class="row">
              <div class="banner-info">
                <div class="banner-logo text-center">
                </div>
                <div class="banner-text text-center">
                  <h1 class="white">Healthcare at your desk!!</h1>
                  <h2>DOCTOR`S LOGIN</h2>
                  <div id="wrapper">

                    <center>
                      <form  id="form" method="POST" action="includes/sign2.inc.php">  
                        Name: <span class="glyphicon glyphicon-user"></span><br> <input type="text" name="docname" class="form-control br-radius-zero" required="This field is required!">
                        <br><br>   
                        Reg No: <span class="glyphicon glyphicon-user"></span><br> <input type="text" name="regno" class="form-control br-radius-zero"  required="This field is required!">
                        <br><br>
                        Email: <span class="glyphicon glyphicon-envelope"></span><br> <input type="text" name="email" class="form-control br-radius-zero" required="This field is required!">
                        <br><br>
                        Contact: <span class="glyphicon glyphicon-envelope"></span><br> <input type="text" name="contact" class="form-control br-radius-zero" required="This field is required!">
                        <br><br>
                        Password: <span class="glyphicon glyphicon-asterisk"></span><br> <input type="password" name="pwd" class="form-control br-radius-zero" required="This field is required!">
                        <br><br>
                        <input type="reset" name="RESET" value="RESET" class="btn btn-warning">
                        <input type="Submit" name="SUBMIT" value="SUBMIT" class="btn btn-success"><br><br><br>
                        <p>
                          Already a member? <a href="login2.php">Sign-in</a>
                        </p>  
                      </form>
                    </center>
                  </div>
                  <div class="overlay-detail text-center">
                    <a href="#footer"><i class="fa fa-angle-down"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--footer-->
        <footer id="footer">
          <div class="top-footer">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-4 marb20">
                  <div class="ftr-tle">
                    <h4 class="white no-padding">About Us</h4>
                  </div>
                  <div class="info-sec">
                    <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 marb20">
                  <div class="ftr-tle">
                    <h4 class="white no-padding">Quick Links</h4>
                  </div>
                  <div class="info-sec">
                    <ul class="quick-info">
                      <li><a href="index.php"><i class="fa fa-circle"></i>Home</a></li>
                      <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
                      <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 marb20">
                  <div class="ftr-tle">
                    <h4 class="white no-padding">Follow us</h4>
                  </div>
                  <div class="info-sec">
                    <ul class="social-icon">
                      <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                      <li class="bgred"><i class="fa fa-google-plus"></i></li>
                      <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                      <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-line">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  © Copyright Sylverline Hospital. All Rights Reserved
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!--/ footer-->

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="contactform/contactform.js"></script>
        <!--/ banner-->
        <!--service-->
      </body>
      </html>