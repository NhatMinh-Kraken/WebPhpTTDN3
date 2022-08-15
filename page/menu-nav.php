<?php
    include("AdminConf/Configure/config.php");
?>

<?php
    $sql_loaixe = "SELECT * FROM loaixe";
    $query_loaixe = mysqli_query($mysqli,$sql_loaixe);
    
?>


<div class="catagories-side-menu">
    <div id="sideMenuClose">
        <i class="bi bi-x-lg"></i>
    </div>
    <div class="nav-side-menu">
        <div class="menu-list">
            <h6>
                DANH MỤC
            </h6>
            <ul id="menu-content" class="menu-content collapse out">
                <!-- Single Item -->

                <li data-toggle="collapse" data-target="#Type-car" class="collapsed active">
                    <a class="border-left-blue" href="#">Loại Xe <span class="arrow-new"></span></a>
                    <ul class="sub-menu collapse" id="Type-car">
                        <?php
                            while($row = mysqli_fetch_array($query_loaixe)  )
                            {
                        ?>
                        <li>
                            <a href="?quanly=danhmucsanphamxe&idchitietxe=<?php echo $row['IdLoaiXe']  ?>"><?php echo $row['tenloaixe'] ?></a>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                </li>

                <li data-toggle="collapse" data-target="#NGXX" class="collapsed bl">
                    <a class="border-left-blue" href="#">Nguồn Gốc Xuất Xứ<span class="arrow"></span></a>
                </li>
                <li data-toggle="collapse" data-target="#ttkm" class="collapsed bl">
                    <a class="border-left-blue" href="#">Tin Tức & Khuyến Mãi<span class="arrow"></span></a>
                </li>
                <li data-toggle="collapse" data-target="#khcanbiet" class="collapsed bl">
                    <a class="border-left-blue" href="#">Khách Hàng Cần Biết<span class="arrow"></span></a>
                </li>
                <!-- Single Item -->
                <li data-toggle="collapse" data-target="#PK" class="collapsed">
                    <a class="border-left-blue" href="?quanly=Accesory">Phụ Kiện Xe <span class="arrow-new"></span></a>
                </li>
                <!-- Single Item -->
                <?php 
                        if(!isset($_SESSION['dangnhap']))
                        {
                            include("menu-nav-login.php");
                        }
                    ?>

                <!-- Single Item -->
                <li data-toggle="collapse" data-target="#LaiThu" class="collapsed">
                    <a class="border-left-blue" href="Register-LaiThu.php">Lái Thử<span class="arrow"></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>