<?php
    include('config.php');
// --------------------------------------------- khởi tạo dữ liệu ------------------------------------ //






if(isset($_POST['SuaPhuKienBody']))
{

$TenPhuKien = $_POST['TenPhuKien'];
$loaiphukien = $_POST['loaiphukien'];
//Ảnh
$AnhPhuKien1 = $_FILES['AnhPhuKien1']['name'];
$AnhPhuKien1_tmp = $_FILES['AnhPhuKien1']['tmp_name'];
$AnhPhuKien1 = time().'_'.$AnhPhuKien1;
//Ảnh
$AnhPhuKien2 = $_FILES['AnhPhuKien2']['name'];
$AnhPhuKien2_tmp = $_FILES['AnhPhuKien2']['tmp_name'];
$AnhPhuKien2 = time().'_'.$AnhPhuKien2;
//Ảnh
$AnhPhuKien3 = $_FILES['AnhPhuKien3']['name'];
$AnhPhuKien3_tmp = $_FILES['AnhPhuKien3']['tmp_name'];
$AnhPhuKien3 = time().'_'.$AnhPhuKien3;
//Ảnh
$AnhPhuKien4 = $_FILES['AnhPhuKien4']['name'];
$AnhPhuKien4_tmp = $_FILES['AnhPhuKien4']['tmp_name'];
$AnhPhuKien4 = time().'_'.$AnhPhuKien4;
//Ảnh
$AnhPhuKien5 = $_FILES['AnhPhuKien5']['name'];
$AnhPhuKien5_tmp = $_FILES['AnhPhuKien5']['tmp_name'];
$AnhPhuKien5 = time().'_'.$AnhPhuKien5;

$XuatXu = $_POST['XuatXu'];
$ChatLuong = $_POST['ChatLuong'];
$BoPhuKien = $_POST['BoPhuKien'];
$Gioi_THieu_PhuKien_1 = $_POST['Gioi-THieu-PhuKien-1'];
$Gioi_THieu_PhuKien_2 = $_POST['Gioi-THieu-PhuKien-2'];
$Gioi_THieu_PhuKien_3 = $_POST['Gioi-THieu-PhuKien-3'];
$GiaBan = $_POST['GiaBan'];
$SoLuong = $_POST['SoLuong'];
$TinhTrang = $_POST['TinhTrang'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //
if(!$TenPhuKien || !$loaiphukien || !$AnhPhuKien1 || !$AnhPhuKien2 || !$AnhPhuKien3 || !$AnhPhuKien4 || !$AnhPhuKien5 || !$XuatXu 
    || !$ChatLuong || !$BoPhuKien || !$Gioi_THieu_PhuKien_1 || !$Gioi_THieu_PhuKien_2 || !$Gioi_THieu_PhuKien_3 
    || !$GiaBan || !$SoLuong || !$TinhTrang)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
    exit;
}

$sqlXoa = "SELECT * FROM chitietphukien WHERE IdChiTietPhuKien = '$_GET[idaccesory]' LIMIT 1";
$query = mysqli_query($mysqli,$sqlXoa);

    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKien1']);
        unlink('Uploads/'.$row['AnhPhuKien2']);
        unlink('Uploads/'.$row['AnhPhuKien3']);
        unlink('Uploads/'.$row['AnhPhuKien4']);
        unlink('Uploads/'.$row['AnhPhuKien5']);
    }
        $sql_suaphukien1 = "UPDATE chitietphukien SET TenChiTietPhuKien = '$TenPhuKien', IdLoaiPhuKienBody = '$loaiphukien', AnhPhuKien1 = '$AnhPhuKien1', AnhPhuKien2 = '$AnhPhuKien2', AnhPhuKien3 = '$AnhPhuKien3', AnhPhuKien4 = '$AnhPhuKien4', AnhPhuKien5 = '$AnhPhuKien5', XuatXuPhuKien = '$XuatXu', ChatLieu = '$ChatLuong', BoDayDu = '$BoPhuKien', DongGioiThieuPhuKien1 = '$Gioi_THieu_PhuKien_1', DongGioiThieuPhuKien2 = '$Gioi_THieu_PhuKien_2', DongGioiThieuPhuKien3 = '$Gioi_THieu_PhuKien_3', GiaCaPhuKien = '$GiaBan', SoLuongPhuKien = '$SoLuong', TinhTrangPhuKien = '$TinhTrang' Where IdChiTietPhuKien = '$_GET[idaccesory]'"; 
        mysqli_query($mysqli,$sql_suaphukien1);

                    move_uploaded_file($AnhPhuKien1_tmp,'Uploads/'.$AnhPhuKien1);
                    move_uploaded_file($AnhPhuKien2_tmp,'Uploads/'.$AnhPhuKien2);
                    move_uploaded_file($AnhPhuKien3_tmp,'Uploads/'.$AnhPhuKien3);
                    move_uploaded_file($AnhPhuKien4_tmp,'Uploads/'.$AnhPhuKien4);
                    move_uploaded_file($AnhPhuKien5_tmp,'Uploads/'.$AnhPhuKien5);
                    

        
        echo '<script> alert("Bạn đã Sửa thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

    
}


if(isset($_POST['SuaPhuKienBaoVe']))
{

$TenPhuKien = $_POST['TenPhuKien'];
$loaiphukien = $_POST['loaiphukien'];
//Ảnh
$AnhPhuKien1 = $_FILES['AnhPhuKien1']['name'];
$AnhPhuKien1_tmp = $_FILES['AnhPhuKien1']['tmp_name'];
$AnhPhuKien1 = time().'_'.$AnhPhuKien1;
//Ảnh
$AnhPhuKien2 = $_FILES['AnhPhuKien2']['name'];
$AnhPhuKien2_tmp = $_FILES['AnhPhuKien2']['tmp_name'];
$AnhPhuKien2 = time().'_'.$AnhPhuKien2;
//Ảnh
$AnhPhuKien3 = $_FILES['AnhPhuKien3']['name'];
$AnhPhuKien3_tmp = $_FILES['AnhPhuKien3']['tmp_name'];
$AnhPhuKien3 = time().'_'.$AnhPhuKien3;
//Ảnh
$AnhPhuKien4 = $_FILES['AnhPhuKien4']['name'];
$AnhPhuKien4_tmp = $_FILES['AnhPhuKien4']['tmp_name'];
$AnhPhuKien4 = time().'_'.$AnhPhuKien4;
//Ảnh
$AnhPhuKien5 = $_FILES['AnhPhuKien5']['name'];
$AnhPhuKien5_tmp = $_FILES['AnhPhuKien5']['tmp_name'];
$AnhPhuKien5 = time().'_'.$AnhPhuKien5;

$XuatXu = $_POST['XuatXu'];
$ChatLuong = $_POST['ChatLuong'];
$BoPhuKien = $_POST['BoPhuKien'];
$Gioi_THieu_PhuKien_1 = $_POST['Gioi-THieu-PhuKien-1'];
$Gioi_THieu_PhuKien_2 = $_POST['Gioi-THieu-PhuKien-2'];
$Gioi_THieu_PhuKien_3 = $_POST['Gioi-THieu-PhuKien-3'];
$GiaBan = $_POST['GiaBan'];
$SoLuong = $_POST['SoLuong'];
$TinhTrang = $_POST['TinhTrang'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //
if(!$TenPhuKien || !$loaiphukien || !$AnhPhuKien1 || !$AnhPhuKien2 || !$AnhPhuKien3 || !$AnhPhuKien4 || !$AnhPhuKien5 || !$XuatXu 
    || !$ChatLuong || !$BoPhuKien || !$Gioi_THieu_PhuKien_1 || !$Gioi_THieu_PhuKien_2 || !$Gioi_THieu_PhuKien_3 
    || !$GiaBan || !$SoLuong || !$TinhTrang)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
    exit;
}

$sqlXoa = "SELECT * FROM chitietphukien WHERE IdChiTietPhuKien = '$_GET[idaccesory]' LIMIT 1";
$query = mysqli_query($mysqli,$sqlXoa);

    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKien1']);
        unlink('Uploads/'.$row['AnhPhuKien2']);
        unlink('Uploads/'.$row['AnhPhuKien3']);
        unlink('Uploads/'.$row['AnhPhuKien4']);
        unlink('Uploads/'.$row['AnhPhuKien5']);
    }
        $sql_suaphukien1 = "UPDATE chitietphukien SET TenChiTietPhuKien = '$TenPhuKien', IdLoaiPhuKienBaoVe = '$loaiphukien', AnhPhuKien1 = '$AnhPhuKien1', AnhPhuKien2 = '$AnhPhuKien2', AnhPhuKien3 = '$AnhPhuKien3', AnhPhuKien4 = '$AnhPhuKien4', AnhPhuKien5 = '$AnhPhuKien5', XuatXuPhuKien = '$XuatXu', ChatLieu = '$ChatLuong', BoDayDu = '$BoPhuKien', DongGioiThieuPhuKien1 = '$Gioi_THieu_PhuKien_1', DongGioiThieuPhuKien2 = '$Gioi_THieu_PhuKien_2', DongGioiThieuPhuKien3 = '$Gioi_THieu_PhuKien_3', GiaCaPhuKien = '$GiaBan', SoLuongPhuKien = '$SoLuong', TinhTrangPhuKien = '$TinhTrang' Where IdChiTietPhuKien = '$_GET[idaccesory]'"; 
        mysqli_query($mysqli,$sql_suaphukien1);

                    move_uploaded_file($AnhPhuKien1_tmp,'Uploads/'.$AnhPhuKien1);
                    move_uploaded_file($AnhPhuKien2_tmp,'Uploads/'.$AnhPhuKien2);
                    move_uploaded_file($AnhPhuKien3_tmp,'Uploads/'.$AnhPhuKien3);
                    move_uploaded_file($AnhPhuKien4_tmp,'Uploads/'.$AnhPhuKien4);
                    move_uploaded_file($AnhPhuKien5_tmp,'Uploads/'.$AnhPhuKien5);
                    

        
        echo '<script> alert("Bạn đã Sửa thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

    
}

if(isset($_POST['SuaPhuKienTienNghi']))
{

$TenPhuKien = $_POST['TenPhuKien'];
$loaiphukien = $_POST['loaiphukien'];
//Ảnh
$AnhPhuKien1 = $_FILES['AnhPhuKien1']['name'];
$AnhPhuKien1_tmp = $_FILES['AnhPhuKien1']['tmp_name'];
$AnhPhuKien1 = time().'_'.$AnhPhuKien1;
//Ảnh
$AnhPhuKien2 = $_FILES['AnhPhuKien2']['name'];
$AnhPhuKien2_tmp = $_FILES['AnhPhuKien2']['tmp_name'];
$AnhPhuKien2 = time().'_'.$AnhPhuKien2;
//Ảnh
$AnhPhuKien3 = $_FILES['AnhPhuKien3']['name'];
$AnhPhuKien3_tmp = $_FILES['AnhPhuKien3']['tmp_name'];
$AnhPhuKien3 = time().'_'.$AnhPhuKien3;
//Ảnh
$AnhPhuKien4 = $_FILES['AnhPhuKien4']['name'];
$AnhPhuKien4_tmp = $_FILES['AnhPhuKien4']['tmp_name'];
$AnhPhuKien4 = time().'_'.$AnhPhuKien4;
//Ảnh
$AnhPhuKien5 = $_FILES['AnhPhuKien5']['name'];
$AnhPhuKien5_tmp = $_FILES['AnhPhuKien5']['tmp_name'];
$AnhPhuKien5 = time().'_'.$AnhPhuKien5;

$XuatXu = $_POST['XuatXu'];
$ChatLuong = $_POST['ChatLuong'];
$BoPhuKien = $_POST['BoPhuKien'];
$Gioi_THieu_PhuKien_1 = $_POST['Gioi-THieu-PhuKien-1'];
$Gioi_THieu_PhuKien_2 = $_POST['Gioi-THieu-PhuKien-2'];
$Gioi_THieu_PhuKien_3 = $_POST['Gioi-THieu-PhuKien-3'];
$GiaBan = $_POST['GiaBan'];
$SoLuong = $_POST['SoLuong'];
$TinhTrang = $_POST['TinhTrang'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //
if(!$TenPhuKien || !$loaiphukien || !$AnhPhuKien1 || !$AnhPhuKien2 || !$AnhPhuKien3 || !$AnhPhuKien4 || !$AnhPhuKien5 || !$XuatXu 
    || !$ChatLuong || !$BoPhuKien || !$Gioi_THieu_PhuKien_1 || !$Gioi_THieu_PhuKien_2 || !$Gioi_THieu_PhuKien_3 
    || !$GiaBan || !$SoLuong || !$TinhTrang)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
    exit;
}

$sqlXoa = "SELECT * FROM chitietphukien WHERE IdChiTietPhuKien = '$_GET[idaccesory]' LIMIT 1";
$query = mysqli_query($mysqli,$sqlXoa);

    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKien1']);
        unlink('Uploads/'.$row['AnhPhuKien2']);
        unlink('Uploads/'.$row['AnhPhuKien3']);
        unlink('Uploads/'.$row['AnhPhuKien4']);
        unlink('Uploads/'.$row['AnhPhuKien5']);
    }
        $sql_suaphukien1 = "UPDATE chitietphukien SET TenChiTietPhuKien = '$TenPhuKien', IdLoaiPhuKienTienNghi = '$loaiphukien', AnhPhuKien1 = '$AnhPhuKien1', AnhPhuKien2 = '$AnhPhuKien2', AnhPhuKien3 = '$AnhPhuKien3', AnhPhuKien4 = '$AnhPhuKien4', AnhPhuKien5 = '$AnhPhuKien5', XuatXuPhuKien = '$XuatXu', ChatLieu = '$ChatLuong', BoDayDu = '$BoPhuKien', DongGioiThieuPhuKien1 = '$Gioi_THieu_PhuKien_1', DongGioiThieuPhuKien2 = '$Gioi_THieu_PhuKien_2', DongGioiThieuPhuKien3 = '$Gioi_THieu_PhuKien_3', GiaCaPhuKien = '$GiaBan', SoLuongPhuKien = '$SoLuong', TinhTrangPhuKien = '$TinhTrang' Where IdChiTietPhuKien = '$_GET[idaccesory]'"; 
        mysqli_query($mysqli,$sql_suaphukien1);

                    move_uploaded_file($AnhPhuKien1_tmp,'Uploads/'.$AnhPhuKien1);
                    move_uploaded_file($AnhPhuKien2_tmp,'Uploads/'.$AnhPhuKien2);
                    move_uploaded_file($AnhPhuKien3_tmp,'Uploads/'.$AnhPhuKien3);
                    move_uploaded_file($AnhPhuKien4_tmp,'Uploads/'.$AnhPhuKien4);
                    move_uploaded_file($AnhPhuKien5_tmp,'Uploads/'.$AnhPhuKien5);
                    

        
        echo '<script> alert("Bạn đã Sửa thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

    
}



if(isset($_POST['SuaPhuKienTrangTri']))
{

$TenPhuKien = $_POST['TenPhuKien'];
$loaiphukien = $_POST['loaiphukien'];
//Ảnh
$AnhPhuKien1 = $_FILES['AnhPhuKien1']['name'];
$AnhPhuKien1_tmp = $_FILES['AnhPhuKien1']['tmp_name'];
$AnhPhuKien1 = time().'_'.$AnhPhuKien1;
//Ảnh
$AnhPhuKien2 = $_FILES['AnhPhuKien2']['name'];
$AnhPhuKien2_tmp = $_FILES['AnhPhuKien2']['tmp_name'];
$AnhPhuKien2 = time().'_'.$AnhPhuKien2;
//Ảnh
$AnhPhuKien3 = $_FILES['AnhPhuKien3']['name'];
$AnhPhuKien3_tmp = $_FILES['AnhPhuKien3']['tmp_name'];
$AnhPhuKien3 = time().'_'.$AnhPhuKien3;
//Ảnh
$AnhPhuKien4 = $_FILES['AnhPhuKien4']['name'];
$AnhPhuKien4_tmp = $_FILES['AnhPhuKien4']['tmp_name'];
$AnhPhuKien4 = time().'_'.$AnhPhuKien4;
//Ảnh
$AnhPhuKien5 = $_FILES['AnhPhuKien5']['name'];
$AnhPhuKien5_tmp = $_FILES['AnhPhuKien5']['tmp_name'];
$AnhPhuKien5 = time().'_'.$AnhPhuKien5;

$XuatXu = $_POST['XuatXu'];
$ChatLuong = $_POST['ChatLuong'];
$BoPhuKien = $_POST['BoPhuKien'];
$Gioi_THieu_PhuKien_1 = $_POST['Gioi-THieu-PhuKien-1'];
$Gioi_THieu_PhuKien_2 = $_POST['Gioi-THieu-PhuKien-2'];
$Gioi_THieu_PhuKien_3 = $_POST['Gioi-THieu-PhuKien-3'];
$GiaBan = $_POST['GiaBan'];
$SoLuong = $_POST['SoLuong'];
$TinhTrang = $_POST['TinhTrang'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //
if(!$TenPhuKien || !$loaiphukien || !$AnhPhuKien1 || !$AnhPhuKien2 || !$AnhPhuKien3 || !$AnhPhuKien4 || !$AnhPhuKien5 || !$XuatXu 
    || !$ChatLuong || !$BoPhuKien || !$Gioi_THieu_PhuKien_1 || !$Gioi_THieu_PhuKien_2 || !$Gioi_THieu_PhuKien_3 
    || !$GiaBan || !$SoLuong || !$TinhTrang)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
    exit;
}

$sqlXoa = "SELECT * FROM chitietphukien WHERE IdChiTietPhuKien = '$_GET[idaccesory]' LIMIT 1";
$query = mysqli_query($mysqli,$sqlXoa);

    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKien1']);
        unlink('Uploads/'.$row['AnhPhuKien2']);
        unlink('Uploads/'.$row['AnhPhuKien3']);
        unlink('Uploads/'.$row['AnhPhuKien4']);
        unlink('Uploads/'.$row['AnhPhuKien5']);
    }
        $sql_suaphukien1 = "UPDATE chitietphukien SET TenChiTietPhuKien = '$TenPhuKien', IdLoaiPhuKienTrangTri = '$loaiphukien', AnhPhuKien1 = '$AnhPhuKien1', AnhPhuKien2 = '$AnhPhuKien2', AnhPhuKien3 = '$AnhPhuKien3', AnhPhuKien4 = '$AnhPhuKien4', AnhPhuKien5 = '$AnhPhuKien5', XuatXuPhuKien = '$XuatXu', ChatLieu = '$ChatLuong', BoDayDu = '$BoPhuKien', DongGioiThieuPhuKien1 = '$Gioi_THieu_PhuKien_1', DongGioiThieuPhuKien2 = '$Gioi_THieu_PhuKien_2', DongGioiThieuPhuKien3 = '$Gioi_THieu_PhuKien_3', GiaCaPhuKien = '$GiaBan', SoLuongPhuKien = '$SoLuong', TinhTrangPhuKien = '$TinhTrang' Where IdChiTietPhuKien = '$_GET[idaccesory]'"; 
        mysqli_query($mysqli,$sql_suaphukien1);

                    move_uploaded_file($AnhPhuKien1_tmp,'Uploads/'.$AnhPhuKien1);
                    move_uploaded_file($AnhPhuKien2_tmp,'Uploads/'.$AnhPhuKien2);
                    move_uploaded_file($AnhPhuKien3_tmp,'Uploads/'.$AnhPhuKien3);
                    move_uploaded_file($AnhPhuKien4_tmp,'Uploads/'.$AnhPhuKien4);
                    move_uploaded_file($AnhPhuKien5_tmp,'Uploads/'.$AnhPhuKien5);
                    

        
        echo '<script> alert("Bạn đã Sửa thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

    
}



if(isset($_POST['SuaPhuKienMamXe']))
{

$TenPhuKien = $_POST['TenPhuKien'];
$loaiphukien = $_POST['loaiphukien'];
//Ảnh
$AnhPhuKien1 = $_FILES['AnhPhuKien1']['name'];
$AnhPhuKien1_tmp = $_FILES['AnhPhuKien1']['tmp_name'];
$AnhPhuKien1 = time().'_'.$AnhPhuKien1;
//Ảnh
$AnhPhuKien2 = $_FILES['AnhPhuKien2']['name'];
$AnhPhuKien2_tmp = $_FILES['AnhPhuKien2']['tmp_name'];
$AnhPhuKien2 = time().'_'.$AnhPhuKien2;
//Ảnh
$AnhPhuKien3 = $_FILES['AnhPhuKien3']['name'];
$AnhPhuKien3_tmp = $_FILES['AnhPhuKien3']['tmp_name'];
$AnhPhuKien3 = time().'_'.$AnhPhuKien3;
//Ảnh
$AnhPhuKien4 = $_FILES['AnhPhuKien4']['name'];
$AnhPhuKien4_tmp = $_FILES['AnhPhuKien4']['tmp_name'];
$AnhPhuKien4 = time().'_'.$AnhPhuKien4;
//Ảnh
$AnhPhuKien5 = $_FILES['AnhPhuKien5']['name'];
$AnhPhuKien5_tmp = $_FILES['AnhPhuKien5']['tmp_name'];
$AnhPhuKien5 = time().'_'.$AnhPhuKien5;

$XuatXu = $_POST['XuatXu'];
$ChatLuong = $_POST['ChatLuong'];
$BoPhuKien = $_POST['BoPhuKien'];
$Gioi_THieu_PhuKien_1 = $_POST['Gioi-THieu-PhuKien-1'];
$Gioi_THieu_PhuKien_2 = $_POST['Gioi-THieu-PhuKien-2'];
$Gioi_THieu_PhuKien_3 = $_POST['Gioi-THieu-PhuKien-3'];
$GiaBan = $_POST['GiaBan'];
$SoLuong = $_POST['SoLuong'];
$TinhTrang = $_POST['TinhTrang'];


// --------------------------------------------------- XỬ lý dữ liệu -------------------------------- //
if(!$TenPhuKien || !$loaiphukien || !$AnhPhuKien1 || !$AnhPhuKien2 || !$AnhPhuKien3 || !$AnhPhuKien4 || !$AnhPhuKien5 || !$XuatXu 
    || !$ChatLuong || !$BoPhuKien || !$Gioi_THieu_PhuKien_1 || !$Gioi_THieu_PhuKien_2 || !$Gioi_THieu_PhuKien_3 
    || !$GiaBan || !$SoLuong || !$TinhTrang)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
    exit;
}

$sqlXoa = "SELECT * FROM chitietphukien WHERE IdChiTietPhuKien = '$_GET[idaccesory]' LIMIT 1";
$query = mysqli_query($mysqli,$sqlXoa);

    while($row = mysqli_fetch_array($query)){
        unlink('Uploads/'.$row['AnhPhuKien1']);
        unlink('Uploads/'.$row['AnhPhuKien2']);
        unlink('Uploads/'.$row['AnhPhuKien3']);
        unlink('Uploads/'.$row['AnhPhuKien4']);
        unlink('Uploads/'.$row['AnhPhuKien5']);
    }
        $sql_suaphukien1 = "UPDATE chitietphukien SET TenChiTietPhuKien = '$TenPhuKien', IdLoaiPhuKienMamXe = '$loaiphukien', AnhPhuKien1 = '$AnhPhuKien1', AnhPhuKien2 = '$AnhPhuKien2', AnhPhuKien3 = '$AnhPhuKien3', AnhPhuKien4 = '$AnhPhuKien4', AnhPhuKien5 = '$AnhPhuKien5', XuatXuPhuKien = '$XuatXu', ChatLieu = '$ChatLuong', BoDayDu = '$BoPhuKien', DongGioiThieuPhuKien1 = '$Gioi_THieu_PhuKien_1', DongGioiThieuPhuKien2 = '$Gioi_THieu_PhuKien_2', DongGioiThieuPhuKien3 = '$Gioi_THieu_PhuKien_3', GiaCaPhuKien = '$GiaBan', SoLuongPhuKien = '$SoLuong', TinhTrangPhuKien = '$TinhTrang' Where IdChiTietPhuKien = '$_GET[idaccesory]'"; 
        mysqli_query($mysqli,$sql_suaphukien1);

                    move_uploaded_file($AnhPhuKien1_tmp,'Uploads/'.$AnhPhuKien1);
                    move_uploaded_file($AnhPhuKien2_tmp,'Uploads/'.$AnhPhuKien2);
                    move_uploaded_file($AnhPhuKien3_tmp,'Uploads/'.$AnhPhuKien3);
                    move_uploaded_file($AnhPhuKien4_tmp,'Uploads/'.$AnhPhuKien4);
                    move_uploaded_file($AnhPhuKien5_tmp,'Uploads/'.$AnhPhuKien5);
                    

        
        echo '<script> alert("Bạn đã Sửa thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

    
}
?>