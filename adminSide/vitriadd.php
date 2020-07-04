
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/vitri.php';?>

<?php 
    $vitri = new vitri();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $vitriName = $_POST['vitriName'];

        $insertvitri = $vitri->insert_vitri($vitriName);
    }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Thêm mới vị trí</h2>
               <div class="block copyblock"> 
                <?php 
                    if(isset($insertvitri))
                        echo $insertvitri;
                ?>
                 <form action="vitriadd.php" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="vitriName" placeholder="Làm ơn thêm tên vị trí." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>