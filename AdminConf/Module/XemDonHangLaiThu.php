<?php
    include('config.php');

    //$sql_lietke_danhsachkhachhang = "SELECT * FROM taikhoanuser,orderaccesory WHERE taikhoanuser.IdDonLaiThu = orderaccesory.IdDonLaiThu ORDER BY orderaccesory.IdOrder"; 

    $sql_lietke_danhsachkhachhang = "SELECT * FROM donlaithu ORDer BY IdDonLaiThu"; 
    $query_lietke_danhsachkhachhang = mysqli_query($mysqli,$sql_lietke_danhsachkhachhang);
    
?>
<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Danh Sách Khách Hàng Đăng Ký Lái Thử
                        </h1>
                    </div>

                    <?php
                    while($row = mysqli_fetch_array($query_lietke_danhsachkhachhang))
                    {
                        
                    ?>
                    <div class="body-thongtincanhan-border">
                        <div class="body-thongtin">
                            <div class="form-group">
                                <lable class="lable">Id:</lable>
                                <input type="text" name="ID" class="form-control"
                                    value="<?php echo $row['IdDonLaiThu'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Họ và Tên:</lable>
                                <input type="text" name="HoVaTen" class="form-control"
                                    value="<?php echo $row['HoVaTenKhachHang'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Email:</lable>
                                <input type="text" name="Email" class="form-control" readonly
                                    value="<?php echo $row['EmailKhachHang'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Địa Chỉ</lable>
                                <textarea type="text" name="DiaChi"
                                    class="form-control"> <?php echo $row['DiaChiKhachHang'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <lable class="lable">Số điện thoại</lable>
                                <input type="number" name="SDT" class="form-control" value="<?php echo $row['SDTKhachHang'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Lịch Hẹn</lable>
                                <input type="date" name="LichHen" class="form-control" readonly value="<?php echo $row['LichDangKyLaiThu'] ?>">
                            </div>

                            <div class="footer-laithu">
                                <div class="button-laithu">
                                    <a href="XuLyXoaThongTinKhachHangLT.php?IdDonLaiThu=<?php echo $row['IdDonLaiThu'] ?>" class="button-laithu-link" type="submit" name="XoaTTKHLaiThu">Xóa Thông
                                        Tin</a>
                                </div>

                                <div class="button-laithu">
                                    <a href="?action=SuaThongTinKhachHangLaiThu&IdDonLaiThu=<?php echo $row['IdDonLaiThu'] ?>" class="button-laithu-link" type="submit" name="SuaTTKHLaiThu">Sửa Thông
                                        Tin</a>
                                </div>

                                <div class="button-laithu">
                                    <a href="?action=XemChiTietDonHangLaiThu&IdDonLaiThu=<?php echo $row['IdDonLaiThu'] ?>" class="button-laithu-link" type="submit">Xem Đơn Hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>