
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/user.php';?>

<?php 
    $user = new user();
    if(!isset($_GET['userId'])){
        echo "<script>window.location = 'userlist.php'</script>";
    }
    else{
        $id = $_GET['userId'];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

        $updateuser = $user->update_user($_POST, $id);
    }

?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Chỉnh sửa người dùng</h2>
               <div class="block copyblock"> 
                <?php 
                    if(isset($updateuser))
                        echo $updateuser;
                ?>
                <?php 
                    $get_user_name = $user->getuserbyId($id);
                    if($get_user_name){
                        while ($result = $get_user_name->fetch_assoc()) {
                            # code...
                     
                ?>
                <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Tên</label>
                            </td>
                            <td>
                                <input type="text" name="userName" placeholder="Sửa tên." class="medium" value="<?php echo $result['userName']?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Tài khoản</label>
                            </td>
                            <td>
                                <input type="text" name="userUser" placeholder="Sửa tài khoản." class="medium" value="<?php echo $result['userUser']?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" name="userEmail" placeholder="Sửa email." class="medium" value="<?php echo $result['userEmail']?>" />
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