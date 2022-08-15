<?php
    include("Layout/Head.php");
?>

<?php
    include("Loadding.php");
?>

<?php
    include("AdminConf/Configure/config.php");

    session_start();

    if(!isset($_SESSION['code'])){
        echo '<script language="javascript"> alert("Bạn chưa nhập mã xác nhận"); window.location="MaXacNhan.php";</script>' ;
        exit;
    }

    if(isset($_POST['DoiMatKhau'])){
        $NewPassword = $_POST['New-Password'];
        $NewConfirmPassword = $_POST['New-Confirm-Password'];

        if(!$NewPassword || !$NewConfirmPassword)
        {
            echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="ResetPass.php";</script>' ;
            exit;
        }

        if($NewPassword != $NewConfirmPassword){
            echo '<script language="javascript"> alert("Mật Khẩu Mới Không Trùng Với Nhập Lại Mật Khẩu"); window.location="ResetPass.php";</script>' ;
            exit;
        }

        $PassDB = "/^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$/ ";
        if(!preg_match($PassDB, $NewPassword, $NewConfirmPassword))
        {
            echo '<script> alert("Mật khẩu không đúng đĩnh dạng. Mật khẩu đúng định dạng bao gồm các ký tự sau : ^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$"); window.location="Register.php";</script>';
            exit;
        }

        $passMH = md5($NewPassword);
        $mails = $_SESSION['mail'];

        $sql = "UPDATE taikhoanuser SET pasword='$passMH' WHERE Email='$mails'";
        $query = mysqli_query($mysqli,$sql);
        if($query)
        {
            echo '<script> alert("Đổi Mật Khẩu Thành Công "); window.location="Login.php";</script>';
            exit;
        }
       
    }

?>

<div class="Login-scroller">
    <div class="container-login">
        <div class="row Login-width">
            <div class="Login-background">
                <div class="Login-Card col-lg-4">
                    <div class="Login-Tilte">
                        <h3 class="Login-card-title">Reset Password</h3>
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <label>New Password *</label>
                                <input id="password" class="form-control" type="password" name="New-Password"
                                    placeholder="Mật Khẩu" required>
                                <span class="show-btn"><i class="bi bi-eye" onclick="showHidden()"></i></span>
                            </div>
                            <div class="form-group">
                                <label>New Confirm Password *</label>
                                <input id="password-conf" class="form-control" type="password" name="New-Confirm-Password"
                                    placeholder="Mật Khẩu" required>
                                <span class="show-btn"><i class="bi bi-eye" onclick="showHidden()"></i></span>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn"
                                    name="DoiMatKhau">Enter</button>
                            </div>
                            <p class="sign-up">
                                Do you already have an account ?
                                <a href="Login.php"> Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
isBool = true;

function showHidden() {
    if (isBool) {
        document.getElementById("password").setAttribute("type", "text");
        document.getElementById("password-conf").setAttribute("type", "text");
        isBool = false;
    } else {
        document.getElementById("password").setAttribute("type", "password");
        document.getElementById("password-conf").setAttribute("type", "password");
        isBool = true;
    }
}
</script>

<?php
    include("Layout/Head-end.php");
?>