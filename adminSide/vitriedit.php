

<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/vitri.php';?>

<?php 
    $vitri = new vitri();
    if(!isset($_GET['vitriId'])){
        echo "<script>window.location = 'vitrilist.php'</script>";
    }
    else{
        $id = $_GET['vitriId'];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
       
        $updatevitri = $vitri->update_vitri($_POST,$_FILES, $id);

       
    }

?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Chỉnh sửa vị trí</h2>
        <div class="block copyblock">  
        <?php 
            if(isset($updatevitri))
                echo $updatevitri;
        ?>  

       <?php 
            $get_vitri_by_id = $vitri->getvitribyId($id);
            if($get_vitri_by_id){
                        while ($result_vitri = $get_vitri_by_id->fetch_assoc()) {
        ?>  
                   
         <form action="" method="post" enctype="multipart/form-data" id="vitrieditform">
            <table class="form" id="example">
                <tr>
                    <td>
                        <label>Tên vị trí</label>
                    </td>
                    <td>
                        <input type="text" name="vitriName" value="<?php echo $result_vitri['vitriName'] ?>" placeholder="Nhập tên vị trí..." class="medium" />
                    </td>
                </tr>   
                <tr>
                    <td>
                        <label>Hình ảnh</label>
                    </td>
                    <td>
                        <img src="uploads/<?php echo $result_vitri['vitriImage'];?>" height="90"  alt=""><br>
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
                            <?php 
                                if($result_vitri['type']==1){

                            ?>

                            <option selected value="1">Kích hoạt</option>
                            <option value="0">Khóa</option>

                            <?php
                                }
                                else
                                {
                            ?>
                                    <option value="1">Kích hoạt</option>
                                    <option selected value="0">Khóa</option>
                            <?php
                                }
                            ?>
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
            <?php 
                    }
                }
            ?>
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


