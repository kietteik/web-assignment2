<?php
	include_once '../lib/database.php';
	include_once '../helper/format.php';
?>



<?php
	/**
	 * 
	 */
	class contact
	{
		private $db;
		private $fm;
		public function __construct()
		{
			# code...
			$this->db =new Database();
			$this->fm =new Format();
		}
		public function insert_contact($data)
		{
			# code...
			$contactName  = $data['contactName'];
			$contactPhone  = $data['contactPhone'];
			$contactEmail  = $data['contactEmail'];
			$type  = $data['type'];

			$contactName  = $this->fm->validation($contactName);
			$contactPhone  = $this->fm->validation($contactPhone);
			$contactEmail  = $this->fm->validation($contactEmail);
			$type  = $this->fm->validation($type);

			$contactName = mysqli_real_escape_string($this->db->link,$contactName);
			$contactPhone = mysqli_real_escape_string($this->db->link,$contactPhone);
			$contactEmail = mysqli_real_escape_string($this->db->link,$contactEmail);
			$type = mysqli_real_escape_string($this->db->link,$type);
			
			if(empty($contactName)){
				$alert = "<span class='error'>Tên liên hệ không được trống.</span>";
				return $alert;
			}
			elseif (empty($contactPhone)) {
				$alert = "<span class='error'>Số điện thoại không được trống.</span>";
				return $alert;
			}
			elseif (empty($contactEmail)) {
				$alert = "<span class='error'>Email không được trống.</span>";
				return $alert;
			}
			elseif ($type == "") {
				$alert = "<span class='error'>Trạng thái liên hệ không được trống.</span>";
				return $alert;
			}
			else
			{
				
				$query = "INSERT INTO tbl_contact(contactName, contactPhone, contactEmail, type) VALUES('$contactName', '$contactPhone', '$contactEmail', '$type')";
				$result = $this->db->insert($query);
				if(result){
					$alert = "<span class='success'>Thêm liên hệ thành công.</span>";
					return $alert;
				}
				else{
					$alert = "<span class='error'>Thêm liên hệ không thành công.</span>";
					return $alert;
				}
				
			}
		}

		public function show_contact()
		{
			$query = "SELECT * FROM tbl_contact ORDER BY contactId DESC ";
			$result = $this->db->select($query);
			return $result;
		}
		public function getcontactbyId($id)
		{
			$query = "SELECT * FROM tbl_contact WHERE contactId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_contact($data, $id)
		{

			$contactName  = $data['contactName'];
			$contactPhone  = $data['contactPhone'];
			$contactEmail  = $data['contactEmail'];
			$type  = $data['type'];

			$contactName  = $this->fm->validation($contactName);
			$contactPhone  = $this->fm->validation($contactPhone);
			$contactEmail  = $this->fm->validation($contactEmail);
			$type  = $this->fm->validation($type);

			$contactName = mysqli_real_escape_string($this->db->link,$contactName);
			$contactPhone = mysqli_real_escape_string($this->db->link,$contactPhone);
			$contactEmail = mysqli_real_escape_string($this->db->link,$contactEmail);
			$type = mysqli_real_escape_string($this->db->link,$type);

			$id = mysqli_real_escape_string($this->db->link,$id);

			if(empty($contactName)){
				$alert = "<span class='error'>Tên liên hệ không được trống.</span>";
				return $alert;
			}
			elseif (empty($contactPhone)) {
				$alert = "<span class='error'>SĐT không được trống.</span>";
				return $alert;
			}
			elseif (empty($contactEmail)) {
				$alert = "<span class='error'>Email không được trống.</span>";
				return $alert;
			}
			elseif ($type == "") {
				$alert = "<span class='error'>Trạng thái liên hệ không được trống.</span>";
				return $alert;
			}
			else
			{
				$query = 
						"UPDATE tbl_contact SET
						contactName = '$contactName',
						contactPhone = '$contactPhone',
						contactEmail = '$contactEmail',
						type = '$type'
						WHERE contactId = $id";

				$result = $this->db->update($query);
				if(result){
					$alert = "<span class='success'>Thay đổi liên hệ thành công.</span>";
					return $alert;
				}
				else{
					$alert = "<span class='error'>Thay đổi liên hệ không thành công.</span>";
					return $alert;
				}
			}
			return $result;
		}
		public function del_contact($id)
		{
			$query = "DELETE FROM tbl_contact WHERE contactId = '$id'";
			$result = $this->db->delete($query);
			if(result){
					$alert = "<span class='success'>Xóa liên hệ thành công.</span>";
					return $alert;
			}
			else{
				$alert = "<span class='error'>Xóa liên hệ không thành công.</span>";
				return $alert;
			}				
		}
	}
?>