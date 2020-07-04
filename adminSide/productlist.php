<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/vitri.php';?>
<?php include '../classes/product.php';?>
<?php include_once '../helper/format.php';?>

<?php 
    $pd = new product();
    $fm = new Format();
?>
<?php 
	
	if(isset($_GET['delId'])){
        $id = $_GET['delId'];
        $delproduct = $pd->del_product($id);
    }
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách sản phẩm</h2>
        <div class="block">  
        	<?php 
                if(isset($delproduct))
                    echo $delproduct;
            ?>  
            <table class=" display " id="example">
            	<div class="timkiem">
            		<form action="" method="GET">
            			<input type="text" name="tukhoa" placeholder="Nhập từ khóa" value="">
            			<input type="submit" value="Tìm kiếm">
            		</form>
            		
            	</div>
            	<br>
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên sản phẩm</th>
					<th>Số sao</th>
					<th>Giá sản phẩm</th>
					<th>Hình ảnh sản phẩm</th>
					<th>Vị trí</th>
					<th>Mô tả sản phẩm</th>
					<th>Trạng thái</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
					$pdlist = $pd->show_product();
					$tukhoa = $_GET['tukhoa'];
					if($pdlist)
					{
						$i = 0;
						while ($result = $pdlist->fetch_assoc()) {
							# code...
							$i++;
				?>
				<tr class="odd gradeX">
					<td><?php echo $i;?></td>
					<td><?php echo $result['productName'];?></td>
					<td>
						<?php 
							$vote_1s = $result['vote_1s'];
							$vote_2s = $result['vote_2s'];
							$vote_3s = $result['vote_3s'];
							$vote_4s = $result['vote_4s'];
							$vote_5s = $result['vote_5s'];
							if(($vote_1s + $vote_2s + $vote_3s + $vote_4s + $vote_5s) == 0)
								echo 0;
							else{
								$vote_tbs = ($vote_1s*1 + $vote_2s*2 + $vote_3s*3 + $vote_4s*4 + $vote_5s*5) / ($vote_1s + $vote_2s + $vote_3s + $vote_4s + $vote_5s);
	 						echo round($vote_tbs, 1, PHP_ROUND_HALF_ODD);
							}
							
						?></td>
					<td><?php echo $result['productPrice'];?></td>
					<td><img src="uploads/<?php echo $result['productImage'];?>" height="50"  alt="">  </td>
					<td><?php echo $result['vitriName'];?></td>
					
					<td><?php echo $fm->textShorten($result['product_desc'], 50)?></td>
					<td><?php 
					if($result['type'] == 1){
						echo "Kích hoạt";
					}
					else{
						echo "Khóa";

					}

					?></td>
					<td><a href="productedit.php?productId=<?php echo $result['productId']?>">Sửa</a> || <a href="?delId=<?php echo $result['productId']?>" onclick="return confirm('Xác nhận xóa?')">Xóa</a></td>
				</tr>
				<?php 

						}
					}
				?>
			</tbody>

		</table>
		<br>
		<div style="float: left;" class="">

			<?php 

				if(isset($_GET['tukhoa'])){
					$tukhoa = $_GET['tukhoa'];
					$product_all = $pd->get_all_product_with_tukhoa();
				}
				else{
					$product_all = $pd->get_all_product();
				}
				$product_count = mysqli_num_rows($product_all);
				$product_button = ceil($product_count/4);
				
				$i=0;
				echo '<p >Trang: </p>';
				for ($i=1; $i <= $product_button; $i++) { 
					# code...
					if($_GET['trang'] == $i){
						if(isset($_GET['tukhoa'])){
							echo '<a style="padding:0 7px; color: red;border: 1px solid" href="productlist.php?trang='.$i.'&tukhoa='.$tukhoa.'">'.$i.'</a>';
						}
						else{
							echo '<a style="padding:0 7px; color: red;border: 1px solid" href="productlist.php?trang='.$i.'">'.$i.'</a>';
						}
					}else{
						if(isset($_GET['tukhoa'] )){
							echo '<a style="padding:0 7px; border: 1px solid; " href="productlist.php?trang='.$i.'&tukhoa='.$tukhoa.'">'.$i.'</a>';
						}
						else{
							echo '<a style="padding:0 7px; border: 1px solid; " href="productlist.php?trang='.$i.'">'.$i.'</a>';
						}
						
					}
				}
			?>
		</div>
		<div style="clear: float"></div>
		
       </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
