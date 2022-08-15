<?php
    include('config.php');
// ----------------------- khởi tạo dữ liệu ------------------ //


if(isset($_POST['ThemPhuKien']))
{

$TenPhuKien = $_POST['TenPhuKien'];
$loaiphukienBody = $_POST['loaiphukienBody'];
$loaiphukienBaoVe = $_POST['loaiphukienBaoVe'];
$loaiphukienTienNghi = $_POST['loaiphukienTienNghi'];
$loaiphukienTrangTri = $_POST['loaiphukienTrangTri'];
$loaiphukienMamXe = $_POST['loaiphukienMamXe'];
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
$ChatLieu = $_POST['ChatLieu'];
$BoPhuKien = $_POST['BoPhuKien'];
$Gioi_THieu_PhuKien_1 = $_POST['Gioi-THieu-PhuKien-1'];
$Gioi_THieu_PhuKien_2 = $_POST['Gioi-THieu-PhuKien-2'];
$Gioi_THieu_PhuKien_3 = $_POST['Gioi-THieu-PhuKien-3'];
$GiaBan = $_POST['GiaBan'];
$SoLuong = $_POST['SoLuong'];
$TinhTrang = $_POST['TinhTrang'];


// ------------------------------------------------------- XỬ lý dữ liệu ------------------------------------------------------------ //
if(!$TenPhuKien
|| !$AnhPhuKien1
|| !$AnhPhuKien2
|| !$AnhPhuKien3
|| !$AnhPhuKien4
|| !$AnhPhuKien5
|| !$XuatXu
|| !$ChatLieu
|| !$BoPhuKien
|| !$Gioi_THieu_PhuKien_1
|| !$Gioi_THieu_PhuKien_2
|| !$Gioi_THieu_PhuKien_3
|| !$GiaBan
|| !$SoLuong
|| !$TinhTrang)
{
    echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>' ;
    exit;
}

    //Them
    if($loaiphukienBody!='' && $loaiphukienBaoVe=='' && $loaiphukienTienNghi=='' && $loaiphukienTrangTri=='' && $loaiphukienMamXe==''){
        $sql_themphukien = "INSERT INTO chitietphukien(TenChiTietPhuKien,IdLoaiPhuKienBody,AnhPhuKien1,AnhPhuKien2,AnhPhuKien3,AnhPhuKien4,AnhPhuKien5,XuatXuPhuKien,ChatLieu,BoDayDu,DongGioiThieuPhuKien1,DongGioiThieuPhuKien2,DongGioiThieuPhuKien3,GiaCaPhuKien,SoLuongPhuKien,TinhTrangPhuKien) 
            VALUE('".$TenPhuKien."', '".$loaiphukienBody."','".$AnhPhuKien1."', '".$AnhPhuKien2."', '".$AnhPhuKien3."', '".$AnhPhuKien4."', '".$AnhPhuKien5."', '".$XuatXu."', 
                '".$ChatLieu."', '".$BoPhuKien."', '".$Gioi_THieu_PhuKien_1."', '".$Gioi_THieu_PhuKien_2."', '".$Gioi_THieu_PhuKien_3."', '".$GiaBan."', '".$SoLuong."', '".$TinhTrang."')";
    
                                                    }
                                                        elseif($loaiphukienBody=='' && $loaiphukienBaoVe!='' && $loaiphukienTienNghi=='' && $loaiphukienTrangTri=='' && $loaiphukienMamXe==''){
                                                            $sql_themphukien = "INSERT INTO chitietphukien(TenChiTietPhuKien,IdLoaiPhuKienBaoVe,AnhPhuKien1,AnhPhuKien2,AnhPhuKien3,AnhPhuKien4,AnhPhuKien5,XuatXuPhuKien,ChatLieu,BoDayDu,DongGioiThieuPhuKien1,DongGioiThieuPhuKien2,DongGioiThieuPhuKien3,GiaCaPhuKien,SoLuongPhuKien,TinhTrangPhuKien) 
                                                                VALUE('".$TenPhuKien."', '".$loaiphukienBaoVe."','".$AnhPhuKien1."', '".$AnhPhuKien2."', '".$AnhPhuKien3."', '".$AnhPhuKien4."', '".$AnhPhuKien5."', '".$XuatXu."', 
                                                                '".$ChatLieu."', '".$BoPhuKien."', '".$Gioi_THieu_PhuKien_1."', '".$Gioi_THieu_PhuKien_2."', '".$Gioi_THieu_PhuKien_3."', '".$GiaBan."', '".$SoLuong."', '".$TinhTrang."')";
            
                                                                    
                                                                }
                                                            elseif($loaiphukienBody=='' && $loaiphukienBaoVe=='' && $loaiphukienTienNghi!='' && $loaiphukienTrangTri=='' && $loaiphukienMamXe==''){
                                                                $sql_themphukien = "INSERT INTO chitietphukien(TenChiTietPhuKien,IdLoaiPhuKienTienNghi,AnhPhuKien1,AnhPhuKien2,AnhPhuKien3,AnhPhuKien4,AnhPhuKien5,XuatXuPhuKien,ChatLieu,BoDayDu,DongGioiThieuPhuKien1,DongGioiThieuPhuKien2,DongGioiThieuPhuKien3,GiaCaPhuKien,SoLuongPhuKien,TinhTrangPhuKien) 
                                                                    VALUE('".$TenPhuKien."', '".$loaiphukienTienNghi."','".$AnhPhuKien1."', '".$AnhPhuKien2."', '".$AnhPhuKien3."', '".$AnhPhuKien4."', '".$AnhPhuKien5."', '".$XuatXu."', 
                                                                    '".$ChatLieu."', '".$BoPhuKien."', '".$Gioi_THieu_PhuKien_1."', '".$Gioi_THieu_PhuKien_2."', '".$Gioi_THieu_PhuKien_3."', '".$GiaBan."', '".$SoLuong."', '".$TinhTrang."')";
                
                                                                        
                                                                    }
                                                                    elseif($loaiphukienBody=='' && $loaiphukienBaoVe=='' && $loaiphukienTienNghi=='' && $loaiphukienTrangTri!='' && $loaiphukienMamXe==''){
                                                                        $sql_themphukien = "INSERT INTO chitietphukien(TenChiTietPhuKien,IdLoaiPhuKienTrangTri,AnhPhuKien1,AnhPhuKien2,AnhPhuKien3,AnhPhuKien4,AnhPhuKien5,XuatXuPhuKien,ChatLieu,BoDayDu,DongGioiThieuPhuKien1,DongGioiThieuPhuKien2,DongGioiThieuPhuKien3,GiaCaPhuKien,SoLuongPhuKien,TinhTrangPhuKien) 
                                                                            VALUE('".$TenPhuKien."', '".$loaiphukienTrangTri."','".$AnhPhuKien1."', '".$AnhPhuKien2."', '".$AnhPhuKien3."', '".$AnhPhuKien4."', '".$AnhPhuKien5."', '".$XuatXu."', 
                                                                            '".$ChatLieu."', '".$BoPhuKien."', '".$Gioi_THieu_PhuKien_1."', '".$Gioi_THieu_PhuKien_2."', '".$Gioi_THieu_PhuKien_3."', '".$GiaBan."', '".$SoLuong."', '".$TinhTrang."')";
                        
                                                                                
                                                                            }
                                                                            elseif($loaiphukienBody=='' && $loaiphukienBaoVe=='' && $loaiphukienTienNghi=='' && $loaiphukienTrangTri=='' && $loaiphukienMamXe!=''){
                                                                                $sql_themphukien = "INSERT INTO chitietphukien(TenChiTietPhuKien,IdLoaiPhuKienMamXe,AnhPhuKien1,AnhPhuKien2,AnhPhuKien3,AnhPhuKien4,AnhPhuKien5,XuatXuPhuKien,ChatLieu,BoDayDu,DongGioiThieuPhuKien1,DongGioiThieuPhuKien2,DongGioiThieuPhuKien3,GiaCaPhuKien,SoLuongPhuKien,TinhTrangPhuKien) 
                                                                                    VALUE('".$TenPhuKien."', '".$loaiphukienMamXe."','".$AnhPhuKien1."', '".$AnhPhuKien2."', '".$AnhPhuKien3."', '".$AnhPhuKien4."', '".$AnhPhuKien5."', '".$XuatXu."', 
                                                                                    '".$ChatLieu."', '".$BoPhuKien."', '".$Gioi_THieu_PhuKien_1."', '".$Gioi_THieu_PhuKien_2."', '".$Gioi_THieu_PhuKien_3."', '".$GiaBan."', '".$SoLuong."', '".$TinhTrang."')";
                                
                                                                                        
                                                                                    }
    
                                                                                    mysqli_query($mysqli,$sql_themphukien);
   

                move_uploaded_file($AnhPhuKien1_tmp,'Uploads/'.$AnhPhuKien1);
                move_uploaded_file($AnhPhuKien2_tmp,'Uploads/'.$AnhPhuKien2);
                move_uploaded_file($AnhPhuKien3_tmp,'Uploads/'.$AnhPhuKien3);
                move_uploaded_file($AnhPhuKien4_tmp,'Uploads/'.$AnhPhuKien4);
                move_uploaded_file($AnhPhuKien5_tmp,'Uploads/'.$AnhPhuKien5);
                

    
    echo '<script> alert("Bạn đã thêm thành công");window.location="indexAdmin.php?action=Default-Type-Accesory";</script>';

}

?>