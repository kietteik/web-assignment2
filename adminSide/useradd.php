<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/user.php';?>

<?php 
    $user = new user();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $insertuser = $user->insert_user($_POST,$_FILES);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm mới người dùng</h2>
        <div class="block copyblock"> 
        <?php 
            if(isset($insertuser))
                echo $insertuser;
        ?>             
         <form action="useradd.php" method="post" enctype="multipart/form-data" id="userform">
            <table class="form" id="example">
                <tr>
                    <td>
                        <label>Tên người dùng</label>
                    </td>
                    <td>
                        <input type="text" name="userName" placeholder="Nhập tên người dùng..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tài khoản</label>
                    </td>
                    <td>
                        <input type="text" name="userUser" placeholder="Nhập tài khoản..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Mật khẩu </label>
                    </td>
                    <td>
                        <input type="password" name="userPass" placeholder="Nhập mật khẩu..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="Email" name="userEmail" placeholder="Nhập email..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Trạng thái</label>
                    </td>
                    <td>
                        <select id="select" name="type">
                            <option>Chọn trạng thái</option>
                            <option selected value="1">Kích hoạt</option>
                            <option value="0">Khóa</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Lưu" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


