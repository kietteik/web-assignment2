
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
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $vitriName = $_POST['vitriName'];

        $updatevitri = $vitri->update_vitri($vitriName, $id);
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
                    $get_vitri_name = $vitri->getvitribyId($id);
                    if($get_vitri_name){
                        while ($result = $get_vitri_name->fetch_assoc()) {
                            # code...
                     
                ?>
                <form action="" method="post" id="vitriform">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="vitriName" placeholder="Sửa vị trí." class="medium" value="<?php echo $result['vitriName']?>" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Cập nhật" />
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
<?php include 'inc/footer.php';?>