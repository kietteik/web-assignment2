<?php require_once './php/controller/user_session.php'; ?>
<?php include('./php/util/header.php') ?>

<body>
    <link rel="stylesheet" href="./css/product.css">

    <script src="https://unpkg.com/shufflejs@5"></script>
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
                    <div class="list-group" id="show-list">
                    </div>
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
    <!--------------- FIRST SECTION --------------->
    <br />
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
    <?php include '../classes/vitri.php';
    include '../classes/product.php';
    include '../classes/comment.php';
    include_once '../helper/format.php';

    $cmt = new comment();
    $pd = new product();
    $loc = new vitri();
    $fm = new Format();
    if (isset($_POST['send-comment'])) {
        if (isset($_SESSION['userId'])) {
            $cmt_msg = $cmt->insert_comment($_POST);
        } else {
            echo '<script>alert("Login required!")</script>';
        }
    }

    // HAVE ID -> SHOW PRODUCT DETAIL PAGE
    if (isset($_GET['pdid'])) {
        $id = $_GET['pdid'];
        $result_get = $pd->getproductbyId($id);
        if ($result_get) {
            $result = $result_get->fetch_assoc()
    ?>
            <!--------------- DETAILS --------------->
            <br>
            <div class="container-lg">
                <div class="line-header">
                    <div class="line"></div>
                    <div class="header2 center">Product Details</div>
                    <div class="line"></div>
                </div>
            </div>
            <br>
            <div class="container-lg">
                <div class="badge badge-secondary ml-2" style="font-size: 1rem; text-transform:lowercase; font-weight:500">Reserve First & Pay Later</div>
                <div class="header1 py-0"><?php echo $result['productName']; ?></div>
                <p class="after-header small black-text"><i class="fas fa-map-marker-alt medium" aria-hidden="true"></i>
                    at <a href="location.php?locid=<?php echo $result['vitriId']; ?>"><?php echo $result['vitriName']; ?></a>
                </p>
            </div>
            <div class="section">
                <div class="container-lg">
                    <div id="owl-picture" class="owl-carousel">
                        <div class="wow fadeIn flex-item" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="comment-card">
                                <picture class="core-photo">
                                    <img src="../adminSide/uploads/<?php echo $result['productImage']; ?>" alt="" />
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
                            <?php echo $result['product_desc']; ?>
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
                <div class="header2">
                    <?php
                    if (isset($cmt_msg))
                        echo $cmt_msg;
                    ?>
                </div>
                <div class="comments">

                    <div class="comment-wrap">
                        <div class="photo">
                            <div class="avatar" style="background-image: url('<?php if (isset($_SESSION['userImage'])) echo './uploads/' . $_SESSION['userImage'];
                                                                                else echo "./uploads/defaultavatar.png"; ?>')"></div>
                        </div>
                        <div class="comment-block">

                            <form method="POST" action="product.php?pdid=<?php echo $result['productId'] ?>">
                                <input type="hidden" name="productId" value="<?php echo $result['productId'] ?>">
                                <textarea name="comment-content" id="" cols="30" rows="3" placeholder="Add comment..."></textarea>
                                <button class="blue-button float-right my-1" type="submit" name="send-comment">Send</button>
                            </form>
                        </div>
                    </div>

                    <?php
                    $cmtShows = $cmt->getCommentByProduct();
                    if ($cmtShows) {
                        while ($cmtShow = $cmtShows->fetch_assoc()) {

                    ?>
                            <div class="comment-wrap">
                                <div class="photo">
                                    <div class="avatar" style="background-image: url('./uploads/<?php echo $cmtShow['userImage'] ?>') "></div>
                                </div>
                                <div class="comment-block">
                                    <div class="medium black-text"><?php echo $cmtShow['userUser'] ?></div>
                                    <p class="comment-text"><?php echo $cmtShow['comment_content'] ?></p>
                                    <div class="bottom-comment">
                                        <div class="comment-date text-muted small"><?php echo $fm->formatDate($cmtShow['comment_createdDate']) ?></div>
                                        <!-- <ul class="comment-actions text-muted small">
                                    <li class="complain">Complain</li>
                                    <li class="reply">Reply</li>
                                </ul> -->
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>

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
                <a href="#more">
                    <div class="header2 center">
                        <span class="blue-text">More</span> at <?php echo $result['vitriName'] ?> >
                    </div>
                </a>
            </div>
            <div class="wow fadeInUp section" data-wow-offset="300" data-wow-duration="1.5s">
                <div class="container-lg">
                    <div id="more" class="line-header">
                        <div class="header2 center">Activities</div>
                        <div class="line"></div>
                    </div>
                    <div class="owl-carousel product-shortlist">
                        <?php
                        $pdListByLocs = $pd->getproductbyvitriId($result['vitriId']);
                        while ($pdListByLoc = $pdListByLocs->fetch_assoc()) {
                        ?>
                            <div class="product-container">
                                <div class="product-image">
                                    <img src="../adminSide/uploads/<?php echo $pdListByLoc['productImage'] ?>" alt="product-image" />
                                </div>
                                <div class="category"><?php echo $pdListByLoc['productName'] ?></div>
                                <a href="product.php?pdid=<?php echo $pdListByLoc['productId'] ?>">
                                    <p>Read more ></p>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <br />
            <!--------------- ADDING --------------->
        <?php
        } else {
            echo '<div class="header2 center">Product Not Found</div>';
        }
        // NOTE HAVE ID -> SHOW ALL PRODUCTS
    } else {
        ?>
        <div class="section">
            <div class="container-lg">
                <h1>Products</h1>
                <p class="after-header center">
                    Places to see, ways to wander, and signature experiences.
                </p>
                <div class="row">
                    <div class="col-4@sm col-3@md">
                        <div class="filters-group">
                            <label for="filters-search-input" class="filter-label">Search</label>
                            <input class="textfield filter__search js-shuffle-search" type="search" id="filters-search-input" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12@sm filters-group-wrap">
                        <div class="filters-group">
                            <p class="filter-label">Filter</p>
                            <div class="btn-group filter-options">
                                <button class="btn btn--primary" data-group="Hà Nội">Ha Noi</button>
                                <button class="btn btn--primary" data-group="Hội An">Hoi An</button>
                                <button class="btn btn--primary" data-group="Phú Quốc">Phu Quoc</button>
                                <button class="btn btn--primary" data-group="Đà Nẵng">Đa nang</button>
                            </div>
                        </div>
                        <fieldset class="filters-group">
                            <legend class="filter-label">Sort</legend>
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
            <div class="container-fluid">
                <?php
                $results_per_page = 100;
                $pdByLocs = $pd->showAllProduct($results_per_page);
                if ($pdByLocs) { ?>
                    <div id="grid" class="row wow fadeInUp my-shuffle-container">
                        <?php
                        while ($pdByLoc = $pdByLocs->fetch_assoc()) {
                        ?>
                            <figure class="col-3@xs col-4@sm col-4@md picture-item picture-item--h2" data-groups='["<?php echo $pdByLoc['vitriName'] ?>"]' data-date-created="2017-04-30" data-title="<?php echo $pdByLoc['productName'] ?>">
                                <div class="picture-item__inner">
                                    <div class="aspect">
                                        <div class="aspect__inner">
                                            <img src="../adminSide/uploads/<?php echo $pdByLoc['productImage'] ?>" srcset="<?php echo $pdByLoc['productName'] ?> 1x,<?php echo $pdByLoc['productName'] ?> 2x" alt="" />
                                        </div>
                                    </div>
                                    <div class="picture-item__details">
                                        <figcaption class="picture-item__title blue-text"><a href="product.php?pdid=<?php echo $pdByLoc['productId'] ?>" target="_blank" rel="noopener"><?php echo $pdByLoc['productName'] ?></a></figcaption>
                                        <p class="picture-item__tags hidden@xs black-text"><?php echo $pdByLoc['vitriName'] ?></p>
                                    </div>
                                    <p class="picture-item__description black-text after-header small my-3 px-3"><?php echo $pdByLoc['product_desc'] ?></p>
                                </div>
                            </figure>
                    <?php }
                    } else {
                        "Nothing to Show";
                    } ?>
                    </div>
            </div>
        </div>
        <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
        <script src='https://unpkg.com/shufflejs@5'></script>
        <script src="./js/sufflejs.js"></script>
        <script>
            $(document).ready(function() {
                $("#search").on('keyup', function() {
                    // console.log('keyup')
                    var search = $(this).val();
                    if (search != '') {
                        $.ajax({
                            type: "post",
                            url: "searchBar.php",
                            data: {
                                query: search,
                            },
                            success: function(response) {
                                $("#show-list").html(response)
                            }
                        });
                    } else {
                        $("#show-list").html('');
                    }
                })
            })
        </script>

    <?php }
    ?>
    <!--------------- FOOTER --------------->
    <?php include('./php/util/footer.php') ?>
    <!--------------- FOOTER --------------->
</body>
<?php include('./php/util/script.php') ?>


</html>