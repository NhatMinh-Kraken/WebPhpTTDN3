<?php
    include('config.php');

    $sql_lietke_danhsachxe = "SELECT * FROM chitietsanpham, loaixe WHere chitietsanpham.IdLoaiXe = loaixe.IdLoaiXe"; 
    $query_lietke_danhsachxe = mysqli_query($mysqli,$sql_lietke_danhsachxe);
    
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
                                    <span class="Muc-TieuDe-name">Tên Xe</span>
                                    <span class="Muc-loaixe">Loại Xe</span>
                                    <span class="Muc-Hinh-Xe">Hình Ảnh</span>
                                    <span class="Muc-TieuDe-trangthai">Trạng Thái</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    while($row = mysqli_fetch_array($query_lietke_danhsachxe))
                    {
                        
                    ?>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="Muc-TieuDe">
                                    <span class="Muc-TieuDe-id-1"><?php echo $row['idchitietsanpham'] ?></span>
                                    <span class="Muc-TieuDe-name-1"><?php echo $row['TenXe'] ?></span>
                                    <span class="Muc-loaixe-1">
                                    <?php 
                                        echo $row['tenloaixe'];
                                     ?></span>
                                    <span class="Muc-Hinh-Xe-1"><img loading="lazy" id="imagePreview" class="detail-product-content-img" src="Uploads/<?php echo $row['HinhAnh1'] ?>" title="Ảnh Xem Trước" width="150" height="auto" sizes="(max-width: 150px) 100vw, 150px" alt="Ảnh xem trước"></span>
                                    <span class="Muc-TieuDe-trangthai-1">
                                        <a href="?action=Default-Product&idchitietxe=<?php echo $row['idchitietsanpham'] ?>" class="button-laithu-link-1"><i class="bi bi-eye"></i></a>
                                        <a href="?action=Fix-Default-Product&idchitietxe=<?php echo $row['idchitietsanpham'] ?>" class="button-laithu-link-1"><i class="bi bi-pencil"></i></a>
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