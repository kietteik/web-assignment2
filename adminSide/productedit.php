<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/vitri.php';?>
<?php include '../classes/product.php';?>

<?php 
    $pd = new product();
    if(!isset($_GET['productId'])){
        echo "<script>window.location = 'productlist.php'</script>";
    }
    else{
        $id = $_GET['productId'];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
       
        $updateProduct = $pd->update_product($_POST,$_FILES, $id);

       
    }

?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Chỉnh sửa sản phẩm</h2>
        <div class="block">  
        <?php 
            if(isset($updateProduct))
                echo $updateProduct;
        ?>  

       <?php 
            $get_product_by_id = $pd->getproductbyId($id);
            if($get_product_by_id){
                        while ($result_product = $get_product_by_id->fetch_assoc()) {
        ?>  
                   
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td>
                        <input type="text" name="productName" value="<?php echo $result_product['productName'] ?>" placeholder="Enter Product Name..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Vị trí</label>
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
                            <option 

                            <?php
                                if($result['vitriId'] == $result_product['vitriId']){ echo 'selected';}
                            ?>
    
                            value="<?php echo $result['vitriId']?>"><?php echo $result['vitriName']?></option>

                            <?php 
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>
				
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Mô tả</label>
                    </td>
                    <td>
                        <textarea name="product_desc" class="tinymce"><?php echo $result_product['product_desc'] ?></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Giá</label>
                    </td>
                    <td>
                        <input type="text" name="price" value="<?php echo $result_product['productPrice'] ?>" placeholder="Enter Price..." class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Hình ảnh</label>
                    </td>
                    <td>
                        <img src="uploads/<?php echo $result_product['productImage'];?>" height="90"  alt=""><br>
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
                                if($result_product['type']==1){

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


