<?php require_once './php/controller/user_session.php'; ?>
<?php include('./php/util/header.php') ?>

<body class="product-background">
    <link rel="stylesheet" href="./css/profile.css">
    <!--------------- NAV here --------------->
    <div id="top" class="firstsection">
        <div class="introduce">
            <!-- <div class="head-background product-background"></div>
            <div class="overlay-background"></div> -->
            <?php include('./php/util/navbar.php') ?>
        </div>
    </div>
    <br><br>

    <?php
    include '../classes/product.php';
    include '../classes/comment.php';
    include_once '../helper/format.php';
    include '../classes/user.php';

    $fm = new Format();
    $cmt = new comment();
    $pd = new product();
    $user = new user();

    if (isset($_GET['uid'])) {
    }

    if (isset($_SESSION['userId'])) {
        $id = $_SESSION['userId'];
        $findUser = $user->getuserbyId($id);
        $thisUser = $findUser->fetch_assoc();
    ?>
        <!--------------- NAV ends --------------->
        <div class="container emp-profile">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img preview">
                        <img id="img" src="./uploads/<?php echo $thisUser['userImage'] ?>" alt="" />
                        <div class="file btn btn-lg blue-button">
                            Change Photo
                            <form method="post" action="" enctype="multipart/form-data" id="myform">
                                <input id="avatar" class="btn btn-lg blue-button" type="file" name="avatar" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="profile-head">
                        <h5>
                            <?php echo $thisUser['userName'] ?>
                        </h5>
                        <p class="proile-rating">CREATED ON: <br><span><?php echo $fm->formatDate($thisUser['userCreateOn']) ?></span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Latest Posts</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <button id="edit-button" type="button" class="blue-button ml-auto my-1" data-toggle="modal" data-target="#exampleModal">Edit Profile</button>
                    </div>
                    <div class="row">
                        <button id="change-password" class="blue-button ml-auto my-1" data-toggle="modal" data-target="#passwordModal">Change Password</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>LINKS</p>
                        <a <?php if (empty($thisUser['userFb'])) echo 'class="text-muted"';
                            else echo 'href="', $thisUser['userFb'], '"'  ?>>Facebook</a><br />
                        <a <?php if (empty($thisUser['userInsta'])) echo 'class="text-muted"';
                            else echo 'href="', $thisUser['userInsta'], '"'  ?>>Instagram</a><br />
                        <a <?php if (empty($thisUser['userTwitter'])) echo 'class="text-muted"';
                            else echo 'href="', $thisUser['userTwitter'], '"'  ?>>Twitter</a><br />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $thisUser['userName'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $thisUser['userPhone'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $thisUser['userEmail'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $thisUser['userAddress'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <?php
                            $cmtShows = $cmt->getCommentByUser($_SESSION['userId']);
                            if ($cmtShows) {
                                while ($cmtShow = $cmtShows->fetch_assoc()) {
                            ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>On <?php echo $fm->formatDate($cmtShow['comment_createdDate']) ?></label>
                                        </div>
                                        <div class="col-md-6">
                                            <a <?php echo 'href="product.php?pdid=', $cmtShow['productId'], '"' ?>><?php echo $cmtShow['productName'] ?></a>
                                            <p class="small"><?php echo $cmtShow['comment_content'] ?></p>
                                        </div>
                                    </div>
                            <?php }
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form class="needs-validation" novalidate>
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="profile-head">
                                    <div class="col-md-4 align-center">
                                        <label for="">Hello</label>
                                    </div>
                                    <div class="col-md-4 mr-auto">
                                        <p><?php echo $thisUser['userName'] ?></p>
                                    </div>
                                    <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#modal-profile" role="tab" aria-controls="home" aria-selected="true">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#modal-links" role="tab" aria-controls="profile" aria-selected="false">Links</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="tab-content profile-tab col-12" id="myTabContent">
                                    <div class="tab-pane fade show active" id="modal-profile" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input required name="userName" id="edit-name" type="text" class="editable my-1 form-control" value="<?php echo $thisUser['userName'] ?>">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="userPhone" id="edit-phone" type="tel" class="editable my-1 form-control" value="<?php echo $thisUser['userPhone'] ?>">
                                                <div class="invalid-feedback">
                                                    Please provide a valid phone number.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input required name="userEmail" id="edit-email" type="email" class="editable my-1 form-control" value="<?php echo $thisUser['userEmail'] ?>">
                                                <div class="invalid-feedback">
                                                    Please provide a valid email.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="userAddress" id="edit-address" type="text" class="editable my-1 form-control" value="<?php echo $thisUser['userAddress'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="modal-links" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Facebook</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="userFb" id="edit-fb" type="url" class="editable my-1 form-control" value="<?php echo $thisUser['userFb'] ?>">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Link format https://www.expample.com
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Instagram</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="userInsta" id="edit-ig" type="url" class="editable my-1 form-control" value="<?php echo $thisUser['userInsta'] ?>">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Link format https://www.expample.com
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Twitter</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="userTwitter" id="edit-tw" type="url" class="editable my-1 form-control" value="<?php echo $thisUser['userTwitter'] ?>">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Link format https://www.expample.com
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div id="edit-return"></div>
                            <button type="button" class="signup-btn" data-dismiss="modal">Close</button>
                            <button id="save-edit-profile" type="button" class="blue-button">Save changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel" aria-hidden="true">
            <form id="pwdForm" novalidate>
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="passwordModalLabel">Change password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="tab-content profile-tab col-12" id="myTabContent">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Old password</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input required name="oldPassword" id="old-password" type="password" class="editable my-1 form-control pwd">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>New password</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input name="password" id="password" type="password" class="editable my-1 form-control pwd">
                                            <div class="invalid-feedback">
                                                Password too short
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Confirm password</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input required name="password2" id="password2" type="password" class="editable my-1 form-control pwd">
                                            <div class="invalid-feedback">
                                                Password does not match

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div id="editPwd-return"></div>
                            <button type="button" class="signup-btn" data-dismiss="modal">Close</button>
                            <button id="changePasswordButton" type="button" class="btn btn-primary blue-button" disabled>Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    <?php } ?>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#edit-button', function() {
                $('#edit-return').empty();
                $('#edit-return').hide();
            });

            (function() {
                'use strict';
                window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.classList.add('was-validated');
                            $("#save-edit-profile").on('click', function() {
                                console.log(form.checkValidity());
                                if (form.checkValidity()) {
                                    let name = $("#edit-name").val();
                                    let phone = $("#edit-phone").val();
                                    let email = $("#edit-email").val();
                                    let address = $("#edit-address").val();
                                    let fb = $("#edit-fb").val();
                                    let ig = $("#edit-ig").val();
                                    let tw = $("#edit-tw").val();
                                    console.log(fb);
                                    $('#edit-return').empty();
                                    $('#edit-return').hide();
                                    $.ajax({
                                        url: "./editProfile.php",
                                        type: "POST",
                                        data: {
                                            saveEditProfile: 1,
                                            name: name,
                                            phone: phone,
                                            email: email,
                                            address: address,
                                            fb: fb,
                                            ig: ig,
                                            tw: tw,
                                        },
                                        success: function(data) {
                                            // $('#edit-return').append(name);
                                            $('#edit-return').replaceWith(data);
                                            $('#edit-return').show();
                                        },
                                    });
                                } else {
                                    $('#edit-return').replaceWith('<div id="edit-return" class="alert alert-danger" role="alert">Please check your inputs</div>');
                                    $('#edit-return').show();
                                }
                            })
                        });
                    },
                    false);
            })();

            $('#old-password').on("keyup", function() {
                if ($(this).val().length == 0) {
                    $("#old-password").removeClass("is-valid").addClass("is-invalid");
                } else {
                    $("#old-password").removeClass("is-invalid").addClass("is-valid");
                }
            })
            $('#password').on("keyup", function() {
                if ($(this).val().length < 4) {
                    $("#password").removeClass("is-valid").addClass("is-invalid");
                } else {
                    $("#password").removeClass("is-invalid").addClass("is-valid");
                }
            })
            $("#password").on("focusout", function() {
                if ($(this).val() != $("#password2").val()) {
                    $("#password2").removeClass("is-valid").addClass("is-invalid");
                } else {
                    $("#password2").removeClass("is-invalid").addClass("is-valid");
                }
            });
            $("#password2").on("keyup", function() {
                if ($("#password").val() != $(this).val()) {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                } else {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                }
            });
            let currForm1 = document.getElementById('pwdForm');
            currForm1.querySelectorAll('.form-control.pwd').forEach(input => {
                input.addEventListener(('keyup'), () => {
                    // console.log($('.form-control.pwd').length);
                    // console.log($('.form-control.pwd.is-valid').length);
                    var is_valid = $('.form-control.pwd').length === $('.form-control.pwd.is-valid').length;
                    $("#changePasswordButton").attr("disabled", !is_valid);
                });
            });
            $("#changePasswordButton").on('click', function() {
                // console.log('click');
                let oldPwd = $("#old-password").val();
                let pwd = $("#password").val();
                let pwd2 = $("#password2").val();
                console.log(oldPwd);
                console.log(pwd);
                console.log(pwd2);
                $('#editPwd-return').empty();
                $('#editPwd-return').hide();
                $.ajax({
                    url: "./editProfile.php",
                    type: "POST",
                    data: {
                        changePasswordButton: 1,
                        oldPwd: oldPwd,
                        pwd: pwd,
                        pwd2: pwd2,
                    },
                    success: function(data) {
                        console.log(data)
                        $('#editPwd-return').replaceWith(data);
                        $('#editPwd-return').show();


                        if ($('#editPwd-return').hasClass('alert-warning')) {
                            $('#old-password').addClass("is-invalid")
                        }
                    },
                });
            })

            $('#avatar').on('change', function() {
                var fd = new FormData();
                var files = $('#avatar')[0].files[0];
                // console.log(files);
                if (files) {
                    fd.append('avatar', files);
                    // console.log(fd.getAll('avatar'));
                    $.ajax({
                        url: 'editProfile.php',
                        type: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            if (response != 0) {
                                $("#img").attr("src", response);
                                $(".preview img").show(); // Display image element
                            } else {
                                alert('file not uploaded');
                            }
                        },
                    });
                }
            })



        })
    </script>
    <br><br>
    <!--------------- footer starts here --------------->
    <?php include('./php/util/footer.php'); ?>
    <!--------------- footer ends here --------------->
</body>
<?php include('./php/util/script.php'); ?>


</html>