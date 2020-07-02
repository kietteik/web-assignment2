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

        .contact-form {
            margin: 0 auto;
            padding: 20px 10px;
        }

        .section h1 {
            color: var(--secondary-black);
            text-transform: uppercase;
            font-size: 32px;
            font-weight: 800;
            padding: 0 10px;
            margin: 20px auto;
            text-align: center;
        }

        p.after-header {
            text-align: justify;
            max-width: 800px;
            margin: 0 auto;
        }

        .getit h4 {
            color: var(--secondary-black);
        }

        .getit {
            border-radius: 10px;
            margin: 0 auto;
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
    <!--------------- section 1 ends --------------->
    <!--------------- section CONTACT starts --------------->
    <div class="section">
        <div class="container contact-section">
            <h1>GET IN TOUCH w US</h1>
            <p class="after-header">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Nemo est quod fuga eum! Odio, repellat libero molestiae qui
                voluptatibus dolorum magni quidem unde iste adipisci
                corporis dolores maxime magnam. Nam.
            </p>
            <br />
            <div class="row">
                <div class="wow fadeInUp col-lg-4 vertical-align normal get-in-touch" data-wow-delay="0.4s">
                    <h4 class="center vertical-align">
                        Have an idea you'd like to collab with us?<br />
                        Please get in touch.
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="wow fadeInUp col-lg-8 contact-form" data-wow-delay="0.8s">
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
    <!--------------- section CONTACT --------------->
    <!--------------- section PRODUCTS starts --------------->

    <div class="wow fadeInUp section" data-wow-offset="300">
        <div class="container-fluid">
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
            </div>
        </div>
    </div>

    <!--------------- section PRODUCTS ends --------------->
    <!--------------- footer starts here --------------->

    <?php include('./php/util/footer.php') ?>
    <!--------------- footer ends here --------------->
</body>
<?php include('./php/util/script.php') ?>

</html>