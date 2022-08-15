<?php
    include('config.php');
?>

<?php
    if(isset($_POST['DKLaiThu'])){
        $ID = $_POST['ID'];
        $HovaTen = $_POST['HovaTen'];
        $Email = $_POST['Email'];
        $DiaChi = $_POST['DiaChi'];
        $SDT = $_POST['SDT'];
        $LoaiXe = $_POST['LoaiXe'];
        $TenXe = $_POST['TenXe'];
        $NgayDK = date("d/m/Y");

        if (!$HovaTen || !$Email || !$DiaChi || !$SDT || !$LoaiXe || !$TenXe )
        {
            echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="Register-LaiThu.php";</script>' ;
            exit;
        }

        $pattern = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i "; 
        if(!preg_match($pattern, $Email))
        {
            echo '<script language="javascript"> alert("Email này không hợp lệ. Vui lòng nhập Email khác."); window.location="Register-LaiThu.php";</script>' ;
            exit;
        }

        if(mysqli_num_rows(mysqli_query($mysqli,"SELECT EmailKhachHang FROM donlaithu WHERE EmailKhachHang='$Email'")) > 0){
            echo '<script> alert("Email đã tồn tại vui lòng dùng Email khác. Mỗi tài khoản Email chỉ được dùng để đăng ký 1 lần !!!"); window.location="Register-LaiThu.php";</script>';
            exit;
        }

        if($SDT < 10 && $SDT > 10)
        {
            echo '<script> alert("Số điện thoại phải có 10 số."); window.location="Register-LaiThu.php";</script>';
            exit;
        }

        if(mysqli_query($mysqli,"INSERT INTO donlaithu(IdUser,HoVaTenKhachHang,EmailKhachHang,DiaChiKhachHang,SDTKhachHang,IdLoaiXe,idchitietsanpham,NgayDangKy) VALUE('".$ID."','".$HovaTen."','".$Email."','".$DiaChi."','".$SDT."','".$LoaiXe."','".$TenXe."',now())"))
        {
            //header("location:Login.php");
            echo '<script> alert("Bạn đã đăng ký thành công. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất");window.location="Index.php";</script>';   
        } 
    }
?>