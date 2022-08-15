<?php
    
    if(isset($_POST['SuaTTCaNhan']))
    {
        include('config.php');

        $HoVaTen = $_POST['HoVaTen'];
        $Email = $_POST['Email'];
        $DiaChi = $_POST['DiaChi'];
        $SDT = $_POST['SDT'];

        if(!$HoVaTen || !$Email || !$DiaChi || !$SDT ){
            echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="IndexAdmin?action=ThongTinKhachHang";</script>' ;
            exit;
        }

        $sql_suatt = "UPDATE donlaithu SET HoVaTenKhachHang='".$HoVaTen."',EmailKhachHang='".$Email."',DiaChiKhachHang='".$DiaChi."',SDTKhachHang='".$SDT."' Where IdDonLaiThu='$_GET[IdDonLaiThu]'";

        mysqli_query($mysqli,$sql_suatt);

        echo '<script> alert("Bạn đã sửa thành công");window.location="IndexAdmin.php?action=XemDonHangLaiThu";</script>';
    }

?>