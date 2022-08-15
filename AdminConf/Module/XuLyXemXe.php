<?php
    include('config.php');

    $sql_lietke_product_car = "SELECT * FROM chitietsanpham ORDER BY idchitietsanpham DESC"; 
    $query_lietke_product_car = mysqli_query($mysqli,$sql_lietke_product_car);
?>