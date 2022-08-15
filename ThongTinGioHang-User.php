<?php
    include("AdminConf/Configure/config.php");  

     $sql_thongtincanhan_donhang= "SELECT * FROM detailorder, chitietphukien WHERE detailorder.IdChiTietPhuKien = chitietphukien.IdChiTietPhuKien and detailorder.IdOrder = '$_SESSION[Id_KhachHang]'"; 
     $query_thongtincanhan_donhang = mysqli_query($mysqli,$sql_thongtincanhan_donhang);
?>
<div class="thongtin-right">
    <div class="Header-Right">
        <h4>Hồ Sơ Của Tôi</h4>
        <p>Quản lý thông tin hồ sơ của bạn</p>
    </div>
    <div class="body-thongtincanhan-right1">
        <div class="Cart-Accesory-Body-Header">
            <div class="Cart-Icon"><i class="bi bi-bag-plus-fill"></i></div>
            <div class="Cart-MaDonHang"><span>Mã Đơn Hàng</span></div>
            <div class="Cart-Anh"><span>Sản Phẩm</span></div>
            <div class="Cart-Name1"><span></span></div>
            <div class="Cart-SoLuong">Số Lượng</div>
            <div class="Cart-NgayMua">Ngày Mua</div>
            <div class="Cart-TongGiaPhuKien"><span>Thành Tiền</span></div>
            <div class="Cart-TinhTrang"><span>Tình Trạng</span></div>
        </div>
        <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_thongtincanhan_donhang))
            {
                $i++;
        ?>

        <div class="Cart-Accesory-Body-Bottom">
            <div class="Cart-Icon"><i class="bi bi-bag-plus-fill"></i></div>
            <div class="Cart-MaDonHang"><span><?php echo $row['Code_Cart'] ?></span></div> 
            <div  class = " Cart-Anh " >
                <img  src = "AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien1']?>" width="80" height="80"
                    Size="(max-width: 80px ) 100vw, 80px" alt="Ảnh xem trước" name="AnhPhuKien1">
            </div>
            <div class="Cart-Name1"><span><?php echo $row['TenChiTietPhuKien'] ?></span></div> 
            <div class="Cart-SoLuong"><?php echo $row['SoLuongPhuKienMuaHang'] ?></div>
            <div class="Cart-NgayMua"><?php echo $row['NgayMua'] ?></div>
            <div class="Cart-TongGiaPhuKien"><span><?php echo number_format(($row['GiaTungPhuKien']*$row['SoLuongPhuKienMuaHang']),0,',','.').'vnđ' ?></span></div>
            <div class="Cart-TinhTrang"><p><?php if($row['TinhTrangDonHang'] == 1){echo 'Đang Giao';}else{echo 'Chờ Duyệt';}?></p></div>

        </div>

        <?php
            }
        ?>
    </div>
</div>