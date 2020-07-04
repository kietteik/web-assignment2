
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/contact.php';?>

<?php 
    $contact = new contact();
    if(!isset($_GET['contactId'])){
        echo "<script>window.location = 'contactlist.php'</script>";
    }
    else{
        $id = $_GET['contactId'];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

        $updatecontact = $contact->update_contact($_POST, $id);
    }

?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Chỉnh sửa liên hệ</h2>
               <div class="block copyblock"> 
                <?php 
                    if(isset($updatecontact))
                        echo $updatecontact;
                ?>
                <?php 
                    $get_contact_name = $contact->getcontactbyId($id);
                    if($get_contact_name){
                        while ($result = $get_contact_name->fetch_assoc()) {
                            # code...
                     
                ?>
                <form action="" method="post"  id="contactform">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Tên liên hệ</label>
                            </td>
                            <td>
                                <input type="text" name="contactName" placeholder="Sửa tên liên hệ." class="medium" value="<?php echo $result['contactName']?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Số điện thoại</label>
                            </td>
                            <td>
                                <input type="text" name="contactPhone" placeholder="Sửa số điện thoại." class="medium" value="<?php echo $result['contactPhone']?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" name="contactEmail" placeholder="Sửa email." class="medium" value="<?php echo $result['contactEmail']?>" />
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
                                        if($result['type']==1){

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