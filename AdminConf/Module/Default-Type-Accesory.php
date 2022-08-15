<?php
    include('config.php');

    $sql_lietke_loaiphukien_1 = "SELECT * FROM loaiphukienbody ORDER BY IdLoaiPhuKienBody ASC";
    $query_lietke_loaiphukien_1 = mysqli_query($mysqli,$sql_lietke_loaiphukien_1);
    

    $sql_lietke_loaiphukien_2 = "SELECT * FROM loaiphukienbaove ORDER BY IdLoaiPhuKienBaoVe ASC";
    $query_lietke_loaiphukien_2 = mysqli_query($mysqli,$sql_lietke_loaiphukien_2);
    

    $sql_lietke_loaiphukien_3 = "SELECT * FROM loaiphukientiennghi ORDER BY IdLoaiPhuKienTienNghi ASC";
    $query_lietke_loaiphukien_3 = mysqli_query($mysqli,$sql_lietke_loaiphukien_3);
    

    $sql_lietke_loaiphukien_4 = "SELECT * FROM loaiphukientrangtri ORDER BY IdLoaiPhuKienTrangTri ASC";
    $query_lietke_loaiphukien_4 = mysqli_query($mysqli,$sql_lietke_loaiphukien_4);
    

    $sql_lietke_loaiphukien_5 = "SELECT * FROM loaiphukienmamxe ORDER BY IdLoaiPhuKienMamXe ASC";
    $query_lietke_loaiphukien_5 = mysqli_query($mysqli,$sql_lietke_loaiphukien_5);
    
?>

<div class="main-content-wrap">

    <div class="rows">
        <div class="row-detail-product">
            <div class="row-detail-product-header">
                <div class="detail-product-header">
                    <h1 class="entry-title">
                        Phụ Kiện Mercesde-Benz, Chất Lượng, Uy Tín Đặt Lên Hàng Đầu
                    </h1>
                </div>
                <div class="sidebar sidebar-Accesory" id="sidebar">
                    <ul class="nav-item-menu">
                    
                        <li class="nav-item menu-items nav-items">
                            <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienBody"
                                aria-expanded="false" aria-controls="LoaiPhuKienBody">
                                <span class="menu-icon">
                                    <i class="mdi mdi-table-large"></i>
                                </span>
                                <span class="menu-title">Phụ Kiện Body</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <?php
                                    while($row1 = mysqli_fetch_array($query_lietke_loaiphukien_1))
                                    {
                                ?>
                            <div class="collapse" id="LoaiPhuKienBody">
                                <div class="container">
                                    <div class="row">
                                        <ul class="nav flex-column nav-assesory">
                                            <li class="nav-item nav-item-names">
                                                <div class="nav-item-name">
                                                    <?php echo $row1['TenLoaiPhuKienBody']; ?>
                                                </div>

                                                <span class="Muc-TieuDe-trangthai-Accesory">
                                                    <a href="?action=Default-Accesory-Body&idaccesory=<?php echo $row1['IdLoaiPhuKienBody'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-list"></i></a>
                                                    <a href="?action=Edit-Type-Accesory1&idaccesory=<?php echo $row1['IdLoaiPhuKienBody'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-pencil"></i></a>
                                                    <a href="XuLyXoaLoaiPhuKien1.php?idaccesory=<?php echo $row1['IdLoaiPhuKienBody'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-trash"></i>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <?php    
                                    }
                                ?>
                        </li>
                        <div class="NganCach"></div>

                        <li class="nav-item menu-items nav-items">
                            <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienBaoVe"
                                aria-expanded="false" aria-controls="LoaiPhuKienBaoVe">
                                <span class="menu-icon">
                                    <i class="mdi mdi-table-large"></i>
                                </span>
                                <span class="menu-title">Phụ Kiện Bảo Vệ</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <?php
                                    while($row2 = mysqli_fetch_array($query_lietke_loaiphukien_2))
                                    {
                                ?>
                            <div class="collapse" id="LoaiPhuKienBaoVe">
                                <div class="container">
                                    <div class="row">
                                        <ul class="nav flex-column nav-assesory">
                                            <li class="nav-item nav-item-names">
                                                <div class="nav-item-name">
                                                    <?php echo $row2['TenLoaiPhuKienBaoVe']; ?>
                                                </div>
                                                <span class="Muc-TieuDe-trangthai-Accesory">
                                                    <a href="?action=Default-Accesory-BaoVe"
                                                        class="button-laithu-link-1"><i class="bi bi-list"></i></a>
                                                    <a href="?action=Edit-Type-Accesory2&idaccesory=<?php echo $row2['IdLoaiPhuKienBaoVe'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-pencil"></i>
                                                    </a>
                                                    <a href="XuLyXoaLoaiPhuKien2.php?idaccesory=<?php echo $row2['IdLoaiPhuKienBaoVe'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-trash"></i>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php    
                                    }
                                ?>
                        </li>


                        <div class="NganCach"></div>
                        <li class="nav-item menu-items nav-items">
                            <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienTienNghi"
                                aria-expanded="false" aria-controls="LoaiPhuKienTienNghi">
                                <span class="menu-icon">
                                    <i class="mdi mdi-table-large"></i>
                                </span>
                                <span class="menu-title">Phụ Kiện Tiện Nghi</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <?php
                                    while($row3 = mysqli_fetch_array($query_lietke_loaiphukien_3))
                                    {
                                ?>
                            <div class="collapse" id="LoaiPhuKienTienNghi">
                                <div class="container">
                                    <div class="row">
                                        <ul class="nav flex-column nav-assesory">
                                            <li class="nav-item nav-item-names">
                                                <div class="nav-item-name">
                                                    <?php echo $row3['TenLoaiPhuKienTienNghi']; ?>
                                                </div>
                                                <span class="Muc-TieuDe-trangthai-Accesory">
                                                    <a href="?action=Default-Accesory-TienNghi"
                                                        class="button-laithu-link-1"><i class="bi bi-list"></i></a>
                                                    <a href="?action=Edit-Type-Accesory3&idaccesory=<?php echo $row3['IdLoaiPhuKienTienNghi'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-pencil"></i></a>
                                                    <a href="XuLyXoaLoaiPhuKien3.php?idaccesory=<?php echo $row3['IdLoaiPhuKienTienNghi'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-trash"></i>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php    
                                    }
                                ?>
                        </li>

                        <div class="NganCach"></div>

                        <li class="nav-item menu-items nav-items">
                            <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienTrangTri"
                                aria-expanded="false" aria-controls="LoaiPhuKienTrangTri">
                                <span class="menu-icon">
                                    <i class="mdi mdi-table-large"></i>
                                </span>
                                <span class="menu-title">Phụ Kiện Trang Trí</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <?php
                                    while($row4 = mysqli_fetch_array($query_lietke_loaiphukien_4))
                                    {
                                ?>
                            <div class="collapse" id="LoaiPhuKienTrangTri">
                                <div class="container">
                                    <div class="row">
                                        <ul class="nav flex-column nav-assesory">
                                            <li class="nav-item nav-item-names">
                                                <div class="nav-item-name">
                                                    <?php echo $row4['TenLoaiPhuKienTrangTri']; ?>
                                                </div>
                                                <span class="Muc-TieuDe-trangthai-Accesory">
                                                    <a href="?action=Default-Accesory-TrangTri"
                                                        class="button-laithu-link-1"><i class="bi bi-list"></i></a>
                                                    <a href="?action=Edit-Type-Accesory4&idaccesory=<?php echo $row4['IdLoaiPhuKienTrangTri'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-pencil"></i></a>
                                                    <a href="XuLyXoaLoaiPhuKien4.php?idaccesory=<?php echo $row4['IdLoaiPhuKienTrangTri'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-trash"></i>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php    
                                    }
                                ?>
                        </li>

                        <div class="NganCach"></div>

                        <li class="nav-item menu-items nav-items">
                            <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienMamXe"
                                aria-expanded="false" aria-controls="LoaiPhuKienMamXe">
                                <span class="menu-icon">
                                    <i class="mdi mdi-table-large"></i>
                                </span>
                                <span class="menu-title">Phụ Kiện Mâm Xe</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <?php
                                    while($row5 = mysqli_fetch_array($query_lietke_loaiphukien_5))
                                    {
                                ?>
                            <div class="collapse" id="LoaiPhuKienMamXe">
                                <div class="container">
                                    <div class="row">
                                        <ul class="nav flex-column nav-assesory">
                                            <li class="nav-item nav-item-names">
                                                <div class="nav-item-name">
                                                    <?php echo $row5['TenLoaiPhuKienMamXe']; ?>
                                                </div>
                                                <span class="Muc-TieuDe-trangthai-Accesory">
                                                    <a href="?action=Default-Accesory-MamXe"
                                                        class="button-laithu-link-1"><i class="bi bi-list"></i></a>
                                                    <a href="?action=Edit-Type-Accesory5&idaccesory=<?php echo $row5['IdLoaiPhuKienMamXe'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-pencil"></i></a>
                                                    <a href="XuLyXoaLoaiPhuKien5.php?idaccesory=<?php echo $row5['IdLoaiPhuKienMamXe'] ?>"
                                                        class="button-laithu-link-1"><i class="bi bi-trash"></i>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php    
                                    }
                                ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>