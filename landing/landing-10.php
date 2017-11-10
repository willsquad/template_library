<?php 

$title = 'Landing 10';
include('include/header.php'); 

?>

<div class="container-fluid">
    <div class="row">
        <div id="landing_10" class="col-12">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 landing_content_container">
                    <div class="row logo_container">
                        <div class="logo">Company X</div>

                        <div class="nav_container hidden-sm-down">
                            <a>Home</a>
                            <a>Products</a>
                            <a>FAQ</a>
                            <a>Contact Us</a>
                        </div>
                        <div class="mobile_menu_bars hidden-md-up">
                            <i class="material-icons">menu</i>
                        </div>
                        <div class="col-12 mobile_menu_elements_container hidden-md-up">
                            <div class="menu_elements menu_elements_mobile d-flex flex-column ">
                                <a>Home</a>
                                <a>Products</a>
                                <a>FAQ</a>
                                <a>Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 col-sm-4 col-md-4 col-lg-6 landing_rhs">
                            <img src="../_files/images/phone_new.png" alt="">
                        </div>

                        <div class="col-12 col-sm-8 col-md-8 col-lg-6 landing_lhs d-flex justify-content-center flex-column align-items-sm-start align-items-center">
                            <i class="fa fa-check-circle-o"></i>
                            <h2 class="landing_h2">Template<br>wireframe Kit</h2>
                            <div class="input_button_container">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <button class="landing_button">Sign Up for Newsletter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>