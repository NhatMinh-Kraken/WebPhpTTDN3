<?php
    

    $thongtinkhachhang = "SELECT * FROM taikhoanuser WHere IdUser='$_SESSION[Id_KhachHang]' LIMIT 1";
    $querythongtinkhachhang = mysqli_query($mysqli,$thongtinkhachhang);

    $row = mysqli_fetch_array($querythongtinkhachhang);
?>
<div class="Product-Website">
    <div class="Title-Product1">
        <h1 class="Title-Product1-car">Chi Tiết Giỏ Hàng</h3>
    </div>
    <div class="Cart-Accesory">
        <div class="container">
            <div class="Cart-Accesory-Body-Header">
                <div class="Cart-Icon"><i class="bi bi-bag-plus-fill"></i></div>
                <div class="Cart-Anh">
                    Sản Phẩm
                </div>
                <div class="Cart-Name"><span></span></div>
                <div class="Cart-Gia"><span>Giá Sản Phẩm</span></div>
                <div class="Cart-SoLuong">Số Lượng</div>
                <div class="Cart-TongGiaPhuKien"><span>Thành Tiền</span></div>

            </div>
            <form method="POST" action="themgiohang.php">

                <div class="Cart-Accesory-Body">
                    <?php
                if(isset($_SESSION['cart']))
                {
                    $TongTien = 0;
                    $i = 0;
                    foreach($_SESSION['cart'] as $cart_item){
                        $ThanhTien = ((int)$cart_item['SoLuong'])*((int)$cart_item['GiaCaPhuKien']);
                        $TongTien += ((int)$ThanhTien);
                        $i++;
                    
                
                ?>
                    <div class="Cart-Accesory-Body-Bottom">
                        <div class="Cart-Icon"><i class="bi bi-bag-plus-fill"></i></div>
                        <div class="Cart-Anh">
                            <img src="AdminConf/Module/Uploads/<?php echo $cart_item['AnhPhuKien1'] ?>" width="80"
                                height="80" sizes="(max-width: 80px) 100vw, 80px" alt="Ảnh xem trước"
                                name="AnhPhuKien1">
                        </div>
                        <div class="Cart-Name"><span><?php echo $cart_item['TenChiTietPhuKien'] ?></span></div>
                        <div class="Cart-Gia">
                            <span><?php echo number_format($cart_item['GiaCaPhuKien'],0,',','.').' VNĐ';?>
                            </span></div>
                        <div class="Cart-SoLuong"><a href="themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i
                                    class="bi bi-plus-circle-fill"></i></a><?php echo $cart_item['SoLuong'] ?><a
                                href="themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i
                                    class="bi bi-dash-circle-fill"></i></a></div>
                        <div class="Cart-TongGiaPhuKien"><span><?php echo number_format($ThanhTien,0,',','.').' VNĐ'; ?>
                            </span></div>
                        <div class="Cart-Xoa"><a
                                href="themgiohang.php?xoatungsanpham=<?php echo $cart_item['id'] ?>">Xóa</a></div>

                    </div>
                    <?php
                }?>

                </div>
                <div class="NganCach"></div>
                <div class="Cart-Accesory-Footer">
                    <div class="Cart-Accesory-Body-Footer">
                        <div class="Cart-Icon"><i class="bi bi-bag-plus-fill"></i></div>
                        <div class="Cart-XoaTatCa"><a href="themgiohang.php?xoatatca=1">Xóa tất cả</a></div>
                        <div class="Cart-TongGiaTien">
                            <p>Tổng: </p><span><?php echo number_format($TongTien,0,',','.').' VNĐ'; ?> </span>
                        </div>
                        <div class="DatHang">
                            <a href="?quanly=thanhtoan&IdUser=<?php echo $_SESSION['Id_KhachHang'] ?>"
                                class="button-laithu-link" role="button" type="submit" name="submit">
                                <span class="button-laithu-text">Mua Hàng</span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                }else{
                    echo "<p class='echos'> Giỏ Hàng Trống. </p> ";
                }
            ?>
            </form>
        </div>
    </div>
</div>