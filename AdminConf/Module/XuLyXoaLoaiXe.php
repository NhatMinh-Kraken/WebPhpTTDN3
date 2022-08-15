<?php
include('config.php');

    $id=$_GET['id'];
    $sql_xoa = "DELETE From loaixe WHERE  IdLoaiXe ='".$id."'";

    mysqli_query($mysqli,$sql_xoa);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=Xem-Loai-Xe";</script>';
  
?>