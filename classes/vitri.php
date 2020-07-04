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
		public function insert_vitri($data,$files)
		{
			# code...
			
			$vitriName = mysqli_real_escape_string($this->db->link, $data['vitriName']);
			$type = mysqli_real_escape_string($this->db->link, $data['type']);

			// Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads
			$permited =  array('jpg', 'jpeg', 'png', 'gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];

			$div = explode(".", $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;

			if($vitriName == "" || $type == "" || $file_name = ""){
				$alert = "<span class='error'>Tất cả các trường không được trống.</span>";
				return $alert;
			}elseif (in_array($file_ext, $permited) == false) {
				# code...
				$alert = "<span class='error'>Bạn chỉ có thể upload: " . implode(', ', $permited) . "</span>";
				return $alert;
			}
			elseif($file_size > 2048000) {
				$alert = "<span class='error'>Kích thuớc ảnh không quá 2MB.</span>";
				return $alert; 
			}
			else
			{
				move_uploaded_file($file_temp, $uploaded_image);
				$query = "INSERT INTO tbl_vitri(vitriName, type, vitriImage) VALUES('$vitriName', '$type','$unique_image')";
				$result = $this->db->insert($query);
				if($result){
					$alert = "<span class='success'>Thêm mới vị trí thành công.</span>";
					return $alert;
				}
				else{
					$alert = "<span class='error'>Thêm mới vị trí không thành công.</span>";
					return $alert;
				}
				
			}
		}

		public function show_vitri()
		{
			$query = "
			SELECT  *
			FROM tbl_vitri
			ORDER BY vitriId DESC ";
			$result = $this->db->select($query);
			return $result;
		}
		public function getvitribyId($id)
		{
			$query = "SELECT * FROM tbl_vitri WHERE vitriId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_vitri($data,$files, $id)
		{
			$vitriName = mysqli_real_escape_string($this->db->link, $data['vitriName']);
			$type = mysqli_real_escape_string($this->db->link, $data['type']);

			// Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads
			$permited =  array('jpg', 'jpeg', 'png', 'gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];

			$div = explode(".", $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;

			if($vitriName == "" ||$type == ""){
				$alert = "<span class='error'>Tất cả các trường không được trống.</span>";
				return $alert;
			}
			else{
				if(!empty($file_name)){
					// Nếu người dùng chọn ảnh
					if($file_size > 2048000){
						$alert = "<span class='error'>Kích thuớc ảnh không quá 2MB.</span>";
						return $alert;
					}
					elseif (in_array($file_ext, $permited) == false) {
						# code...
						$alert = "<span class='error'>Bạn chỉ có thể upload: ".implode(', ', $permited)."</span>";
						return $alert;
					}
					move_uploaded_file($file_temp, $uploaded_image);
					$query = 
						"UPDATE tbl_vitri SET
						vitriName = '$vitriName',
						type = '$type',
						vitriImage = '$unique_image'
						where vitriId = '$id'";
						$result = $this->db->update($query);
					if($result){
						$alert = "<span class='success'>Cập nhật vị trí thành công.</span>";
						return $alert;
					}
					else{
						$alert = "<span class='error'>Cập nhật vị trí không thành công.</span>";
						return $alert;
					}

				}
				else{
					// Nếu người dùng không chọn ảnh
					
					$query = 
						"UPDATE tbl_vitri SET
						vitriName = '$vitriName',
						type = '$type'
						where vitriId = '$id'";
						$result = $this->db->update($query);
					if($result){
						$alert = "<span class='success'>Cập nhật vị trí thành công.</span>";
						return $alert;
					}
					else{
						$alert = "<span class='error'>Cập nhật vị trí không thành công.</span>";
						return $alert;
					}

				}
			}
		}
		public function del_vitri($id)
		{
			$query = "DELETE FROM tbl_vitri WHERE vitriId = '$id'";
			$result = $this->db->delete($query);
			if($result){
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