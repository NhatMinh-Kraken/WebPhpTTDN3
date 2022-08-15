<?php
    include('config.php'); 
    $sql_lietke_danhsachdonhang = "SELECT DISTINCT * FROM chitietphukien,detailorder WHERE detailorder.IdChiTietPhuKien = chitietphukien.IdChiTietPhuKien  And detailorder.IdDetailOrder = '$_GET[IdSuaChiTietDonHang]' LIMIT 1";
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
                        <form method="POST" action="XuLySuaChiTietDonHang.php?IdSuaChiTietDonHang=<?php echo $_GET['IdSuaChiTietDonHang'] ?>" enctype="multipart/form-data">
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
                                <input type="text" name="SoLuong" class="form-control" value="<?php echo $row['SoLuongPhuKien'] ?>">
                            </div>

                            <div class="form-group">
                                <lable class="lable">Giá</lable>
                                <input type="text" name="Gia" class="form-control" value="<?php echo number_format(($row['GiaTungPhuKien']),0,',','.').'vnđ' ?>" readonly>
                            </div>

                            <div class="form-group">
                                <lable class="lable">Ngày Mua:</lable>
                                <input type="date" name="NgayMua"
                                    class="form-control" value="<?php echo $row['NgayMua'] ?>" readonly>
                            </div>

                            <div class="form-group">
                                <lable class="lable">Tình Trạng</lable>
                                <select id="exampleInputTayLaiTroLuc" name="TinhTrang" class="form-control">
                                                        <option value="0">Chờ Duyệt</option>
                                                        <option value="1">Đã Duyệt</option>
                                                    </select>
                            </div>

                            <div class="footer-laithu">
                                <div class="button-laithu">
                                    <input class="button-laithu-link" type="submit" name="SuaTTDonHang" value="Sửa Chi Tiết Đơn Hàng">
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