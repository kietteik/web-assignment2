<?php
	include_once '../lib/database.php';
	include_once '../helper/format.php';
?>



<?php
	/**
	 * 
	 */
	class comment
	{
		private $db;
		private $fm;
		public function __construct()
		{
			# code...
			$this->db =new Database();
			$this->fm =new Format();
		}
		

		public function show_comment()
		{
			if(isset($_GET['productId'])){
				$productId = $_GET['productId'];
				$query = "SELECT * FROM tbl_comment WHERE productId = '$productId' ORDER BY comment_createdDate DESC ";
				$result = $this->db->select($query);
			return $result;
			}else{
				$alert = "<span class='error'>Không tìm thấy sản phẩm.</span>";
				return $alert;
			}
			
		}
		
		
		public function del_comment($id)
		{
			$query = "DELETE FROM tbl_comment WHERE commentId = '$id'";
			$result = $this->db->delete($query);
			if(result){
					$alert = "<span class='success'>Xóa comment thành công.</span>";
					return $alert;
			}
			else{
				$alert = "<span class='error'>Xóa comment không thành công.</span>";
				return $alert;
			}				
		}

		public function lock_comment($id)
		{
			$query = "UPDATE tbl_comment SET type = '0' WHERE commentId = '$id'";
			$result = $this->db->delete($query);
			if(result){
					$alert = "<span class='success'>Khóa comment thành công.</span>";
					return $alert;
			}
			else{
				$alert = "<span class='error'>Khóa comment không thành công.</span>";
				return $alert;
			}				
		}
		public function unlock_comment($id)
		{
			$query = "UPDATE tbl_comment SET type = '1' WHERE commentId = '$id'";
			$result = $this->db->delete($query);
			if(result){
					$alert = "<span class='success'>Mở khóa comment thành công.</span>";
					return $alert;
			}
			else{
				$alert = "<span class='error'>Mở khóa comment không thành công.</span>";
				return $alert;
			}				
		}
	}
?>