<?php
    session_start();
    class category{
        public $id;
        public $name;
        function __construct($id, $name){
            $this->id = $id; $this->name=$name;
        }
    }
    function getArr(){
        $con = new mysqli("localhost","root","","testing1");
        $cr = $con->query("select * from category"); 
        while($r=$cr->fetch_array()){
            $arr[]=new category($r["category_id"],$r["category_name"]);
        }
        mysqli_close($con);
        return $arr;
    }
    function getData($s){
        $con = new mysqli('localhost','root','','testing1');
        $q = $con->query($s);
        $xau='';
        while($r = $q->fetch_array()){
            $xau .= '
            <div class="container-fluid p-3 my-3 bg-primary text-white" 
            style="margin-top: -30px!important;">
            <h3>'.$r['category_name'].'</h3></div>
            ';
            $q1 = $con->query("select * from product where 
            category_id='".$r['category_id']."'");
            $xau .= '<div class="row" style="text-align: center;">';
            while($r1=$q1->fetch_array()){
                $xau .= '
                <div class="col-sm-3" style="margin-bottom: 50px;">'.'<img src="images/'.
                $r1["product_image"].'" width="120px" height="120px"><h3 style="
                font-weight: bold;">'.
                $r1['product_name'].'<h3><a href="#">Buy</a></h3></h3></div>
                ';
            }
            $xau .= '</div>';
        }
        $con->close();
        return $xau;
    }
    function getData1($s){
        $con = new mysqli('localhost','root','','testing1');
        $q = $con->query($s);
        $xau='';
        while($r = $q->fetch_array()){
            $xau .= '
            <div class="container-fluid p-3 my-3 bg-primary text-white" 
            style="margin-top: -30px!important;">
            <h3>'.$r['category_name'].'</h3></div>
            ';
            $q1 = $con->query("select * from product where 
            category_id='".$r['category_id']."'");

            // BƯỚC 2: TÌM TỔNG SỐ RECORDS
            $total_records = mysqli_num_rows($q1);
    
            // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 2;
    
            // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);
    
            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }
    
            // Tìm Start
            $start = ($current_page - 1) * $limit;
    
            // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
            // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
            $q1 = $con->query("select * from product where 
            category_id='".$r['category_id']."' LIMIT $start, $limit");
            
            $xau .= '<div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">';
                // PHẦN HIỂN THỊ PHÂN TRANG
                // BƯỚC 7: HIỂN THỊ PHÂN TRANG
    
                // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                if ($current_page > 1 && $total_page > 1){
                    $xau .= '<a href="index.php?page='.($current_page-1).'"><<</a> | ';
                }
    
                // Lặp khoảng giữa
                for ($i = 1; $i <= $total_page; $i++){
                    // Nếu là trang hiện tại thì hiển thị thẻ span
                    // ngược lại hiển thị thẻ a
                    if ($i == $current_page){
                        $xau .= '<span>'.$i.'</span> | ';
                    }
                    else{
                        $xau .= '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
                    }
                }
    
                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                if ($current_page < $total_page && $total_page > 1){
                    $xau .= '<a href="index.php?page='.($current_page+1).'">>></a> | ';
                }
                $xau .= '</div>';

            $xau .= '<div class="row" style="text-align: center;">';
            while($r1=$q1->fetch_array()){
                $xau .= '
                <div class="col-sm-3" style="margin-bottom: 50px;">'.'<img src="images/'.
                $r1["product_image"].'" width="120px" height="120px"><h3 style="
                font-weight: bold;">'.
                $r1['product_name'].'<h3><button class="btn btn-success kc" href="#">Buy</button>
                <button class="btn btn-success kc" href="#">Detail</button>
                </h3></div>
                ';
            }
            $xau .= '</div>';
        }
        $con->close();
        return $xau;
    }
