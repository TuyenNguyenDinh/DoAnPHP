<?php
function myHeaderAdmin(){
    $xau ='
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="../">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/styleAdmin.css">
    <link rel="stylesheet" href="bootstrap/css/datepicker3.css">
    <script src="bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/lumino.glyphs.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">SHOP</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg> User <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div> <!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li role="presentation" class="divider"></li>
            <li><a href="admin/admin.php"><svg class="glyph stroked dashboard-dial">
                        <use xlink:href="#stroked-dashboard-dial"></use>
                    </svg> Trang chủ</a></li>
            <li><a href="admin/product.php"><svg class="glyph stroked calendar">
                        <use xlink:href="#stroked-calendar"></use>
                    </svg> Sản phẩm</a></li>
            <li><a href="admin/category.php"><svg class="glyph stroked line-graph">
                        <use xlink:href="#stroked-line-graph"></use>
                    </svg> Danh mục</a></li>
            <li role="presentation" class="divider"></li>
            <li><a href="index.php"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg> Giao diện trang web</a></li>
        </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-ms-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Trang chủ</h1>
            </div>
        </div>
        <!--/.row-->
        </body>
        </html>';
echo $xau;
}
?>