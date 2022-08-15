<?php
include('config.php');

    $id=$_GET['idaccesory'];
    $sql_xoa = "DELETE From loaiphukienbody WHERE IdLoaiPhuKienBody='".$id."'";

    mysqli_query($mysqli,$sql_xoa);
    echo '<script> alert("Bạn đã xóa thành công");window.location="IndexAdmin.php?action=Default-Type-Accesory";</script>';
  
?>