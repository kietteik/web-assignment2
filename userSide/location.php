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
            $result = $result_get->fetch_assoc();
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

                    <?php
                    $pdByLocs = $pd->getproductbyvitriId($result['vitriId']);
                    if ($pdByLocs) { ?>
                        <h1>Essential in <?php echo $result['vitriName']; ?></h1>
                        <p class="after-header">
                            Places to see, ways to wander, and signature experiences.
                        </p>
                        <div class="row row-cols-1 row-cols-md-3">
                            <?php
                            while ($pdByLoc = $pdByLocs->fetch_assoc()) {
                            ?>
                                <div class="wow fadeInUp col my-4" data-wow-duration="2s">
                                    <div class="card profile-card-5">
                                        <div class="card-img-block">
                                            <img class="card-img-top" src="../adminSide/uploads/<?php echo $pdByLoc['productImage'] ?>" alt="Card image cap" />
                                        </div>
                                        <div class="card-body pt-0">
                                            <h5 class="card-title"><?php echo $pdByLoc['productName'] ?></h5>
                                            <p class="card-text">
                                                <?php echo $pdByLoc['product_desc'] ?>
                                            </p>
                                            <p>
                                                <span class="gray-text small">from</span>
                                                <strong class="black-text medium"><?php echo $pdByLoc['productPrice'] ?> vnđ
                                                </strong>
                                            </p>
                                            <a href="product.php?pdid=<?php echo $pdByLoc['productId'] ?>" class="btn btn-primary">Go <?php echo $pdByLoc['productName'] ?></a>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } else {
                            "Nothing to Show";
                        } ?>
                        </div>
                </div>
            </div>
            <!-- ESSENTIAL IN DALAT -->
        <?php
        } else {
            echo '<div class="header2 center">Location Not Found</div>';
        }
    } else {
        ?>
        <!-- LIST ALL LOCATIONS -->
        <br>
        <br>
        <div id="nav-btn" class="container-lg">
            <div class="owl-carousel-navlist owl-carousel owl-theme nav-button-list">
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
        <div class="section">
            <div class="container-lg">
                <h1 class="center">Locations</h1>
                <p class="after-header center">
                    Places to see, ways to wander, and signature experiences.
                </p>
                <div class="row">
                    <div class="col-6@sm col-6@md">
                        <div class="filters-group">
                            <label for="filters-search-input" class="filter-label medium">Search</label>
                            <input class="textfield filter__search js-shuffle-search" type="search" id="filters-search-input" />
                        </div>

                    </div>


                    <div class="filters-group-wrap ml-auto">
                        <fieldset class="filters-group">
                            <legend class="filter-label medium">Sort</legend>
                            <div class="btn-group sort-options">
                                <label class="btn active">
                                    <input type="radio" name="sort-value" value="dom" checked /> Default
                                </label>
                                <label class="btn">
                                    <input type="radio" name="sort-value" value="title" /> Title
                                </label>
                                <label class="btn">
                                    <input type="radio" name="sort-value" value="date-created" /> Date Created
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="container-lg my-4">
                <div id="grid" class="row wow fadeInUp my-shuffle-container">
                    <?php
                    $locList = $loc->show_vitri();
                    if ($locList) {
                        $i = 0;
                        while ($result = $locList->fetch_assoc()) {
                            $i++;
                    ?>
                            <figure class="col-4@xs col-6@sm col-6@md picture-item picture-item--h2" data-groups='city' data-date-created="2017-04-30" data-title="<?php echo $result['vitriName'] ?>">
                                <div class="picture-item__inner">
                                    <div class="card mb-3 profile-card-5 height280">
                                        <div class="row">
                                            <div class="card-img-block2 col-md-4 mx-auto">
                                                <img class="card-img" src="../adminSide/uploads/<?php echo $result['vitriImage'] ?>" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="picture-item__title card-title black-text"><?php echo $result['vitriName'] ?></h5>
                                                    <p class="card-text black-text height100"><?php echo $result['vitriName'] ?> is a beautiful place with many things to discover</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                                <div class="card-footer non-background float-right border-0">
                                                    <a class="blue-button btn" href="location.php?locid=<?php echo $result['vitriId'] ?>">Chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                    <?php

                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
        <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
        <script src='https://unpkg.com/shufflejs@5'></script>
        <script src="./js/sufflejs.js"></script>
    <?php


    }
    ?>

    <!-- ----------FOOTER-------- -->
    <?php include('./php/util/footer.php') ?>
    <!-- ----------FOOTER-------- -->
</body>
<?php include('./php/util/script.php') ?>

</html>