<?php
include('config.php');

$Gia = $_POST['Gia'];
$TinhTrang = $_POST['TinhTrang'];
$DatLich = $_POST['DatLich'];


if(isset($_POST['SuaTTDonHang']))
{
    $sql_suaDonHang = "UPDATE donlaithu SET LichDangKyLaiThu='".$DatLich."', GiaNiemYetXe='".$Gia."', TinhTrangDatHang='".$TinhTrang."' Where IdDonLaiThu='$_GET[IdDonLaiThu]'";

    mysqli_query($mysqli,$sql_suaDonHang);

    echo '<script> alert("Bạn đã sửa thành công");window.location="IndexAdmin.php?action=XemDonHangLaiThu";</script>';
}


?>