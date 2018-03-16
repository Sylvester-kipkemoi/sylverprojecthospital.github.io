<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Patients` Welcome Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Sylverline Medicare</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php 
        if (isset($_SESSION['RegNo'])) {
              echo '<form action="includes/logout.inc.php" method="POST">
            <button type="submit" name="SUBMIT">LogOut</button>
            
           </form>';
            } 
     ?>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">Sylverline Medicare</h1>
              <p class="intro-text">A free and effective way to reach unto us!
                <br>Created by Sylverline Family.</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About Sylverline</h2>
            <p>Silverline Hospital is one among the best hospitals in Kerala, specialising in the field of Diabetes, Thyroid, Obesity and Endocrinology. We provide the most comprehensive and efficient care for patients with these disorders. We have been accredited by the prestigious “National Accreditation Board for Hospitals and Health Care Providers” (NABH) which is the highest recognition for quality in health care in India. This state–of–the–art speciality hospital combines cutting edge technology with acclaimed professional expertise to deliver total patient care at an affordable cost in Kerala. It has compassionate team of doctors, nurses and ever smiling and considerate administrators working together in a friendly and positive environment to provide the best to you and your family
              </p>
            
          </div>
        </div>
      </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="download-section content-section text-center">
      <div class="container">
        <div class="col-lg-8 mx-auto">
          <h2>Sylverline Documents</h2>
          <p>You can download Sylverline documents and available resourses for free on the preview page at Start Sylverline webpage.</p>
          <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
        </div>
      </div>
    </section>

    <!--contact-->
                                      <section id="contact" class="section-padding">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <h2 class="ser-title">Contact us</h2>
                                              <hr class="botm-line">
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                              <h3>Contact Info</h3>
                                              <div class="space"></div>
                                              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>321 Awesome Street<br> New York, NY 17022</p>
                                              <div class="space"></div>
                                              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@sylverline.com</p>
                                              <div class="space"></div>
                                              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+1 800 123 1234</p>
                                            </div>
                                            <div class="col-md-8 col-sm-8 marb20">
                                              <div class="contact-info">
                                                <h3 class="cnt-ttl">Having Any Query! Or Book an appointment</h3>
                                                <div class="space"></div>
                                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                                <div id="errormessage"></div>
                                                <form action="" method="post" role="form" class="contactForm">
                                                  <div class="form-group">
                                                    <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                    <div class="validation"></div>
                                                  </div>
                                                  <div class="form-group">
                                                    <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                                    <div class="validation"></div>
                                                  </div>
                                                  <div class="form-group">
                                                    <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                                    <div class="validation"></div>
                                                  </div>
                                                  <div class="form-group">
                                                    <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                                    <div class="validation"></div>
                                                  </div>

                                                  <div class="form-action">
                                                    <button type="submit" class="btn btn-form">Send Message</button>
                                                  </div>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </section>
                                      <!--/ contact-->

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
