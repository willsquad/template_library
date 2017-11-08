<?php 

$title = 'Footer 5';
include('include/header.php'); 
?>
    
<footer>
    
     <div class="footer5 d-flex justify-content-center">
       <div class="container">
           <div class="row"> <!--- Start of first .row (Newsletter + Address + About) -->
              
               <div class="col-12 col-md-6 col-lg-4">
                   <div class="row">
                      
                       <div class="col-12 logo_div d-flex justify-content-center">
                           <img class="logo" src="../_files/logos/coca-cola.png">
                       </div>
                       
                       <div class="col-12 menu_elements text-center">
                                <a>Home</a>
                                <a><span class="fa fa-circle"></span></a>
                                <a>Brands</a>
                                <a><span class="fa fa-circle"></span></a>
                                <a>Innovation</a>
                                <a><span class="fa fa-circle"></span></a>
                                <a>History</a>
                       </div>
                       
                       
                       <div class="col-12 newsletter">
				            <span class="newsletter_text">Subscribe to our Newsletter</span>
                            <br>
                            <input type="text" placeholder="Email Address">
                            <button>Subscribe</button>
                        </div>
                       
                   </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-4 text-center">
                   <div class="row">
                       
                        <div class="col-12 address">
                            <span class="fa fa-map-marker fa-lg"></span>

                            <p>The Coca-Cola Company</p>
                            <p>P.O. Box 1734</p>
                            <p> Atlanta GA 30301, USA</p>
                        </div>

                        <div class="col-12 phone">
                            <p><span class="fa fa-phone fa-lg"></span> 1.800.GET.COKE</p>
                        </div>

                        <div class="col-12 email">
                            <p><span class="fa fa-envelope fa-lg"></span> mail@coca-cola.com</p>
                        </div>

                    </div>
                </div>
                
                <div class="col-12 col-md-12 col-lg-4">
                   <div class="row">
                       
                       <div class="col-12 about">
				            <h3>About</h3>
                            <p>The Coca-Cola Company (NYSE: KO) is the world's largest beverage company, refreshing consumers with more than 500 sparkling and still brands and more than 3,800 beverage choices.</p>
                            <p>Together with our bottling partners, we rank among the world's top 10 private employers with more than 700,000 system associates</p>
                       </div>
                       
                   </div>
                </div>
                
           </div> <!--- End of first .row (Newsletter + Address + About) -->
           
           
           
           <div class="row"><!--- Start of second .row (Social icons + Copyright) -->
               
               <div class="col-12 col-sm-4 push-sm-8 social d-flex align-items-center justify-content-center">
                   <span style="background-color: #39589B;" class="fa fa-facebook"></span>
                    <span style="background-color: #179BF1;" class="fa fa-twitter"></span>
                    <span style="background-color: #CD1D20;" class="fa fa-pinterest"></span>
                    <span style="background-color: #DD4D3F;" class="fa fa-google-plus"></span>
               </div>
               
               <div class="col-12 col-sm-8 pull-sm-4 copyright d-flex align-items-center justify-content-center justify-content-sm-start">
                   &copy; 2017 The Coca-Cola Company. All Rights Reserved.
               </div>
               
            </div> <!--- End of second .row (Social icons + Copyright) -->
           
           
       </div>
    </div>
    
</footer>
  
<?php include('include/footer.php'); ?>
        
