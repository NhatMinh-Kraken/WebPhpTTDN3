<?php
    session_start();
    include("AdminConf/Configure/config.php");

    // thêm vào giỏ hàng
    if(!isset($_SESSION['dangnhap'])){
        header('Location:Login.php');
    }
    else
    {
        if(isset($_POST['ThemVaoGioHang']))
        {
            
            $id = $_GET['idchitietphukien'];
            $SoLuong = 1;
            $SQL_them = "SELECT * FROM chitietphukien Where IdChiTietPhuKien='$id' LIMIT 1";

            $query = mysqli_query($mysqli,$SQL_them);
            $row = mysqli_fetch_array($query);
            if($row)
            {
                $New_Product = array(array('TenChiTietPhuKien'=>$row['TenChiTietPhuKien'], 'id'=>$id, 'AnhPhuKien1'=>$row['AnhPhuKien1'], 'XuatXuPhuKien'=>$row['XuatXuPhuKien'], 'ChatLieu'=>$row['ChatLieu'], 'BoDayDu'=>$row['BoDayDu'], 'DongGioiPhuKienThieu1'=>$row['DongGioiThieuPhuKien1'], 'DongGioiPhuKienThieu2'=>$row['DongGioiThieuPhuKien2'], 'DongGioiPhuKienThieu3'=>$row['DongGioiThieuPhuKien3'], 'GiaCaPhuKien'=>$row['GiaCaPhuKien'], 'SoLuong'=>$SoLuong));
                //Kiểm tra session đã tồn tài chưa

                if(isset($_SESSION['cart']))
                {
                    $found = false;
                    foreach($_SESSION['cart'] as $cart_item)
                    {
                        if($cart_item['id'] == $id){
                            $Product[] = array('TenChiTietPhuKien'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item['id'],'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXuPhuKien'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiPhuKienThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiPhuKienThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiPhuKienThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'GiaCaPhuKien'=>$cart_item['GiaCaPhuKien'] ,'SoLuong'=>$SoLuong+1);
                            $found = true;
                        }elseif($cart_item['id'] != $id){
                            $Product[] = array('TenChiTietPhuKien'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item['id'],'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXuPhuKien'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiPhuKienThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiPhuKienThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiPhuKienThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'GiaCaPhuKien'=>$cart_item['GiaCaPhuKien'] ,'SoLuong'=>$SoLuong);
                        }
                    }
                    if($found == false){
                        $_SESSION['cart'] = array_merge($Product,$New_Product);
                    }
                    else{
                        $_SESSION['cart'] = $Product;
                    }
                }
                else{
                    $_SESSION['cart'] = $New_Product;
                }

                //session_destroy();
            }
            //echo '<script> alert("Bạn đã thêm thành công");window.location="Index.php?quanly=Accesory";</script>';
            // echo '<pre>';
            // print_r($_SESSION['cart']);
            // echo '</pre>';
            header('Location:Index.php?quanly=Accesory');
        }
        
    }


    //xóa tất cả
    if(isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1)
    {
        unset($_SESSION['cart']);
        echo '<script> alert("Bạn đã xóa thành công");window.location="Index.php?quanly=thongtingiohang";</script>';
    }

    //Xóa từng sản phẩm
    if(isset($_SESSION['cart']) && isset($_GET['xoatungsanpham'])){
        $id = $_GET['xoatungsanpham'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id)
            {
                $Product[] = array('TenChiTietPhuKien'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item['id'],'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXuPhuKien'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiPhuKienThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiPhuKienThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiPhuKienThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'GiaCaPhuKien'=>$cart_item['GiaCaPhuKien'] ,'SoLuong'=>$cart_item['SoLuong']);
            }
            $_SESSION['cart'] = $Product;
            echo '<script> alert("Bạn đã xóa thành công");window.location="Index.php?quanly=thongtingiohang";</script>';
        }
    }


    //Thêm Số lượng
    if(isset($_GET['cong'])){


        $SQL_cong = "SELECT * FROM chitietphukien Where IdChiTietPhuKien='$id'";
        $query1 = mysqli_query($mysqli,$SQL_cong);
        $row1 = mysqli_fetch_array($query1);

        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $Product[] = array('TenChiTietPhuKien'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item['id'],'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXuPhuKien'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiPhuKienThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiPhuKienThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiPhuKienThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'GiaCaPhuKien'=>$cart_item['GiaCaPhuKien'] ,'SoLuong'=>$cart_item['SoLuong']);
                $_SESSION['cart'] = $Product;
            }
            elseif($cart_item['id']==$id){


                $query_SoLuongPhuKienTonKho = mysqli_query($mysqli, "SELECT chitietphukien.SoLuongPhuKien FROM chitietphukien WHERE chitietphukien.IdChiTietPhuKien = '$id'");
                $SoLuongPhuKienTonKho = mysqli_fetch_assoc($query_SoLuongPhuKienTonKho);

                $TangSoLuong = $cart_item['SoLuong'] + 1;
                if($cart_item['SoLuong'] < $SoLuongPhuKienTonKho['SoLuongPhuKien']){
                    
                    $Product[] = array('TenChiTietPhuKien'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item['id'],'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXuPhuKien'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiPhuKienThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiPhuKienThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiPhuKienThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'GiaCaPhuKien'=>$cart_item['GiaCaPhuKien'] ,'SoLuong'=>$TangSoLuong);
                }
                else{
                    $Product[] = array('TenChiTietPhuKien'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item['id'],'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXuPhuKien'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiPhuKienThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiPhuKienThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiPhuKienThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'GiaCaPhuKien'=>$cart_item['GiaCaPhuKien'] ,'SoLuong'=>$cart_item['SoLuong']);
                    
                }
                $_SESSION['cart'] = $Product;
                
            }
            
        }
        header('Location:Index.php?quanly=thongtingiohang');
    }


    // trừ số lượng

    if(isset($_GET['tru'])){


        $SQL_cong = "SELECT * FROM chitietphukien Where IdChiTietPhuKien='$id'";
        $query1 = mysqli_query($mysqli,$SQL_cong);
        $row1 = mysqli_fetch_array($query1);

        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $Product[] = array('TenChiTietPhuKien'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item['id'],'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXuPhuKien'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiPhuKienThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiPhuKienThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiPhuKienThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'GiaCaPhuKien'=>$cart_item['GiaCaPhuKien'] ,'SoLuong'=>$cart_item['SoLuong']);
                $_SESSION['cart'] = $Product;
            }
            elseif($cart_item['id']==$id){
                
                $TangSoLuong = $cart_item['SoLuong'] - 1;
                if($cart_item['SoLuong'] > 1){
                    
                    $Product[] = array('TenChiTietPhuKien'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item['id'],'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXuPhuKien'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiPhuKienThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiPhuKienThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiPhuKienThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'GiaCaPhuKien'=>$cart_item['GiaCaPhuKien'] ,'SoLuong'=>$TangSoLuong);
                }
                else{
                    $Product[] = array('TenChiTietPhuKien'=>$cart_item['TenChiTietPhuKien'], 'id'=>$cart_item['id'],'AnhPhuKien1'=>$cart_item['AnhPhuKien1'],'XuatXuPhuKien'=>$cart_item['XuatXuPhuKien'],'ChatLieu'=>$cart_item['ChatLieu'],'BoDayDu'=>$cart_item['BoDayDu'],'DongGioiPhuKienThieu1'=>$cart_item['DongGioiThieuPhuKien1'],'DongGioiPhuKienThieu2'=>$cart_item['DongGioiThieuPhuKien2'],'DongGioiPhuKienThieu3'=>$cart_item['DongGioiThieuPhuKien3'],'GiaCaPhuKien'=>$cart_item['GiaCaPhuKien'] ,'SoLuong'=>$cart_item['SoLuong']);
                }
                $_SESSION['cart'] = $Product;
            }
        }
        header('Location:Index.php?quanly=thongtingiohang');
    }


    //Thanh toán
    if(isset($_POST['ThanhToan'])){
        $id_khachang = $_SESSION['Id_KhachHang'];
        $GhiChu = $_POST['GhiChu'];
        $Code_cart = rand(0,9999);
        $TongTien = $_POST['TongTien'];
        $id = $_GET['idchitietphukien'];
        $insert_cart = "INSERT INTO orderaccesory(IdUser,Code_Cart,GhiChu,TongTien,NgayMua) Value('".$id_khachang."','".$Code_cart."','".$GhiChu."','".$TongTien."',now())";
        $query_cart = mysqli_query($mysqli,$insert_cart);

        if($query_cart){
            //thêm giỏ hàng chi tiết
            foreach($_SESSION['cart'] as $key => $value){
                $id_chitiet_phukien = $value['id'];
                $SoLuongMua = $value['SoLuong'];

                $GiaTungPhuKien = $value['GiaCaPhuKien'];

                $insert_Detail_cart = "INSERT INTO detailorder(Code_Cart,IdOrder,IdChiTietPhuKien,SoLuongPhuKienMuaHang,GiaTungPhuKien,NgayMua) Value('".$Code_cart."','".$id_khachang."','".$id_chitiet_phukien."','".$SoLuongMua."','".$GiaTungPhuKien."',now())";

                $query_detail_cart = mysqli_query($mysqli,$insert_Detail_cart);
            }
        }
        $update = "UPDATE chitietphukien SET chitietphukien.SoLuongPhuKien = CASE when chitietphukien.IdChiTietPhuKien = '$id' then chitietphukien.SoLuongPhuKien - $SoLuongMua END WHERE chitietphukien.IdChiTietPhuKien in (IdChiTietPhuKien = '$id')";
        $query_update = mysqli_query($mysqli,$update);

        //var_dump($query_update);exit;

        unset($_SESSION['cart']);
        header('Location:Index.php?quanly=camon');
    }

    


    //Sửa thông tin khách hàng

    
?>