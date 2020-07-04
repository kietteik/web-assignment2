<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/vitri.php';?>


<?php 
    $vitri = new vitri();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $insertvitri = $vitri->insert_vitri($_POST,$_FILES);
    }
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm mới vị trí</h2>
    <div class="block">       
        <?php 
            if(isset($insertvitri))
                echo $insertvitri;
        ?>         
         <form action="vitriadd.php" method="post" enctype="multipart/form-data" id="vitriform">
            <table class="form">     
                <tr>
                    <td>
                        <label>Tiêu đề</label>
                    </td>
                    <td>
                        <input type="text" name="vitriName" placeholder="Nhập tên vị trí..." class="medium" />
                    </td>
                </tr>           
    
                <tr>
                    <td>
                        <label>Hình ảnh</label>
                    </td>
                    <td>
                        <input type="file" name="image"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Trạng thái</label>
                    </td>
                    <td>
                        <select id="select" name="type">
                            <option>Chọn trạng thái</option>
                            <option value="1">Kích hoạt</option>
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