<?php
require '../include/masterpageadmin.php';
require '../include/database.php';
myHeaderAdmin();
?>
<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked bag">
                        <use xlink:href="#stroked-bag"></use>
                    </svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">
                        <?php
                            $con = new mysqli("localhost","root","","testing1");
                            $cr = $con->query("SELECT * from product");
                            echo mysqli_num_rows($cr);  
                            mysqli_close($con);
                        ?>
                    </div>
                    <div class="text-muted">Sản phẩm</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked empty-message">
                        <use xlink:href="#stroked-empty-message"></use>
                    </svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">
                        <?php
                        $con = new mysqli("localhost","root","","testing1");
                        $cr = $con->query("SELECT * from category");
                        echo mysqli_num_rows($cr);
                        mysqli_close($con);
                        ?>
                    </div>
                    <div class="text-muted">Danh mục</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-male-user"></use>
                    </svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">24</div>
                    <div class="text-muted">Người dùng</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked app-window-with-content">
                        <use xlink:href="#stroked-app-window-with-content"></use>
                    </svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">25.2k</div>
                    <div class="text-muted">Danh mục</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--./row-->

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-red">
            <div class="panel-heading dark-overlay"><svg class="glyph stroked calendar">
                    <use xlink:href="#stroked-calendar"></use>
                </svg>Lịch</div>
            <div class="panel-body">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
    <!--/.col-->
</div>
<!--./row-->
</div>
<!--./main-->

<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/chart.min.js"></script>
<script src="bootstrap/js/chart-data.js"></script>
<script src="bootstrap/js/easypiechart.js"></script>
<script src="bootstrap/js/easypiechart-data.js"></script>
<script src="bootstrap/js/bootstrap-datepicker.js"></script>
<script>
    $('#calendar').datepicker({});

    ! function($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function() {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function() {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>

</body>

</html>