<?php
    include("AdminConf/Configure/config.php");  

     $sql_thongtincanhan_donhang= "SELECT * FROM donlaithu,chitietsanpham WHERE donlaithu.idchitietsanpham = chitietsanpham.idchitietsanpham and donlaithu.IdUser= '$_SESSION[Id_KhachHang]'"; 
     $query_thongtincanhan_donhang = mysqli_query($mysqli,$sql_thongtincanhan_donhang);

    $sql_lietke_loaixe = "SELECT * FROM donlaithu,loaixe WHERE donlaithu.IdLoaiXe = loaixe.IdLoaiXe";
    $query_lietke_loaixe = mysqli_query($mysqli,$sql_lietke_loaixe);
    $row1 = mysqli_fetch_array($query_lietke_loaixe)
?>
<div class="thongtin-right">
    <div class="Header-Right">
        <h4>Hồ Sơ Của Tôi</h4>
        <p>Quản lý thông tin hồ sơ của bạn</p>
    </div>
    <div class="body-thongtincanhan-right1">
        <div class="Cart-Accesory-Body-Header">
            <div class="Cart-Icon"><i class="bi bi-bag-plus-fill"></i></div>
            <div class="Cart-Anh"><span>Sản Phẩm</span></div>
            <div class="Cart-MaDonHang"><span>Loại Xe</span></div>
            <div class="Cart-Name1"><span>Tên Xe</span></div>
            <div class="Cart-NgayMua">Ngày Đặt</div>
            <div class="Cart-SoLuong">Lịch Lái Thử</div>
            <div class="Cart-TongGiaPhuKien"><span>Giá Niêm Yết</span></div>
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
            <div  class = " Cart-Anh " >
                <img  src = "AdminConf/Module/Uploads/<?php echo $row['HinhAnh1']?>" width="80" height="80"
                    Size="(max-width: 80px ) 100vw, 80px" alt="Ảnh xem trước" name="AnhPhuKien1">
            </div>
            <div class="Cart-MaDonHang"><span><?php echo $row1['tenloaixe'] ?></span></div>
            <div class="Cart-Name1"><span><?php echo $row['TenXe'] ?></span></div> 
            <div class="Cart-NgayMua"><?php echo $row['NgayDangKy'] ?></div>
            <div class="Cart-SoLuong Color-Red Bold"><?php echo $row['LichDangKyLaiThu'] ?></div>
            <div class="Cart-TongGiaPhuKien Color-Red"><span><?php echo $row['GiaNiemYetXe'] ?></span></div>
            <div class="Cart-TinhTrang"><p><?php if($row['TinhTrangDatHang'] == 0){echo 'Chờ Duyệt';}else{echo 'Đã Duyệt';}?></p></div>
        </div>

        <?php
            }
        ?>
    </div>
</div>