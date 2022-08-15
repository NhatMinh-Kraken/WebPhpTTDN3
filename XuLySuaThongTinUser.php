<?php
    include('config.php');
if(isset($_POST['SuaTTCaNhanKH']))
{
    $HoVaTen = $_POST['HoVaTenKH'];
    $Email = $_POST['EmailKH'];
    $SDT = $_POST['SDTKH'];
    $DiaChi = $_POST['DiaChiKH'];
    $NgaySinh = $_POST['NgaySinhKH'];
    $GioiTinh = $_POST['GioiTinhKH'];

    if(!$HoVaTen || !$Email || !$SDT || !$DiaChi || !$NgaySinh || !$GioiTinh){
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="Default-Profile.php";</script>' ;
        exit;
    }

    
    $sql_suatt = "UPDATE taikhoanuser SET HoVaTen='$HoVaTen',Email='$Email',SDT='$SDT',DiaChi='$DiaChi',NgaySinh='$NgaySinh',GioiTinh='$GioiTinh' Where IdUser='$_GET[IdUser]'";

    mysqli_query($mysqli,$sql_suatt);

    echo '<script> alert("Bạn đã sửa thành công");window.location="Default-Profile.php";</script>';
}

?>