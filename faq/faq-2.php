<?php 

$title = 'FAQ 2';
include('include/header.php'); 

?>
<style>
    body {
        background-color: #f4f4f4;
    }
</style>

<div class="faq2_top container-fluid">
   <div class="row">
      <div class="container">
          <div class="row d-flex align-items-center">
              <div class="col-12 col-lg-4">
                  <h2 class="heading">Help Center</h2>
              </div>
               <div class="search_div col-12 col-lg-8">
                   <input type="search" placeholder="search">
               </div>
           </div>
       </div>
    </div>
</div>
<div class="faq2 container-fluid">
   <div class="row">
       <div class="container">
           <div class="body row">
                <div class="top_icons_div col-12">
                   <div class="row">
                        <div class="icon_and_title active col-6 col-sm-3 col-md-3">
                            <i class="material-icons">person</i>
                            <p>Account</p>
                        </div>
                         <div class="icon_and_title col-6 col-sm-3 col-md-3">
                            <i class="material-icons">credit_card</i>
                            <p>Payment</p>
                        </div>
                         <div class="icon_and_title col-6 col-sm-3 col-md-3">
                            <i class="material-icons">build</i>
                            <p>Troubleshooting</p>
                        </div>
                        <div class="icon_and_title col-6 col-sm-3 col-md-3">
                            <i class="material-icons">card_membership</i>
                            <p>Membership</p>
                        </div>
                    </div>
                </div>
                
                <div class="questions_div col-12">
                    <div class="row">
                        <div class="questions_section col-12 col-lg-4">
                            <h4>Getting Started</h4>
                            <div class="question_divider"></div>
                            <a>Lorem ipsum  amet, consectur?</a>
                            <a>Lorem ium dolor  conseur?</a>
                            <a>Lorem ipsum dolor sit amet, tur?</a>
                            <a>Lorem ipsum sit amur?</a>
                        </div>
                        
                        <div class="questions_section col-12 col-lg-4">
                            <h4>Recovery</h4>
                            <div class="question_divider"></div>
                            <a>Lorem ipsum  amet, consectur?</a>
                            <a>Lorem ium dolor  conseur?</a>
                            <a>Lorem ipsum dolor sit amet, tur?</a>
                            <a>Lorem ipsum sit amur?</a>
                        </div>
                        
                        <div class="questions_section col-12 col-lg-4">
                            <h4>Privacy</h4>
                            <div class="question_divider"></div>
                            <a>Lorem ipsum  amet, consectur?</a>
                            <a>Lorem ium dolor  conseur?</a>
                            <a>Lorem ipsum dolor sit amet, tur?</a>
                            <a>Lorem ipsum sit amur?</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 more_help_div">
                    <div class="row">
                        <div class="col-12">
                            <p>Need more help?</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <button class="col-6"><i class="material-icons">email</i> <span class="hidden-sm-down">Send us an</span>&nbsp;email</button>
                        <button class="col-6"><i class="material-icons">phone</i> <span class="hidden-sm-down">Give us a</span>&nbsp;call</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

       
  
<?php

include('include/footer.php'); 

?>