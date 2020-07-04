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
                        <h1 class="mx-auto">SignIn</h1>
                    </div>
                    <form action="login.php" method="post">
                        <div class="row py-4">
                            <div class="wow fadeInUp col-12 contact-form" data-wow-delay="0.8s">
                                <div class="row">
                                    <div class="col-8 mx-auto">
                                        <input name="login-username" class="text-input" placeholder="Username"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 mx-auto">
                                        <input name="login-password" type="password" class="text-input" placeholder="Password"></input>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button name="login-button" class="blue-button mx-auto">sign in</button>
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