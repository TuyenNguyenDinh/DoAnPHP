<?php
require '../include/masterpageadmin.php';
require '../include/database.php';
myHeaderAdmin();
?>
<?php
function insertProduct($val, $val2, $val3, $val4)
{
	$conn = mysqli_connect('localhost', 'root', '', 'testing1');
	$query = "INSERT INTO `product`( `category_id`, `product_name`, `product_price`, `product_image`) VALUES ('$val','$val2','$val3','$val4')";
	mysqli_query($conn, $query);
	mysqli_close($conn);
}
if (
	isset($_POST['category_id']) &&  isset($_POST['product_name'])
	&& isset($_POST['product_price']) && isset($_FILES['product_image'])  && isset($_POST['query'])
) {
	$category_id = $_POST['category_id'];
	$product_name = $_POST['product_name'];
	$file_name = $_FILES['product_image']['name'];
	$price = $_POST['product_price'];
	if ($_POST['query'] == "Thêm") {
		insertProduct($category_id, $product_name, $price, $file_name);
		header('Location: product.php');
	}
}
?>
<script>
	function changeImg(input) {
		//Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			//Sự kiện file đã được load vào website
			reader.onload = function(e) {
				//Thay đổi đường dẫn ảnh
				$('#avatar').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$(document).ready(function() {
		$('#avatar').click(function() {
			$('#img').click();
		});
	});

	function showAdd() {
		alert("Dữ liệu cập nhật thành công");
	}
</script>
<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12">

		<div class="panel panel-primary">
			<div class="panel-heading">Thêm sản phẩm</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
					<div class="row" style="margin-bottom:40px">
						<div class="col-xs-8">
							<div class="form-group">
								<label>Danh mục</label>
								<input required type="text" name="category_id" class="form-control">
							</div>
							<div class="form-group">
								<label>Tên sản phẩm</label>
								<input required type="text" name="product_name" class="form-control">
							</div>
							<div class="form-group">
								<label>Giá sản phẩm</label>
								<input required type="number" name="product_price" class="form-control">
							</div>
							<div class="form-group">
								<label>Ảnh sản phẩm</label>
								<input required id="img" type="file" name="product_image" class="form-control hidden" onchange="changeImg(this)">
								<img id="avatar" class="thumbnail" width="300px" src="images/new_seo-10-512.png">
							</div>
							<input type="submit" name="query" onclick="location.href=showAdd()" value="Thêm" class="btn btn-primary">
							<a href="admin/product.php"  class="btn btn-danger">Hủy bỏ</a>
						</div>
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!--/.row-->
