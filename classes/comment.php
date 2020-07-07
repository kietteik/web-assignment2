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
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function getAllComment()
	{
		$query = "SELECT tbl_user.*, tbl_comment.comment_content, tbl_comment.comment_createdDate ,tbl_product.productImage,tbl_product.productId
		 FROM (tbl_comment JOIN tbl_product ON tbl_comment.productId = tbl_product.productId) JOIN tbl_user ON tbl_user.userId = tbl_comment.userId
		 ORDER BY comment_createdDate DESC
			";
		$result = $this->db->select($query);
		return $result;
	}
	public function getCommentByProduct()
	{
		if (isset($_GET['pdid'])) {
			$productId = $_GET['pdid'];
			$query = "SELECT tbl_user.*, tbl_comment.* FROM (tbl_comment JOIN tbl_product ON tbl_comment.productId = tbl_product.productId) 
			JOIN tbl_user ON tbl_user.userId = tbl_comment.userId WHERE tbl_product.productId = '$productId'
			ORDER BY comment_createdDate DESC
			";
			$result = $this->db->select($query);
			return $result;
		} else {
			return false;
		}
	}
	public function getCommentByUser($id)
	{
		$query = "SELECT tbl_product.*, tbl_comment.* FROM (tbl_comment JOIN tbl_product ON tbl_comment.productId = tbl_product.productId) 
		JOIN tbl_user ON tbl_user.userId = tbl_comment.userId 
		WHERE tbl_user.userId = '$id' ORDER BY comment_createdDate DESC
			";
		$result = $this->db->select($query);
		return $result;
	}

	public function insert_comment($data)
	{
		$comment_content = mysqli_real_escape_string($this->db->link, $data['comment-content']);
		$createDate = new DateTime('now', new DateTimezone('Asia/Bangkok'));
		$createDate = $createDate->format("Y-m-d H:i:s");
		$userId = $_SESSION['userId'];
		$productId = mysqli_real_escape_string($this->db->link, $data['productId']);

		if (empty($comment_content)) {
			$alert = "<span class='error'>Comment không được trống.</span>";
			return $alert;
		} else {
			$query = "INSERT INTO tbl_comment(userId, productId, comment_createdDate, comment_content) VALUES('$userId', '$productId', '$createDate', '$comment_content')";
			$result = $this->db->insert($query);
			if ($result) {
				$alert = "<span class='success'>Thêm comment thành công.</span>";
				return $alert;
			} else {
				$alert = "<span class='error'>Thêm comment không thành công.</span>";
				return $alert;
			}
		}
	}


	public function show_comment()
	{
		if (isset($_GET['productId'])) {
			$productId = $_GET['productId'];
			$query = "SELECT * FROM tbl_comment WHERE productId = '$productId' ORDER BY comment_createdDate DESC ";
			$result = $this->db->select($query);
			return $result;
		} else {
			$alert = "<span class='error'>Không tìm thấy sản phẩm.</span>";
			return $alert;
		}
	}


	public function del_comment($id)
	{
		$query = "DELETE FROM tbl_comment WHERE commentId = '$id'";
		$result = $this->db->delete($query);
		if ($result) {
			$alert = "<span class='success'>Xóa comment thành công.</span>";
			return $alert;
		} else {
			$alert = "<span class='error'>Xóa comment không thành công.</span>";
			return $alert;
		}
	}

	public function lock_comment($id)
	{
		$query = "UPDATE tbl_comment SET type = '0' WHERE commentId = '$id'";
		$result = $this->db->delete($query);
		if ($result) {
			$alert = "<span class='success'>Khóa comment thành công.</span>";
			return $alert;
		} else {
			$alert = "<span class='error'>Khóa comment không thành công.</span>";
			return $alert;
		}
	}
	public function unlock_comment($id)
	{
		$query = "UPDATE tbl_comment SET type = '1' WHERE commentId = '$id'";
		$result = $this->db->delete($query);
		if ($result) {
			$alert = "<span class='success'>Mở khóa comment thành công.</span>";
			return $alert;
		} else {
			$alert = "<span class='error'>Mở khóa comment không thành công.</span>";
			return $alert;
		}
	}
}
?>