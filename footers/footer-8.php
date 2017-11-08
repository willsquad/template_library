<?php 

$title = 'Footer 8';
include('include/header.php'); 
?>
    
<footer>
    
     <div class="footer8 d-flex justify-content-center">
       <div class="container">
          
           <div class="row"> <!--- Start of first .row (Logo + Newsletter) -->
              
              <div class="logo_div col-12 col-md-5">
                  <img class="logo" src="../_files/logos/microsoft.png">
              </div>
              
              <div class="newsletter col-12 col-md-7 ">
                    <span class="text">Subscribe to our Newsletter</span><br>
                    <input type="text" placeholder="Email Address"><button>Sign Up</button>
              </div>
                 
              <div class="about col-12 col-md-5">
				<h2>About</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non arcu aliquet, congue lectus a, tincidunt diam.</p>
				<p>Sed fermentum vestibulum enim, dapibus aliquet lacus ultricies at.</p>
				<p>Sed in odio non neque tempor suscipit eget in ex. Curabitur egestas risus at odio blandit molestie.</p>
              </div>

              <div class="menu_elements col-12 col-md-7">
                  <div class="row">
                      <div class="menu_div col-12 col-md-4">
                            <h2>Microsoft Store</h2>
                            <p>Products</p>
                            <p>View Account</p>
                            <p>Order Tracking</p>
                            <p>Returns</p>
                            <p>Sales &amp; Support</p>
                      </div>
                      
                      <div class="menu_div col-12 col-md-4">
                            <h2>Downloads</h2>
                            <p>Products</p>
                            <p>View Account</p>
                            <p>Order Tracking</p>
                            <p>Returns</p>
                            <p>Sales &amp; Support</p>
                      </div>
                      
                      <div class="menu_div col-12 col-md-4">
                            <h2>Company</h2>
                            <p>Products</p>
                            <p>View Account</p>
                            <p>Order Tracking</p>
                            <p>Returns</p>
                            <p>Sales &amp; Support</p>
                      </div>
                  </div>
              </div>

           </div> <!--- End of first .row (Logo + Newsletter) -->
           
       </div>
    </div>
    
    <div class="footer8_bottom d-flex align-items-center">
        <div class="container">
            <div class="row">

                <div class="phone_email col-12 col-md-6 d-flex justify-content-center justify-content-md-start align-items-center">
                    <span class="footer_5_bottom_contact_email">help@microsoft.com</span>
                </div>
                <div class="social col-12 col-md-6 d-flex justify-content-center justify-content-md-end align-items-center">
                        <span style="background-color: #39589B;" class="fa fa-facebook"></span>
                        <span style="background-color: #179BF1;" class="fa fa-twitter"></span>
                        <span style="background-color: #CD1D20;" class="fa fa-pinterest"></span>
                        <span style="background-color: #DD4D3F;" class="fa fa-google-plus"></span>
                </div>

            </div>
        </div>
    </div>
    
</footer>
  
<?php include('include/footer.php'); ?>
        
