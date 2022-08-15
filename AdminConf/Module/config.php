<!-- Kết nối csdl -->
<?php
    $mysqli = new mysqli("localhost","root","","mysqli_car");

    // Check connection
    if ($mysqli->connect_errno) {
      echo "Kết nối lỗi!!!" . $mysqli->connect_error;
      exit();
    }
?>