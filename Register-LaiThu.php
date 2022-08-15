<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:Login.php');
    }
?>

<?php
    include("AdminConf/Configure/config.php");
?>
<?php
    $sqlLoaiXe = "SELECT * From loaixe";
    $QueryLoaiXe = mysqli_query($mysqli, $sqlLoaiXe);
?>

<?php
    $sql_thongtincanhan_user = "SELECT * FROM taikhoanuser WHere IdUser='$_SESSION[Id_KhachHang]'"; 
    $query_thongtincanhan_user = mysqli_query($mysqli,$sql_thongtincanhan_user);
?>

<?php
    include("Layout/Head.php");
?>
<?php
    include("Loadding.php");
?>
<div class="DangKy-LaiThu">
    <div class="container container-login">
        <div class="row Login-width">
            <div class="content">
                <div class="background-while">
                    <div class="content-gr1 shadow-box">
                        <div class="content-left">
                            <div class="content-left-tittle">
                                <p>Vẻ đẹp làm nên thương hiệu</p>
                                <h3>Mercedes-Benz</h3>
                            </div>
                            <div class="Nut-ANhLaiTHu">

                            </div>
                            <div class="content-left-logo">
                                <img src="Images/AnhNenLogo.jpg">
                            </div>

                        </div>
                        <div class="content-right">
                            <div class="content-form">
                                <div class="content-header">
                                    Đăng Ký Lái Thử
                                </div>
                                <div class="form">
                                
                                    <form method="POST" action="XuLyDkLaiThu.php" enctype="multipart/form-data">
                                        
                                    <?php
                                        $i = 0;
                                        while($row0 = mysqli_fetch_array($query_thongtincanhan_user))
                                        {
                                            $i++;  
                                    ?>
                                        <div class="form-group None">
                                            <label>ID *</label>
                                            <input type="text" name="ID" class="form-control" readonly value="<?php echo $row0['IdUser'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Họ và Tên *</label>
                                            <input type="text" name="HovaTen" class="form-control" value="<?php echo $row0['HoVaTen'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input type="text" name="Email" class="form-control" value="<?php echo $row0['Email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Địa Chỉ *</label>
                                            <input type="text" name="DiaChi" class="form-control" value="<?php echo $row0['DiaChi'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Số Điện Thoại *</label>
                                            <input type="text" name="SDT" class="form-control" value="<?php echo $row0['SDT'] ?>">
                                        </div>
                                    <?php
                                        }
                                    ?>
                                        <div class="form-group">
                                            <label>Loại Xe *</label>
                                            <select id="LoaiXeLaiThu" name="LoaiXe" class="form-control">
                                                <option value="0">Chọn Loại Xe</option>
                                                <?php
                                                    $num = mysqli_num_rows($QueryLoaiXe);
                                                    if($num > 0){
                                                        while($row = mysqli_fetch_array($QueryLoaiXe))
                                                        {
                                                ?>
                                                <option value="<?php echo $row['IdLoaiXe'] ?>"><?php echo $row['tenloaixe'] ?></option>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tên Xe *</label>
                                            <select id="TenXeLaiThu" name="TenXe" class="form-control">
                                                <option value="0">Chọn Tên Xe</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="button-laithu-link" name="DKLaiThu"
                                                value="Đăng Ký">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $("#LoaiXeLaiThu").change(function() {
        var aid = $("#LoaiXeLaiThu").val();
        $.ajax({
            url: 'ArrayLoaiXe.php',
            method: 'POST',
            data: 'aid=' + aid
        }).done(function(chitietsanpham) {
            $('#TenXeLaiThu').html(chitietsanpham);
        });
    });
});
</script>
<?php
    include("Layout/Head-end.php");
?>