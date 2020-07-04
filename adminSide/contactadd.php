<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/contact.php';?>

<?php 
    $contact = new contact();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $insertcontact = $contact->insert_contact($_POST);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm mới liên hệ</h2>
        <div class="block copyblock"> 
        <?php 
            if(isset($insertcontact))
                echo $insertcontact;
        ?>             
         <form action="contactadd.php" id="contactform" method="post" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td>
                        <label>Tên liên hệ</label>
                    </td>
                    <td>
                        <input type="text" name="contactName" placeholder="Nhập tên liên hệ..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Số điện thoai</label>
                    </td>
                    <td>
                        <input type="text" name="contactPhone" placeholder="Nhập số điện thoại..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email </label>
                    </td>
                    <td>
                        <label for="contactEmail" style="display: none;" >Please agree to our policy</label>
                        <input type="email" name="contactEmail" id="contactEmail" placeholder="Nhập email..." class="medium" />
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


