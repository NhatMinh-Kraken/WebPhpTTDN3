<?php
    include("Layout/Head.php");
?>

<?php
            include("Loadding.php");
        ?>
<?php

        include("AdminConf/Configure/config.php");

        session_start();

        if(isset($_POST['DangNhap']))
        {
            $TKEmail = $_POST['TK-Email'];
            $TKPass = $_POST['TK-Pass'];

            if(!$TKEmail || !$TKPass)
            {
                echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu."); window.location="Login.php";</script>' ;
                exit;
            }
            $TKPass = md5($TKPass);

            $TextTKEmail = mysqli_query($mysqli,"SELECT * FROM taikhoanuser WHERE Email='$TKEmail'");
            if(mysqli_num_rows($TextTKEmail) == 0)
            {
                echo '<script language="javascript"> alert("Email không tồn tại."); window.location="Login.php";</script>' ;
                exit;
            }

            $row = mysqli_fetch_array($TextTKEmail);

            if($TKPass != $row['pasword'])
            {
                echo '<script> alert("Bạn đã nhập mật khẩu không đúng");window.location="Login.php";</script>';
                exit;
            }   
            $_SESSION['dangnhap'] = $row['HoVaTen'];
            
            $_SESSION['Id_KhachHang'] = $row['IdUser'];
            echo '<script> alert("Bạn đã đăng nhập thành công");window.location="Index.php";</script>';
        }
    ?>


<div class="Login-scroller">
    <div class="container-login">
        <div class="row Login-width">
            <div class="Login-background">
                <div class="Login-Card col-lg-4">
                    <div class="Login-Tilte">
                        <h3 class="Login-card-title">Login</h3>
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text" class="form-control" name="TK-Email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input id="password" class="form-control" type="password" name="TK-Pass"
                                    placeholder="Mật Khẩu" required>
                                <span class="show-btn"><i class="bi bi-eye" onclick="showHidden()"></i></span>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="Remember">
                                        Remember me
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <a href="QuenMatKhau.php" class="forgot-pass">Forgot Password</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn"
                                    name="DangNhap">Enter</button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-facebook mr-2">
                                    <i class="bi bi-facebook"></i>
                                    Facebook
                                </button>
                                <button class="btn btn-google mr-2">
                                    <i class="bi bi-google"></i>
                                    Facebook
                                </button>
                            </div>
                            <p class="sign-up">
                                Don't have an Account?
                                <a href="Register.php">Sign Up</a>
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
        isBool = false; 
    } else {
        document.getElementById("password").setAttribute("type", "password");
        isBool = true;
    }
}
</script>
<?php
    include("Layout/Head-end.php");
?>