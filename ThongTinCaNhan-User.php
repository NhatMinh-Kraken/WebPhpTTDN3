<?php
    include('config.php');
    $sql_thongtincanhan_user = "SELECT * FROM taikhoanuser WHere IdUser='$_GET[IdUser]'"; 
    $query_thongtincanhan_user = mysqli_query($mysqli,$sql_thongtincanhan_user);
?>
<div class="thongtin-right">
    <div class="Header-Right">
        <h4>Hồ Sơ Của Tôi</h4>
        <p>Quản lý thông tin hồ sơ của bạn</p>
    </div>
    <div class="body-thongtincanhan-right">
        <div class="body-thongtincanhan-border">
            <div class="body-thongtin">
                <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_thongtincanhan_user))
                {
                    $i++;
                
                ?>
                <form method="POST" action="XuLySuaThongTinUser.php?IdUser=<?php echo $_GET['IdUser'] ?>">
                    <div class="form-group">
                        <lable>Họ và Tên:</lable>
                        <input type="text" name="HoVaTenKH" class="form-control" value="<?php echo $row['HoVaTen'] ?>">
                    </div>

                    <div class="form-group">
                        <lable>Email:</lable>
                        <input type="text" name="EmailKH" class="form-control" readonly
                            value="<?php echo $row['Email'] ?>">
                    </div>

                    <div class="form-group">
                        <lable>Số điện thoại</lable>
                        <input type="number" name="SDTKH" class="form-control" value="<?php echo $row['SDT'] ?>">
                    </div>

                    <div class="form-group">
                        <lable>Địa Chỉ</lable>
                        <textarea type="text" name="DiaChiKH" class="form-control"><?php echo $row['DiaChi'] ?></textarea>
                    </div>

                    <div class="form-group">
                        <lable>Ngày Sinh</lable>
                        <input type="date" name="NgaySinhKH" class="form-control" value="<?php echo $row['NgaySinh'] ?>">   
                    </div>

                    <div class="form-group">
                        <lable>GioiTinh</lable>
                        <select id="GioiTinh" name="GioiTinhKH" class="form-control">
                                    <?php                
                                        $sql = "SELECT GioiTinh FROM taikhoanuser"; 
                                        $ktgioitinh = mysqli_query($mysqli,$sql);
                                        $num = mysqli_num_rows($ktgioitinh);
                                        if($num > 0){
                                            while($row2 = mysqli_fetch_array($ktgioitinh))
                                            {   
                                    ?>
                                    <option value="<?php echo $row2['GioiTinh'] ?>"><?php if($row2['GioiTinh']==1){
                                        echo 'Nam';
                                    }else{
                                        echo 'Nữ';
                                    } ?>
                                    </option>
                                    <?php
                                            }
                                        }
                                    ?>
                        </select>
                    </div>

                    <div class="footer-laithu">
                        <div class="button-laithu">
                            <input class="button-laithu-link" type="submit" name="SuaTTCaNhanKH" value="Sửa thông tin">
                        </div>
                    </div>
                </form>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>


