<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/vitri.php';?>
<?php include '../classes/product.php';?>

<?php 
    $pd = new product();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $insertProduct = $pd->insert_product($_POST,$_FILES);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm mới sản phẩm</h2>
        <div class="block copyblock">  
        <?php 
            if(isset($insertProduct))
                echo $insertProduct;
        ?>             
         <form action="productadd.php" method="post" id="productform1" enctype="multipart/form-data" >
            <table class="form"  id="example">
                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td>
                        <input type="text" name="productName" placeholder="Nhập tên sản phẩm..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Vị Trí</label>
                    </td>
                    <td>
                        <select id="select" name="vitri">
                            <option>---------Chọn vị trí---------</option>
                            <?php 
                                $vitri = new vitri();
                                $vitrilist = $vitri->show_vitri();
                                if($vitrilist){
                                    while($result = $vitrilist->fetch_assoc()){
                            ?>
                            <option value="<?php echo $result['vitriId']?>"><?php echo $result['vitriName']?></option>

                            <?php 
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>
				
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Mô tả Sản phẩm</label>
                    </td>
                    <td>
                        <textarea name="product_desc" id="product_desc" rows="6" cols="40"></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Giá</label>
                    </td>
                    <td>
                        <input type="text" name="price" placeholder="Nhập giá..." class="medium" />
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


