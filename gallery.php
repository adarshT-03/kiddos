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
    <style>
        @media (max-width: 500px) {

            .mu-top-email .fa-envelope,
            .ma-em {
                font-size: 10px;

            }

            .email-div {
                padding-right: 0px !important;
            }


        }
    </style>
    <style>
        html {
            overflow-x: initial !important;
        }





        .column {
            float: left;
            width: 33%;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 900;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {
            display: none;
        }

        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        img {
            margin-bottom: -4px;
        }

        .caption-container {
            text-align: center;
            background-color: black;
            padding: 2px 16px;
            color: white;
        }

        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        img.hover-shadow {
            transition: 0.3s;
            height: 350px;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transform: scale(1.2);
        }

        @media (max-width: 800px) {

            .column {
                width: 50% !important;
            }
            .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transform: scale(1);
        }
        }

        @media (max-width: 500px) {
            .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transform: scale(1);
        }

            .column {
                width: 100% !important;
            }
        }
    </style>

</head>

<body>
    <?php include 'header.php'; ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Gallery</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>





   
    <div class="container">
        <div class="row">
            <div class="column">
                <img src="assets/images/result1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="assets/images/result2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="assets/images/result3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="assets/images/result4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="assets/images/result1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="assets/images/result2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="assets/images/result3.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="assets/images/result4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
            </div>
        </div>
    </div>


    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

            <div class="mySlides">
                <div class="numbertext">1 / 4</div>
                <img src="assets/images/result1.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 4</div>
                <img src="assets/images/result2.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 4</div>
                <img src="assets/images/result3.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="assets/images/result4.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>


            <!-- <div class="column">
                <img class="demo cursor" src="assets/images/result1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
            </div>
            <div class="column">
                <img class="demo cursor" src="assets/images/result1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
            </div>
            <div class="column">
                <img class="demo cursor" src="assets/images/result1.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
                <img class="demo cursor" src="assets/images/result1.jpg"style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div> -->
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
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


</body>

</html>