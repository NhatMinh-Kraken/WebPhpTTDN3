<?php
    include('config.php');

    $sql_lietke_product_car = "SELECT * FROM loaixe ORDER BY IdLoaiXe ASC"; 
    $query_lietke_product_car = mysqli_query($mysqli,$sql_lietke_product_car);
    
?>
<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Danh Sách Xe
                        </h1>
                    </div>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="Muc-TieuDe">
                                    <span class="Muc-TieuDe-id">ID</span>
                                    <span class="Muc-TieuDe-name">Tên loại Xe</span>
                                    <span class="Muc-TieuDe-trangthai">Trạng Thái</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    while($row = mysqli_fetch_array($query_lietke_product_car))
                    {
                        
                    ?>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="Muc-TieuDe">
                                    <span class="Muc-TieuDe-id"><?php echo $row['IdLoaiXe'] ?></span>
                                    <span class="Muc-TieuDe-name"><?php echo $row['tenloaixe'] ?></span>
                                    <span class="Muc-TieuDe-trangthai">
                                        <a href="?action=Fix-Product&idloaixe=<?php echo $row['IdLoaiXe'] ?>" class="button-laithu-link-1"><i class="bi bi-pencil"></i></a>
                                        <a href="XuLyXoaLoaiXe.php?id=<?php echo $row['IdLoaiXe'] ?>" class="button-laithu-link-1"><i class="bi bi-trash"></i></a>
                                    </span>
                                </div>
                            </div>
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