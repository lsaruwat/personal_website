<?php
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logan Saruwatari</title>
  
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jasny-bootstrap.min.css">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/main_alt.css">
  
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  
  <!--Fonts-->
  <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">

  <!-- Extras -->
  <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/lightbox.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.transitions.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->logan
  <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
  <link href="assets/img/draw.png" rel="icon" type="image/x-icon" />
  <!-- jQuery Load -->
  <script src="assets/js/jquery-min.js"></script>
</head>
<body>
<script type="text/javascript">
  $(document).ready(main);


  function main(){
    console.log($("#contact_form"));
    $("#contact_form").submit(function(event){
      event.preventDefault();
      var formData = $("#contact_form").serialize();
      console.log(formData);
      $.ajax({
        url : "mail.php",
        dataType : 'json',
        type : 'POST',
        data : formData,

        success : function (data) {
            $("#response_text").attr("style", "display: inline-block;");
            $("#response_text").html(data.response);
            console.log(data);

        },

        error : function (xhr, status, errorThrown) {
          console.log('@Error: ' + errorThrown);
          console.log('@Status: ' + status);
          console.log('@Status Text: ' + xhr.statusText);
        }
      });
    });
  }

  </script>
  <!-- Header Section Start -->
  <div id="header">
    <div class="container">
      <div class="col-md-12 top-header">
   
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="banner text-center">
            <h1 class="wow fadeInDown animated" data-wow-delay=".05s">Logan Saruwatari</h1>
            <h2 class="wow fadeInDown animated" data-wow-delay=".05s">Self Help Mentor</h2>
            <h2 class="wow fadeInDown animated" data-wow-delay=".05s">PHD Social Psychology</h2>
            <h2 class="wow fadeInDown animated" data-wow-delay=".05s">Dog Enthusiast</h2>
            <div id="feedback" class="override">
              <div class="address">
                <div class="social-big">
                  <ul class="social-icon resources">
                    <li><a href="https://www.facebook.com/lsaruwatari" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/Skippysnax" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/logan-saruwatari-68234295" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://plus.google.com/105869259206835764831/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://github.com/lsaruwat" target="_blank"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Section End -->

  <!-- Resources Section Start -->
  <section id="Resources">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".05s"><span>My Life</span></h1>
        <div class="col-sm-12 col-md-12 wow centered" data-wow-delay=".05s">
        <div id="feedback" class="override">
        <h3>None of this is true. I made it all up for fun. P.S. the social media sites are real. ;)</h3>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feedback Section End -->

  <!-- Footer section Start -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <div class="copyright wow fadeInUp animated" data-wow-delay=".06s">
            <p>Copyright &copy; Logan Saruwatari | All rights reserved.</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          <div class="scroll-top text-center wow fadeInUp animated" data-wow-delay=".06s">
            <a href="#header"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <p class="text-center wow fadeInUp animated" data-wow-delay=".08s">Theme By <a href="http://graygrids.com">GrayGrids</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer section End -->

  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- WOW JS plugin for animation -->
  <script src="assets/js/wow.js"></script>
  <!-- All JS plugin Triggers -->
  <script src="assets/js/main.js"></script>
  <!-- Smooth scroll -->
  <script src="assets/js/smooth-scroll.js"></script>
  <!--  -->
  <script src="assets/js/jasny-bootstrap.min.js"></script>
  <!-- Counterup -->
  <script src="assets/js/jquery.counterup.min.js"></script>
  <!-- waypoints -->
  <script src="assets/js/waypoints.min.js"></script>
  <!-- circle progress -->
  <script src="assets/js/circle-progress.js"></script>
  <!-- owl carousel -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- lightbox -->
  <script src="assets/js/lightbox.min.js"></script>


</body>
</html>