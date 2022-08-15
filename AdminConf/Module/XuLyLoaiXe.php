<?php
include('config.php');

$LoaiXe = $_POST['LoaiXe'];

if(!$LoaiXe)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Add-Type-Product-Car";</script>' ;
    exit;
}

$ktLoaiXe = mysqli_query($mysqli,"SELECT tenloaixe FROM loaixe WHERE tenloaixe='$LoaiXe'");

if(mysqli_num_rows($ktLoaiXe) == 1)
{
    echo '<script language="javascript"> alert("Loại Xe đã tồn tại."); window.location="IndexAdmin.php?action=Add-Type-Product-Car";</script>' ;
    exit;
}

if(isset($_POST['ThemLoaiXe']))
{
    $sql_themloaixe = "INSERT INTO loaixe(tenloaixe) VALUE ('".$LoaiXe."')";

    mysqli_query($mysqli,$sql_themloaixe);

    echo '<script> alert("Bạn đã thêm thành công");window.location="IndexAdmin.php?action=Xem-Loai-Xe";</script>';
}


?>