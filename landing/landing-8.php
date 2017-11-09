<?php 

$title = 'Landing 8';
include('include/header.php'); 

?>
 
<div class="container-fluid">
    <div class="row">   
        <div id="landing_8" class="col-12">
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
                        <div class="col-12 col-sm-8 offset-sm-2 landing_lhs d-flex justify-content-center flex-column align-items-center">
                            <h2 class="landing_h2">Wireframe Header</h2>
                            <p class="landing_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem ipsum quia qui fuga eum totam quam, quisquam temporibus asperiores! Accusamus exercitationem temporibus libero et.</p>
                            <div>
                                <button class="landing_button"><i class="fa fa-facebook"></i>  Sign up with Facebook</button>
                            </div>

                            <div class="hr_line"></div>

                            <div class="or_sign_up_with">Or create a new account</div>

                            <div class="sign_up_email">
                                <div class="input_button_container col-12">
                                    <input type="text" placeholder="username"> <input type="text" placeholder="password">
                                    <button class="landing_button">Sign up</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
<?php include('include/footer.php'); ?>
        
