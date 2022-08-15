<?php
include('config.php');



if(isset($_POST['ThemLoaiPhuKienBody']))
{
    $LoaiPhuKienBody = $_POST['LoaiPhuKienBody'];
    if(!$LoaiPhuKienBody)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Add-Type-Accesory-Body";</script>' ;
        exit;
    }

    $ktLoaiPhuKienBody = mysqli_query($mysqli,"SELECT TenLoaiPhuKienBody FROM loaiphukienbody WHERE TenLoaiPhuKienBody='$LoaiPhuKienBody'");

    if(mysqli_num_rows($ktLoaiPhuKienBody) == 1)
    {
        echo '<script language="javascript"> alert("Loại phụ kiện đã tồn tại."); window.location="IndexAdmin.php?action=Add-Type-Accesory-Body";</script>' ;
        exit;
    }

    $sql_ThemLoaiPhuKienBody = "INSERT INTO loaiphukienbody(TenLoaiPhuKienBody) VALUE ('".$LoaiPhuKienBody."')";

    mysqli_query($mysqli,$sql_ThemLoaiPhuKienBody);

    echo '<script> alert("Bạn đã thêm thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}


if(isset($_POST['ThemLoaiPhuKienBaoVe']))
{
    $LoaiPhuKienBaoVe = $_POST['LoaiPhuKienBaoVe'];
    
    if(!$LoaiPhuKienBaoVe)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Add-Type-Accesory-BaoVe";</script>' ;
        exit;
    }

    $ktLoaiPhuKienBaoVe = mysqli_query($mysqli,"SELECT TenLoaiPhuKienBaoVe FROM loaiphukienBaoVe WHERE TenLoaiPhuKienBaoVe='$LoaiPhuKienBaoVe'");

    if(mysqli_num_rows($ktLoaiPhuKienBaoVe) == 1)
    {
        echo '<script language="javascript"> alert("Loại phụ kiện đã tồn tại."); window.location="IndexAdmin.php?action=Add-Type-Accesory-BaoVe";</script>' ;
        exit;
    }

    $sql_ThemLoaiPhuKienBaoVe = "INSERT INTO loaiphukienbaove(TenLoaiPhuKienBaoVe) VALUE ('".$LoaiPhuKienBaoVe."')";

    mysqli_query($mysqli,$sql_ThemLoaiPhuKienBaoVe);

    echo '<script> alert("Bạn đã thêm thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}


if(isset($_POST['ThemLoaiPhuKienTienNghi']))
{
    $LoaiPhuKienTienNghi = $_POST['LoaiPhuKienTienNghi'];
    
    if(!$LoaiPhuKienTienNghi)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Add-Type-Accesory-TienNghi";</script>' ;
        exit;
    }

    $ktLoaiPhuKienTienNghi = mysqli_query($mysqli,"SELECT TenLoaiPhuKienTienNghi FROM loaiphukientiennghi WHERE TenLoaiPhuKienTienNghi='$LoaiPhuKienTienNghi'");

    if(mysqli_num_rows($ktLoaiPhuKienTienNghi) == 1)
    {
        echo '<script language="javascript"> alert("Loại phụ kiện đã tồn tại."); window.location="IndexAdmin.php?action=Add-Type-Accesory-TienNghi";</script>' ;
        exit;
    }

    $sql_ThemLoaiPhuKienTienNghi = "INSERT INTO loaiphukientiennghi(TenLoaiPhuKienTienNghi) VALUE ('".$LoaiPhuKienTienNghi."')";

    mysqli_query($mysqli,$sql_ThemLoaiPhuKienTienNghi);

    echo '<script> alert("Bạn đã thêm thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}


if(isset($_POST['ThemLoaiPhuKienTrangTri']))
{
    $LoaiPhuKienTrangTri = $_POST['LoaiPhuKienTrangTri'];
    
    if(!$LoaiPhuKienTrangTri)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Add-Type-Accesory-TrangTri";</script>' ;
        exit;
    }

    $ktLoaiPhuKienTrangTri = mysqli_query($mysqli,"SELECT TenLoaiPhuKienTrangTri FROM loaiphukientrangtri WHERE TenLoaiPhuKienTrangTri='$LoaiPhuKienTrangTri'");

    if(mysqli_num_rows($ktLoaiPhuKienTrangTri) == 1)
    {
        echo '<script language="javascript"> alert("Loại phụ kiện đã tồn tại."); window.location="IndexAdmin.php?action=Add-Type-Accesory-TrangTri";</script>' ;
        exit;
    }

    $sql_ThemLoaiPhuKienTrangTri = "INSERT INTO loaiphukientrangtri(TenLoaiPhuKienTrangTri) VALUE ('".$LoaiPhuKienTrangTri."')";

    mysqli_query($mysqli,$sql_ThemLoaiPhuKienTrangTri);

    echo '<script> alert("Bạn đã thêm thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}



if(isset($_POST['ThemLoaiPhuKienMamXe']))
{
    $LoaiPhuKienMamXe = $_POST['LoaiPhuKienMamXe'];
    
    if(!$LoaiPhuKienMamXe)
    {
        echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Add-Type-Accesory-TrangTri";</script>' ;
        exit;
    }

    $ktLoaiPhuKienMamXe = mysqli_query($mysqli,"SELECT TenLoaiPhuKienMamXe FROM loaiphukienmamxe WHERE TenLoaiPhuKienMamXe='$LoaiPhuKienMamXe'");

    if(mysqli_num_rows($ktLoaiPhuKienMamXe) == 1)
    {
        echo '<script language="javascript"> alert("Loại phụ kiện đã tồn tại."); window.location="IndexAdmin.php?action=Add-Type-Accesory-TrangTri";</script>' ;
        exit;
    }

    $sql_ThemLoaiPhuKienMamXe = "INSERT INTO loaiphukienmamxe(TenLoaiPhuKienMamXe) VALUE ('".$LoaiPhuKienMamXe."')";

    mysqli_query($mysqli,$sql_ThemLoaiPhuKienMamXe);

    echo '<script> alert("Bạn đã thêm thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
}


?>