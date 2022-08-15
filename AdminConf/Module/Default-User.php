<?php
    include('config.php');

    //$sql_lietke_danhsachkhachhang = "SELECT * FROM taikhoanuser,orderaccesory WHERE taikhoanuser.IdUser = orderaccesory.IdUser ORDER BY orderaccesory.IdOrder"; 

    $sql_lietke_danhsachkhachhang = "SELECT * FROM taikhoanuser ORDer BY IdUser"; 
    $query_lietke_danhsachkhachhang = mysqli_query($mysqli,$sql_lietke_danhsachkhachhang);
    
?>
<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Danh Sách Khách Hàng
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
                                    value="<?php echo $row['IdUser'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Họ và Tên:</lable>
                                <input type="text" name="HoVaTen" class="form-control"
                                    value="<?php echo $row['HoVaTen'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Email:</lable>
                                <input type="text" name="Email" class="form-control" readonly
                                    value="<?php echo $row['Email'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Số điện thoại</lable>
                                <input type="number" name="SDT" class="form-control" value="<?php echo $row['SDT'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Địa Chỉ</lable>
                                <textarea type="text" name="DiaChi"
                                    class="form-control"> <?php echo $row['DiaChi'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <lable class="lable">Ngày Sinh</lable>
                                <input type="date" name="NgaySinh" class="form-control"
                                    value="<?php echo $row['NgaySinh'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">GioiTinh</lable>
                                <input type="text" name="GioiTinh" class="form-control"
                                    value="<?php echo $row['GioiTinh']?>">
                            </div>

                            <div class="footer-laithu">
                                <div class="button-laithu">
                                    <a href="XuLyXoaThongTinUser.php?IdUser=<?php echo $row['IdUser'] ?>" class="button-laithu-link" type="submit" name="XoaTTCaNhan">Xóa Thông
                                        Tin</a>
                                </div>

                                <div class="button-laithu">
                                    <a href="?action=SuaThongTinKhachHang&IdUser=<?php echo $row['IdUser'] ?>" class="button-laithu-link" type="submit" name="SuaTTCaNhan">Sửa Thông
                                        Tin</a>
                                </div>

                                <div class="button-laithu">
                                    <a href="?action=XemDonHang&IdUser=<?php echo $row['IdUser'] ?>" class="button-laithu-link" type="submit" name="SuaTTCaNhan">Xem Đơn Hàng</a>
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