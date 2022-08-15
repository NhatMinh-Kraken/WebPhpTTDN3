<?php
    session_start();
?>

<?php
    include("Layout/Head.php");
?>
        <?php
            include("Loadding.php");
        ?>

<?php
        if(isset($_SESSION['dangnhap']))
        {
            include("Profile/Profile.php");
        }
    ?>




<!---Menu-nav-->
<?php
        include("page/menu-nav.php");
    ?>
    
<!---->
<div id="wrapper">
        

        <!-- <a href="" class="to-top"></a> -->

        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle"></i></button>
    <!--nav-->
    <?php
            include("page/nav.php");
        ?>
    <!---->
    <!--slide-->

    <?php
            if(!isset($_GET['quanly'])){
                include("Index2.php");
            }
        ?>
    <!---->

    <!--Product-->
    <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }else{
                $tam ='';
            }
            if($tam =='danhmucsanphamxe'){
                include("Product/Product-Type.php");
            }
            elseif($tam =='Product-Detail'){
                include("Product-Detail.php");
            }
            elseif($tam =='Accesory'){
                include("Accesory.php");
            }
            elseif($tam =='Detail-Product'){
                include("Detail-Product.php");
            }
            elseif($tam =='danhmucsanphamphukienbody'){
                include("Product-Accesory/Product-Accesory-Body.php");
            }
            elseif($tam =='danhmucsanphamphukienbaove')
            {
                include("Product-Accesory/Product-Accesory-BaoVe.php");
            }
            elseif($tam =='danhmucsanphamphukientiennghi')
            {
                include("Product-Accesory/Product-Accesory-TienNghi.php");
            }
            elseif($tam =='danhmucsanphamphukientrangtri')
            {
                include("Product-Accesory/Product-Accesory-TrangTri.php");
            }
            elseif($tam =='danhmucsanphamphukienmamxe')
            {
                include("Product-Accesory/Product-Accesory-MamXe.php");
            }
            elseif($tam =='thongtingiohang')
            {
                include("ThongTinGioHang.php");
            }
            elseif($tam =='thanhtoan')
            {
                include("ThanhToan.php");
            }
            elseif($tam =='camon')
            {
                include("CamOn.php");
            }
            
            else{
                include("Product/Product-car.php");
            }
        ?>
    <!---->

    <!--Tìm hiểu thêm-->
    <?php
            if(!isset($_GET['quanly'])){
                include("Index3.php");
            }
        ?>

    <!--Footer-->
    <?php
            include("page/Footer.php");
        ?>
    <!---->
</div>





<script>
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>


<!-- <script>
    const ToTop = document.querySelector(".to-top");

window.addEventListener("scroll", () =>{
    if(window.pageYOffset > 100){
        ToTop.classList.add("active");
    }else{
        ToTop.classList.remove("active");
    }
})
</script> -->

<?php
    include("Layout/Head-end.php");
?>