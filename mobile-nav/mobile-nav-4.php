<?php 

$title = 'Mobile Nav 4';
include('include/header.php');

?>

<div class="container-fluid no-gutters">
    <div id="mobile_4" class="row mobile_screen">
        <div id="mobile_side_nav" class="mobile_side_nav">
            <div id="top_search" class="top_search">
                <i class="fa fa-search search_icon"></i>
                <input type="text">
            </div>
            <div id="menu_items_container" class="menu_items_container">
                <a href="" class="active">
                    Home
                </a>
                <a href="">
                    Deals
                </a>
                <a href="">
                    Electronics
                    <i class="fa fa-chevron-down"></i>
                </a>
                <div class="expanded_menu">
                    <a href="">
                        Computers
                        <i class="fa fa-chevron-right"></i>
                    </a>
                    <a href="">
                        Mobiles
                        <i class="fa fa-chevron-right"></i>
                    </a>
                    <a href="">
                        Cameras
                        <i class="fa fa-chevron-right"></i>
                    </a>
                    <a href="">
                        Television
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
                <a href="">
                    Clothing
                    <i class="fa fa-chevron-down"></i>
                </a>
                <a href="">
                    Sports
                    <i class="fa fa-chevron-down"></i>
                </a>
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
                    <img src="../_files/logos/ebay.png" alt="">
                </div>
                <div class="mobile_nav_header__cart">
                    <i class="fa fa-shopping-cart"></i>
                </div>
            </div>

            <div id="mobile_landing_page_content" class="col-12 mobile_landing_page_content">
                <div class="mobile_landing_page_content__card_small"></div>
                <div class="mobile_landing_page_content__card_large"></div>
            </div>
        </div>
    </div>
</div>

<script>
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mobile_side_nav").style.width = "60%";
        document.getElementById("menu_items_container").style.visibility = "visible";
        document.getElementById("top_search").style.visibility = "visible";

        document.getElementById("mobile_menu_bars").setAttribute("onclick", "closeNav()");
        document.getElementById("mobile_menu_bars__icon").classList.add('fa-close');
        document.getElementById("mobile_menu_bars__icon").classList.remove('fa-bars');

    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("menu_items_container").style.visibility = "hidden";
        document.getElementById("top_search").style.visibility = "hidden";
        document.getElementById("mobile_side_nav").style.width = "0";

        document.getElementById("mobile_menu_bars").setAttribute("onclick", "openNav()");
        document.getElementById("mobile_menu_bars__icon").classList.add('fa-bars');
        document.getElementById("mobile_menu_bars__icon").classList.remove('fa-close');
    }
</script>
<?php include('include/footer.php'); ?>