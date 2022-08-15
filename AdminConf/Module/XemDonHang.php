<?php
    include('config.php'); 
    $sql_lietke_danhsachdonhang = "SELECT * FROM taikhoanuser,orderaccesory WHERE taikhoanuser.IdUser = orderaccesory.IdUser And orderaccesory.IdUser = '$_GET[IdUser]'";
    $query_lietke_danhsachdonhang = mysqli_query($mysqli,$sql_lietke_danhsachdonhang);
?>

<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Danh Sách Đơn Hàng
                        </h1>
                    </div>

                    <?php
                    while($row = mysqli_fetch_array($query_lietke_danhsachdonhang))
                    {
                        
                    ?>
                    <div class="body-thongtincanhan-border">
                        <div class="body-thongtin">
                            <div class="form-group">
                                <lable class="lable">Mã Đơn Hàng:</lable>
                                <input type="text" name="ID" class="form-control"
                                    value="<?php echo $row['Code_Cart'] ?>" readonly>
                            </div>

                            <div class="form-group">
                                <lable class="lable">Họ và Tên:</lable>
                                <input type="text" name="HoVaTen" class="form-control" readonly
                                    value="<?php echo $row['HoVaTen'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Ghi Chú:</lable>
                                <textarea type="text" name="GhiChu" class="form-control" readonly>
                                    <?php echo $row['GhiChu'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <lable class="lable">Tổng tiền:</lable>
                                <input type="text" name="TongTien" class="form-control" value="<?php echo $row['TongTien'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Ngày Mua:</lable>
                                <input type="date" name="NgayMua"
                                    class="form-control" value="<?php echo $row['NgayMua'] ?>">
                            </div>

                            <div class="footer-laithu">
                                <div class="button-laithu">
                                    <a href="?action=XemChiTietDonHang&IdChiTietDonHang=<?php echo $row['Code_Cart'] ?>" class="button-laithu-link" type="submit" name="SuaTTCaNhan">Xem Chi Tiết</a>
                                </div>
                                <div class="button-laithu">
                                    <a href="XuLyXoaThongTinDonHang.php?IdDonHang=<?php echo $row['Code_Cart'] ?>" class="button-laithu-link" type="submit" name="SuaTTCaNhan">Xóa Đơn Hàng</a>
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