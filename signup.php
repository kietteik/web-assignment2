<?php include('./php/util/header.php') ?>

<body>
    <style>
        .section {
            position: absolute;
            background-color: var(--white-card);
            background-blend-mode: screen;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            opacity: 0.8;
        }
    </style>
    <div id="top" class="firstsection">
        <div class="introduce">
            <div class="head-background product-background"></div>
            <div class="overlay-background"></div>
            <?php include('./php/util/navbar.php') ?>
            <div class="section container py-4 border-dark">
                <div class="login-section">
                    <h1>SignUp Page</h1>
                    <div class="row">
                        <div class="wow fadeInUp col-12 contact-form" data-wow-delay="0.8s">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="name" placeholder="Name" />
                                </div>
                                <div class="col-6">
                                    <input type="email" class="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <textarea class="message" rows="4" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <button class="blue-button">SEND IT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!--------------- footer ends here --------------->
<?php include('./php/util/footer.php'); ?>
</body>
<?php include('./php/util/script.php'); ?>


</html>