<!---->
<!--nav-->
<?php
    include("AdminConf/Configure/config.php");
?>
<?php
    $sql_xe = "SELECT * FROM chitietphukien Where IdChiTietPhuKien";
    $query_xe = mysqli_query($mysqli,$sql_xe);

    $sql_body = "SELECT * FROM loaiphukienbody Where IdLoaiPhuKienBody";
    $query_body = mysqli_query($mysqli,$sql_body);

    $sql_baove = "SELECT * FROM loaiphukienbaove where IdLoaiPhuKienBaoVe";
    $query_baove = mysqli_query($mysqli,$sql_baove);

    $sql_tiennghi = "SELECT * FROM loaiphukientiennghi where IdLoaiPhuKienTienNghi";
    $query_tiennghi = mysqli_query($mysqli,$sql_tiennghi);

    $sql_trangbi = "SELECT * FROM loaiphukientrangtri where IdLoaiPhuKienTrangTri";
    $query_trangbi = mysqli_query($mysqli,$sql_trangbi);

    $sql_mamxe = "SELECT * FROM loaiphukienmamxe where IdLoaiPhuKienMamXe";
    $query_mamxe = mysqli_query($mysqli,$sql_mamxe);
    
?>

<div class="Product-Website">
    <div class="Title-Product1">
        <h1 class="Title-Product1-car">Các Loại Phụ Kiện Mercedes</h1>
    </div>
    <div class="dropdown-tyle-accesory">

        <div class="dropdown-body">
            <button class="nut_dropdown">Phụ Kiện Body</button>

            <div class="NoiDung-body">
                <?php
        while($row1 = mysqli_fetch_array($query_body))
        {
        ?>
                <a
                    href="?quanly=danhmucsanphamphukienbody&idchitietphukien=<?php echo $row1['IdLoaiPhuKienBody']  ?>"><?php echo $row1['TenLoaiPhuKienBody'] ?></a>
                <?php
        }
        ?>
            </div>

        </div>


        <div class="dropdown-body">
            <button class="nut_dropdown">Phụ Kiện Bảo Vệ</button>

            <div class="NoiDung-body">
                <?php
        while($row2 = mysqli_fetch_array($query_baove))
        {
        ?>
                <a
                    href="?quanly=danhmucsanphamphukienbaove&idchitietphukien=<?php echo $row2['IdLoaiPhuKienBaoVe']  ?>"><?php echo $row2['TenLoaiPhuKienBaoVe'] ?></a>
                <?php
        }
        ?>
            </div>

        </div>


        <div class="dropdown-body">
            <button class="nut_dropdown">Phụ Kiện Tiện Nghi</button>

            <div class="NoiDung-body">
                <?php
        while($row3 = mysqli_fetch_array($query_tiennghi))
        {
        ?>
                <a href=""><?php echo $row3['TenLoaiPhuKienTienNghi'] ?></a>
                <?php
        }
        ?>
            </div>

        </div>


        <div class="dropdown-body">
            <button class="nut_dropdown">Phụ Kiện Trang Bị</button>

            <div class="NoiDung-body">
                <?php
        while($row4 = mysqli_fetch_array($query_trangbi))
        {
        ?>
                <a href=""><?php echo $row4['TenLoaiPhuKienTrangTri'] ?></a>
                <?php
        }
        ?>
            </div>

        </div>


        <div class="dropdown-body">
            <button class="nut_dropdown">Phụ Kiện Mâm Xe</button>

            <div class="NoiDung-body">
                <?php
        while($row5 = mysqli_fetch_array($query_mamxe))
        {
        ?>
                <a href=""><?php echo $row5['TenLoaiPhuKienMamXe'] ?></a>
                <?php
        }
        ?>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="row-tyle-accesory"></div>
            <div class="row-accesory">
                <div class="row-body-accesory">
                    <?php
                    while($row = mysqli_fetch_array($query_xe))
                    {
                    ?>
                    <div class="col-12 col-sm-6 col-md-4 product-khung">
                        <div class="Product-img">
                            <a class="link-accesory"
                                href="?quanly=Detail-Product&idchitietphukien=<?php echo $row['IdChiTietPhuKien'] ?>">
                                <img src="AdminConf/Module/Uploads/<?php echo $row['AnhPhuKien1'] ?>">

                        </div>
                        <div class="Product-loaixe">
                            <span></span>
                            <span></span>
                        </div>
                        <div class="Product-name">
                            <a class="link-accesory"
                                href="?quanly=Detail-Product&idchitietphukien=<?php echo $row['IdChiTietPhuKien'] ?>">
                                <span><?php
                                echo $row['TenChiTietPhuKien']
                            ?></span>
                            </a>
                        </div>
                        <div class="Product-money">
                            <a class="link-accesory"
                                href="?quanly=Detail-Product&idchitietphukien=<?php echo $row['IdChiTietPhuKien'] ?>">
                                <span class="spleft"></span>
                                <span class="Money">Giá: <?php echo $row['GiaCaPhuKien'] ?>
                                    VNĐ</span>
                                <div class="spleft spright"></div>
                            </a>
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