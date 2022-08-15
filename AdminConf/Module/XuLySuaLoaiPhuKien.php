<?php
include('config.php');

if(isset($_POST['SuaLoaiPhuKien0']))
{
    $LoaiPhuKien0 = $_POST['LoaiPhuKienNoiThatNgoaiThat'];

    if(!$LoaiPhuKien0)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }

    $ktLoaiPhuKien0 = mysqli_query($mysqli,"SELECT TenLoaiPhuKienNoiThatNgoaiThat FROM loaiphukiennoithatngoaithat WHERE TenLoaiPhuKienNoiThatNgoaiThat='$LoaiPhuKien0'");

    if(mysqli_num_rows($ktLoaiPhuKien0) == 1)
    {
        echo '<script language="javascript"> alert("Loại Kiện đã tồn tại."); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }


    $sql_sualoaiphukien0 = "UPDATE loaiphukiennoithatngoaithat SET TenLoaiPhuKienNoiThatNgoaiThat='".$LoaiPhuKien0."' Where IdLoaiPhuKienNoiThatNgoaiThat='$_GET[idaccesory]'";

    mysqli_query($mysqli,$sql_sualoaiphukien0);

    echo '<script> alert("Bạn đã sửa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}


if(isset($_POST['SuaLoaiPhuKien1']))
{
    $LoaiPhuKien1 = $_POST['LoaiPhuKienBody'];

    if(!$LoaiPhuKien1)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }

    $ktLoaiPhuKien1 = mysqli_query($mysqli,"SELECT TenLoaiPhuKienBody FROM loaiphukienbody WHERE TenLoaiPhuKienBody='$LoaiPhuKien1'");

    if(mysqli_num_rows($ktLoaiPhuKien1) == 1)
    {
        echo '<script language="javascript"> alert("Loại Kiện đã tồn tại."); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }


    $sql_sualoaiphukien1 = "UPDATE loaiphukienbody SET TenLoaiPhuKienBody='".$LoaiPhuKien1."' Where IdLoaiPhuKienBody='$_GET[idaccesory]'";

    mysqli_query($mysqli,$sql_sualoaiphukien1);

    echo '<script> alert("Bạn đã sửa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}


if(isset($_POST['SuaLoaiPhuKien2']))
{
    $LoaiPhuKien2 = $_POST['LoaiPhuKienBaoVe'];

    if(!$LoaiPhuKien2)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }

    $ktLoaiPhuKien2 = mysqli_query($mysqli,"SELECT TenLoaiPhuKienBaoVe FROM loaiphukienbaove WHERE TenLoaiPhuKienBaoVe='$LoaiPhuKien2'");

    if(mysqli_num_rows($ktLoaiPhuKien2) == 1)
    {
        echo '<script language="javascript"> alert("Loại Kiện đã tồn tại."); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }


    $sql_sualoaiphukien2 = "UPDATE loaiphukienbaove SET TenLoaiPhuKienBaoVe='".$LoaiPhuKien2."' Where IdLoaiPhuKienBaoVe='$_GET[idaccesory]'";

    mysqli_query($mysqli,$sql_sualoaiphukien2);

    echo '<script> alert("Bạn đã sửa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}


if(isset($_POST['SuaLoaiPhuKien3']))
{
    $LoaiPhuKien3 = $_POST['LoaiPhuKienTienNghi'];

    if(!$LoaiPhuKien3)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }

    $ktLoaiPhuKien3 = mysqli_query($mysqli,"SELECT TenLoaiPhuKienTienNghi FROM loaiphukientiennghi WHERE TenLoaiPhuKienTienNghi='$LoaiPhuKien3'");

    if(mysqli_num_rows($ktLoaiPhuKien3) == 1)
    {
        echo '<script language="javascript"> alert("Loại Phụ Kiện đã tồn tại."); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }


    $sql_sualoaiphukien3 = "UPDATE loaiphukientiennghi SET TenLoaiPhuKienTienNghi='".$LoaiPhuKien3."' Where IdLoaiPhuKienTienNghi='$_GET[idaccesory]'";

    mysqli_query($mysqli,$sql_sualoaiphukien3);

    echo '<script> alert("Bạn đã sửa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}


if(isset($_POST['SuaLoaiPhuKien4']))
{
    $LoaiPhuKien4 = $_POST['LoaiPhuKienTrangTri'];

    if(!$LoaiPhuKien4)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }

    $ktLoaiPhuKien4 = mysqli_query($mysqli,"SELECT TenLoaiPhuKienTrangTri FROM loaiphukientrangtri WHERE TenLoaiPhuKienTrangTri='$LoaiPhuKien4'");

    if(mysqli_num_rows($ktLoaiPhuKien4) == 1)
    {
        echo '<script language="javascript"> alert("Loại Phụ Kiện đã tồn tại."); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }


    $sql_sualoaiphukien4 = "UPDATE loaiphukientrangtri SET TenLoaiPhuKienTrangTri='".$LoaiPhuKien4."' Where IdLoaiPhuKienTrangTri='$_GET[idaccesory]'";

    mysqli_query($mysqli,$sql_sualoaiphukien4);

    echo '<script> alert("Bạn đã sửa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}


if(isset($_POST['SuaLoaiPhuKien5']))
{
    $LoaiPhuKien5 = $_POST['LoaiPhuKienMamXe'];

    if(!$LoaiPhuKien5)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }

    $ktLoaiPhuKien5 = mysqli_query($mysqli,"SELECT TenLoaiPhuKienMamXe FROM loaiphukienmamxe WHERE TenLoaiPhuKienMamXe='$LoaiPhuKien5'");

    if(mysqli_num_rows($ktLoaiPhuKien5) == 1)
    {
        echo '<script language="javascript"> alert("Loại Phụ Kiện đã tồn tại."); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
        exit;
    }


    $sql_sualoaiphukien5 = "UPDATE loaiphukienmamxe SET TenLoaiPhuKienMamXe='".$LoaiPhuKien5."' Where IdLoaiPhuKienMamXe='$_GET[idaccesory]'";

    mysqli_query($mysqli,$sql_sualoaiphukien5);

    echo '<script> alert("Bạn đã sửa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}


?>