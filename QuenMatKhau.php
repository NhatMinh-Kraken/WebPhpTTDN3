<?php
    include("Layout/Head.php");
?>

<?php
    include("Loadding.php");
?>

<?php

    session_start();
    ob_start();

    include("AdminConf/Configure/config.php");
    $loi="";
    if(isset($_POST['QuenMatKhau']) == true){
        $email = $_POST['TK-Email'];

        if(!$email)
        {
            echo '<script language="javascript"> alert("Vui lòng nhập đầy đủ thông tin"); window.location="QuenMatKhau.php";</script>' ;
            exit;
        }

        $sqlEmail = "SELECT * FROM taikhoanuser Where Email = '$email'";
        $stmt = mysqli_query($mysqli,$sqlEmail);
        if(mysqli_num_rows($stmt) == 0)
        {
            // echo '<script language="javascript"> alert("Email không tồn tại."); window.location="Login.php";</script>' ;
            // exit;
            $loi ="Email không tồn tại.";
        }
        else{
            $code = substr(rand(0,999999),0,6);
            $sqlCode = "UPDATE taikhoanuser SET RandomKey= '$code' WHERE Email ='$email'";
            $QueryMatKhauMoi = mysqli_query($mysqli,$sqlCode);

            GuiMatKhauMoi($email,$code);


            // echo '<script language="javascript"> alert("Đã Cập Nhật Thành Công."); window.location="Login.php";</script>' ;
            // exit;
        }
    }
    
?>

<?php
    function GuiMatKhauMoi($email,$code){
        require "PHPMailer-master/src/PHPMailer.php"; 
        require "PHPMailer-master/src/SMTP.php"; 
        require 'PHPMailer-master/src/Exception.php'; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
        try {
            $mail->SMTPDebug = 2; //0,1,2: chế độ debug
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'nguyennhatminh26122001@gmail.com'; // SMTP username
            $mail->Password = 'jvsbwuxrjpdvitys';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('nguyennhatminh26122001@gmail.com', 'Nguyễn Nhật Minh' ); 
            $mail->addAddress($email); 
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Forgot Password';
            $noidungthu = "<p>Không gửi cho bất kỳ người lạ nào.</p>
                Mã xác thực của bạn là: <span style='color:green'>".$code."</span>"; 
            $_SESSION['mail'] = $email;
            $_SESSION['code'] = $code;
            $mail->Body = $noidungthu;
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo '<script language="javascript"> alert("Đã Gửi Mã Xác Nhận Thành Công."); window.location="MaXacNhan.php";</script>' ;
            exit;
        } catch (Exception $e) {
            echo 'Error: ', $mail->ErrorInfo;
        }
    }
?>

<?php
    if($loi!="")
    {
?>
<div class="alert alert-danger"><?php echo $loi; ?></div>
<?php        
    }
?>
<div class="Login-scroller">
    <div class="container-login">
        <div class="row Login-width">
            <div class="Login-background">
                <div class="Login-Card col-lg-4">
                    <div class="Login-Tilte">
                        <h3 class="Login-card-title">Forgot-Password</h3>

                        <form action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <label>Email *</label>
                                <input value="<?php if(isset($email)==true){echo $email;} ?>" type="text"
                                    class="form-control" id="TK-Email" name="TK-Email" placeholder="Email">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn"
                                    name="QuenMatKhau">Enter</button>
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