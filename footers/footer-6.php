<?php 

$title = 'Footer 6';
include('include/header.php'); 
?>
    
<footer>
    
     <div class="footer6 d-flex justify-content-center">
       <div class="container">
           <div class="row"> <!--- Start of first .row (Newsletter + Address + About) -->
              
               <div class="col-12 col-md-12 col-lg-3">
                   <div class="row">
                      
                       <div class="col-12 logo_div d-flex justify-content-center">
                           <img class="logo" src="../_files/logos/lambo.png">
                       </div>
                       
                       <div class="col-12 social d-flex justify-content-center">
                            <span class="fa fa-facebook"></span>
                            <span class="fa fa-twitter"></span>
                            <span class="fa fa-pinterest"></span>
                            <span class="fa fa-google-plus"></span>
                        </div>
                        
                        <div class="col-12 copyright d-flex justify-content-center hidden-md-down">&copy; 2017 Lamborghini. All Rights Reserved.</div>
                       
                   </div>
                </div>
                
                <div class="col-12 col-md-12 col-lg-6 text-center">
                   <div class="row">
                       <div class="col-12 gallery">
			                <h3 class="gallery_header">Gallery</h3>

                            <img src="../_files/images/placeholder.jpg">
                            <img src="../_files/images/placeholder.jpg">
                            <img src="../_files/images/placeholder.jpg">
                            <img class="hidden-sm-down" src="../_files/images/placeholder.jpg">
                       </div>
                       
                       <div class="col-12 about">
                           <h3 class="gallery_header">About</h3>
                            <p class="about_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at turpis non metus vulputate lacinia vel eget magna.</p>
                            <p class="about_p">Etiam pellentesque, lectus bibendum pellentesque porta, quam diam pulvinar metus, quis pellentesque nisl purus eget quam. Quisque finibus ornare sapien id interdum. Pellentesque quis turpis lobortis, pellentesque magna viverra.</p>
                       </div>
                        
                    </div>
                </div>
                
                <div class="col-12 col-md-12 col-lg-3">
                   <div class="row">
                       
                       <div class="col-12 contact_div">
                            <input class="input" type="text" placeholder="Name">
                            <input class="input" type="text" placeholder="Subject">
                            <textarea class="input textarea_input" placeholder="Message"></textarea>
                            <button class="contact_button">Get in touch with us <span class="fa fa-paper-plane"></span></button>
                       </div>
                       
                       <div class="col-12 copyright d-flex justify-content-center hidden-lg-up">&copy; 2017 Lamborghini. All Rights Reserved.</div>
                                               
                   </div>
                </div>
                
           </div> <!--- End of first .row (Newsletter + Address + About) -->
           
        </div>
    </div>
    
</footer>
  
<?php include('include/footer.php'); ?>
        
