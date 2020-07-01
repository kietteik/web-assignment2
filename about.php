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

        .head-background,
        .overlay-background,
        .firstsection {
            height: 80px;
        }

        .section h1 {
            color: var(--secondary-black);
            text-transform: uppercase;
            font-size: 32px;
            font-weight: 800;
            padding: 0 10px;
            margin: 0 auto;
            text-align: center;
        }

        .after-header {
            text-align: center;
        }

        .paralax-image {
            height: 100vh;
            width: auto;
            border-radius: 10px 10px 0 0;
            height: 300px;
            background: url(./image/larg/larg-daniel-gonzalez-uijNK8ySOw8-unsplash.jpg);
            background-attachment: fixed;
            background-size: cover;
        }

        .prim-about-list {
            border-radius: 0 0 10px 10px;
        }
    </style>
    <!--------------- section 1 here --------------->
    <div id="top" class="firstsection">
        <div class="introduce">
            <div class="head-background product-background"></div>
            <div class="overlay-background"></div>
            <?php include('./php/util/navbar.php') ?>

        </div>
    </div>
    <br />
    <br />
    <!--------------- section 1 ends --------------->
    <!--------------- section ABOUT starts --------------->
    <div class="section">
        <div class="container-lg about">
            <h1 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.6s">
                <a href="#">ABOUT US</a>
            </h1>
            <br />
            <div class="row hello">
                <h3 class="wow fadeInUp col-lg-12">
                    Hello!
                </h3>
            </div>
            <div class="row hello">
                <h4 class="wow fadeInUp col-lg-12" data-wow-duration="1s" data-wow-delay="0.8s">
                    We are K.
                </h4>
                <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                    Welcome to K., your number one source for all things
                    [product]. We're dedicated to giving you the very best
                    of [product], with a focus on [store characteristic 1],
                    [store characteristic 2], [store characteristic 3].
                    <br />
                    <br />
                    Founded in [year] by [founder name], K. has come a long
                    way from its beginnings in [starting location]. When
                    [founder name] first started out, [his/her/their]
                    passion for [brand message - e.g. "eco-friendly cleaning
                    products"] drove them to [action: quit day job, do tons
                    of research, etc.] so that K. can offer you [competitive
                    differentiator - e.g. "the world's most advanced
                    toothbrush"]. We now serve customers all over [place -
                    town, country, the world], and are thrilled that we're
                    able to turn our passion into [my/our] own website.
                    <br />
                    <br />
                    [I/we] hope you enjoy [my/our] products as much as
                    [I/we] enjoy offering them to you. <br />
                    If you have any questions or comments, please don't
                    hesitate to contact [me/us]. <br />
                    <br />
                    Sincerely, [founder name]
                </p>
            </div>
            <br />
            <br />
            <div class="paralax-image"></div>
            <div class="prim-about-list">
                <div class="row">
                    <div class="wow fadeInUp col-lg-4 prim-object" data-wow-delay="0.1s" data-wow-offset="300">
                        <h4>Our Mission</h4>
                        <p>
                            Enabling customers to create moments together
                            with their loved ones. We create moments, we own
                            moments.
                        </p>
                    </div>
                    <div class="wow fadeInUp col-lg-4 prim-object" data-wow-delay="0.3s" data-wow-offset="300">
                        <h4>Our Promise</h4>
                        <p>
                            We deliver optimistic and diverse storytelling,
                            experiences, and points of view to our audience
                            of smart, curious.
                        </p>
                    </div>
                    <div class="wow fadeInUp col-lg-4 prim-object" data-wow-delay="0.5s" data-wow-offset="300">
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
    <!--------------- section PRODUCTS starts --------------->
    <br />
    <div class="wow fadeInUp section" data-wow-offset="300">
        <div class="container-fluid">
            <h1><a href="./product.html">Products</a></h1>
            <p class="after-header">
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
            </div>
        </div>
    </div>
    <br />
    <!--------------- section PRODUCTS ends --------------->
    <!--------------- footer starts here --------------->
    <?php include('./php/util/footer.php'); ?>
    <!--------------- footer ends here --------------->
</body>
<?php include('./php/util/script.php'); ?>


</html>