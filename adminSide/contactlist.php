<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php include '../classes/contact.php'?>
<?php 
	$contact = new contact();
	if(isset($_GET['delId'])){
        $id = $_GET['delId'];
        $delcontact = $contact->del_contact($id);
    }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Danh sách liên hệ</h2>
                <div class="block">  
                <?php 
                    if(isset($delcontact))
                        echo $delcontact;
                ?>      
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên liên hệ</th>
							<th>SĐT</th>
							<th>Email</th>
							<th>Trạng thái</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$show_contact = $contact->show_contact();
							if($show_contact){
								$i  = 0;
								while ($result = $show_contact->fetch_assoc()) {
									$i++;
							
						?>
									<tr class="odd gradeX">
										<td><?php echo $i; ?></td>
										<td><?php echo $result['contactName']; ?></td>
										<td><?php echo $result['contactPhone']; ?></td>
										<td><?php echo $result['contactEmail']; ?></td>
										<td>
											<?php 
											if($result['type'] == 1)
												echo 'Kích hoạt';
											else
												echo "Khóa";
											?>
										</td>
										<td><a href="contactedit.php?contactId= <?php echo $result['contactId']?>">Sửa</a> || <a href="?delId= <?php echo $result['contactId']?>"  onclick="return confirm('Xác nhận xóa?')" >Xóa</a></td>
									</tr>
						<?php 
								}
							}
						?>
					</tbody>
				</table>
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

