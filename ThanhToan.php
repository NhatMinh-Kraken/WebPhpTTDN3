<?php
    include("AdminConf/Configure/config.php");
?>

<?php
    $thongtinkhachhang = "SELECT * FROM taikhoanuser WHere IdUser='$_GET[IdUser]' LIMIT 1";
    $querythongtinkhachhang = mysqli_query($mysqli,$thongtinkhachhang);
?>

<div class="Product-Website">
    <div class="Title-Product1">
        <h1 class="Title-Product1-car">Thanh Toán</h3>
    </div>
    <div class="Cart-Accesory">
        <div class="container">
            <form method="POST" action="themgiohang.php">
                <div class="Cart-Accesory-Body-Header-Top2"></div>
                <div class="Cart-Accesory-Body-Header-Top">
                    <div class="Cart-Accesory-TieuDe">
                        <div class="Cart-Icon1"><i class="bi bi-geo-alt-fill"></i></i></div>
                        <div class="Cart-Anh1">
                            Địa chỉ nhận hàng
                        </div>
                    </div>
                    <div class="Cart-Accesory-NoiDung">
                        <?php
                while($row = mysqli_fetch_array($querythongtinkhachhang))
                {
                ?>
                        <div class="Cart-Accesory-NoiDung-Name-SDT">
                            <div class="Cart-Accesory-NoiDung-Name"><?php echo $row['HoVaTen'] ?></div>
                            <div class="Cart-Accesory-NoiDung-SDT"><?php echo $row['SDT'] ?></div>
                        </div>
                        <div class="Cart-Accesory-NoiDung-DiaChi">
                            <p><?php echo $row['DiaChi'] ?></p>
                        </div>
                        <div class="Cart-Accesory-NoiDung-ThayDoi">
                            
                        </div>
                        <?php
                }
                ?>
                    </div>

                </div>
                <div class="NganCach"></div>

                <div class="Cart-Accesory-Body-Header">
                    <div class="Cart-Icon"><i class="bi bi-bag-plus-fill"></i></div>
                    <div class="Cart-Anh2">
                        Sản Phẩm
                    </div>
                    <div class="Cart-Name2"><span></span></div>

                    <div class="Cart-SoLuong">Số Lượng</div>
                    <div class="Cart-TongGiaPhuKien"><span>Thành Tiền</span></div>

                </div>


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
                        <div class="Cart-Anh2">
                            <img src="AdminConf/Module/Uploads/<?php echo $cart_item['AnhPhuKien1'] ?>" width="80"
                                height="80" sizes="(max-width: 80px) 100vw, 80px" alt="Ảnh xem trước"
                                name="AnhPhuKien1">
                        </div>
                        <div class="Cart-Name2"><span><?php echo $cart_item['TenChiTietPhuKien'] ?></span></div>

                        <div class="Cart-SoLuong"><?php echo $cart_item['SoLuong'] ?></div>
                        <div class="Cart-TongGiaPhuKien"><span><?php echo number_format($ThanhTien,0,',','.').' VNĐ'; ?>
                            </span>
                        </div>
                    </div>
                    <?php
                }?>

                </div>
                <div class="NganCach"></div>
                <div class="Cart-Accesory-Footer-GhiChu">
                    <div class="Cart-Accesory-Body-Footer-GhiChu">
                        <div class="Cart-GhiChu1">Ghi chú:</div>
                        <div class="Cart-GhiChu">
                            <input class="input-ghichu" type="text" placeholder="Lưu ý cho người bán..." name="GhiChu">
                        </div>
                    </div>
                </div>
                <div class="NganCach"></div>
                <div class="Cart-Accesory-Footer">
                    <div class="Cart-Accesory-Body-Footer">
                        <div class="Cart-Icon"></div>
                        <div class="Cart-XoaTatCa"><span>Thanh Toán Sản Phẩm </span></div>
                        <div class="Cart-TongGiaTien">
                            <p>Tổng Thanh Toán: </p><input name="TongTien" value="<?php echo number_format($TongTien,0,',','.'); ?> VNĐ" readonly>
                        </div>
                        <div class="DatHang">
                            <button class="button-laithu-link" role="button" type="submit" name="ThanhToan" read>
                                <span class="button-laithu-text">Thanh Toán</span>
                            </button>
                        </div>
                    </div>
                </div>
                <?php
                }else{
                    echo "<p class='echos'> Giỏ Hàng Trống. </p> ";
                }
                ?>
            </div>
        </form>
    </div>
</div>