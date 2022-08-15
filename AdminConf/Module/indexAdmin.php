<?php
session_start();
if(!isset($_SESSION['DangNhap'])){
    header('Location:LoginAdmin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mercedes-Benz: - Admin -</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="SHORTCUT ICON" href="Image/logo-web.ico">

    <!-- Plugin css for this page -Product- -->
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">

    <link rel="stylesheet" href="ReponsiveAdmin.css">
    <link rel="stylesheet" href="CssAdmin.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  </head>
  <body>

  <?php
    include("Loadding.php");
  ?>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php
        include("Admin-IndexAdmin-Nav-Product.php");
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <?php
            include("Admin-IndexAdmin-Nav-Reposive.php");
          ?>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php
              if(isset($_GET['action']))
              {
                $tam = $_GET['action'];
                
              }else{
                $tam = '';
                
              }
              if($tam=='Add-Product'){
                include("Add-Product.php");
              }
              elseif($tam =='Fix-Product'){
                include("Fix-Product.php");
              }
              elseif($tam =='Default-Product'){
                include("Default-Product.php");
              }
              elseif($tam =='Fix-Default-Product'){
                include("Fix-Default-Product.php");
              }
              elseif($tam=='Xem-Loai-Xe')
              {
                include("Xem-Loai-Xe.php");
              }
              elseif($tam=='Add-Type-Product-Car')
              {
                include("Add-LoaiXe.php");
              }
              elseif($tam=='Xem-Xe')
              {
                include("Xem-Xe.php");
              }
              elseif($tam=='Add-Type-Accesory')
              {
                include("Add-Type-Accesory.php");
              }
              
              elseif($tam=='Add-Type-Accesory-Body')
              {
                include("Add-Type-Accesory-Body.php");
              }
              elseif($tam=='Add-Type-Accesory-BaoVe')
              {
                include("Add-Type-Accesory-BaoVe.php");
              }
              elseif($tam=='Add-Type-Accesory-TienNghi')
              {
                include("Add-Type-Accesory-TienNghi.php");
              }
              elseif($tam=='Add-Type-Accesory-TrangTri')
              {
                include("Add-Type-Accesory-TrangTri.php");
              }
              elseif($tam=='Add-Type-Accesory-MamXe')
              {
                include("Add-Type-Accesory-MamXe.php");
              }


              elseif($tam=='Default-Type-Accesory')
              {
                include("Default-Type-Accesory.php");
              }
              

              elseif($tam=='Edit-Type-Accesory1')
              {
                include("Edit-Type-Accesory1.php");
              }
              elseif($tam=='Edit-Type-Accesory2')
              {
                include("Edit-Type-Accesory2.php");
              }
              elseif($tam=='Edit-Type-Accesory3')
              {
                include("Edit-Type-Accesory3.php");
              }
              elseif($tam=='Edit-Type-Accesory4')
              {
                include("Edit-Type-Accesory4.php");
              }
              elseif($tam=='Edit-Type-Accesory5')
              {
                include("Edit-Type-Accesory5.php");
              }
              
              elseif($tam=='Default-Accesory-Body')
              {
                include("Default-Accesory-Body.php");
              }
              elseif($tam=='Default-Accesory-BaoVe')
              {
                include("Default-Accesory-BaoVe.php");
              }
              elseif($tam=='Default-Accesory-TienNghi')
              {
                include("Default-Accesory-TienNghi.php");
              }
              elseif($tam=='Default-Accesory-TrangTri')
              {
                include("Default-Accesory-TrangTri.php");
              }
              elseif($tam=='Default-Accesory-MamXe')
              {
                include("Default-Accesory-MamXe.php");
              }

              elseif($tam=='Default-Accesory1')
              {
                include("Default-Accesory1.php");
              }
              elseif($tam=='Default-Accesory2')
              {
                include("Default-Accesory2.php");
              }
              elseif($tam=='Default-Accesory3')
              {
                include("Default-Accesory3.php");
              }
              elseif($tam=='Default-Accesory4')
              {
                include("Default-Accesory4.php");
              }
              elseif($tam=='Default-Accesory5')
              {
                include("Default-Accesory5.php");
              }

              elseif($tam=='Add-Accesory')
              {
                include("Add-Accesory.php");
              }
              elseif($tam=='Add-Accesory0')
              {
                include("Add-Accesory0.php");
              }
              elseif($tam=='Add-Accesory1')
              {
                include("Add-Accesory1.php");
              }
              elseif($tam=='Add-Accesory2')
              {
                include("Add-Accesory2.php");
              }
              elseif($tam=='Add-Accesory3')
              {
                include("Add-Accesory3.php");
              }
              elseif($tam=='Add-Accesory4')
              {
                include("Add-Accesory4.php");
              }
              elseif($tam=='Add-Accesory5')
              {
                include("Add-Accesory5.php");
              }
 
              elseif($tam=='Edit-Accesory-Body')
              {
                include("Edit-Accesory-Body.php");
              }
              elseif($tam=='Edit-Accesory-BaoVe')
              {
                include("Edit-Accesory-BaoVe.php");
              }
              elseif($tam=='Edit-Accesory-TienNghi')
              {
                include("Edit-Accesory-TienNghi.php");
              }
              elseif($tam=='Edit-Accesory-TrangTri')
              {
                include("Edit-Accesory-TrangTri.php");
              }
              elseif($tam=='Edit-Accesory-MamXe')
              {
                include("Edit-Accesory-MamXe.php");
              }

              elseif($tam=='ThongTinKhachHang')
              {
                include("Default-User.php");
              }

              elseif($tam=='SuaThongTinKhachHang')
              {
                include("SuaThongTinKhachHang.php");
              }

              elseif($tam=='XemDonHang')
              {
                include("XemDonHang.php");
              }

              elseif($tam=='XemChiTietDonHang')
              {
                include("XemChiTietDonHang.php");
              }

              elseif($tam=='SuaChiTietDonHang')
              {
                include("SuaChiTietDonHang.php");
              }

              elseif($tam=='XuLyXoaThongTinChiTietDonHang')
              {
                include("XuLyXoaThongTinChiTietDonHang.php");
              }

              elseif($tam=='XemDonHangLaiThu')
              {
                include("XemDonHangLaiThu.php");
              }

              elseif($tam=='SuaThongTinKhachHangLaiThu')
              {
                include("SuaThongTinKhachHangLaiThu.php");
              }

              elseif($tam=="XemChiTietDonHangLaiThu"){
                include("XemChiTietDonHangLaiThu.php");
              }

              elseif($tam=="XuLySuaChiTietDonHangLaiThu"){
                include("XuLySuaChiTietDonHangLaiThu.php");
              }

              elseif($tam=="XuLyXoaThongTinChiTietDonHangLaiThu"){
                include("XuLyXoaThongTinChiTietDonHangLaiThu.php");
              }

              else{
                include("Admin-IndexAdmin-Content.php");
              }
            ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
   
    <script src="assets/js/misc.js"></script>
    
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <!-- Product -->
    
    <!-- Custom js for this page -->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page -->
    <!-- End-Product -->

    <script src="JsAdmin.js" type="text/javascript"></script> 
    <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>  
  </body>
</html>