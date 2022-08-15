

<?php
    include("AdminConf/Configure/config.php");

    $sql_lietke_product_car = "SELECT * FROM chitietsanpham, loaixe WHere chitietsanpham.IdLoaiXe = loaixe.IdLoaiXe and idchitietsanpham='$_GET[idchitietxe]'";
    $query_lietke_product_car = mysqli_query($mysqli,$sql_lietke_product_car);

    
?>
    



    <div class="main-content-wrap">
        <div class="container">
            <div class="row">
                <div class="row-detail-product">
                    <?php
                            $i = 0;
                            while($row = mysqli_fetch_array($query_lietke_product_car)) 
                            {
                                $i++;
                        ?>
                    <div class="row-detail-product-header">
                        <div class="detail-product-header">
                            <h1 class="entry-title">
                                Mercedes giá lăn bánh, đánh giá xe, khuyến mãi
                            </h1>
                        </div>
                        <div class="Name-Product-Car">
                            <h2><?php echo $row['TenXe'] ?></h2>
                        </div>
                    </div>
                    <div class="detail-product-content">
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;">
                                <?php echo $row['DongGioiThieu1'] ?>
                            </span>
                        </p>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['HinhAnh1'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">

                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;">
                                <?php echo $row['DongGioiTHieu2'] ?>
                            </span>
                        </p>
                        <h2 id="ThongSo-KyThuat" class="detail-product-content-h2">
                            <b>Thông Số Kỹ Thuật</b>
                        </h2>
                        <table class="detail-product-content-table" border="1" cellpadding="1">
                            <tbody>
                                <tr>
                                    <td>Tên Xe</td>
                                    <td><?php echo $row['TenXe'] ?></td>
                                </tr>
                                <tr>
                                    <td>Số Chỗ Ngồi</td>
                                    <td><?php echo $row['SoChoNgoi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kiểu Xe</td>
                                    <td><?php echo $row['KieuXe'] ?></td>
                                </tr>
                                <tr>
                                    <td>Xuất xứ</td>
                                    <td><?php echo $row['XuatXu'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kích thước DxRxC (mm)</td>
                                    <td><?php echo $row['KichThuoc'] ?></td>
                                </tr>
                                <tr>
                                    <td>Chiều dài cơ sở (mm)</td>
                                    <td><?php echo $row['ChieuDaiCoSo'] ?></td>
                                </tr>
                                <tr>
                                    <td>Động cơ</td>
                                    <td><?php echo $row['DongCo'] ?></td>
                                </tr>
                                <tr>
                                    <td>Dung tích công tác (cm³)</td>
                                    <td><?php echo $row['DungTichCongTac'] ?></td>
                                </tr>
                                <tr>
                                    <td>Dung tích bình nhiên liệu (Lít)</td>
                                    <td><?php echo $row['DungTichBinhNhienLieu'] ?></td>
                                </tr>
                                <tr>
                                    <td>Loại nhiên liệu</td>
                                    <td><?php echo $row['LoaiNhienLieu'] ?></td>
                                </tr>
                                <tr>
                                    <td>Công suất cực đại (ps/rpm)</td>
                                    <td><?php echo $row['CongSuatCucDai'] ?></td>
                                </tr>
                                <tr>
                                    <td>Mô men xoắn cực đại (Nm/rpm)</td>
                                    <td><?php echo $row['Momen'] ?></td>
                                </tr>
                                <tr>
                                    <td>Hộp số</td>
                                    <td><?php echo $row['HopSo'] ?></td>
                                </tr>
                                <tr>
                                    <td>Hệ dẫn động</td>
                                    <td><?php echo $row['HeDanDong'] ?></td>
                                </tr>
                                <tr>
                                    <td>Hệ thống treo</td>
                                    <td><?php echo $row['HeThongTreo'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tay lái trợ lực</td>
                                    <td><?php echo $row['TayLaiTroLuc'] ?></td>
                                </tr>
                                <tr>
                                    <td>Cỡ mâm</td>
                                    <td><?php echo $row['CoMam'] ?></td>
                                </tr>

                            </tbody>
                        </table>
                        <h2 id="Gia-Ban" class="detail-product-content-h2">
                            <b>Giá Bán</b>
                        </h2>
                        <table class="detail-product-content-table" border="1" cellpadding="1">
                            <tbody>
                                <tr>
                                    <td>Giá xe Mercedes GLS 450 4Matic 2022 niêm yết</td>
                                    <td class="Gia-Ban-Color"><?php echo $row['GiaXeNiemYet'] ?> VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Giá lăn bánh dự kiến tại TP.HCM</td>
                                    <td class="Gia-Ban-Color"><?php echo $row['GiaHCM'] ?> VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Giá lăn bánh dự kiến tại Hà Nội</td>
                                    <td class="Gia-Ban-Color"><?php echo $row['GiaHN'] ?> VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Giá lăn bánh dự kiến tại Tỉnh/thành khác</td>
                                    <td class="Gia-Ban-Color"><?php echo $row['GiaTinhKhac'] ?> VNĐ</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 id="Mau-Sac" class="detail-product-content-h2">
                            <b>Màu Sắc</b>
                        </h2>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['MauSac1'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">

                        </p>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['MauSac2'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">

                        </p>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['MauSac3'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">

                        </p>
                        <h2 id="Dien-Mao" class="detail-product-content-h2">
                            <b>Diện Mạo Hiện Đại Và Thể Thao Hơn</b>
                        </h2>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongDienMao1'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongDienMao2'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            Đầu Xe
                        </h4>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhDauXe1'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Đầu Xe Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuDauXe1'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuDauXe2'] ?></span>
                        </p>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhDauXe2'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Tản Nhiệt Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuTanNhiet1'] ?>
                            </span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuTanNhiet2'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            Thân Xe
                        </h4>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhThanXe1'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Thân Xe Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuThanXe1'] ?></span>
                        </p>

                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhThanXe2'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Thân Dưới Xe Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuThanDuoi1'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            Đuôi Xe
                        </h4>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhDuoiXe'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Đuôi Xe Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuDuoiXe1'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuDuoiXe2'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            Nội Thất Rộng Rải, Sang Trọng
                        </h4>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuNoiThat1'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuNoiThat2'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuNoiThat3'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            Khoang Lái
                        </h4>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhKhoangLai1'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Khoang Lái Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuKhoangLai'] ?></span>
                        </p>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhGheTruoc'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Hàng Ghế Trước Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuHangGheTruoc'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            Khoang Hành Khách
                        </h4>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhKhoangHanhKhach'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Khoang Hành Khách Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuKhoangHanhKhach1'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuKhoangHanhKhach2'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            Khoang Hành Lý
                        </h4>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhKhoangHanhLy'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Khoang Hành Lý Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuKhoangHanhLy1'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuKhoangHanhLy2'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            Tiện Nghi Bậc Nhất Phân Khúc
                        </h4>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuTienNghi'] ?></span>
                        </p>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhTienNghi'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Công Nghệ Của Xe Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuCongNghe1'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuCongNghe2'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            Động Cơ Và Hộp Số
                        </h4>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhDongCo'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            Động Cơ Mercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuDongCo1'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuDongCo2'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            Vận Hành Mạnh Mẽ, Êm Ái
                        </h4>
                        <p>
                            <img loading="lazy" class="detail-product-content-img"
                                src="AdminConf/Module/Uploads/<?php echo $row['AnhVanHanh'] ?>"
                                title="Mercedes-Benz GLS 450 4Matic 2022" width="640" height="auto"
                                sizes="(max-width: 640px) 100vw, 640px">
                        </p>
                        <p class="detail-product-content-Note">
                            ercedes-Benz GLS 450 4Matic 2022
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuVanHanh1'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuVanHanh2'] ?></span>
                        </p>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongGioiThieuVanHanh3'] ?></span>
                        </p>
                        <h4 class="Detalt-Car-title">
                            An Toàn Đầy Đủ Tiện Nghi, Hiện Đại, Thông Minh
                        </h4>
                        <p class="detail-product-content-p">
                            <span style="font-weight: 400;"><?php echo $row['DongAnhToan'] ?></span>
                        </p>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan1'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan2'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan3'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan4'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan5'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan6'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan7'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan8'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan9'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan10'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan11'] ?></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span style="font-weight: 400;"><?php echo $row['TieuChuan12'] ?></span>
                            </li>
                        </ul>
                        <h3 class="Detalt-Car-title-TK">
                            Giá Niêm Yết
                        </h3>
                        <h3 class="Moneys"><?php echo $row['GiaXeNiemYet'] ?> VNĐ</h3>
                        <div class="footer-laithu">
                            <div class="button-laithu">
                                <a href="Register-LaiThu.php" class="button-laithu-link" role="button">
                                    <span class="button-laithu-text">Nhận báo giá</span>
                                </a>
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
    