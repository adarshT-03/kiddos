<!DOCTYPE html>
<html lang="en">

<head>
  <title>Phasor Academy</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.css" />

  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />

  <link rel="stylesheet" href="css/aos.css" />

  <link rel="stylesheet" href="css/ionicons.min.css" />

  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/icomoon.css" />
  <link rel="stylesheet" href="css/style.css" />

  <link rel="stylesheet" href="./lightbox/glightbox.css">
  <link rel="stylesheet" href="lightbox/style.css">
  <style>
    .glightbox img:hover {
      transform: scale(1.2);
      transition: 0.3s;
    }
  </style>




</head>

<body>
  <?php include 'header.php'; ?>
  <?php include 'get.php'; ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/College-students.jpg');background-position: 57% 30%;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Result</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Result <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <div class="container">
    <div class="row" style="margin-bottom: 30px;">

     


      <?php
      if (!empty($result))
        foreach ($result as $rows) {
      ?>
        <a href="./image/<?php echo $rows['file_name']; ?>" class="glightbox gallery_product  col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
          <img src="./image/<?php echo $rows['file_name']; ?>" class="modal-image">
        </a>

      <?php } ?>



    </div>
  </div>


  <?php include 'footer.php'; ?>
  <script>
    function openModal() {
      document.getElementById("myModal").style.display = "flex";
    }

    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>








  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="./lightboxjs/glightbox.min.js"></script>
  <script src="./lightboxjs/index.js"></script>


</body>

</html>