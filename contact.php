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
  <link rel="stylesheet" href="lightbox/style.css">

</head>

<body>
  <?php include 'header.php'; ?>
  <?php include './get_data/footer_data.php'; ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4" style="color: #fda638">
          <span style="color: #002347 !important">Our</span> Branches
        </h2>

      </div>
    </div>
    <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:flex;justify-content:center">
      <?php
      if (!empty($branch))
        foreach ($branch as $rows) {
          $branchName = "'" . $rows['branch_name'] . "'";
          $branchMobile = "'" . $rows['branch_mobile'] . "'";
          $branchAddress = "'" . $rows['branch_address'] . "'";
      ?>
        <div>

          <div class="text-center ftco-animate">
            <button class="btn btn-default filter-button" id="all" onclick="changeAddress(<?php echo $branchMobile; ?>,<?php echo $branchAddress; ?>)"><?php echo $rows['branch_name']; ?></button>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>





  <script>
    function changeAddress(mobile, address) {

      document.getElementById("Add").innerHTML = address;
      document.getElementById("mobile").innerHTML = mobile;

    }
  </script>


  <section class="ftco-section ftco-animate contact-section" style="padding-top: 20px !important;">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-4 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Address</h3>
            <p id="Add">198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Contact Number</h3>
            <p><a id="mobile">+ 1235 2355 98</a></p>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Email Address</h3>
            <p><a id="email">info@yoursite.com</a></p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="ftco-section ftco-animate ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
      <div class="row d-flex align-items-stretch no-gutters">
        <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
        <div class="col-md-6 ftco-animate d-flex align-items-stretch">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7537.351118574367!2d72.858558!3d19.165674!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x645bd9a5789f9a86!2sPhasor%20academy!5e0!3m2!1sen!2sin!4v1658495030639!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <!-- <div id="map"></div> -->
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

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

</body>

</html>