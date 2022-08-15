<?php
    session_start();
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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="SHORTCUT ICON" href="Images/logo-web.ico">
    <title>Mercedes-Benz: - Admin - </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Css.css">

    <link rel="stylesheet" href="ReponsiveAdmin.css">
    <!--Css/js/jquery slide-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
</head>

<body class="preloading" translate="no">

    <div class="Login-scroller">
        <div class="container-login">
            <div class="row Login-width">
                <div class="Login-background">
                    <div class="Login-Card col-lg-4">
                        <div class="Login-Tilte">
                            <h3 class="Login-card-title">Login</h3>
                            <form action="" method="post" autocomplete="off">
                                <div class="form-group">
                                    <label>Tài Khoản *</label>
                                    <input type="text" class="form-control" name="TK-Email" placeholder="Tài Khoản">
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input id="password" class="form-control" type="password" name="TK-Pass"
                                        placeholder="Mật Khẩu" required>
                                    <span class="show-btn"><i class="bi bi-eye" onclick="showHidden()"></i></span>
                                </div>
                                
                                <div class="text-center">
                                    <input type="submit" class="btn btn-primary btn-block enter-btn"
                                        name="DangNhap" value="Enter">
                                </div>
                                
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



    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="Js.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>


    <script src="Loadding.js"></script>
</body>

</html>