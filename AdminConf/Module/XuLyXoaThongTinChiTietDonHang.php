<?php
include('config.php');

    $id=$_GET['IdXoaChiTietDonHang'];
    $sql_xoa = "DELETE From detailorder WHERE IdDetailOrder='".$id."'";

    mysqli_query($mysqli,$sql_xoa);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=ThongTinKhachHang";</script>';
  
?>