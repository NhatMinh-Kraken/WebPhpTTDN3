<?php
    include("Layout/Head.php");
?>

<?php
    include("Loadding.php");
?>

<?php
    session_start();

    if(!isset($_SESSION['mail'])){
        echo '<script language="javascript"> alert("Bạn có mã xác nhận"); window.location="QuenMatKhau.php";</script>' ;
        exit;
    }

    if(isset($_POST['MaXacThuc']))
    {
        $MXN = $_POST['MXT'];

        if(!$MXN)
        {
            echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="MaXacNhan.php";</script>' ;
            exit;
        }

        if($_POST['MXT'] != $_SESSION['code']){
            echo '<script language="javascript"> alert("Mã Xác Thực Không Hợp Lệ."); window.location="MaXacNhan.php";</script>' ;
            exit;
        }
        else{
            echo '<script language="javascript"> alert("Xác Thực Thành Công. Tiến Hành Đổi Mật Khẩu."); window.location="ResetPass.php";</script>' ;
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
                        <h3 class="Login-card-title">Xác Nhận Mã Xác Thực</h3>

                        <form action="" method="post" autocomplete="off">
                            <div class="alert alert-primary" role="alert" style='text-align:center;'>Hãy nhập mã xác nhận mà chúng tôi gửi cho bạn.</div>
                            <div class="form-group">
                                <label>Mã Xác Thực *</label>
                                <input type="text" class="form-control" id="MXT" name="MXT" placeholder="Mã Xác Thực">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn"
                                    name="MaXacThuc">Enter</button>
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

<?php
    include("Layout/Head-end.php");
?>