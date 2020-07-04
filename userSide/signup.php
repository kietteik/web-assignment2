<?php require_once './php/controller/user_session.php'; ?>
<?php include('./php/util/header.php') ?>

<body>
    <style>
        .section {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .login-section {
            opacity: 0.9;
            border-radius: 10px;
            background-color: var(--white-card);
        }
    </style>
    <div id="top" class="firstsection">
        <div class="introduce">
            <div class="head-background product-background parallax"></div>
            <div class="overlay-background"></div>
            <?php include('./php/util/navbar.php') ?>
            <div class="section container">
                <div class="login-section py-5 col-10 mx-auto">
                    <div class="row">
                        <div class="col-1"></div>
                        <h1>SignUp
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="badge badge-secondary ml-2" style="font-size: 1rem; text-transform:lowercase; font-weight:500">fill out the form</div>
                    </div>
                    <form action="signup.php" method="post">
                        <div class="row py-4">
                            <div class="wow fadeInUp col-12 contact-form" data-wow-delay="0.8s">
                                <div class="row">
                                    <div class="col-5 ml-auto">
                                        <input name="regis-name" type="text" class="text-input" placeholder="Name" />
                                    </div>
                                    <div class="col-5 mr-auto">
                                        <input name="regis-email" type="email" class="text-input" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10 mx-auto">
                                        <input name="regis-username" class="text-input" placeholder="Username"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10 mx-auto">
                                        <input name="regis-password" type="password" class="text-input" placeholder="Password"></input>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button name="regis-button" class="blue-button mx-auto">sign up</button>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-1"></div>
                                    <?php if (count($error) > 0) : ?>
                                        <div>
                                            <?php foreach ($error as $er) : ?>
                                                <p class="darkblue-text"><?php echo $er ?></p>
                                            <?php endforeach ?>
                                        </div>
                                    <?php endif ?>
                                    <?php if (isset($_SESSION['signup-success'])) : ?>
                                        <script>
                                            alert('<?php echo $_SESSION['signup-success'] ?>');
                                            window.location.replace("index.php");
                                        </script>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </form>
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