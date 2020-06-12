<?php
require '../include/masterpageadmin.php';
require '../include/database.php';
myHeaderAdmin();
?>
<?php
function updateProduct($val, $val2, $val3, $val4)
{
    $conn = mysqli_connect('localhost', 'root', '', 'testing1');
    $product_id = $_GET['product_id'];
    $query = "UPDATE `product` SET `category_id`='$val',`product_name`='$val2',`product_price`='$val3',`product_image`='val4' WHERE product_id = '$product_id'";
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
<?php
$con = new mysqli("localhost", "root", "", "testing1");
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql = "SELECT * FROM product WHERE product_id = '$product_id'";
    $ket_qua = $con->query($sql);

    while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
        $category_id = $row['category_id'];
        $product_name = $row['product_name'];
        $file_name = $row['product_image'];
        $price = $row['product_price'];
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
                    <div class="panel-heading">Sửa sản phẩm</div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <label>danh mục</label>
                                        <input required type="text" name="category_id" value="<?php echo $category_id; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input required type="text" name="product_name" value="<?php echo $product_name; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input required type="number" name="product_price" value="<?php echo $price; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input required id="img" type="file" name="product_image" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="300px" src="images/<?php echo $file_name?>">
                                    </div>
                                    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    <a href="admin/category.php" class="btn btn-danger">Hủy bỏ</a>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
<?php
    }
}
$con->close();
?>