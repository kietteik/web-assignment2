<?php require_once './php/controller/user_session.php'; ?>
<?php include('./php/util/header.php') ?>

<body>
    <style>
        :root {
            --primary-blue: #047d81;
            --secondary-blue: #024143;
            --dark-secondary-blue: #022120;
            --secondary-black: #3a4042;
            --white-card: #dfdfdf;
        }

        html {
            box-sizing: border-box;
        }

        .head-background,
        .overlay-background,
        .firstsection {
            height: 80px;
        }

        .blue-text {
            color: var(--primary-blue);
        }

        .white-text {
            color: white;
        }

        .section h1 {
            color: var(--secondary-black);
            text-transform: none;
            font-size: 64px;
            font-weight: 800;
            padding: 0 10px;
        }

        .owl-carousel-navlist .owl-nav {
            display: none !important;
        }

        @media screen and (max-width: 864px) {
            .section h1 {
                font-size: 48px;
            }
        }

        .image-show {
            padding: 20px;
        }

        .item {
            width: 100%;
        }

        .item img {
            width: 100%;
            height: 50vw;
            object-fit: cover;
            border-radius: 10px;
        }

        .right-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 6px;
        }

        .header2 {
            font-size: 28px;
            font-weight: 700;
            padding: 10px;
            color: var(--secondary-black);
        }

        .header3 {
            font-size: 24px;
            font-weight: 600;
            padding: 10px;
        }

        .planning-card .blue-button {
            text-align: center;
        }

        .planning-card .blue-button:hover {
            background-color: white;
            cursor: pointer;
        }

        .planning-card p {
            color: white;
        }

        .planning-card {
            background-color: var(--primary-blue);
            border-radius: 10px;
        }

        .plan-map {
            padding: 10px 0;
        }

        .plan-map img {
            width: 100%;
            border-radius: 5px;
            object-fit: cover;
            height: 10rem;
        }

        /* CARD */
        .profile-card-5 {
            margin-top: 20px;
        }

        .profile-card-5 .btn {
            border-radius: 2px;
            text-transform: uppercase;
            font-size: 12px;
            padding: 7px 20px;
        }

        .profile-card-5 .card-img-block {
            width: 91%;
            margin: 0 auto;
            position: relative;
            top: -20px;
        }

        .profile-card-5 .card-img-block img {
            object-position: bottom;
            object-fit: cover;
            width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.63);
        }

        .profile-card-5 h5 {
            color: var(--primary-blue);
            font-weight: 600;
        }

        .profile-card-5 p {
            font-size: 14px;
            font-weight: 300;
            color: var(--secondary-black);
        }

        .profile-card-5 .btn-primary {
            background-color: var(--secondary-blue);
            border-color: var(--secondary-blue);
            transition: all 0.3s ease;
            outline: none !important;
        }

        .profile-card-5 .btn-primary:hover {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
            color: black;
        }
    </style>
    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
    <div id="top" class="firstsection">
        <div class="introduce">
            <div class="head-background product-background"></div>
            <div class="overlay-background"></div>
            <?php include('./php/util/navbar.php') ?>

        </div>
    </div>
    <br />
    <!-- EXPLORE IN DALAT -->
    <div class="section">
        <div class="container-lg">
            <h1>
                <a href="./product.html"><span class="blue-text">Explore</span> Da Lat
                </a>
            </h1>
            <p class="after-header">
                This former colonial resort provides a respite from Southern
                Vietnam's year-round swelterx
            </p>
        </div>
        <div class="container-lg">
            <div class="owl-carousel owl-carousel-navlist owl-theme nav-button-list">
                <div class="nav-button">
                    <div class="title">Hotels</div>
                    <div class="icon">
                        <i class="fas fa-bed"></i>
                    </div>
                </div>
                <div class="nav-button">
                    <div class="title">Flights</div>
                    <div class="icon">
                        <i class="fas fa-plane"></i>
                    </div>
                </div>
                <div class="nav-button">
                    <div class="title">Restaurants</div>
                    <div class="icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                </div>
                <div class="nav-button">
                    <div class="title">Insurances</div>
                    <div class="icon">
                        <i class="fas fa-car-crash"></i>
                    </div>
                </div>
                <div class="nav-button">
                    <div class="title">Vacation Rental</div>
                    <div class="icon">
                        <i class="fas fa-compass"></i>
                    </div>
                </div>
                <div class="nav-button">
                    <div class="title">Things to do</div>
                    <div class="icon">
                        <i class="fas fa-snowboarding"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid image-show">
            <div class="image-show-left">
                <div class="owl-carousel owl-customfade owl-theme">
                    <div class="item">
                        <img src="./image/smallDaLat/small-anthony-tran-ud3mHXnWM7w-unsplash.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="./image/smallDaLat/small-chinh-le-duc-KaJcO4a2YdY-unsplash.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="./image/smallDaLat/small-d-ng-nguy-n-tZ1i5tMLR30-unsplash.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="./image/smallDaLat/small-trinity-treft-oGOCywp_chE-unsplash.jpg" alt="" />
                    </div>
                </div>
            </div>
            <!-- <div class="image-show-right">
                    <div class="ow-carousel owl-theme">
                        <div class="item-right">
                            <img
                                src="./image/smallDaLat/small-thai-an-j3SU8ymJebg-unsplash.jpg"
                            />
                        </div>
                        <div class="item-right">
                            <img
                                src="./image/smallDaLat/small-thai-an-j3SU8ymJebg-unsplash.jpg"
                            />
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
    <!-- EXPLORE IN DALAT -->
    <!-- ABOUT DALAT -->
    <div class="wow fadeIn section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="header2">About Da Lat</div>
                    <p class="after-header">
                        This former colonial resort provides a respite from
                        Southern Vietnam's year-round swelter. The town is
                        full of beautiful French-era buildings and
                        surrounded by pine trees and farms growing exotic
                        vegetables and flowers. It's worth the trip just to
                        escape the heat for a few days.
                    </p>
                </div>
                <div class="col-lg-5 planning-card">
                    <div class="header3 white-text">
                        Start Planing for Da Lat
                    </div>
                    <p class="after-header">
                        Create a Trip to save and organize all of your
                        travel ideas, and see them on a map
                    </p>
                    <div class="blue-button">Create a trip</div>
                    <div class="plan-map">
                        <img class="fluid-img" src="./image/image_trips_card_medium.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT DALAT -->
    <!-- ESSENTIAL IN DALAT -->
    <div class="section">
        <div class="container-lg">
            <h1>Essential in DaLat</h1>
            <p class="after-header">
                Places to see, ways to wander, and signature experiences.
            </p>
            <div class="row">
                <div class="wow fadeInUp col-md-4 mt-4" data-wow-duration="2s">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="./image/smallDaLat/small-thai-an-j3SU8ymJebg-unsplash.jpg" alt="Card image cap" />
                        </div>
                        <div class="card-body pt-0">
                            <h5 class="card-title">Somewhere</h5>
                            <p class="card-text">
                                Request a trip from our team of experts,
                                curated individually for you. We are certain
                                you will love the result.
                            </p>
                            <p>
                                <span class="gray-text small">from</span>
                                <strong class="black-text medium">1.225.326 vnđ
                                </strong>
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <p class="mt-3 w-100 float-left text-center"></p>
                </div>
                <div class="wow fadeInDown col-md-4 mt-4" data-wow-duration="2s">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="./image/smallDaLat/small-thai-an-F-op4_ueXQs-unsplash.jpg" alt="Card image cap" />
                        </div>
                        <div class="card-body pt-0">
                            <h5 class="card-title">Somewhere</h5>
                            <p class="card-text">
                                Request a trip from our team of experts,
                                curated individually for you. We are certain
                                you will love the result.
                            </p>
                            <p>
                                <span class="gray-text small">from</span>
                                <strong class="black-text medium">925.456 vnđ
                                </strong>
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <p class="mt-3 w-100 float-left text-center"></p>
                </div>
                <div class="wow fadeInUp col-md-4 mt-4" data-wow-duration="2s">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="./image/smallDaLat/small-thai-an-gOp1aMEDeFs-unsplash.jpg" alt="Card image cap" />
                        </div>
                        <div class="card-body pt-0">
                            <h5 class="card-title">Somewhere</h5>
                            <p class="card-text">
                                Request a trip from our team of experts,
                                curated individually for you. We are certain
                                you will love the result.
                            </p>
                            <p>
                                <span class="gray-text small">from</span>
                                <strong class="black-text medium">623.213 vnđ
                                </strong>
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <p class="mt-3 w-100 float-left text-center"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- ESSENTIAL IN DALAT -->

    <!-- ----------FOOTER-------- -->
    <?php include('./php/util/footer.php') ?>
    <!-- ----------FOOTER-------- -->
</body>
<?php include('./php/util/script.php') ?>

</html>