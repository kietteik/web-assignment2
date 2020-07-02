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

        input,
        textarea {
            outline: none;
            border: none;
            display: block;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 1rem;
            color: black;
        }

        input::-webkit-input-placeholder,
        textarea::-webkit-input-placeholder {
            color: black;
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            color: black;
        }

        input:-moz-placeholder,
        textarea:-moz-placeholder {
            color: black;
        }

        input:-ms-input-placeholder,
        textarea:-ms-input-placeholder {
            color: black;
        }

        p {
            line-height: 1.3125rem;
        }

        .comments {
            margin: 2.5rem auto 0;
            max-width: 60.75rem;
            padding: 0 1.25rem;
        }

        .comment-wrap {
            margin-bottom: 1.25rem;
            display: table;
            width: 100%;
            min-height: 5.3125rem;
        }

        .photo {
            padding-top: 0.625rem;
            display: table-cell;
            width: 3.5rem;
        }

        .photo .avatar {
            height: 2.25rem;
            width: 2.25rem;
            border-radius: 50%;
            background-size: contain;
        }

        .comment-block {
            padding: 1rem;
            background-color: #fff;
            display: table-cell;
            vertical-align: top;
            border-radius: 0.1875rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.08);
        }

        .comment-block textarea {
            width: 100%;
            resize: none;
        }

        .comment-text {
            margin-bottom: 1.25rem;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: var(--secondary-black);
        }

        .bottom-comment {
            color: #acb4c2;
            font-size: 0.875rem;
        }

        .comment-date {
            float: left;
        }

        .comment-actions {
            float: right;
        }

        .comment-actions li {
            display: inline;
            margin: -2px;
            cursor: pointer;
            color: var(--secondary-black);
        }

        .comment-actions li.complain {
            padding-right: 0.75rem;
            border-right: 1px solid #e1e5eb;
        }

        .comment-actions li.reply {
            padding-left: 0.75rem;
            padding-right: 0.125rem;
        }

        .comment-actions li:hover {
            color: var(--primary-blue);
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
            <a href="#nav-btn"><span></span></a>
        </section>
    </div>
    <br />
    <br />
    <!--------------- FIRST SECTION --------------->

    <!--------------- NAV BUTTONs --------------->
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
    <!--------------- NAV BUTTONs --------------->
    <!--------------- DETAILS --------------->
    <br>
    <div class="container-lg">
        <div class="line-header">
            <div class="line"></div>
            <div class="header2 center">Product Details</div>
            <div class="line"></div>
        </div>
    </div>
    <div class="container-lg">
        <div class="badge badge-secondary ml-2" style="font-size: 1rem; text-transform:lowercase; font-weight:500">Reserve First & Pay Later</div>
        <div class="header2 py-0">Cooking class in Nha Trang</div>
        <p class="after-header small black-text"><i class="fas fa-map-marker-alt medium" aria-hidden="true"></i>
            at <a href="#">Nha Trang</a>
        </p>
    </div>
    <div class="section">
        <div class="container-lg">
            <div id="owl-picture" class="owl-carousel flex-display">
                <div class="wow fadeIn flex-item" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="comment-card">
                        <picture class="core-photo">
                            <img src="./image/items/1.jpg" alt="" />
                        </picture>
                    </div>
                </div>
                <div class="wow fadeIn flex-item" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="comment-card">
                        <picture class="core-photo">
                            <img src="./image/items/2.jpg" alt="" />
                        </picture>
                    </div>
                </div>
                <div class="wow fadeIn flex-item" data-wow-duration="1s" data-wow-delay="1.2s">
                    <div class="comment-card">
                        <picture class="core-photo">
                            <img src="./image/items/3.jpg" alt="" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-6">
                <?php include('datepicker.php') ?>
            </div>
            <div class="col-lg-6">
                <div class="header2 medium">Overview</div>
                <div class="line col-10 mr-auto mb-3"></div>
                <p class="after-header small col-11">
                    This former colonial resort provides a respite from
                    Southern Vietnam's year-round swelter. The town is
                    full of beautiful French-era buildings and
                    surrounded by pine trees and farms growing exotic
                    vegetables and flowers. It's worth the trip just to
                    escape the heat for a few days.
                </p>
                <div class="header2 medium">What to expects</div>
                <div class="line col-10 mr-auto mb-3"></div>
                <p class=" after-header small col-11">
                    We pick up our clients at their hotel or meeting point then take them to the heartland of Nha Trang - visiting; Mat weaver's, enjoy local coffee, noodle factory to learn how they make Pho noodle, local market to shop ingredients, vegetable & herbs garden. We do all of this before we stop at Chef Dat's cooking place - Viet Garden to learn how to cook 03 authentic Vietnamese dishes, eating their creations then we take them back and drop at their hotel or meeting point.
                </p>

            </div>

        </div>
    </div>
    <!--------------- DETAILS --------------->

    <!--------------- REVIEWS --------------->
    <div class="container-lg">
        <div class="line-header">
            <div class="line"></div>
            <div class="header2 center">Reviews</div>
            <div class="line"></div>
        </div>
        <div class="comments">
            <div class="comment-wrap">
                <div class="photo">
                    <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
                </div>
                <div class="comment-block">
                    <form action="">
                        <textarea name="" id="" cols="30" rows="3" placeholder="Add comment..."></textarea>
                    </form>
                </div>
            </div>

            <div class="comment-wrap">
                <div class="photo">
                    <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>
                </div>
                <div class="comment-block">
                    <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi
                        sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</p>
                    <div class="bottom-comment">
                        <div class="comment-date text-muted small">Aug 24, 2014 @ 2:35 PM</div>
                        <ul class="comment-actions text-muted small">
                            <li class="complain">Complain</li>
                            <li class="reply">Reply</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="comment-wrap">
                <div class="photo">
                    <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/felipenogs/128.jpg')"></div>
                </div>
                <div class="comment-block">
                    <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam.</p>
                    <div class="bottom-comment">
                        <div class="comment-date text-muted small">Aug 23, 2014 @ 10:32 AM</div>
                        <ul class="comment-actions black-text">
                            <li class="complain">Complain</li>
                            <li class="reply">Reply</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--------------- REVIEWS --------------->


    <!--------------- KEEP PLANING --------------->
    <div class="wow fadeIn section">
        <div class="container-sm">
            <div class="line-header">
                <div class="line"></div>
                <div class="header2 center">Keep Sharing</div>
                <div class="line"></div>
            </div>
            <div class="row plan">
                <div class="col-sm-6 plan-request">
                    <div class="header3 white-text">
                        Share your travel ideas
                    </div>
                    <p class="after-header white-text small">
                        Create a Trip to save and organize all of your
                        travel ideas, and see them on a map
                    </p>
                    <div class="blue-button">Post a trip</div>
                </div>
                <div class="col-sm-6 plan-map">
                    <img class="fluid-img" src="./image/image_trips_card_medium.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!--------------- KEEP PLANING --------------->

    <!--------------- ADDING --------------->
    <div class="container-lg">
        <a href="#phuquoc">
            <div class="header2 center">
                <span class="blue-text">More</span> at Nha Trang >
            </div>
        </a>
    </div>
    <div class="wow fadeInUp section" data-wow-offset="300" data-wow-duration="1.5s">
        <div class="container-lg">
            <div id="phuquoc" class="line-header">
                <div class="header2 center">Activities</div>
                <div class="line"></div>
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
    <br />
    <!--------------- ADDING --------------->

    <!--------------- FOOTER --------------->
    <?php include('./php/util/footer.php') ?>
    <!--------------- FOOTER --------------->
</body>
<?php include('./php/util/script.php') ?>


</html>