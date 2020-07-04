<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php include '../classes/vitri.php'?>
<?php 
	$vitri = new vitri();
	if(isset($_GET['delId'])){
        $id = $_GET['delId'];
        $delvitri = $vitri->del_vitri($id);
    }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Danh sách vị trí</h2>
                <div class="block">  
                <?php 
                    if(isset($delvitri))
                        echo $delvitri;
                ?>      
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên vị trí</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$show_vitri = $vitri->show_vitri();
							if($show_vitri){
								$i  = 0;
								while ($result = $show_vitri->fetch_assoc()) {
									$i++;
							
						?>
									<tr class="odd gradeX">
										<td><?php echo $i; ?></td>
										<td><?php echo $result['vitriName']; ?></td>
										<td><a href="vitriedit.php?vitriId= <?php echo $result['vitriId']?>">Sửa</a> || <a href="?delId= <?php echo $result['vitriId']?>"  onclick="return confirm('Xác nhận xóa?')" >Xóa</a></td>
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

