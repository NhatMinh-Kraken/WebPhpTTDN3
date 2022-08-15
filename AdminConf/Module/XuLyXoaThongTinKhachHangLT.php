<?php
include('config.php');

    $id=$_GET['IdDonLaiThu'];
    $sql_xoa = "DELETE From donlaithu WHERE IdDonLaiThu='".$id."'";

    mysqli_query($mysqli,$sql_xoa);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=ThongTinKhachHang";</script>';
  
?>