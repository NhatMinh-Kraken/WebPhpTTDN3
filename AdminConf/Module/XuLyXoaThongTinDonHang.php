<?php
include('config.php');

    $id=$_GET['IdDonHang'];
    $sql_xoa = "DELETE From orderaccesory WHERE Code_Cart='".$id."'";
    $query_xoaDonHang = mysqli_query($mysqli,$sql_xoa);

    if($query_xoaDonHang){
        
        $sql_xoaTTDOnHang = "DELETE From detailorder WHERE Code_Cart='".$id."'";
        $query_xoaTTDonHang = mysqli_query($mysqli,$sql_xoaTTDOnHang);
    }
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=ThongTinKhachHang";</script>';
  
?>