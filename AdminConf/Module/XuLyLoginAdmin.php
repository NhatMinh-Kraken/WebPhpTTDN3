<?php

    include("config.php");

    
    if(isset($_POST['DangNhap']))
    {
        $Tk_Email = $_POST['TK-Email'];
        $Tk_Pass = $_POST['TK-Pass'];

        if($Tk_Email =='' || $Tk_Pass =='')
        {
            echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu."); window.location="LoginAdmin.php";</script>' ;
            //exit;
        }
        else{
            $query = "SELECT * FROM tk_admin WHERE TkAdmin = '$Tk_Email' AND PasswordAdmin = '$Tk_Pass' LIMIT 1";
            $result = mysqli_query($mysqli,$query);
            
            $count = mysqli_num_rows($result);
            $row_dangnhap = mysqli_fetch_array($result);
            if($count>0)
            {
                $_SESSION['DangNhap'] = $row_dangnhap['TkAdmin'];
                $_SESSION['Admin_id'] = $row_dangnhap['IdAdmin'];
                echo '<script language="javascript"> alert("Đăng Nhập Thành Công. Xin Chào Chủ Nhân Trang WEB"); window.location="indexAdmin.php";</script>' ;
            }
            else{
                echo '<script language="javascript"> alert("Tài Khoản hoặc Mật Khẩu Sai"); window.location="LoginAdmin.php";</script>' ;
            }
        }
    }
?>