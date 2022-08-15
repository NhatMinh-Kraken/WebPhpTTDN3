<?php
    include('config.php'); 
    $sql_lietke_danhsachdonhang = "SELECT * FROM chitietphukien,detailorder WHERE detailorder.IdChiTietPhuKien = chitietphukien.IdChiTietPhuKien  And detailorder.Code_Cart = '$_GET[IdChiTietDonHang]'";
    $query_lietke_danhsachdonhang = mysqli_query($mysqli,$sql_lietke_danhsachdonhang);
?>

<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Danh Sách Chi Tiết Đơn Hàng
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
                                <lable class="lable">Tên Phụ Kiện:</lable>
                                <input type="text" name="TenPhuKien" class="form-control" readonly
                                    value="<?php echo $row['TenChiTietPhuKien'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Ảnh Phụ Kiện:</lable>
                                <img loading="lazy" id="imagePreview" class="detail-product-content-img" src="Uploads/<?php echo $row['AnhPhuKien1'] ?>" title="Ảnh Xem Trước" width="150" height="auto" sizes="(max-width: 150px) 100vw, 150px" alt="Ảnh xem trước">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Số Lượng</lable>
                                <input type="text" name="SoLuong" class="form-control" value="<?php echo $row['SoLuongPhuKienMuaHang'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Giá</lable>
                                <input type="text" name="Gia" class="form-control" value="<?php echo number_format(($row['GiaTungPhuKien']),0,',','.').'vnđ' ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Ngày Mua:</lable>
                                <input type="date" name="NgayMua"
                                    class="form-control" value="<?php echo $row['NgayMua'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Tình Trạng</lable>
                                <input type="text" name="TinhTrang" class="form-control" value="<?php if($row['TinhTrangDonHang'] == 1){echo 'Đang Giao';}else{echo 'Chờ Duyệt';}?>">
                            </div>

                            <div class="footer-laithu">
                                <div class="button-laithu">
                                    <a href="?action=SuaChiTietDonHang&IdSuaChiTietDonHang=<?php echo $row['IdDetailOrder'] ?>" class="button-laithu-link" type="submit" name="SuaTTCaNhan">Sửa Chi Tiết Đơn Hàng</a>
                                </div>
                                <div class="button-laithu">
                                    <a href="?action=XuLyXoaThongTinChiTietDonHang&IdXoaChiTietDonHang=<?php echo $row['IdDetailOrder'] ?>" class="button-laithu-link" type="submit" name="SuaTTCaNhan">Xóa Chi Tiết Đơn Hàng</a>
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