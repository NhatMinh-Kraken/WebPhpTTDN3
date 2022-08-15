<?php
include('config.php');

$LoaiXe = $_POST['LoaiXe'];

if(!$LoaiXe)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Xem-Loai-Xe";</script>' ;
    exit;
}

$ktLoaiXe = mysqli_query($mysqli,"SELECT tenloaixe FROM loaixe WHERE tenloaixe='$LoaiXe'");

if(mysqli_num_rows($ktLoaiXe) == 1)
{
    echo '<script language="javascript"> alert("Loại Xe đã tồn tại."); window.location="IndexAdmin.php?action=Xem-Loai-Xe";</script>' ;
    exit;
}

if(isset($_POST['SuaLoaiXe']))
{
    $sql_sualoaixe = "UPDATE loaixe SET tenloaixe='".$LoaiXe."' Where IdLoaiXe='$_GET[idloaixe]'";

    mysqli_query($mysqli,$sql_sualoaixe);

    echo '<script> alert("Bạn đã sửa thành công");window.location="IndexAdmin.php?action=Xem-Loai-Xe";</script>';
}


?>