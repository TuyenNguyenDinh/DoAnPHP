<?php

    $conn = mysqli_connect('localhost', 'root', '', 'testing1');
    $category_id = $_GET['category_id'];
    $query = "DELETE FROM category WHERE category_id = $category_id";
    mysqli_query($conn, $query);
    header('Location: category.php');
    mysqli_close($conn);
?>