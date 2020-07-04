<?php
	include_once '../lib/database.php';
	include_once '../helper/format.php';
?>



<?php
	/**
	 * 
	 */
	class vitri
	{
		private $db;
		private $fm;
		public function __construct()
		{
			# code...
			$this->db =new Database();
			$this->fm =new Format();
		}
		public function insert_vitri($vitriName)
		{
			# code...
			$vitriName  = $this->fm->validation($vitriName);
			$vitriName = mysqli_real_escape_string($this->db->link,$vitriName);
			if(empty($vitriName)){
				$alert = "<span class='error'>Tên vị trí không được trống.</span>";
				return $alert;
			}
			else
			{
				$query = "INSERT INTO tbl_vitri(vitriName) VALUES('$vitriName')";
				$result = $this->db->insert($query);
				if(result){
					$alert = "<span class='success'>Thêm vị trí thành công.</span>";
					return $alert;
				}
				else{
					$alert = "<span class='error'>Thêm vị trí không thành công.</span>";
					return $alert;
				}
				
			}
		}

		public function show_vitri()
		{
			$query = "SELECT * FROM tbl_vitri ORDER BY vitriId DESC ";
			$result = $this->db->select($query);
			return $result;
		}
		public function getvitribyId($id)
		{
			$query = "SELECT * FROM tbl_vitri WHERE vitriId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_vitri($vitriName, $id)
		{
			$vitriName  = $this->fm->validation($vitriName);
			$vitriName = mysqli_real_escape_string($this->db->link,$vitriName);
			$id = mysqli_real_escape_string($this->db->link,$id);
			if(empty($vitriName)){
				$alert = "<span class='error'>Tên vị trí không được trống.</span>";
				return $alert;
			}
			else
			{
				$query = "UPDATE tbl_vitri SET vitriName = '$vitriName' where vitriId = '$id'";
				$result = $this->db->update($query);
				if(result){
					$alert = "<span class='success'>Thay đổi vị trí thành công.</span>";
					return $alert;
				}
				else{
					$alert = "<span class='error'>Thay đổi vị trí không thành công.</span>";
					return $alert;
				}
				
			}
			return $result;
		}
		public function del_vitri($id)
		{
			$query = "DELETE FROM tbl_vitri WHERE vitriId = '$id'";
			$result = $this->db->delete($query);
			if(result){
					$alert = "<span class='success'>Xóa vị trí thành công.</span>";
					return $alert;
			}
			else{
				$alert = "<span class='error'>Xóa vị trí không thành công.</span>";
				return $alert;
			}				
		}
	}
?>