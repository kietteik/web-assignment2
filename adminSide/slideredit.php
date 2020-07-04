

<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/slider.php';?>

<?php 
    $slider = new slider();
    if(!isset($_GET['sliderId'])){
        echo "<script>window.location = 'sliderlist.php'</script>";
    }
    else{
        $id = $_GET['sliderId'];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
       
        $updateslider = $slider->update_slider($_POST,$_FILES, $id);

       
    }

?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Chỉnh sửa slide</h2>
        <div class="block">  
        <?php 
            if(isset($updateslider))
                echo $updateslider;
        ?>  

       <?php 
            $get_slider_by_id = $slider->getsliderbyId($id);
            if($get_slider_by_id){
                        while ($result_slider = $get_slider_by_id->fetch_assoc()) {
        ?>  
                   
         <form action="" method="post" enctype="multipart/form-data" id="slidereditform">
            <table class="form">
                <tr>
                    <td>
                        <label>Tên slide</label>
                    </td>
                    <td>
                        <input type="text" name="sliderName" value="<?php echo $result_slider['sliderName'] ?>" placeholder="Nhập tên silde..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Hình ảnh</label>
                    </td>
                    <td>
                        <img src="uploads/<?php echo $result_slider['sliderImage'];?>" height="90"  alt=""><br>
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
                                if($result_slider['type']==1){

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
                        <input type="submit" name="submit" Value="Save" />
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


