<?php
    include('config.php');

    $sql_thongtincanhan_donhang= "SELECT * FROM detailorder, chitietphukien WHERE detailorder.IdChiTietPhuKien = chitietphukien.IdChiTietPhuKien  ORDER BY detailorder.IdDetailOrder"; 
    $query_thongtincanhan_donhang = mysqli_query($mysqli,$sql_thongtincanhan_donhang);
?>
<div class="thongtin-right">
    <div class="Header-Right">
        <h4>Hồ Sơ Của Tôi</h4>
        <p>Quản lý thông tin hồ sơ của bạn</p>
    </div>
    <div class="body-thongtincanhan-right">
    <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_thongtincanhan_donhang))
                {
                    $i++;
                
                ?>
        <div class="body-thongtincanhan-border">
            <div class="body-thongtin">
                

                <div class="form-group">
                    <lable>Mã Đơn Hàng:</lable>
                    <input type="text" name="HoVaTen" class="form-control" value="<?php echo $row['Code_Cart'] ?>">
                </div>

                <div class="form-group">
                    <lable>Tên Phụ Kiện:</lable>
                    <input type="text" name="Email" class="form-control" readonly
                        value="<?php echo $row['TenChiTietPhuKien'] ?>">
                </div>

                <div class="form-group">
                    <lable>Số Lượng Mua</lable>
                    <input type="text" name="SDT" class="form-control" value="<?php echo $row['SoLuongPhuKien'] ?>">
                </div>

                <div class="form-group">
                    <lable>Giá Phụ Kiện (x1)</lable>
                    <input type="text" name="DiaChi"
                        class="form-control" value="<?php echo  number_format($row['GiaTungPhuKien'],0,',','.').'vnđ' ?>">
                </div>

                <div class="form-group">
                    <lable>Giá Phụ Kiện (xN)</lable>
                    <input type="text" name="NgaySinh" class="form-control"
                        value="<?php echo number_format(($row['GiaTungPhuKien']*$row['SoLuongPhuKien']),0,',','.').'vnđ' ?>">
                </div>

                <div class="form-group">
                    <lable>Ngày Đặt</lable>
                    <input type="date" name="NgaySinh" class="form-control" value="<?php echo $row['NgayMua'] ?>">
                </div>

                <div class="form-group">
                    <lable>Tình Trạng</lable>
                    <input type="text" name="GioiTinh" class="form-control tinhtrang"
                        value="<?php if($row['TinhTrangDonHang'] == 1){echo 'Đang Giao';}else{echo 'Chờ Duyệt';}?>">
                </div>
                
            </div>
            
        </div>
        <?php
                }
                ?>
    </div>
</div>