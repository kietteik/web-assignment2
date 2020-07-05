<?php require_once './php/controller/user_session.php'; ?>
<?php include('./php/util/header.php') ?>



<body>
    <link rel="stylesheet" href="./css/locations.css">

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

    <?php include '../classes/vitri.php';
    include '../classes/product.php';
    include_once '../helper/format.php';

    $pd = new product();
    $loc = new vitri();
    $fm = new Format();
    if (isset($_GET['locid'])) {
        $id = $_GET['locid'];
        $result_get = $loc->getvitribyId($id);
        if ($result_get) {
            $result = $result_get->fetch_assoc()
    ?>


            <br />
            <!-- EXPLORE IN DALAT -->
            <div class="section">
                <div class="container-lg">
                    <h1>
                        <a href="./product.html"><span class="blue-text">Explore</span> <?php echo $result['vitriName']; ?>
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
                                <img src="../adminSide/uploads/<?php echo $result['vitriImage'] ?>" alt="" />
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
                </div>
            </div>
            <!-- EXPLORE IN DALAT -->
            <!-- ABOUT DALAT -->
            <div class="wow fadeIn section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="header2">About <?php echo $result['vitriName']; ?></div>
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
                                Start Planing for <?php echo $result['vitriName']; ?>
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
                    <h1>Essential in <?php echo $result['vitriName']; ?></h1>
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
        <?php
        }
    } else {
        ?>
        <!-- LIST ALL LOCATIONS -->
        <div class="container-lg my-4">
            <?php
            $locList = $loc->show_vitri();
            if ($locList) {
                $i = 0;
                while ($result = $locList->fetch_assoc()) {
                    # code...
                    $i++;
            ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img style="height: 100%;" src="../adminSide/uploads/<?php echo $result['vitriImage'] ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title black-text"><?php echo $result['vitriName'] ?></h5>
                                    <p class="card-text black-text"><?php echo $result['vitriName'] ?> is a beautiful place with many things to discover</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a class="blue-button" href="location.php?locid=<?php echo $result['vitriId'] ?>">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php

                }
            }
            ?>
            </tbody>
            </table>
        </div>

    <?php }
    ?>
    <!-- ----------FOOTER-------- -->
    <?php include('./php/util/footer.php') ?>
    <!-- ----------FOOTER-------- -->
</body>
<?php include('./php/util/script.php') ?>

</html>