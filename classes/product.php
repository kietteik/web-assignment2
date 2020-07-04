<?php
	include_once '../lib/database.php';
	include_once '../helper/format.php';
?>



<?php
	/**
	 * 
	 */
	class product
	{
		private $db;
		private $fm;
		public function __construct()
		{
			# code...
			$this->db =new Database();
			$this->fm =new Format();
		}
		public function insert_product($data,$files)
		{
			# code...
			
			$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
			$vitri = mysqli_real_escape_string($this->db->link, $data['vitri']);
			$product_desc = mysqli_real_escape_string($this->db->link, $data['product_desc']);
			$price = mysqli_real_escape_string($this->db->link, $data['price']);
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

			if($productName == "" || $vitri == "" ||$product_desc == "" ||$price == "" ||$type == "" || $file_name = ""){
				$alert = "<span class='error'>Tất cả các trường không được trống.</span>";
				return $alert;
			}
			else
			{
				move_uploaded_file($file_temp, $uploaded_image);
				$query = "INSERT INTO tbl_product(productName, vitriId, product_desc, type, productPrice, productImage) VALUES('$productName','$vitri','$product_desc','$type' ,'$price','$unique_image')";
				$result = $this->db->insert($query);
				if(result){
					$alert = "<span class='success'>Thêm mới thành công.</span>";
					return $alert;
				}
				else{
					$alert = "<span class='error'>Thêm mới không thành công.</span>";
					return $alert;
				}
				
			}
		}

		public function show_product()
		{
			$sp_tungtrang = 4;
			if(!isset($_GET['trang'])){
				$trang = 1;
			}else{
				$trang = $_GET['trang'];
			}
			$tung_trang = ($trang - 1)*$sp_tungtrang;
			if(isset($_GET['tukhoa'])){
                            $tukhoa = $_GET['tukhoa'];
                            $query = "
			SELECT  p.*, v.vitriName
			FROM tbl_product as p, tbl_vitri as v WHERE p.vitriId = v.vitriId AND p.productName LIKE N'%$tukhoa%'
			ORDER BY p.productId DESC LIMIT $tung_trang, $sp_tungtrang
			 ";
			}else{
                            $query = "
			SELECT  p.*, v.vitriName
			FROM tbl_product as p, tbl_vitri as v WHERE p.vitriId = v.vitriId 
			ORDER BY p.productId DESC LIMIT $tung_trang, $sp_tungtrang
			 ";
			}
			
			$result = $this->db->select($query);
			return $result;
		}
		public function get_all_product_with_tukhoa()
		{
			$tukhoa = $_GET['tukhoa'];
			$query = "
				SELECT  *
				FROM tbl_product
				WHERE productName LIKE N'%$tukhoa%'
			";
			$result = $this->db->select($query);
			return $result;
		}
		public function get_all_product()
		{

			$query = "
				SELECT  *
				FROM tbl_product
				
			";
			$result = $this->db->select($query);
			return $result;
		}
		public function getproductbyId($id)
		{
			$query = "SELECT * FROM tbl_product WHERE productId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_product($data,$files, $id)
		{
			$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
			$vitri = mysqli_real_escape_string($this->db->link, $data['vitri']);
			$product_desc = mysqli_real_escape_string($this->db->link, $data['product_desc']);
			$price = mysqli_real_escape_string($this->db->link, $data['price']);
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

			if($productName == "" || $vitri == "" ||$product_desc == "" ||$price == "" ||$type == ""){
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
						"UPDATE tbl_product SET
						productName = '$productName',
						vitriId = '$vitri',
						product_desc = '$product_desc',
						type = '$type',
						productPrice = '$price',
						productImage = '$unique_image'
						where productId = '$id'";
						$result = $this->db->update($query);
					if(result){
						$alert = "<span class='success'>Cập nhật thành công.</span>";
						return $alert;
					}
					else{
						$alert = "<span class='error'>Cập nhật không thành công.</span>";
						return $alert;
					}

				}
				else{
					// Nếu người dùng không chọn ảnh
					move_uploaded_file($file_temp, $uploaded_image);
					$query = 
						"UPDATE tbl_product SET
						productName = '$productName',
						vitriId = '$vitri',
						product_desc = '$product_desc',
						type = '$type',
						productPrice = '$price'
						where productId = '$id'";
						$result = $this->db->update($query);
					if(result){
						$alert = "<span class='success'>Cập nhật sản phẩm thành công.</span>";
						return $alert;
					}
					else{
						$alert = "<span class='error'>Cập nhật sản phẩm không thành công.</span>";
						return $alert;
					}

				}
			}
		}
		public function del_product($id)
		{
			$query = "DELETE FROM tbl_product WHERE productId = '$id'";
			$result = $this->db->delete($query);
			if(result){
					$alert = "<span class='success'>Xóa sản phẩm thành công.</span>";
					return $alert;
			}
			else{
				$alert = "<span class='error'>Xóa sản phẩm không thành công.</span>";
				return $alert;
			}				
		}
	}
?>