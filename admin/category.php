<?php
require '../include/masterpageadmin.php';
require '../include/database.php';
myHeaderAdmin();
?>
<script>
	function showDele(){
		alert('Xóa thành công');
	}
</script>
<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12">

		<div class="panel panel-primary">
			<div class="panel-heading">Danh sách danh mục</div>
			<div class="panel-body">
				<div class="bootstrap-table">
					<div class="table-responsive">
						<a href="admin/adcategory.php" class="btn btn-primary">Thêm danh mục</a>
						<table class="table table-bordered" style="margin-top:20px;">
							<thead>
								<tr class="bg-primary">
									<th>ID</th>
									<th>Tên danh mục</th>
									<th>Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
									$con = new mysqli('localhost', 'root', '', 'testing1');
									$sql = "SELECT * from category";
									if ($result = $con->query($sql)) {
										if ($result->num_rows > 0) {
											while ($row = $result->fetch_array()) {
												echo "<tr>";
												echo "<td>" . $row['category_id'] . "</td>";
												echo "<td>" . $row['category_name'] . "</td>";
												echo " <td><a href='admin/editcategory.php?category_id=" . $row['category_id'] . "' class='btn btn-warning'><i class='fa fa-pencil' aria-hidden='true'></i> Sửa</a>
												<a href='admin/delcategory.php?category_id=" . $row['category_id']."' 
												onclick='location.href=showDele()' class='btn btn-danger' ><i class='fa fa-trash' aria-hidden='true'></i> Xóa</a>
												</td>";
												echo "</tr>";
											}
											$result->free();
										} else {
											echo "Không tìm thấy dữ liệu.";
										}
									} else {
										echo "ERROR: Không thể thực thi câu lệnh $sql. " . $mysqli->error;
									}
									$con->close();
									?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!--/.row-->