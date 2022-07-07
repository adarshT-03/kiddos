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
        section {
            padding: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 40px auto;
        }

        section ul {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        section ul li {
            list-style: none;
            background: #eee;
            padding: 12px 20px;
            margin: 5px;
            letter-spacing: 1px;
            cursor: pointer;
        }

        section ul li.active {
            background: #03a9f4;
            color: #fff;
        }

        .product {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .product .itemBox {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 5px;
            display: block;
        }

        .product .itemBox.hide {
            display: none;
        }

        .product .itemBox img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>


</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <section>
            <ul>
                <li class="list active" data-filter="all">All</li>
                <li class="list" data-filter="mobile">Mobile</li>
                <li class="list" data-filter="camera">Camera</li>
                <li class="list" data-filter="watch">Watch</li>
                <li class="list" data-filter="shoe">Shoe</li>
                <li class="list" data-filter="headphone">Headphone</li>
            </ul>
            <div class="product">
                <div class="itemBox" data-item="mobile"><img alt="1" src="assets/download__17_-removebg-preview.png"></div>
                <div class="itemBox" data-item="camera"><img alt="1" src="assets/download__6_-removebg-preview (1).png"></div>
                <div class="itemBox" data-item="watch"><img alt="1" src="assets/download__8_-removebg-preview (1).png"></div>
                <div class="itemBox" data-item="shoe"><img alt="1" src="assets/download__9_-removebg-preview.png"></div>
                <div class="itemBox" data-item="headphone"><img alt="1" src="assets/images__1_-removebg-preview.png"></div>
                <div class="itemBox" data-item="mobile"><img alt="1" src="assets/images/College-students.jpg"></div>
                <div class="itemBox" data-item="camera"><img alt="1" src="ssets/download__17_-removebg-preview.png"></div>
                <div class="itemBox" data-item="watch"><img alt="1" src="image/watch2.jpg"></div>
                <div class="itemBox" data-item="shoe"><img alt="1" src="image/shoe2.jpg"></div>
                <div class="itemBox" data-item="headphone"><img alt="1" src="assets/download__17_-removebg-preview.png"></div>
                <div class="itemBox" data-item="mobile"><img alt="1" src="image/mobile3.jpg"></div>
                <div class="itemBox" data-item="camera"><img alt="1" src="assets/download__17_-removebg-preview.png"></div>
                <div class="itemBox" data-item="watch"><img alt="1" src="image/watch3.jpg"></div>
                <div class="itemBox" data-item="shoe"><img alt="1" src="image/shoe3.jpg"></div>
                <div class="itemBox" data-item="headphone"><img alt="1" src="image/headphone3.jpg"></div>
                <div class="itemBox" data-item="mobile"><img alt="1" src="image/mobile4.jpg"></div>
                <div class="itemBox" data-item="mobile"><img alt="1" src="image/camera4.jpg"></div>
                <div class="itemBox" data-item="mobile"><img alt="1" src="image/watch4.jpg"></div>
                <div class="itemBox" data-item="shoe"><img alt="1" src="image/shoe4.jpg"></div>
                <div class="itemBox" data-item="headphone"><img alt="1" src="image/headphone4.jpg"></div>
            </div>
        </section>
    </div>


    <?php include 'footer.php'; ?>

    <script>

        let list = document.querySelectorAll('.list');
        let itemBox = document.querySelectorAll('.itemBox');
        for (let i = 0; i < list.length; i++) {
            list[i].addEventListener('click', function() {
                for (let j = 0; j < list.length; j++) {
                    list[j].classList.remove('active');
                }
                this.classList.add('active');
                let dataFilter = this.getAttribute('data-filter');
                for (let k = 0; k < itemBox.length; k++) {
                    itemBox[k].classList.remove('active');
                    itemBox[k].classList.add('hide');

                    if (itemBox[k].getAttribute('data-item') == dataFilter || dataFilter == "all") {
                        itemBox[k].classList.remove('hide');
                        itemBox[k].classList.add('active');
                    }
                }
            })
        }
    </script>


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