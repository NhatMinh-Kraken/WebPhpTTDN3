<?php
    include("AdminConf/Configure/config.php");
?>

<?php
    $sql_xe = "SELECT * FROM chitietsanpham, loaixe WHere chitietsanpham.IdLoaiXe = loaixe.IdLoaiXe Order by idchitietsanpham DESC LIMIT 6";
    $query_xe = mysqli_query($mysqli,$sql_xe);
    
?>

<div class="Product-Websites">
    <div class="Title-Product">
        <h1 class="Title-Product-car">CÁC XE ĐƯỢC ĐĂNG KÝ CHẠY NHIỀU NHẤT</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="row-product">
                <?php
                    while($row = mysqli_fetch_array($query_xe))
                    {
                ?>
                <div class="col-12 col-sm-6 col-md-4 product-khung">
                    <div class="Product-img">
                        <a href="?quanly=Product-Detail&idchitietxe=<?php echo $row['idchitietsanpham'] ?>">
                            <img src="AdminConf/Module/Uploads/<?php echo $row['HinhAnh1'] ?> ">

                    </div>
                    <div class="Product-loaixe">
                        <span>Loại Xe: </span>
                        <span><?php
                                echo $row['tenloaixe']
                            ?></span>
                    </div>
                    <div class="Product-name">
                        <a href="?quanly=Product-Detail&idchitietxe=<?php echo $row['idchitietsanpham'] ?>">
                            <span><?php
                                echo $row['TenXe']
                            ?></span>
                        </a>
                    </div>
                    <div class="Product-money">
                        <a href="?quanly=Product-Detail&idchitietxe=<?php echo $row['idchitietsanpham'] ?>">
                            <span class="spleft"></span>
                            <span class="Money">Giá: <?php echo $row['GiaXeNiemYet'] ?> VNĐ</span>
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