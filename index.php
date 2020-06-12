<?php
    require 'include/database.php';
    require 'include/masterpage.php';
    myheader();
    
    //content
    $s = "select * from category";
    if(isset($_GET['id'])){
        $_SESSION['id']=$_GET['id'];
    }
    if(isset($_SESSION['id']) && $_SESSION['id']!=0)
        $s .= " where category_id='".$_SESSION['id']."'";
    echo getData1($s);

    myfooter();
?>
