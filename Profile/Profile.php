<?php
        include("AdminConf/Configure/config.php");
    ?>

<?php
        if(isset($_GET['action']) == 'dangxuat'){
            unset($_SESSION['dangnhap']);
            header('Location:Login.php');
        }

        $User = mysqli_query($mysqli,"SELECT * FROM taikhoanuser WHERE IdUser='$_SESSION[Id_KhachHang]'");
        $row = mysqli_fetch_array($User);

        $cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
        
    ?>

<div class="body">
    <div class="menu-profile">
        <ul id="menu-profile">
            <li class="ItemProfile">
                <a class="Click-drop" data-toggle="collapse" href="#ui-basic" aria-controls="ui-basic">
                    <span class="IconProfile"><i class="bi bi-person-badge"></i></span>
                    <span class="NameProfile">
                        <?php if(isset($_SESSION['dangnhap']) && isset($_SESSION['Id_KhachHang'])){
                               echo $_SESSION['dangnhap'];
                            } ?></span>
                </a>
            </li>
            <li class="ItemProfile">
                <a href="Default-Profile.php?IdUser=<?php echo $row['IdUser'] ?>" class="Click-drop">
                    <span class="IconProfile"><i class="bi bi-list-check"></i></span>
                    <span class="NameProfile">Thông Tin</span>
                </a>
                
            </li>
            <li class="ItemProfile ItemProfile1" >
                <a href="?quanly=thongtingiohang" class="Click-drop-1" >
                    <span id="SoLuongSanPham" class="SoLuongSanPham"><?php if(isset($_SESSION['cart']))
                                                                            {
                                                                                echo count($cart);
                                                                            }
                                                                            else{
                                                                                    echo "0";
                                                                                } ?></span>
                    <span class="IconProfile"><i class="bi bi-basket"></i></span>
                    <span class="NameProfile">Giỏ Hàng</span>
                </a>
                <!-- <ul class="sub-menu collapse" id="Type-cart">
                    <li>2</li>
                </ul> -->
            </li>
            <li class="ItemProfile">
                <a href="Index.php?action=dangxuat">
                    <span class="IconProfile"><i class="bi bi-box-arrow-right"></i></span>
                    <span class="NameProfile">Đăng Xuất</span>
                </a>
            </li>
        </ul>

        <div class="Btn-Profile">
            <span id="SoLuongSanPham1" class="SoLuongSanPham1"><?php if(isset($_SESSION['cart']))
                                                                        {
                                                                            echo count($cart);
                                                                        }
                                                                        else{
                                                                                echo "0";
                                                                            } ?></span>
            <span class="IconProfile"><i id="iconX" class="bi bi-person-square"></i></span>
        </div>
    </div>
</div>

<script>
const btn = document.querySelector(".Btn-Profile")
btn.addEventListener('click', e => {
    btn.classList.toggle("rotatesBtn");
    document.querySelector("#menu-profile").classList.toggle('showMenu');
    document.querySelector("#iconX").classList.toggle('showIconX');
});
</script>