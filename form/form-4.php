<?php 

$title = 'Form 4';
include('include/header.php'); 

?>
<style>
    body {
        background-color: #f4f4f4;
    }
</style>
<div class="form4 container-fluid">
   <div class="row">
       <div class="container">
           <div class="">
                <div class="form_row col-12 col-lg-6 push-lg-3">
                    <h3>Create a new account</h3>
                    <p>Fill up the form to proceed</p>
                    <div class="form_divider"></div>
                    <div class="form_steps_container row">
                       <div class="form_progress">
                           <div class="form_progress_line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                       </div>
                        <div class="form_step col-4 col-lg-4">
                            <div class="form_step_icon active"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                            <p>Account</p>
                        </div>
                        
                        <div class="form_step col-4 col-lg-4">
                            <div class="form_step_icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <p>Personal</p>
                        </div>
                        
                        <div class="form_step col-4 col-lg-4">
                            <div class="form_step_icon"><i class="fa fa-file-text" aria-hidden="true"></i></div>
                            <p>Confirm</p>
                        </div>
                    </div>
                    
                    
                    <div class="steps_main_container">
                        <div class="step_container account_info_container">
                            <h4>Account Information:</h4>
                            <div class="form_input_div_container row">
                                <div class="col-12 form_input_div">
                                    <label>Email: <span>*</span></label>
                                    <input type="email" name="email" placeholder="Enter your email here" class="">
                                </div>

                                 <div class="col-12 form_input_div">
                                    <label>Username: <span>*</span></label>
                                    <input type="text" name="username" placeholder="Choose a username" class="">
                                </div>

                                 <div class="col-12 form_input_div">
                                    <label>Password: <span>*</span></label>
                                    <input type="password" name="password" placeholder="Enter your password" class="" autocomplete="new-password">
                                </div>

                                 <div class="col-12 form_input_div">
                                    <label>Confirm Password: <span>*</span></label>
                                    <input type="password" name="password2" placeholder="Confirm your password" class="" autocomplete="new-password">
                                </div>
                            </div>
                            <div class="button_container row">
                                <div class="col-12">
                                    <button class="form_button account_button_js">Next</button>
                                </div>
                            </div>
                        </div>

                        <div class="step_container personal_info_container">
                            <h4>Personal Information:</h4>
                            <div class="form_input_div_container row">
                                <div class="col-12 form_input_div">
                                    <label>Name: <span>*</span></label>
                                    <input type="text" name="fname" placeholder="Enter your name here" class="">
                                </div>

                                 <div class="col-12 form_input_div">
                                    <label>Phone: <span>*</span></label>
                                    <input type="text" name="phone" placeholder="Enter your phone no: here" class="">
                                </div>

                                 <div class="col-12 form_input_div">
                                    <label>Address: <span>*</span></label>
                                    <input type="text" name="address" placeholder="Enter your address here" class="">
                                </div>

                                 <div class="col-12 form_input_div">
                                    <label>Country: <span>*</span></label>
                                    <input type="text" name="country" placeholder="Enter your country here" class="">
                                </div>
                            </div>
                            <div class="button_container row">
                                <div class="col-12">
                                    <button class="form_button personal_button_js">Next</button>
                                </div>
                            </div>
                        </div>


                        <div class="step_container personal_info_container">
                            <h4>Confirm:</h4>
                            <div class="form_input_div_container row">
                                <div class="col-12 form_input_div">
                                   <div class="accept_tnc">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam recusandae illo iusto sequi laboriosam ipsam odio veritatis tenetur dolorum ducimus, obcaecati optio, atque temporibus voluptas. Quis recusandae numquam laborum officiis</p>
                                        <input type="checkbox"> I accept the terms and conditions.
                                    </div>
                                </div>
                            </div>

                            <div class="button_container row">
                                <div class="col-12">
                                    <button class="form_button create_account_button">Create Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
               </div>
            </div>
        </div>
    </div>
</div>

       
  
<?php

$footer_include = '<script src="../_files/js/snap_svg.js"></script> <script src="../_files/js/velocity.js"></script>';
include('include/footer.php'); 

?>