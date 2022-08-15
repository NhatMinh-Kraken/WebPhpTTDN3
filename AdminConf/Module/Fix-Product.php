<?php
    include('config.php');

    $sql_Sua_product_car = "SELECT * FROM loaixe WHere IdLoaiXe='$_GET[idloaixe]' LIMIT 1"; 
    $query_sua_product_car = mysqli_query($mysqli,$sql_Sua_product_car);
    
?>
    
<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Sửa Loại Xe
                        </h1>
                    </div>
                    <form method="POST" action="XuLySuaLoaiXe.php?idloaixe=<?php echo $_GET['idloaixe'] ?>">    
                    <?php
                    while($row = mysqli_fetch_array($query_sua_product_car))
                    {
                        
                    ?>
                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">ID</label>
                                <input type="text" class="form-control" id="exampleInputNameCar1" name="ID" placeholder="Loại Xe" value="<?php echo $row['IdLoaiXe'] ?>">
                            </div>
                        </div>
                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Loại Xe</label>
                                <input type="text" class="form-control" id="exampleInputNameCar1" name="LoaiXe" placeholder="Loại Xe" value="<?php echo $row['tenloaixe'] ?>">
                            </div>
                        </div>
                        <div class="footer-laithu">
                            <div class="button-laithu">
                                <input class="button-laithu-link" type="submit" value="Sửa Loại Xe" name="SuaLoaiXe">
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