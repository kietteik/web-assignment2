<?php require_once './php/controller/user_session.php'; ?>
<?php include('./php/util/header.php') ?>

<body>
    <!--------------- section hero here --------------->
    <div id="top" class="firstsection">
        <div class="introduce">
            <div class="parallax head-background index-background"></div>
            <div class="parallax overlay-background"></div>
            <?php include('./php/util/navbar.php') ?>
        </div>
        <div class="search-section">
            <h1 class="searchbar-h1">Pick your next experiences</h1>
            <h3 class="searchbar-h3">
                It is not the destination where you end up but the mishaps
                and memories you create along the way
            </h3>
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
    <!--------------- section hero ends --------------->
    <!--------------- section PRODUCT starts --------------->
    <br />
    <div class="wow fadeInUp section" data-wow-offset="500" data-wow-duration="1.5s" id="products">
        <div class="container-md">
            <h1><a href="./product.html">Products</a></h1>
            <p class="after-header">
                Let's try our most popular categories
            </p>
            <div class="owl-carousel owl-theme owl-loaded product-shortlist">
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
            </div>
        </div>
    </div>
    <!--------------- section PRODUCT ends --------------->
    <!--------------- section ABOUT starts --------------->
    <div class="section">
        <div class="container-md about">
            <h1><a href="#">ABOUT US</a></h1>
            <br />
            <div class="prim-about-list">
                <div class="row hello">
                    <h3 class="wow fadeInUp col-lg-12" data-wow-delay="0.4s">
                        Hello!
                    </h3>
                </div>
                <div class="row hello">
                    <h4 class="wow fadeInUp col-lg-12" data-wow-delay="0.8s">
                        We are K.
                    </h4>
                </div>
                <div class="row">
                    <div class="wow fadeInUp col-lg-4 prim-object" data-wow-delay="1.5s">
                        <h4>Our Mission</h4>
                        <p>
                            Enabling customers to create moments together
                            with their loved ones. We create moments, we own
                            moments.
                        </p>
                    </div>
                    <div class="wow fadeInUp col-lg-4 prim-object" data-wow-delay="1.7s">
                        <h4>Our Promise</h4>
                        <p>
                            We deliver optimistic and diverse storytelling,
                            experiences, and points of view to our audience
                            of smart, curious.
                        </p>
                    </div>
                    <div class="wow fadeInUp col-lg-4 prim-object" data-wow-delay="1.9s">
                        <h4>Our Vibe</h4>
                        <p>
                            We make magic. We dream it, and then do
                            it—together—every day reinventing what's
                            possible.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- section ABOUT ends --------------->
    <!--------------- section OURTEAM starts --------------->
    <br>
    <div class="section">
        <div class="container-md about">
            <h1><a href="#">OUR TEAM</a></h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="wow fadeInUp card profile-card-3" data-wow-delay="0.4s">
                        <div class="background-block">
                            <img src="./image/liam-simpson-umycmizZHn8-unsplash.jpg" class="background" />
                        </div>
                        <div class="profile-thumb-block">
                            <img src="./image/DSC07917.jpg" alt="profile-image" class="profile" />
                        </div>
                        <div class="card-content">
                            <h2>NguyenTK<small>Designer</small></h3>
                                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="wow fadeInDown profile-card-3" data-wow-delay="0.6s">
                        <div class="background-block">
                            <img src="./image/larg/med-l-josh-nezon-R1Zb58LmwIY-unsplash.jpg" class="background" />
                        </div>
                        <div class="profile-thumb-block">
                            <img src="./image/DSC07917.jpg" alt="profile-image" class="profile" />
                        </div>
                        <div class="card-content">
                            <h2>NTuanK<small>Developer</small></h3>
                                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="wow fadeInUp card profile-card-3" data-wow-delay="0.8s">
                        <div class="background-block">
                            <img src="./image/smallDaLat/small-thai-an-gOp1aMEDeFs-unsplash.jpg" class="background" />
                        </div>
                        <div class="profile-thumb-block">
                            <img src="./image/DSC07917.jpg" alt="profile-image" class="profile" />
                        </div>
                        <div class="card-content">
                            <h2>NTKiet<small>Planner</small></h3>
                                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- section OURTEAM ends --------------->
    <!--------------- section CONTACT starts --------------->
    <br />
    <div class="section">
        <div class="container contact-section">
            <h1>GET IN TOUCH w US</h1>
            <p class="after-header">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Nemo est quod fuga eum! Odio, repellat libero molestiae qui
                voluptatibus dolorum magni quidem unde iste adipisci
                corporis dolores maxime magnam. Nam.
            </p>
            <div class="row">
                <div class="wow fadeInUp col-lg-4 normal get-in-touch " data-wow-delay="0.4s">
                    <h4 class="vertical-align center">
                        Have an idea you'd like to collab with us?<br> Please
                        get in touch.
                    </h4>
                </div>
                <div class="wow fadeInUp col-lg-8 contact-form vertical-align" data-wow-delay="0.8s">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="text-input" placeholder="Name" />
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="text-input" placeholder="Email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea class="text-input" rows="4" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <button class="blue-button">SEND IT</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------- section CONTACT ends --------------->
    <!--------------- footer starts here --------------->
    <br>
    <br>
    <?php include('./php/util/footer.php') ?>

    <!--------------- footer ends here --------------->
</body>
<?php include('./php/util/script.php') ?>

</html>