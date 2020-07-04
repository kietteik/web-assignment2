<?php
	include_once '../lib/database.php';
	include_once '../helper/format.php';
?>



<?php
	/**
	 * 
	 */
	class slider
	{
		private $db;
		private $fm;
		public function __construct()
		{
			# code...
			$this->db =new Database();
			$this->fm =new Format();
		}
		public function insert_slider($data,$files)
		{
			# code...
			
			$sliderName = mysqli_real_escape_string($this->db->link, $data['sliderName']);
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

			if($sliderName == "" || $type == "" || $file_name = ""){
				$alert = "<span class='error'>Tất cả các trường không được trống.</span>";
				return $alert;
			}
			else
			{
				move_uploaded_file($file_temp, $uploaded_image);
				$query = "INSERT INTO tbl_slider(sliderName, type, sliderImage) VALUES('$sliderName', '$type','$unique_image')";
				$result = $this->db->insert($query);
				if(result){
					$alert = "<span class='success'>Thêm mới slide thành công.</span>";
					return $alert;
				}
				else{
					$alert = "<span class='error'>Thêm mới slide không thành công.</span>";
					return $alert;
				}
				
			}
		}

		public function show_slider()
		{
			$query = "
			SELECT  *
			FROM tbl_slider
			ORDER BY sliderId DESC ";
			$result = $this->db->select($query);
			return $result;
		}
		public function getsliderbyId($id)
		{
			$query = "SELECT * FROM tbl_slider WHERE sliderId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_slider($data,$files, $id)
		{
			$sliderName = mysqli_real_escape_string($this->db->link, $data['sliderName']);
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

			if($sliderName == "" ||$type == ""){
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
						"UPDATE tbl_slider SET
						sliderName = '$sliderName',
						type = '$type',
						sliderImage = '$unique_image'
						where sliderId = '$id'";
						$result = $this->db->update($query);
					if(result){
						$alert = "<span class='success'>Cập nhật slide thành công.</span>";
						return $alert;
					}
					else{
						$alert = "<span class='error'>Cập nhật slide không thành công.</span>";
						return $alert;
					}

				}
				else{
					// Nếu người dùng không chọn ảnh
					
					$query = 
						"UPDATE tbl_slider SET
						sliderName = '$sliderName',
						type = '$type'
						where sliderId = '$id'";
						$result = $this->db->update($query);
					if(result){
						$alert = "<span class='success'>Cập nhật slide thành công.</span>";
						return $alert;
					}
					else{
						$alert = "<span class='error'>Cập nhật slide không thành công.</span>";
						return $alert;
					}

				}
			}
		}
		public function del_slider($id)
		{
			$query = "DELETE FROM tbl_slider WHERE sliderId = '$id'";
			$result = $this->db->delete($query);
			if(result){
					$alert = "<span class='success'>Xóa slide thành công.</span>";
					return $alert;
			}
			else{
				$alert = "<span class='error'>Xóa slide không thành công.</span>";
				return $alert;
			}				
		}
	}
?>