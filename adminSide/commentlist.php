<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/comment.php';?>
<?php include '../classes/product.php';?>
<?php include '../classes/user.php';?>
<?php include_once '../helper/format.php';?>

<?php 
    $comment = new comment();
    $fm = new Format();
?>
<?php
	if(isset($_GET['productId'])){
        $productId = $_GET['productId'];
    }
?>
<?php 
	if(isset($_GET['delId'])){
        $delId = $_GET['delId'];
        $delcomment = $comment->del_comment($delId);
    }
?>

<?php 
	if(isset($_GET['lockId'])){
        $lockId = $_GET['lockId'];
        $lockcomment = $comment->lock_comment($lockId);
        // echo "<script>window.location = 'commentlist.php'</script>";
    }
?>
<?php 
	if(isset($_GET['unlockId'])){
        $unlockId = $_GET['unlockId'];
        $unlockcomment = $comment->unlock_comment($unlockId);
    }
?>
<?php
	$commentlist = $comment->show_comment();
	$product = new product();
	$user = new user();
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách sản phẩm</h2>
        <div class="block">  
        	<?php 
                if(isset($delcomment))
                    echo $delcomment;
            ?> 
            <?php 
                if(isset($lockcomment))
                    echo $lockcomment;
            ?> 
            <?php 
                if(isset($unlockcomment))
                    echo $unlockcomment;
            ?>  
            <table class="data display datatable" id="example">
            	<h3>
            		<?php 
	            		if(isset($_GET['productId'])){
	            			$product_name = $product->getproductbyId($_GET['productId']);
	            			while ($productName = $product_name->fetch_assoc()) {
	            				$product_Name = $productName['productName'];
	            				echo $product_Name; 
	            			}
	            			
	            		}
            		?>
        		</h3>
            	<br>
			<thead>
				<tr>
					<th>STT</th>
					<th>Tài khoản</th>
					<th>Thời gian</th>
					<th>Nội dung</th>
					<th>Trạng thái</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
					if($commentlist)
					{
						$i = 0;
						while ($result = $commentlist->fetch_assoc()) {
							# code...
							$i++;
				?>
				<tr class="odd gradeX">
					<td><?php echo $i;?></td>
					<td>
						<?php 
                            $user = $user->getuserbyId($result['userId']);
                            if($user){
                                while ($userName = $user->fetch_assoc()) {
	            				$user_Name = $userName['userName'];
	            				echo $user_Name; 
	            			}
                            }
                        ?>
                    </td>
					<td><?php echo $result['comment_createdDate'];?></td>
					<td><?php echo $result['comment_content'];?></td>
					<td><?php 
					if($result['type'] == 1){
						echo "Kích hoạt";
					}
					else{
						echo "Khóa";
					}
					?></td>
					<td><a href="?productId=<?php echo $productId; ?>&delId=<?php echo $result['commentId']?>" onclick="return confirm('Xác nhận xóa?')">Xóa</a> || <a href="?productId=<?php echo $productId; ?>&lockId=<?php echo $result['commentId']?>">Khóa</a> || <a href="?productId=<?php echo $productId; ?>&unlockId=<?php echo $result['commentId']?>">Mở khóa</a></td>
				</tr>
				<?php 

						}
					}
				?>
			</tbody>

		</table>
		
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
