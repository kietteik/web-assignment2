<?php
include_once '../lib/database.php';
include_once '../helper/format.php';
?>



<?php
/**
 * 
 */
class user
{
	private $db;
	private $fm;
	public function __construct()
	{
		# code...
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function insert_user($data)
	{
		# code...
		$userName  = $data['userName'];
		$userUser  = $data['userUser'];
		$userPass  = $data['userPass'];
		$userEmail  = $data['userEmail'];
		$type  = $data['type'];

		$userName  = $this->fm->validation($userName);
		$userUser  = $this->fm->validation($userUser);
		$userPass  = $this->fm->validation($userPass);
		$userEmail  = $this->fm->validation($userEmail);
		$type  = $this->fm->validation($type);

		$userName = mysqli_real_escape_string($this->db->link, $userName);
		$userUser = mysqli_real_escape_string($this->db->link, $userUser);
		$userPass = mysqli_real_escape_string($this->db->link, $userPass);
		$userEmail = mysqli_real_escape_string($this->db->link, $userEmail);
		$type = mysqli_real_escape_string($this->db->link, $type);
		if (empty($userName)) {
			$alert = "<span class='error'>Tên người dùng không được trống.</span>";
			return $alert;
		} elseif (empty($userUser)) {
			$alert = "<span class='error'>Tài khoản không được trống.</span>";
			return $alert;
		} elseif (empty($userPass)) {
			$alert = "<span class='error'>Mật khẩu không được trống.</span>";
			return $alert;
		} elseif (empty($userEmail)) {
			$alert = "<span class='error'>Email không được trống.</span>";
			return $alert;
		} elseif ($type == "") {
			$alert = "<span class='error'>Trạng thái tài khoản không được trống.</span>";
			return $alert;
		} else {

			$query = "INSERT INTO tbl_user(userName, userUser, userPass, userEmail, type) VALUES('$userName', '$userUser', '$userPass', '$userEmail', '$type')";
			$result = $this->db->insert($query);
			if ($result) {
				$alert = "<span class='success'>Thêm người dùng thành công.</span>";
				return $alert;
			} else {
				$alert = "<span class='error'>Thêm người dùng không thành công.</span>";
				return $alert;
			}
		}
	}


	public function show_user()
	{
		$sp_tungtrang = 4;
		if (!isset($_GET['trang'])) {
			$trang = 1;
		} else {
			$trang = $_GET['trang'];
		}
		$tung_trang = ($trang - 1) * $sp_tungtrang;
		if (isset($_GET['tukhoa'])) {
			$tukhoa = $_GET['tukhoa'];
			$query = "SELECT * FROM tbl_user  WHERE userName LIKE N'%$tukhoa%' ORDER BY userId DESC LIMIT $tung_trang, $sp_tungtrang";
		} else {
			$query = "SELECT * FROM tbl_user ORDER BY userId DESC LIMIT $tung_trang, $sp_tungtrang";
		}

		$result = $this->db->select($query);
		return $result;
	}
	public function get_all_user_with_tukhoa()
	{
		$tukhoa = $_GET['tukhoa'];
		$query = "
				SELECT  *
				FROM tbl_user
				WHERE userName LIKE N'%$tukhoa%'
			";
		$result = $this->db->select($query);
		return $result;
	}
	public function get_all_user()
	{

		$query = "
				SELECT  *
				FROM tbl_user
			";
		$result = $this->db->select($query);
		return $result;
	}
	public function getuserbyId($id)
	{
		$query = "SELECT * FROM tbl_user WHERE userId = '$id'";
		$result = $this->db->select($query);
		return $result;
	}
	public function update_user($data, $id)
	{

		$userName  = $data['userName'];
		$userUser  = $data['userUser'];
		$userEmail  = $data['userEmail'];
		$type  = $data['type'];

		$userName  = $this->fm->validation($userName);
		$userUser  = $this->fm->validation($userUser);
		$userEmail  = $this->fm->validation($userEmail);
		$type  = $this->fm->validation($type);

		$userName = mysqli_real_escape_string($this->db->link, $userName);
		$userUser = mysqli_real_escape_string($this->db->link, $userUser);
		$userEmail = mysqli_real_escape_string($this->db->link, $userEmail);
		$type = mysqli_real_escape_string($this->db->link, $type);

		$id = mysqli_real_escape_string($this->db->link, $id);

		if (empty($userName)) {
			$alert = "<span class='error'>Tên người dùng không được trống.</span>";
			return $alert;
		} elseif (empty($userUser)) {
			$alert = "<span class='error'>Tài khoản không được trống.</span>";
			return $alert;
		} elseif (empty($userEmail)) {
			$alert = "<span class='error'>Email không được trống.</span>";
			return $alert;
		} elseif ($type == "") {
			$alert = "<span class='error'>Trạng thái tài khoản không được trống.</span>";
			return $alert;
		} else {
			$query =
				"UPDATE tbl_user SET
						userName = '$userName',
						userUser = '$userUser',
						userEmail = '$userEmail',
						type = '$type'
						WHERE userId = $id";

			$result = $this->db->update($query);
			if ($result) {
				$alert = "<span class='success'>Thay đổi người dùng thành công.</span>";
				return $alert;
			} else {
				$alert = "<span class='error'>Thay đổi người dùng không thành công.</span>";
				return $alert;
			}
		}
	}
	public function del_user($id)
	{
		$query = "DELETE FROM tbl_user WHERE userId = '$id'";
		$result = $this->db->delete($query);
		if ($result) {
			$alert = "<span class='success'>Xóa người dùng thành công.</span>";
			return $alert;
		} else {
			$alert = "<span class='error'>Xóa người dùng không thành công.</span>";
			return $alert;
		}
	}
	public function editProfile()
	{
		if (isset($_POST['saveEditProfile'])) {

			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$fb = $_POST['fb'];
			$ig = $_POST['ig'];
			$tw = $_POST['tw'];

			$sql = "UPDATE tbl_user SET 
				userName='$name',
				userPhone='$phone',
				userEmail='$email',
				userAddress='$address',
				userFb='$fb',
				userInsta='$ig',
				userTwitter='$tw'
				WHERE userId=" . $_SESSION['userId'];;
			try {
				$this->db->link->query($sql) or
					die('<div id="edit-return" class="alert alert-warning" role="alert">
					Email already used
					</div>');
				echo '<div id="edit-return" class="alert alert-success" role="alert">
				Profile updated!
				</div>';
			} catch (\Throwable $th) {
				echo "Something wrong";
			}
		}
	}
	public function changePassword()
	{
		if (isset($_POST['changePasswordButton'])) {
			$oldPwd = md5($_POST['oldPwd']);
			$pwd = md5($_POST['pwd']);
			$sql = "SELECT * FROM tbl_user WHERE userId=" . $_SESSION['userId'];
			$user = $this->db->link->query($sql);
			$user = $user->fetch_assoc();
			if ($user['userPass'] == $oldPwd) {
				$sql = "UPDATE tbl_user SET userPass= '$pwd' WHERE userId=" . $_SESSION['userId'];
				$this->db->link->query($sql) or
					die('<div id="edit-return" class="alert alert-warning" role="alert">
					Error
					</div>');
				return
					'<div id="editPwd-return" class="alert alert-success" role="alert">
				Password updated!
					</div>';
			} else {
				return '<div id="editPwd-return" class="alert alert-warning" role="alert">
				Old Password Incorrect
					</div>';
			}
		}
	}
	public function uploadAvatar()
	{
		if (isset($_FILES['avatar'])) {
			// echo "getfiles";
			$file_name = $_FILES['avatar']['name'];
			$file_size = $_FILES['avatar']['size'];
			$file_temp = $_FILES['avatar']['tmp_name'];

			$div = explode(".", $file_name);
			$file_ext = strtolower(end($div));


			$unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
			$uploaded_image = "./uploads/" . $unique_image;

			// echo "-------------file_temp: " . $file_temp;
			if (!is_uploaded_file($file_temp)) {
				return "Fails to upload file";
			}
			if (move_uploaded_file($file_temp, $uploaded_image) == true) {
				$query = "UPDATE tbl_user SET userImage='$unique_image' WHERE userId=" . $_SESSION['userId'];
				$result = $this->db->insert($query);
				if ($result) {
					return $uploaded_image;
				} else {
					$alert = "<script>alert('file upload fails')</script>";
					return 0;
				}
			} else {
				$alert = "<script>alert('file upload fails')</script>";
				return 0;
			}
		} else {
			echo "files not POST";
		}
	}
}
?>