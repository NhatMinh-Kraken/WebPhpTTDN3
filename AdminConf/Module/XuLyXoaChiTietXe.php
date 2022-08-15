<?php
include('config.php');

    $id=$_GET['idchitietsanpham'];
    $sqlXoa = "SELECT * FROM chitietsanpham WHERE idchitietsanpham ='$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sqlXoa);

    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['HinhAnh1']);
        unlink('Uploads/'.$row['MauSac1']);
        unlink('Uploads/'.$row['MauSac2']);
        unlink('Uploads/'.$row['MauSac3']);
        unlink('Uploads/'.$row['AnhDauXe1']);
        unlink('Uploads/'.$row['AnhDauXe2']);
        unlink('Uploads/'.$row['AnhThanXe1']);
        unlink('Uploads/'.$row['AnhThanXe2']);
        unlink('Uploads/'.$row['AnhDuoiXe']);
        unlink('Uploads/'.$row['AnhKhoangLai1']);
        unlink('Uploads/'.$row['AnhGheTruoc']);
        unlink('Uploads/'.$row['AnhKhoangHanhKhach']);
        unlink('Uploads/'.$row['AnhKhoangHanhLy']);
        unlink('Uploads/'.$row['AnhTienNghi']);
        unlink('Uploads/'.$row['AnhDongCo']);
        unlink('Uploads/'.$row['AnhVanHanh']);
    }

    $sql_xoachitietxe = "DELETE From chitietsanpham WHERE idchitietsanpham ='".$id."'";

    mysqli_query($mysqli,$sql_xoachitietxe);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=Xem-Xe";</script>';
?>