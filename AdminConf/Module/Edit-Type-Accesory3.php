<?php
    include('config.php');

    $sql_Sua_LoaiPhuKien = "SELECT * FROM loaiphukientiennghi WHere IdLoaiPhuKienTienNghi ='$_GET[idaccesory]' LIMIT 1"; 
    $query_sua_LoaiPhuKien = mysqli_query($mysqli,$sql_Sua_LoaiPhuKien);
    
?>
    
<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Sửa Loại Phụ Kiện
                        </h1>
                    </div>
                    <form method="POST" action="XuLySuaLoaiPhuKien.php?idaccesory=<?php echo $_GET['idaccesory'] ?>">    
                    <?php
                    while($row = mysqli_fetch_array($query_sua_LoaiPhuKien))
                    {
                        
                    ?>
                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">ID</label>
                                <input type="text" class="form-control" id="exampleInputNameCar1" name="ID" placeholder="ID" value="<?php echo $row['IdLoaiPhuKienTienNghi'] ?>">
                            </div>
                        </div>
                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Loại Phụ Kiện</label>
                                <input type="text" class="form-control" id="exampleInputNameCar1" name="LoaiPhuKienTienNghi" placeholder="Loại Phụ Kiện" value="<?php echo $row['TenLoaiPhuKienTienNghi'] ?>">
                            </div>
                        </div>
                        <div class="footer-laithu">
                            <div class="button-laithu">
                                <input class="button-laithu-link" type="submit" value="Sửa Loại Phụ Kiện" name="SuaLoaiPhuKien3">
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>