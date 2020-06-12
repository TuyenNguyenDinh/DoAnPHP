<?php

    $conn = mysqli_connect('localhost', 'root', '', 'testing1');
    $product_id = $_GET['product_id'];
    $query = "DELETE FROM product WHERE product_id = $product_id";
    mysqli_query($conn, $query);
    header('Location: product.php');
    mysqli_close($conn);
?>