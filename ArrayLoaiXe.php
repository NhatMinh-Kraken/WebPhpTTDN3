<?php
    include("AdminConf/Configure/config.php");
    if(isset($_POST['aid'])){
    $sql = "SELECT * FROM chitietsanpham WHERE IdLoaiXe = '$_POST[aid]'";
    $query = mysqli_query($mysqli,$sql);
    $num = mysqli_num_rows($query);
    if($num > 0)
    {
        while($row = mysqli_fetch_array($query)){

?>

<option value="<?php echo $row['idchitietsanpham'] ?>"><?php echo $row['TenXe'] ?></option>

<?php
        }
    }
    else{
    
?>
    <option value="0"><?php echo 'Không có sản phẩm'; ?></option>
<?php
    }
}
?>