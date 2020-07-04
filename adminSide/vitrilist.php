<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/vitri.php';?>
<?php include_once '../helper/format.php';?>

<?php 
    $slide = new vitri();
    $fm = new Format();
?>
<?php 
	
	if(isset($_GET['delId'])){
        $id = $_GET['delId'];
        $delvitri = $slide->del_vitri($id);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách slide</h2>
        <div class="block"> 
			<?php 
                if(isset($delvitri))
                    echo $delvitri;
            ?> 
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên slide</th>
					<th>Hình ảnh slide</th>
					<th>Trạng thái</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$slidelist = $slide->show_vitri();
					if($slidelist)
					{
						$i = 0;
						while ($result = $slidelist->fetch_assoc()) {
							# code...
							$i++;
				?>
				<tr class="odd gradeX">
					<td><?php echo $i;?></td>
					<td><?php echo $result['vitriName'];?></td>
					<td><img src="uploads/<?php echo $result['vitriImage'];?>" height="50"  alt="">  </td>
					<td>
						<?php 
							if($result['type'] == 1){
								echo "Kích hoạt";
							}
							else{
								echo "Khóa";
							}
						?>
					</td>
					<td><a href="vitriedit.php?vitriId=<?php echo $result['vitriId']?>">Sửa</a> || <a href="?delId=<?php echo $result['vitriId']?>" onclick="return confirm('Xác nhận xóa?')">Xóa</a></td>
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

