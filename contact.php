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
                            <input type="text" class="name" placeholder="Name" />
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea class="message" rows="4" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <button class="blue-button">SEND IT</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------- section CONTACT --------------->
    <!--------------- footer starts here --------------->

    <?php include('./php/util/footer.php') ?>
    <!--------------- footer ends here --------------->
</body>
<?php include('./php/util/script.php') ?>

</html>