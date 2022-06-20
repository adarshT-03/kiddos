<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kiddos - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Fredericka+the+Great"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

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
  </head>
  <body>
  <?php include 'get.php'; ?>
    <header id="mu-header" class="top-header">
      <div style="background-color: #002347 !important">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="mu-header-area">
                <div class="row top-navbar">
                  <div
                    class="col-lg-6 col-md-6 col-sm-6 col-xs-6"
                    style="
                      display: flex;
                      justify-content: center;
                      align-items: center;
                    "
                  >
                    <div class="mu-header-top-left">
                      <div class="mu-top-email">
                        <i class="fa fa-envelope"></i>
                        <span>info@markups.io</span>
                      </div>
                      <div class="mu-top-phone">
                        <i class="fa fa-phone"></i>
                        <span>(568) 986 652</span>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-lg-6 col-md-6 col-sm-6 col-xs-6"
                    style="
                      display: flex;
                      justify-content: center;
                      align-items: center;
                    "
                  >
                    <div class="mu-header-top-right">
                      <nav>
                        <ul class="mu-top-social-nav">
                          <li>
                            <a href="#"><span class="fa fa-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="fa fa-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="fa fa-youtube"></span></a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light"
      style="
        background-color: white !important ;
        box-shadow: 0 0 50px 0 rgb(0 0 0 / 10%);
      "
      id="ftco-navbar"
    >
      <div
        class="container d-flex align-items-center"
        style="background-color: white"
      >
      <img src="assets/images/pha-02.png" height="60" style="padding:7px 0 ;"/>
       
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#ftco-nav"
          aria-controls="ftco-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="oi oi-menu" style="color: black !important"></span>
        </button>
        <div
          class="collapse navbar-collapse"
          id="ftco-nav"
          style="height: 60px"
        >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.html" class="nav-link pl-0">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="teacher.html" class="nav-link">Teacher</a>
            </li>
            <li class="nav-item">
              <a href="courses.html" class="nav-link">Courses</a>
            </li>
            <li class="nav-item">
              <a href="pricing.html" class="nav-link">Pricing</a>
            </li>
            <li class="nav-item">
              <a href="blog.html" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
   
    <section class="home-slider owl-carousel">
    <?php
               if(!empty($banner))
               foreach($banner as $rows)
              { 
            ?>


<div class="slider-item" style="background-image: url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['image']); ?>)">

        <!-- <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Kids Are The Best <span>Explorers In The World</span></h1>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
          </div>
        </div>
        </div> -->
      </div>

             
              <?php } ?>
      <div class="slider-item" style="background-image: url(images/bg_1.jpg)">
        <!-- <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Kids Are The Best <span>Explorers In The World</span></h1>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
          </div>
        </div>
        </div> -->
      </div>

      <div
        class="slider-item"
        style="background-image: url(assets/images/result4.jpg)"
      >
        <!-- <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Perfect Learned<span> For Your Child</span></h1>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
          </div>
        </div>
        </div> -->
      </div>
      <div
        class="slider-item"
        style="background-image: url(assets/images/result3.jpg)"
      >
        <!-- <div class="overlay"></div> -->
        <!-- <div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
		<div class="col-md-8 text-center ftco-animate">
		  <h1 class="mb-4">Perfect Learned<span> For Your Child</span></h1>
		  <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
		</div>
	  </div>
	  </div> -->
      </div>
      <div
        class="slider-item"
        style="background-image: url(assets/images/result2.jpg)"
      >
        <!-- <div class="overlay"></div>
	  <div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
		<div class="col-md-8 text-center ftco-animate">
		  <h1 class="mb-4">Perfect Learned<span> For Your Child</span></h1>
		  <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
		</div>
	  </div>
	  </div> -->
      </div>
      <div
        class="slider-item"
        style="background-image: url(assets/images/result1.jpg)"
      >
        <!-- <div class="overlay"></div>
	  <div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
		<div class="col-md-8 text-center ftco-animate">
		  <h1 class="mb-4">Perfect Learned<span> For Your Child</span></h1>
		  <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
		</div>
	  </div>
	  </div> -->
      </div>
    </section>

    <section class="ftco-services ftco-no-pb">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div
            class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary"
          >
            <div class="media block-6 d-block text-center">
              <div
                class="icon d-flex justify-content-center align-items-center"
              >
                <span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Certified Teachers</h3>
                <p>
                  Even the all-powerful Pointing has no control about the blind
                  texts it is an almost unorthographic.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary"
            style="background-color: #fda638 !important"
          >
            <div class="media block-6 d-block text-center">
              <div
                class="icon d-flex justify-content-center align-items-center"
              >
                <span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Special Education</h3>
                <p>
                  Even the all-powerful Pointing has no control about the blind
                  texts it is an almost unorthographic.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary"
          >
            <div class="media block-6 d-block text-center">
              <div
                class="icon d-flex justify-content-center align-items-center"
              >
                <span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Book &amp; Library</h3>
                <p>
                  Even the all-powerful Pointing has no control about the blind
                  texts it is an almost unorthographic.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate"
            style="background-color: #fda638 !important"
          >
            <div class="media block-6 d-block text-center">
              <div
                class="icon d-flex justify-content-center align-items-center"
              >
                <span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Certification</h3>
                <p>
                  Even the all-powerful Pointing has no control about the blind
                  texts it is an almost unorthographic.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb bg-light">
      <div class="container">
        <div class="row">
          <div
            class="col-md-6 order-md-last wrap-about py-5 wrap-about bg-light"
          >
            <div class="text px-4 ftco-animate">
              <h2 class="mb-4">Welcome to Phasor Academy</h2>

              <!-- <div class="col-md-6 welcome-img-div"> -->

              <img
                src="assets/images/vikash-jha.jpg"
                alt="#"
                style="height: 100%; width: 100%"
              />
              <!-- </div> -->

              <!-- <p>
                <a href="#" class="btn btn-secondary px-4 py-3">Read More</a>
              </p> -->
            </div>
          </div>
          <div
            class="col-md-6 wrap-about py-5 pr-md-4 ftco-animate bg-light"
            style="display: flex; justify-content: center; align-items: center"
          >
            <div class="col-md-12 welcome-img-div">
              <div class="full" style="text-align: justify">
                <p style="color: black">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    style="
                      height: 20px;
                      width: 20px;
                      margin-top: -15px;
                      color: #095a83;
                    "
                    fill="currentColor"
                    viewBox="0 0 448 512"
                  >
                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                      d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z"
                    />
                  </svg>
                  Progress for me has never been a dream. It has always been a
                  distant reality and once one milestone is achieved, there is
                  always another one waiting to be crossed. It is with this
                  belief that I started Arfin India Ltd. in 2001, a company that
                  was in the business of Aluminum Recycling. Almost instantly,
                  Arfin India Ltd. became a prominent name in its business
                  segment, but like every entrepreneur sticks to their dream, I
                  always wanted to push my company to more prosperous
                  milestones. More than being a global player, I always
                  perceived my company as a unit that could make a difference
                  with its quality and competitively priced products. Taking a
                  path less traveled, I expanded Arfin into Ferro Alloys
                  production, a highly sensitive business that requires a high
                  amount of technical know-how, expertise and specialized
                  knowledge.
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    style="
                      height: 20px;
                      width: 20px;
                      margin-top: -15px;
                      color: #095a83;
                    "
                    fill="currentColor"
                    viewBox="0 0 448 512"
                  >
                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                      d="M96 96C42.98 96 0 138.1 0 192s42.98 96 96 96c11.28 0 21.95-2.305 32-5.879V288c0 35.3-28.7 64-64 64c-17.67 0-32 14.33-32 32s14.33 32 32 32c70.58 0 128-57.42 128-128V192C192 138.1 149 96 96 96zM448 192c0-53.02-42.98-96-96-96s-96 42.98-96 96s42.98 96 96 96c11.28 0 21.95-2.305 32-5.879V288c0 35.3-28.7 64-64 64c-17.67 0-32 14.33-32 32s14.33 32 32 32c70.58 0 128-57.42 128-128V192z"
                    />
                  </svg>
                </p>
                <div
                  style="
                    display: flex;
                    justify-content: flex-end;
                    align-items: flex-end;
                    flex-direction: column;
                  "
                >
                  <p style="margin: 0px !important; font-weight: 600">
                    - Vikash Jha
                  </p>
                  <p style="margin: 0px !important; font-weight: 600">
                    Director
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="ftco-intro"
      style="background-image: url(assets/images/12345-01.jpg)"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h2>Do you have a Dream of getting into IIT?</h2>
            <p class="mb-0">
              Take a first step towards your dream of getting into IIT with us. We will guide you in this wonderful journey.
              Join our course.
            </p>
          </div>
          <div class="col-md-3 d-flex align-items-center">
            <p class="mb-0">
              <a href="#" class="btn btn-secondary px-4 py-3">Take a Course</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <style></style>
  
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4" style="color: #fda638">
              <span style="color: #002347 !important">Our</span> Courses
            </h2>
            <p>
              Separated they live in. A small river named Duden flows by their
              place and supplies it with the necessary regelialia. It is a
              paradisematic country
            </p>
          </div>
        </div>
        <div class="page-wrapper">
          <div class="postslider">
            <!-- <i class="fa fa-angle-left prev1"></i>
            <i class="fa fa-angle-right next1"></i> -->

            <div class="post-wrapper">

            <?php
               if(!empty($course))
               foreach($course as $rows)
              { 
            ?>

              <div class="pricing-entry pb-4 text-center course-main">
                <div
                  class="img"
                  style="background-image: url(<?php echo $rows['course_photo']; ?>)"
                ></div>
                <div class="px-4">
                  <div class="course-title">
                    <p><?php echo $rows['course_category']; ?></p>
                  </div>
                  <div class="course-subtitle">
                    <p><?php echo $rows['course_title']; ?></p>
                  </div>
                  <p class="px-4-text">
                  <?php echo $rows['course_desc']; ?>
                  </p>
                </div>
                <p class="button text-center">
                  <a href="#" class="btn btn-primary px-4 py-3"
                    >Take A Course</a
                  >
                </p>
              </div>
              <?php } ?>

              <div class="pricing-entry pb-4 text-center course-main">
                <div
                  class="img"
                  style="background-image: url(images/bg_1.jpg)"
                ></div>
                <div class="px-4">
                  <div class="course-title">
                    <p>Enginerring</p>
                  </div>
                  <div class="course-subtitle">
                    <p>JEE (Main + Advanced)</p>
                  </div>
                  <p class="px-4-text">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                </div>
                <p class="button text-center">
                  <a href="#" class="btn btn-primary px-4 py-3"
                    >Take A Course</a
                  >
                </p>
              </div>

              <div class="pricing-entry pb-4 text-center course-main">
                <div
                  class="img"
                  style="background-image: url(images/bg_1.jpg)"
                ></div>
                <div class="px-4">
                  <div class="course-title">
                    <p>Enginerring</p>
                  </div>
                  <div class="course-subtitle">
                    <p>JEE (Main + Advanced)</p>
                  </div>
                  <p class="px-4-text">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                </div>
                <p class="button text-center">
                  <a href="#" class="btn btn-primary px-4 py-3"
                    >Take A Course</a
                  >
                </p>
              </div>

              <div class="pricing-entry pb-4 text-center course-main">
                <div
                  class="img"
                  style="background-image: url(images/bg_1.jpg)"
                ></div>
                <div class="px-4">
                  <div class="course-title">
                    <p>Enginerring</p>
                  </div>
                  <div class="course-subtitle">
                    <p>JEE (Main + Advanced)</p>
                  </div>
                  <p class="px-4-text">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                </div>
                <p class="button text-center">
                  <a href="#" class="btn btn-primary px-4 py-3"
                    >Take A Course</a
                  >
                </p>
              </div>

              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="ftco-section ftco-counter img"
      id="section-counter"
      style="
        background-image:url(assets/images/123-01.jpg);
      "
      data-stellar-background-ratio="0.5"
    >
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div
            class="col-md-8 text-center heading-section heading-section-black ftco-animate"
          >
            <h2 class="mb-4" style="color:white"><span style="color:#fda638 !important">20 Years of</span> Experience</h2>
            <p style="color:white">
              Separated they live in. A small river named Duden flows by their
              place and supplies it with the necessary regelialia. It is a
              paradisematic country
            </p>
          </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
          <div class="col-lg-10">
            <div class="row d-md-flex align-items-center">
              <div
                class="col-md d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="18">0</strong>
                    <span style="color:white">Certified Teachers</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="351">0</strong>
                    <span style="color:white">Successful Kids</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="564">0</strong>
                    <span style="color:white">Happy Parents</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="300">0</strong>
                    <span style="color:white">Awards Won</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    
  


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4" style="color: #fda638">
              <span style="color: #002347 !important">Our</span> Faculty
            </h2>
            <p>
              Separated they live in. A small river named Duden flows by their
              place and supplies it with the necessary regelialia. It is a
              paradisematic country
            </p>
          </div>
        </div>
        <div class="page-wrapper">
          <div class="postslider">
            <!-- <i class="fa fa-angle-left prev1"></i>
            <i class="fa fa-angle-right next1"></i> -->

            <div class="faculty-wrapper">
              <div class="staff">
                <div class="img-wrap d-flex align-items-stretch">
                  <div
                    class="img align-self-stretch"
                    style="background-image: url(images/teacher-1.jpg)"
                  ></div>
                </div>
                <div class="text pt-3 text-center">
                  <h3>Bianca Wilson</h3>
                  <span class="position mb-2">Teacher</span>
                  <div class="faded">
                    <p>
                      I am an ambitious workaholic, but apart from that, pretty
                      simple person.
                    </p>
                    <ul class="ftco-social text-center">
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-twitter"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-facebook"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-google-plus"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-instagram"></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="staff">
                <div class="img-wrap d-flex align-items-stretch">
                  <div
                    class="img align-self-stretch"
                    style="background-image: url(images/teacher-1.jpg)"
                  ></div>
                </div>
                <div class="text pt-3 text-center">
                  <h3>Bianca Wilson</h3>
                  <span class="position mb-2">Teacher</span>
                  <div class="faded">
                    <p>
                      I am an ambitious workaholic, but apart from that, pretty
                      simple person.
                    </p>
                    <ul class="ftco-social text-center">
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-twitter"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-facebook"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-google-plus"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-instagram"></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="staff">
                <div class="img-wrap d-flex align-items-stretch">
                  <div
                    class="img align-self-stretch"
                    style="background-image: url(images/teacher-1.jpg)"
                  ></div>
                </div>
                <div class="text pt-3 text-center">
                  <h3>Bianca Wilson</h3>
                  <span class="position mb-2">Teacher</span>
                  <div class="faded">
                    <p>
                      I am an ambitious workaholic, but apart from that, pretty
                      simple person.
                    </p>
                    <ul class="ftco-social text-center">
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-twitter"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-facebook"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-google-plus"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-instagram"></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="staff">
                <div class="img-wrap d-flex align-items-stretch">
                  <div
                    class="img align-self-stretch"
                    style="background-image: url(images/teacher-1.jpg)"
                  ></div>
                </div>
                <div class="text pt-3 text-center">
                  <h3>Bianca Wilson</h3>
                  <span class="position mb-2">Teacher</span>
                  <div class="faded">
                    <p>
                      I am an ambitious workaholic, but apart from that, pretty
                      simple person.
                    </p>
                    <ul class="ftco-social text-center">
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-twitter"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-facebook"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-google-plus"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-instagram"></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="staff">
                <div class="img-wrap d-flex align-items-stretch">
                  <div
                    class="img align-self-stretch"
                    style="background-image: url(images/teacher-1.jpg)"
                  ></div>
                </div>
                <div class="text pt-3 text-center">
                  <h3>Bianca Wilson</h3>
                  <span class="position mb-2">Teacher</span>
                  <div class="faded">
                    <p>
                      I am an ambitious workaholic, but apart from that, pretty
                      simple person.
                    </p>
                    <ul class="ftco-social text-center">
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-twitter"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-facebook"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-google-plus"></span></a>
                      </li>
                      <li class="ftco-animate">
                        <a href="#"><span class="icon-instagram"></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
             
              
            </div>
          </div>
        </div>
      </div>
    </section>

  

   
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span style="color:#002347" >What Students</span> Says About Us</h2>
            <p>
              Separated they live in. A small river named Duden flows by their
              place and supplies it with the necessary regelialia. It is a
              paradisematic country
            </p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div
                    class="user-img mr-4"
                    style="background-image: url(images/teacher-1.jpg)"
                  ></div>
                  <div class="text ml-2 bg-light">
                    <span
                      class="quote d-flex align-items-center justify-content-center"
                    >
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div
                    class="user-img mr-4"
                    style="background-image: url(images/teacher-2.jpg)"
                  ></div>
                  <div class="text ml-2 bg-light">
                    <span
                      class="quote d-flex align-items-center justify-content-center"
                    >
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div
                    class="user-img mr-4"
                    style="background-image: url(images/teacher-3.jpg)"
                  ></div>
                  <div class="text ml-2 bg-light">
                    <span
                      class="quote d-flex align-items-center justify-content-center"
                    >
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div
                    class="user-img mr-4"
                    style="background-image: url(images/teacher-4.jpg)"
                  ></div>
                  <div class="text ml-2 bg-light">
                    <span
                      class="quote d-flex align-items-center justify-content-center"
                    >
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div
                    class="user-img mr-4"
                    style="background-image: url(images/teacher-1.jpg)"
                  ></div>
                  <div class="text ml-2 bg-light">
                    <span
                      class="quote d-flex align-items-center justify-content-center"
                    >
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="ftco-section ftco-consult ftco-no-pt ftco-no-pb"
      style="background-image: url(images/bg_5.jpg)"
      data-stellar-background-ratio="0.5"
    >
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-md-6 py-5 px-md-5 bg-primary">
            <div
              class="heading-section heading-section-white ftco-animate mb-5"
            >
              <h2 class="mb-4">Request A Quote</h2>
              <p>
                Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia, there live the blind texts.
              </p>
            </div>
            <form action="#" class="appointment-form ftco-animate">
              <div class="d-md-flex">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="First Name"
                  />
                </div>
                <div class="form-group ml-md-4">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Last Name"
                  />
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon">
                        <span class="ion-ios-arrow-down"></span>
                      </div>
                      <select name="" id="" class="form-control">
                        <option value="">Select Your Course</option>
                        <option value="">Art Lesson</option>
                        <option value="">Language Lesson</option>
                        <option value="">Music Lesson</option>
                        <option value="">Sports</option>
                        <option value="">Other Services</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Phone" />
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea
                    name=""
                    id=""
                    cols="30"
                    rows="2"
                    class="form-control"
                    placeholder="Message"
                  ></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input
                    type="submit"
                    value="Request A Quote"
                    class="btn btn-secondary py-3 px-4"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-gallery">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <a
              href="images/image_1.jpg"
              class="gallery image-popup img d-flex align-items-center"
              style="background-image: url(images/course-1.jpg)"
            >
              <div
                class="icon mb-4 d-flex align-items-center justify-content-center"
              >
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a
              href="images/image_2.jpg"
              class="gallery image-popup img d-flex align-items-center"
              style="background-image: url(images/image_2.jpg)"
            >
              <div
                class="icon mb-4 d-flex align-items-center justify-content-center"
              >
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a
              href="images/image_3.jpg"
              class="gallery image-popup img d-flex align-items-center"
              style="background-image: url(images/image_3.jpg)"
            >
              <div
                class="icon mb-4 d-flex align-items-center justify-content-center"
              >
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a
              href="images/image_4.jpg"
              class="gallery image-popup img d-flex align-items-center"
              style="background-image: url(images/image_4.jpg)"
            >
              <div
                class="icon mb-4 d-flex align-items-center justify-content-center"
              >
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <span class="icon icon-map-marker"></span
                    ><span class="text"
                      >203 Fake St. Mountain View, San Francisco, California,
                      USA</span
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-phone"></span
                      ><span class="text">+2 392 3929 210</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-envelope"></span
                      ><span class="text">info@yourdomain.com</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a
                  class="blog-img mr-4"
                  style="background-image: url(images/image_1.jpg)"
                ></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="#"
                      >Even the all-powerful Pointing has no control about</a
                    >
                  </h3>
                  <div class="meta">
                    <div>
                      <a href="#"
                        ><span class="icon-calendar"></span> Dec 25, 2018</a
                      >
                    </div>
                    <div>
                      <a href="#"><span class="icon-person"></span> Admin</a>
                    </div>
                    <div>
                      <a href="#"><span class="icon-chat"></span> 19</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a
                  class="blog-img mr-4"
                  style="background-image: url(images/image_2.jpg)"
                ></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="#"
                      >Even the all-powerful Pointing has no control about</a
                    >
                  </h3>
                  <div class="meta">
                    <div>
                      <a href="#"
                        ><span class="icon-calendar"></span> Dec 25, 2018</a
                      >
                    </div>
                    <div>
                      <a href="#"><span class="icon-person"></span> Admin</a>
                    </div>
                    <div>
                      <a href="#"><span class="icon-chat"></span> 19</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="#"
                    ><span class="ion-ios-arrow-round-forward mr-2"></span
                    >Home</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="ion-ios-arrow-round-forward mr-2"></span
                    >About</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="ion-ios-arrow-round-forward mr-2"></span
                    >Services</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="ion-ios-arrow-round-forward mr-2"></span
                    >Deparments</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="ion-ios-arrow-round-forward mr-2"></span
                    >Contact</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control mb-2 text-center"
                    placeholder="Enter email address"
                  />
                  <input
                    type="submit"
                    value="Subscribe"
                    class="form-control submit px-3"
                  />
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
              <ul
                class="ftco-footer-social list-unstyled float-md-left float-lft mt-3"
              >
                <li class="ftco-animate">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved | This template is made with
              <i class="icon-heart" aria-hidden="true"></i> by
              <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script>
      $(document).ready(function () {
        $(".post-wrapper").slick({
          dots: true,
          infinite: true,
          speed: 200,
          slidesToShow: 3,
          slidesToScroll: 1,
          //         autoplay: true,
          // autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
              },
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ],
        });

        $(".faculty-wrapper").slick({
          dots: true,
          infinite: true,
          speed: 200,
          slidesToShow: 4,
          slidesToScroll: 1,
          //         autoplay: true,
          // autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
              },
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ],
        });
      });
      
    </script>
  </body>
</html>
