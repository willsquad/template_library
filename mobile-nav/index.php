<?php 

$title = 'Mobile Nav 1';
include('include/header.php');

?>

<div class="container-fluid">
    <div id="mobile_1" class="row mobile_screen">
        <div id="mobile_side_nav" class="mobile_side_nav">
            <div class="top_logo">
                <img src="../_files/logos/walmart.png">
            </div>
            <div id="menu_items_container" class="menu_items_container">
                <a href="" class="active">
                    <i class="fa fa-home"></i> Home</a>
                <a href="">
                    <i class="fa fa-bell"></i> Notifications</a>
                <a href="">
                    <i class="fa fa-cog"></i> Settings</a>
                <a href="">
                    <i class="fa fa-dollar"></i> Pricing</a>
                <a href="">
                    <i class="fa fa-envelope"></i> Contact</a>
            </div>
        </div>

        <div id="mobile_header_body_content">
            <div class="col-12 mobile_nav_header">
                <div class="mobile_nav_header__bars">
                    <a id="mobile_menu_bars" href="javascript:void(0)" onclick="openNav()">
                        <i id="mobile_menu_bars__icon" class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="mobile_nav_header__logo">
                    <img src="../_files/logos/walmart.png" alt="">
                </div>
                <div class="mobile_nav_header__cart">
                    <i class="fa fa-shopping-cart"></i>
                </div>
            </div>

            <div id="mobile_landing_page_content" class="col-12 mobile_landing_page_content">
                <div class="mobile_landing_page_content__image">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mobile_side_nav").style.width = "60%";
        document.getElementById("menu_items_container").style.visibility = "visible";
        document.getElementById("mobile_header_body_content").style.marginLeft = "60%";
        document.getElementById("mobile_menu_bars").setAttribute("onclick", "closeNav()");
        document.getElementById("mobile_menu_bars__icon").classList.add('fa-close');
        document.getElementById("mobile_menu_bars__icon").classList.remove('fa-bars');

    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mobile_side_nav").style.width = "0";
        document.getElementById("menu_items_container").style.visibility = "hidden";
        document.getElementById("mobile_header_body_content").style.marginLeft = "0";
        document.getElementById("mobile_menu_bars").setAttribute("onclick", "openNav()");
        document.getElementById("mobile_menu_bars__icon").classList.add('fa-bars');
        document.getElementById("mobile_menu_bars__icon").classList.remove('fa-close');
    }
</script>
<?php include('include/footer.php'); ?>