<?php
    include("Layout/Head.php");
?>
    <?php
        include("Loadding.php");
    ?>

<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:Login.php');
    }
    include("AdminConf/Configure/config.php");

    $sql_xemthongtin = "SELECT * FROM taikhoanuser Where IdUser='$_SESSION[Id_KhachHang]'";
    $sql_profile = mysqli_query($mysqli,$sql_xemthongtin);
    $row = mysqli_fetch_array($sql_profile);
?>

<div class="Default-Profile">
    <div class="nav-menu-default-profile">
        <div class="container">
            <div class="row">
                <div class="logo-mer-profile">
                    <div class="logo-top navbar-left">
                        <a href="Index.php"><img src="Images/logo.png" alt="Mercedes-Benz">
                    </div>
                    <div class="Title-logo">
                        <a href="Index.php">
                            <h4>Mercedes-Benz</h4>
                        </a>
                    </div>
                </div>
                <div class="Default-Prodile-Search">
                    <ul class="navbar-nav-search w-100">
                        <li class="nav-item-search w-100">
                            Chất lượng làm nên tên tuổi
                        </li>
                    </ul>
                </div>
                <div class="Default-Profile-User">
                    <div class="Btn-Default-User">
                        <span class="IconProfile">
                            <i id="iconX" class="bi bi-person-square"></i>
                        </span>
                    </div>
                    <span class="NameProfile"><?php echo $row['HoVaTen'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="Body-Default-Profile">
    <div class="ThongTin-Profile">
        <div class="row">
            <div class="Khung-Profile">

                <div class="ThongTin-Profile-Left">
                    <div class="ThongTin-Left">
                        <div class="ThongTinCaNhan-AnhDaiDien-Left">
                            <a href="#">
                                <div class="avatar">
                                    <div class="avater-placeholder"></div>
                                </div>
                            </a>
                            <div class="Name-Avatar">
                                <div class="Name-Avatar-1">
                                    <?php echo $row['HoVaTen'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="ThongTinCaNhan-Left">
                            <a href="?Profile=thongtincanhan&IdUser=<?php echo $row['IdUser'] ?>">
                                <span class="ThongTinCaNhan-Icon"><i class="bi bi-person-bounding-box"></i></span>
                                <span class="ThongTinCaNhan-TieuDe">Thông Tin Cá Nhân</span>
                            </a>
                        </div>
                        <div class="DonMua-Left">
                            <a href="?Profile=thongtindonhang&IdUser=<?php echo $_SESSION['Id_KhachHang'] ?>">
                                <span class="DonMua-Icon"><i class="bi bi-clipboard-minus"></i></span>
                                <span class="DonMua-TieuDe">Thông Tin Giỏ Hàng</span>
                            </a>
                        </div>
                        <div class="DonMua-Left">
                            <a href="?Profile=thongtindonhanglaithu&IdUser=<?php echo $_SESSION['Id_KhachHang'] ?>">
                                <span class="DonMua-Icon"><i class="bi bi-clipboard-plus"></i></span>
                                <span class="DonMua-TieuDe">Đơn Hàng Lái Thử</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="NganCach"></div>
                <div class="ThongTin-Profile-Right">
                    <?php
                                if(isset($_GET['Profile']))
                                {
                                    $tam = $_GET['Profile'];
                                }
                                else{
                                    $tam = '';
                                }

                                if($tam == 'thongtincanhan')
                                {
                                    include("ThongTinCaNhan-User.php");
                                }
                                elseif($tam == 'thongtingiohang')
                                {
                                    include("ThongTinGioHang-User.php");
                                }
                                elseif($tam == 'thongtindonhang')
                                {
                                    include("ThongTinGioHang-User.php");
                                }
                                elseif($tam == 'thongtindonhanglaithu')
                                {
                                    include("thongtindonhanglaithu.php");
                                }
                            ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include("Layout/Head-end.php");
?>