<?php
require '../include/masterpageadmin.php';
require '../include/database.php';
myHeaderAdmin();
?>
<?php
function insertCategory($val)
{
    $conn = mysqli_connect('localhost', 'root', '', 'testing1');
    $query = "INSERT INTO category(category_name) VALUES ('" . $val . "')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

if (isset($_POST['category_name']) && isset($_POST['query'])) {
    $category_name = $_POST['category_name'];
    if ($_POST['query'] == "Thêm") {
        insertCategory($category_name);
        echo "Dữ liệu đã được chèn!";
    }
}
?>
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">

        <div class="panel panel-primary">
            <div class="panel-heading">Thêm danh mục</div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="row" style="margin-bottom:40px">
                        <div class="col-xs-8">
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input required type="text" name="category_name" class="form-control">
                            </div>
                            <input type="submit" name="query" value="Thêm" class="btn btn-primary">
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
