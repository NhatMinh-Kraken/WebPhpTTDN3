<?php
include('config.php');

    $id=$_GET['IdUser'];
    $sql_xoa = "DELETE From taikhoanuser WHERE IdUser='".$id."'";

    mysqli_query($mysqli,$sql_xoa);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=ThongTinKhachHang";</script>';
  
?>