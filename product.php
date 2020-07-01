<?php require_once './php/controller/user_session.php'; ?>
<?php include('./php/util/header.php') ?>

<body>
    <style>
        .head-background,
        .overlay-background,
        .firstsection {
            height: 50vh;
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
            text-align: center;
        }

        .owl-carousel-navlist .owl-nav {
            display: none !important;
        }

        .owl-carousel-navlist .owl-dots {
            display: none !important;
        }

        /* -----NAV BUTTON----- */
    </style>
    <!--------------- FIRST SECTION --------------->
    <div id="top" class="firstsection">
        <div class="introduce">
            <div class="parallax head-background product-background"></div>
            <div class="parallax overlay-background"></div>
            <?php include('./php/util/navbar.php') ?>

        </div>
        <div class="wow fadeInDown search-section" data-wow-offset="5" data-wow-duration="5s">
            <h1 class="searchbar-h1">Pick your next experiences</h1>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control searchbar" id="search" placeholder="What do you want to try?" />
                    <button type="submit" class="blue-button mt-4">
                        Search
                    </button>
                </div>
            </form>
        </div>
        <section id="scroller" class="demo">
            <a href="#products"><span></span></a>
        </section>
    </div>
    <br />
    <br />
    <!--------------- FIRST SECTION --------------->
    <!--------------- NAV BUTTONs --------------->
    <div class="container-lg">
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
    <!--------------- NAV BUTTONs --------------->
    <!--------------- BIG PRODUCTS --------------->
    <div class="wow fadeInUp section" data-wow-duration="1.5s" id="products">
        <div class="container-lg">
            <h1><a href="./product.html">Products</a></h1>
            <p class="after-header center">
                Let's try our most popular categories
            </p>
            <div class="owl-carousel product-shortlist">
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/harley-davidson-56R8TzG7Lzc-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Phu Quoc</div>
                    <a href="#">
                        <p>Read more ></p>
                    </a>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/liam-simpson-umycmizZHn8-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Ha Giang</div>
                    <a href="#">
                        <p>Read more ></p>
                    </a>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/jonathan-simcoe-exB4bFhUshM-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">An Giang</div>
                    <a href="#">
                        <p>Read more ></p>
                    </a>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/chuttersnap-Cwk4lprGKbk-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Hoi An</div>
                    <a href="#">
                        <p>Read more ></p>
                    </a>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/harley-davidson-56R8TzG7Lzc-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Phu Quoc</div>
                    <a href="#">
                        <p>Read more ></p>
                    </a>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/liam-simpson-umycmizZHn8-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Ha Giang</div>
                    <a href="#">
                        <p>Read more ></p>
                    </a>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/jonathan-simcoe-exB4bFhUshM-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">An Giang</div>
                    <a href="#">
                        <p>Read more ></p>
                    </a>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/chuttersnap-Cwk4lprGKbk-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Hoi An</div>
                    <a href="#">
                        <p>Read more ></p>
                    </a>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/jonathan-simcoe-exB4bFhUshM-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">An Giang</div>
                    <a href="#">
                        <p>Read more ></p>
                    </a>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/chuttersnap-Cwk4lprGKbk-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Hoi An</div>
                    <a href="#">
                        <p>Read more ></p>
                    </a>
                </div>
                <!-- -------adding clone------- -->
            </div>
        </div>
    </div>
    <!--------------- BIG PRODUCTS --------------->
    <!--------------- KEEP PLANING --------------->
    <div class="wow fadeIn section">
        <div class="container-sm">
            <div class="line-header">
                <div class="line"></div>
                <div class="header2 center">Keep Planning</div>
                <div class="line"></div>
            </div>
            <div class="row plan">
                <div class="col-sm-6 plan-request">
                    <div class="header3 white-text">
                        Start saving your travel ideas
                    </div>
                    <p class="after-header white-text small">
                        Create a Trip to save and organize all of your
                        travel ideas, and see them on a map
                    </p>
                    <div class="blue-button">Create a trip</div>
                </div>
                <div class="col-sm-6 plan-map">
                    <img class="fluid-img" src="./image/image_trips_card_medium.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!--------------- KEEP PLANING --------------->
    <!--------------- LATEST POSTs --------------->
    <div class="section">
        <div class="container-lg">
            <div class="line-header">
                <div class="line"></div>
                <div class="header2 center">Latest Posts</div>
                <div class="line"></div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="owl-comments" class="owl-carousel flex-display">
                <div class="wow fadeIn flex-item" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="comment-card">
                        <picture class="core-photo">
                            <img src="./image/items/1.jpg" alt="" />
                        </picture>
                        <div class="comment-user">
                            <div class="comment-user-img">
                                <img src="./image/harley-davidson-56R8TzG7Lzc-unsplash.jpg" />
                            </div>
                            <div class="comment-user-info">
                                <div class="comment-username black-text">
                                    kietteik
                                </div>
                                <p class="after-header small gray-text clear-margin">
                                    Bac Lieu
                                </p>
                            </div>
                        </div>
                        <div class="comment-content black-text">
                            This is ther first time Lorem ipsum dolor sit
                            amet consectetur adipisicing elit
                        </div>
                    </div>
                </div>
                <div class="wow fadeIn flex-item" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="comment-card">
                        <picture class="core-photo">
                            <img src="./image/items/2.jpg" alt="" />
                        </picture>
                        <div class="comment-user">
                            <div class="comment-user-img">
                                <img src="./image/jonathan-simcoe-exB4bFhUshM-unsplash.jpg" />
                            </div>
                            <div class="comment-user-info">
                                <div class="comment-username black-text">
                                    kietteik1
                                </div>
                                <p class="after-header small gray-text clear-margin">
                                    Ha Noi
                                </p>
                            </div>
                        </div>
                        <div class="comment-content black-text">
                            Perferendis nihil maxime, nisi voluptatem soluta
                            repudiandae libero nesciunt?...
                        </div>
                    </div>
                </div>
                <div class="wow fadeIn flex-item" data-wow-duration="1s" data-wow-delay="1.2s">
                    <div class="comment-card">
                        <picture class="core-photo">
                            <img src="./image/items/3.jpg" alt="" />
                        </picture>
                        <div class="comment-user">
                            <div class="comment-user-img">
                                <img src="./image/tim-graf-ErO0E8wZaTA-unsplash.jpg" />
                            </div>
                            <div class="comment-user-info">
                                <div class="comment-username black-text">
                                    kietteik2
                                </div>
                                <p class="after-header small gray-text clear-margin">
                                    An Giang
                                </p>
                            </div>
                        </div>
                        <div class="comment-content black-text">
                            Veniam doloribus voluptate voluptatum placeat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- LATEST POST --------------->
    <!--------------- ADDING --------------->
    <div class="container-lg">
        <a href="#phuquoc">
            <div class="header2 center">
                <span class="blue-text">More</span> activities >
            </div>
        </a>
    </div>
    <div class="wow fadeInUp section" data-wow-offset="300" data-wow-duration="1.5s">
        <div class="container-lg">
            <div id="phuquoc" class="line-header">
                <div class="header2 center">Phu Quoc</div>
                <div class="line"></div>
                <p class="after-header center clear-margin">
                    <span class="blue-text">Bloose </span>
                    yourself..
                </p>
            </div>
            <div class="owl-carousel product-shortlist">
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/smallDaLat/small-trinity-treft-oGOCywp_chE-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Diving</div>
                    <p>Read more ></p>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/smallDaLat/small-thai-an-gOp1aMEDeFs-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Treking</div>
                    <p>Read more ></p>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/smallDaLat/small-thai-an-t3aYT9SoaPg-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Cooking</div>
                    <p>Read more ></p>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/liam-simpson-umycmizZHn8-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Swimming</div>
                    <p>Read more ></p>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/liam-simpson-umycmizZHn8-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Nothing</div>
                    <p>Read more ></p>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/liam-simpson-umycmizZHn8-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Bathing</div>
                    <p>Read more ></p>
                </div>
            </div>
        </div>
    </div>
    <div class="wow fadeInUp section" data-wow-offset="300" data-wow-duration="1.5s">
        <div class="container-lg">
            <div class="line-header">
                <div class="header2 center">An Giang</div>
                <div class="line"></div>
                <p class="after-header center clear-margin">
                    To the <span style="color: peru;">West..</span>
                </p>
            </div>
            <div class="owl-carousel product-shortlist">
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/liam-simpson-umycmizZHn8-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Diving</div>
                    <p>Read more ></p>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/harley-davidson-56R8TzG7Lzc-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Treking</div>
                    <p>Read more ></p>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/smallDaLat/small-trinity-treft-oGOCywp_chE-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Swimming</div>
                    <p>Read more ></p>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/smallDaLat/small-thai-an-gOp1aMEDeFs-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Cooking</div>
                    <p>Read more ></p>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/liam-simpson-umycmizZHn8-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Doing</div>
                    <p>Read more ></p>
                </div>
                <div class="product-container">
                    <div class="product-image">
                        <img src="./image/liam-simpson-umycmizZHn8-unsplash.jpg" alt="product-image" />
                    </div>
                    <div class="category">Bathing</div>
                    <p>Read more ></p>
                </div>
            </div>
        </div>
    </div>
    <br />
    <!--------------- ADDING --------------->

    <!--------------- FOOTER --------------->
    <?php include('./php/util/footer.php') ?>
    <!--------------- FOOTER --------------->
</body>
<?php include('./php/util/script.php') ?>


</html>