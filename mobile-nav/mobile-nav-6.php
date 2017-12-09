<?php 

$title = 'Mobile Nav 6';
include('include/header.php');

?>

<div class="container-fluid no-gutters">
    <div id="mobile_6" class="row mobile_screen">
        <div id="mobile_side_nav" class="mobile_side_nav">
            <div class="top_logo">
                <img src="../_files/logos/hbo_lg.png">
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
            <div id="overlay" class="overlay">

            </div>
            <div class="col-12 mobile_nav_header">
                <div class="mobile_nav_header__bars">
                    <a id="mobile_menu_bars" href="javascript:void(0)" onclick="openNav()">
                        <i id="mobile_menu_bars__icon" class="fa fa-bars fa-fw"></i>
                    </a>
                </div>
                <div class="mobile_nav_header__logo">
                    <img src="../_files/logos/hbo_lg.png" alt="">
                </div>
                <div class="mobile_nav_header__cart">
                </div>
            </div>

            <div id="mobile_landing_page_content" class="col-12 mobile_landing_page_content">
                <div class="mobile_landing_page_content__image">
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
        document.getElementById("mobile_landing_page_content").style.width = "478px";
        document.getElementById("overlay").classList.add('active');

        document.getElementById("mobile_menu_bars").setAttribute("onclick", "closeNav()");
        document.getElementById("mobile_menu_bars__icon").classList.add('fa-close');
        document.getElementById("mobile_menu_bars__icon").classList.remove('fa-bars');

    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("menu_items_container").style.visibility = "hidden";
        document.getElementById("mobile_side_nav").style.width = "0";
        document.getElementById("mobile_header_body_content").style.marginLeft = "0";
        document.getElementById("mobile_landing_page_content").style.width = "auto";
        document.getElementById("overlay").classList.remove('active');
        
        document.getElementById("mobile_menu_bars").setAttribute("onclick", "openNav()");
        document.getElementById("mobile_menu_bars__icon").classList.add('fa-bars');
        document.getElementById("mobile_menu_bars__icon").classList.remove('fa-close');
    }
</script>
<?php include('include/footer.php'); ?>