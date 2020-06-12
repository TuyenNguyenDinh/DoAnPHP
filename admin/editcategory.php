<?php
require '../include/masterpageadmin.php';
require '../include/database.php';
myHeaderAdmin();
?>
<?php
function updateCategory($val)
{
    $conn = mysqli_connect('localhost', 'root', '', 'testing1');
    $category_id = $_GET['category_id'];
    $query = "UPDATE category SET category_name=('" . $val . "')  WHERE category_id = '$category_id'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

if(isset($_POST['category_id']) && isset($_POST['submit'])){
    $category_name = $_POST['category_id'];
    if($_POST['submit'] == "Thêm"){
        updateCategory($category_name);
        echo "Dữ liệu đã được cập nhật";
    }
}
?>
<?php
$con = new mysqli("localhost", "root", "", "testing1");
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $sql = "SELECT * FROM category WHERE category_id = '$category_id'";
    $ket_qua = $con->query($sql);

    while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
        $category_name = $row['category_name'];
?>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Sửa sản phẩm</div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input required type="text" name="category_id" value="<?php echo $category_name; ?>" class="form-control">
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