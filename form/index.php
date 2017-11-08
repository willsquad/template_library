<?php 

$title = 'Form 1';
include('include/header.php'); 

?>

<div class="form1 container-fluid">
   <div class="row">
       <div class="container">
           <div class="">
                <div class="body col-12">
                    <div class="progress_row row">
                        <div class="progress_row_div_js col-12 col-lg-4 active" data-formtab="1">1. Login/Register</div>
                        <div class="progress_row_div_js col-12 col-lg-4" data-formtab="2">2. Shipping Address</div>
                        <div class="progress_row_div_js col-12 col-lg-4" data-formtab="3">3. Payment</div>
                    </div>
                    
                    
                       
                       <div id="1" class="form_row row active">
                            <div class="col-12">
                              <form method="post" autocomplete="off"><!-- Start of FORM -->
                                   <div class="row login_register_row login_row">

                                        <div class="input_div col-12 col-lg-6">
                                          <span class="field_name">Username</span>  
                                          <input type="text" placeholder="Enter your username here" name="form_user" autocomplete="off" required>
                                        </div>

                                        <div class="input_div col-12 col-lg-6">
                                            <span class="field_name">Password</span>  
                                            <input type="password" placeholder="Enter your password here" name="form_pass1" autocomplete="new-password" value="" required>
                                        </div>


                                        <div class="col-12">
                                            <button class="button">Login</button>
                                       </div>

                                    </div>
                                </form>
                                
                                <form method="post" autocomplete="off"><!-- Start of FORM -->
                                    <div class="row login_register_row register_row">

                                        <div class="input_div col-12 col-lg-6">
                                          <span class="field_name">Username</span>  
                                          <input type="text" placeholder="Enter your username here" name="form_user" autocomplete="off" required>
                                        </div>
                                        <div class="input_div col-12 col-lg-6">
                                          <span class="field_name">Email</span>  
                                          <input type="email" placeholder="Enter your Email here" name="form_email" required>
                                        </div>
                                        <div class="input_div col-12 col-lg-6">
                                            <span class="field_name">Password</span>  
                                            <input type="password" placeholder="Enter your password here" name="form_pass1" autocomplete="new-password" value="" required>
                                        </div>
                                        <div class="input_div col-12 col-lg-6">
                                          <span class="field_name">Confirm Password</span>  
                                          <input type="password" placeholder="Confirm your password here" name="form_pass2" autocomplete="new-password" value="" required>
                                        </div>

                                        <div class="col-12">
                                            <button class="button">Register</button>
                                       </div>
                                    </div>
                                </form>
                                
                                <div class="row">
                                    <div class="position_absolute col-12">
                                        <button class="ml-auto d-block button toggle_login_register_js">I don't have an account</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        
                        <div id="2" class="form_row row">
                            <div class="col-12">
                              
                              <form method="post" autocomplete="off"><!-- Start of FORM -->
                                   <div class="row">

                                        <div class="input_div col-12 col-lg-6">
                                          <span class="field_name">First Name</span>  
                                          <input type="text" placeholder="Enter your first name" name="form_user" autocomplete="off" required>
                                        </div>
                                        <div class="input_div col-12 col-lg-6">
                                          <span class="field_name">Last Name</span>  
                                          <input type="text" placeholder="Enter your last name" name="form_user" autocomplete="off" required>
                                        </div>
                                        <div class="input_div col-12">
                                          <span class="field_name">Address Line 1</span>  
                                          <input type="text" placeholder="Address" name="form_user" autocomplete="off" required>
                                        </div>
                                        <div class="input_div col-12">
                                          <span class="field_name">Address Line 2</span>  
                                          <input type="text" placeholder="Address" name="form_user" autocomplete="off" required>
                                        </div>
                                        <div class="input_div col-12 col-lg-6">
                                          <span class="field_name">State</span>  
                                          <input type="text" placeholder="State" name="form_email" required>
                                        </div>
                                        <div class="input_div col-12 col-lg-6">
                                          <span class="field_name">Phone</span>  
                                          <input type="tel" placeholder="Enter your contact number here" name="form_email" required>
                                        </div>

                                        <div class="col-12">
                                            <button class="button">Save</button>
                                       </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div id="3" class="form_row row">
                            <div class="col-12">
                              
                              <form method="post" autocomplete="off"><!-- Start of FORM -->
                                   <div class="row">

                                        <div class="input_div col-12 col-lg-6">
                                          <span class="field_name">Name on the Card</span>  
                                          <input type="text" placeholder="Enter your Name as given on the card" name="form_user" autocomplete="off" required>
                                        </div>
                                        <div class="input_div col-12 col-md-8">
                                          <span class="field_name">Card No:</span>  
                                          <input type="number" placeholder="Card Number" name="form_card" autocomplete="off" required>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="input_div col-12 col-lg-4">
                                          <span class="field_name">CVV No:</span>  
                                          <input type="number" placeholder="CVV" name="form_cvv" autocomplete="off" required>
                                        </div>
                                        <div class="input_div col-12 col-lg-4">
                                          <span class="field_name">Date:</span>  
                                          <input type="number" placeholder="MM" name="form_month" required>
                                        </div>
                                        <div class="input_div col-12 col-lg-4">
                                          <span class="field_name">Date:</span>  
                                          <input type="year" placeholder="YY" name="form_year" required>
                                        </div>


                                        <div class="col-12">
                                            <button class="button">Pay</button>
                                       </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

       
  
<?php

include('include/footer.php'); 

?>