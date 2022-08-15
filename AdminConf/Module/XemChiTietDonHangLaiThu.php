<?php
    include('config.php'); 
    $sql_lietke_danhsachdonhang = "SELECT * FROM donlaithu,chitietsanpham WHERE donlaithu.idchitietsanpham = chitietsanpham.idchitietsanpham and donlaithu.IdDonLaiThu='$_GET[IdDonLaiThu]'";
    $query_lietke_danhsachdonhang = mysqli_query($mysqli,$sql_lietke_danhsachdonhang);

    $sql_lietke_loaixe = "SELECT * FROM donlaithu,loaixe WHERE donlaithu.IdLoaiXe = loaixe.IdLoaiXe";
    $query_lietke_loaixe = mysqli_query($mysqli,$sql_lietke_loaixe);
    $row1 = mysqli_fetch_array($query_lietke_loaixe)
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

                    <div class="body-thongtincanhan-border">
                        <div class="body-thongtin">
                            <form method="POST"
                                action="XuLySuaChiTietDonHangLaiThu.php?IdDonLaiThu=<?php echo $_GET['IdDonLaiThu'] ?>"
                                enctype="multipart/form-data">
                                <?php
                                    while($row = mysqli_fetch_array($query_lietke_danhsachdonhang))
                                    {    
                                ?>
                                <div class="form-group">
                                    <lable class="lable">Mã Đơn Hàng:</lable>
                                    <input type="text" name="ID" class="form-control"
                                        value="<?php echo $row['IdDonLaiThu'] ?>" readonly>
                                </div>
                            
                                <div class="form-group">
                                    <lable class="lable">Loại Sản Phẩm:</lable>
                                    <input type="text" name="LoaiSanPham" class="form-control" readonly
                                        value="<?php echo $row1['tenloaixe'] ?>">
                                </div>

                                <div class="form-group">
                                    <lable class="lable">Tên Sản Phẩm:</lable>
                                    <input type="text" name="TenPhuKien" class="form-control" readonly
                                        value="<?php echo $row['TenXe'] ?>">
                                </div>

                                <div class="form-group">
                                    <lable class="lable">Ảnh Sản Phẩm:</lable>
                                    <img loading="lazy" id="imagePreview" class="detail-product-content-img"
                                        src="Uploads/<?php echo $row['HinhAnh1'] ?>" title="Ảnh Xem Trước" width="150"
                                        height="auto" sizes="(max-width: 150px) 100vw, 150px" alt="Ảnh xem trước">
                                </div>

                                <div class="form-group">
                                    <lable class="lable">Giá</lable>
                                    <select id="Gia" name="Gia" class="form-control">
                                        <option value="<?php echo $row['GiaNiemYetXe']?>">
                                            <?php echo $row['GiaNiemYetXe']?></option>
                                        <option value="1">Giá Xe</option>
                                        <option value="<?php echo number_format(($row['GiaXeNiemYet']),0,',','.').' vnđ'?>">
                                            <?php echo number_format(($row['GiaXeNiemYet']),0,',','.').' vnđ'?></option>
                                        <option value="<?php echo number_format(($row['GiaHCM']),0,',','.').' vnđ'?>"><?php echo number_format(($row['GiaHCM']),0,',','.').' vnđ'?>
                                        </option>
                                        <option value="<?php echo number_format(($row['GiaHN']),0,',','.').' vnđ'?>"><?php echo number_format(($row['GiaHN']),0,',','.').' vnđ'?>
                                        </option>
                                        <option value="<?php echo number_format(($row['GiaTinhKhac']),0,',','.').' vnđ'?>">
                                            <?php echo number_format(($row['GiaTinhKhac']),0,',','.').' vnđ'?>
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <lable class="lable">Ngày Đặt:</lable>
                                    <input type="date" name="NgayMua" class="form-control"
                                        value="<?php echo $row['NgayDangKy'] ?>">
                                </div>

                                <div class="form-group">
                                    <lable class="lable">Đặt Lịch:</lable>
                                    <input type="date" name="DatLich" class="form-control"
                                        value="Đặt Lịch">
                                </div>

                                <div class="form-group">
                                    <lable class="lable">Tình Trạng:</lable>
                                    <select id="TinhTrang" name="TinhTrang" class="form-control">
                                        <?php                
                                        $sql = "SELECT TinhTrangDatHang FROM donlaithu"; 
                                        $ktgioitinh = mysqli_query($mysqli,$sql);
                                        $num = mysqli_num_rows($ktgioitinh);
                                        if($num > 0){
                                            while($row2 = mysqli_fetch_array($ktgioitinh))
                                            {   
                                    ?>
                                        <option value="<?php echo $row2['TinhTrangDatHang'] ?>"><?php if($row2['TinhTrangDatHang']==0){
                                        echo 'Chờ Duyệt';
                                    }else{
                                        echo 'Đã Duyệt';
                                    } ?>
                                        </option>
                                        <?php
                                            }
                                        }
                                    ?>
                                        <option value="1">Chờ Duyệt</option>
                                        <option value="2">Đã Duyệt</option>
                                    </select>
                                </div>

                                <div class="footer-laithu">
                                    <div class="button-laithu">
                                        <input class="button-laithu-link" type="submit" name="SuaTTDonHang"
                                            value="Sửa Chi Tiết Đơn Hàng">
                                    </div>
                                    <div class="button-laithu">
                                        <a href="?action=XuLyXoaThongTinChiTietDonHangLaiThu&IdDonLaiThu=<?php echo $row['IdDonLaiThu'] ?>"
                                            class="button-laithu-link" type="submit" name="SuaTTCaNhan">Xóa Chi Tiết Đơn
                                            Hàng</a>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>