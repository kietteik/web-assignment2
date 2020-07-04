<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php include '../classes/user.php'?>
<?php 
	$user = new user();
	if(isset($_GET['delId'])){
        $id = $_GET['delId'];
        $deluser = $user->del_user($id);
    }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Danh sách người dùng</h2>
                <div class="block">  
                <?php 
                    if(isset($deluser))
                        echo $deluser;
                ?>      
                    <table class="data display " id="example">
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
							<th>Tên người dùng</th>
							<th>Tài khoản</th>
							<th>Email</th>
							<th>Trạng thái</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$show_user = $user->show_user();
							if($show_user){
								$i  = 0;
								while ($result = $show_user->fetch_assoc()) {
									$i++;
							
						?>
									<tr class="odd gradeX">
										<td><?php echo $i; ?></td>
										<td><?php echo $result['userName']; ?></td>
										<td><?php echo $result['userUser']; ?></td>
										<td><?php echo $result['userEmail']; ?></td>
										<td>
											<?php 
											if($result['type'] == 1)
												echo 'Kích hoạt';
											else
												echo "Khóa";
											?>
										</td>
										<td><a href="useredit.php?userId= <?php echo $result['userId']?>">Sửa</a> || <a href="?delId= <?php echo $result['userId']?>"  onclick="return confirm('Xác nhận xóa?')" >Xóa</a></td>
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
							$user_all = $user->get_all_user_with_tukhoa();
						}
						else{
							$user_all = $user->get_all_user();
						}
						$user_count = mysqli_num_rows($user_all);
						$user_button = ceil($user_count/4);
						
						$i=0;
						echo '<p >Trang: </p>';
						for ($i=1; $i <= $user_button; $i++) { 
							# code...
							if($_GET['trang'] == $i){
								if(isset($_GET['tukhoa'])){
									echo '<a style="padding:0 7px; color: red;border: 1px solid" href="userlist.php?trang='.$i.'&tukhoa='.$tukhoa.'">'.$i.'</a>';
								}
								else{
									echo '<a style="padding:0 7px; color: red;border: 1px solid" href="userlist.php?trang='.$i.'">'.$i.'</a>';
								}
							}else{
								if(isset($_GET['tukhoa'] )){
									echo '<a style="padding:0 7px; border: 1px solid; " href="userlist.php?trang='.$i.'&tukhoa='.$tukhoa.'">'.$i.'</a>';
								}
								else{
									echo '<a style="padding:0 7px; border: 1px solid; " href="userlist.php?trang='.$i.'">'.$i.'</a>';
								}
								
							}
						}
					?>
				</div>
				<div style="clear: float"></div>
				
		       </div>
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

