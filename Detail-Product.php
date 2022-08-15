<?php
    include("AdminConf/Configure/config.php");
?>

<?php
    $sql_xe = "SELECT * FROM chitietphukien WHERE  IdChiTietPhuKien='$_GET[idchitietphukien]'";
    $query_xe = mysqli_query($mysqli,$sql_xe);
    
?>

<?php
    while($row = mysqli_fetch_array($query_xe))
    {

?>
<div class="Product-Website">
    <div class="Title-Product1">
        <h1 class="Title-Product1-car">Chi Tiết Sản Phẩm</h3>
    </div>
    <div class="Product-Accesory">
        <div class="container">
            <div class="row">
                <form method="POST" action="themgiohang.php?idchitietphukien=<?php echo $row['IdChiTietPhuKien'] ?>">
                    <div class="Body-main-Product-Accesory">
                        <div class="Body-Right-Product-Accesory">
                            <div class="Product-Accesory-Left">
                                <div class="Product-Accesory-Left-body">
                                    <div class="Product-Accesory-Left-img">
                                        <img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien1'] ?>"
                                            width="500" height="auto" sizes="(max-width: 500px) 100vw, 500px"
                                            alt="Ảnh xem trước" name="AnhPhuKien1">
                                    </div>
                                </div>
                                <div class="Product-Accesory-Left-Small-img">
                                    <li><img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien2'] ?>" width="58"
                                            height="58" sizes="(max-width: 58px) 100vw, 58px" alt="Ảnh xem trước"></li>
                                    <li><img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien3'] ?>" width="58"
                                            height="58" sizes="(max-width: 58px) 100vw, 58px" alt="Ảnh xem trước"></li>
                                    <li><img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien4'] ?>" width="58"
                                            height="58" sizes="(max-width: 58px) 100vw, 58px" alt="Ảnh xem trước"></li>
                                    <li><img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien5'] ?>" width="58"
                                            height="58" sizes="(max-width: 58px) 100vw, 58px" alt="Ảnh xem trước"></li>
                                </div>
                            </div>
                            <div class="NganCach"></div>
                            <div class="Product-Accesory-Right">
                                <div class="Product-Accesory-Right-Body">
                                    <div class="Product-Accesory-Right-Header">
                                        <p>Tên Sản Phẩm: </p><span
                                            name="TenChiTietPhuKien"><?php echo $row['TenChiTietPhuKien'] ?></span>

                                    </div>
                                    <div class="Product-Accesory-Right-ThongTin">
                                        
                                        <div class="GiaSanPham">
                                            <p>Giá: </p><span
                                                name="GiaCaPhuKien"><?php echo $row['GiaCaPhuKien'] ?>VNĐ</span>
                                        </div>
                                        <div class="XuatXu">
                                            <p>Xuất Xứ: </p><span
                                                name="XuatXuPhuKien"><?php echo $row['XuatXuPhuKien'] ?></span>
                                        </div>
                                        <div class="ChatLieu">
                                            <p>Chất Liệu: </p><span
                                                name="ChatLieu"><?php echo $row['ChatLieu'] ?></span>
                                        </div>
                                        <div class="BoSanPham">
                                            <p>Bộ Sản Phẩm Gồm: </p><span
                                                name="BoDayDu"><?php echo $row['BoDayDu'] ?></span>
                                        </div>
                                        <div class="GioiThieu">
                                            <p style="color: #efdf00;"><i class="bi bi-star-fill"></i></p>
                                            <span
                                                name="DongGioiThieuPhuKien1"><?php echo $row['DongGioiThieuPhuKien1'] ?></span>
                                        </div>
                                        <div class="GioiThieu">
                                            <p style="color: #efdf00;"><i class="bi bi-star-fill"></i></p>
                                            <span
                                                name="DongGioiThieuPhuKien2"><?php echo $row['DongGioiThieuPhuKien2'] ?></span>
                                        </div>
                                        <div class="GioiThieu">
                                            <p style="color: #efdf00;"><i class="bi bi-star-fill"></i></p>
                                            <span
                                                name="DongGioiThieuPhuKien3"><?php echo $row['DongGioiThieuPhuKien3'] ?></span>
                                        </div>
                                    </div>
                                    <div class="Product-Accesory-Right-MuaHang">
                                        <div class="Product-Accesory-Right-SoLuong">
                                            <span name="SoLuongPhuKien"><?php if($row['SoLuongPhuKien'] == 0){
                                                echo "Hết";
                                            }else{echo $row['SoLuongPhuKien'];} ?></span>
                                            <p> Sản Phẩm Có Sẳn</p>
                                        </div>
                                        <div class="Product-Accesory-Right-Submit">
                                            <button class="button-deafault-link" type="submit"
                                                name="ThemVaoGioHang">Thêm
                                                Vào Giỏ Hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>





<!---------------------------------------------Product Related---------------------------------------------->

<script>
const ImgBig = document.querySelector(".Product-Accesory-Left-img img")
const ImgSmall = document.querySelectorAll(".Product-Accesory-Left-Small-img li img")

ImgSmall.forEach(function(imgItem, X) {
    imgItem.addEventListener("click", function() {
        ImgBig.src = imgItem.src
    })
})
</script>