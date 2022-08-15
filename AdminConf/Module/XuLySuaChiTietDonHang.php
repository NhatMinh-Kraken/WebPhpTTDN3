<?php
include('config.php');

$SoLuong = $_POST['SoLuong'];
$TinhTrang = $_POST['TinhTrang'];


if(isset($_POST['SuaTTDonHang']))
{
    $sql_suaDonHang = "UPDATE detailorder SET SoLuongPhuKienMuaHang='".$SoLuong."', TinhTrangDonHang='".$TinhTrang."' Where IdDetailOrder='$_GET[IdSuaChiTietDonHang]'";

    mysqli_query($mysqli,$sql_suaDonHang);

    echo '<script> alert("Bạn đã sửa thành công");window.location="IndexAdmin.php?action=ThongTinKhachHang";</script>';
}


?>