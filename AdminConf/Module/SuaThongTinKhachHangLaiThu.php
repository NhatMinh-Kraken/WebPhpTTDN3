<?php
    include('config.php');

    $sql_lietke_danhsachkhachhang = "SELECT * FROM donlaithu WHERE IdDonLaiThu = '$_GET[IdDonLaiThu]' LIMIT 1"; 
    $query_lietke_danhsachkhachhang = mysqli_query($mysqli,$sql_lietke_danhsachkhachhang);
    
?>
<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Sửa Thông Tin Khách Hàng
                        </h1>
                    </div>

                    <?php
                    while($row = mysqli_fetch_array($query_lietke_danhsachkhachhang))
                    {
                        
                    ?>
                    <div class="body-thongtincanhan-border">
                        <div class="body-thongtin">
                            <form method="POST" action="XuLyThongTinKhachHangLaiThu.php?IdDonLaiThu=<?php echo $_GET['IdDonLaiThu'] ?>">

                                <div class="form-group">
                                    <lable class="lable">Họ và Tên:</lable>
                                    <input type="text" name="HoVaTen" class="form-control"
                                        value="<?php echo $row['HoVaTenKhachHang'] ?>">
                                </div>

                                <div class="form-group">
                                    <lable class="lable">Email:</lable>
                                    <input type="text" name="Email" class="form-control"
                                        value="<?php echo $row['EmailKhachHang'] ?>" >
                                </div>

                                <div class="form-group">
                                    <lable class="lable">Địa Chỉ</lable>
                                    <textarea type="text" name="DiaChi"
                                        class="form-control"> <?php echo $row['DiaChiKhachHang'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <lable class="lable">Số điện thoại</lable>
                                    <input type="number" name="SDT" class="form-control"
                                        value="<?php echo $row['SDTKhachHang'] ?>">
                                </div>

                                <div class="footer-laithu">

                                    <div class="button-laithu">
                                        <button class="button-laithu-link" type="submit" name="SuaTTCaNhan">Sửa Thông
                                            Tin</button>
                                    </div>

                                </div>
                            </form>
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