<?php 

$title = 'Form 3';
include('include/header.php'); 

?>

<div class="form3 container-fluid">
   <div class="row">
       <div class="container">
           <div class="">
                <div class="body col-12">
                    <!--  start Form Steps  -->
                    <div class="steps" id="steps">
                        <span class="step_nb"></span>
                        <p class="form_title">Create a New account</p>
                        <form action="#" method="post" autocomplete="off">
                            <ul>
                                <li class="current_step">
                                    <input type="text" class="text_field" id="name" name="name" placeholder="Enter Your Name"/>					
                                </li>
                                <li>
                                    <input type="text" class="text_field" id="email" name="email" placeholder="Enter Your Email"/>	
                                </li>
                                <li>
                                    <input type="text" class="text_field" id="phone" name="phone" placeholder="Enter Your Phone Number"/>	
                                </li>
                                <li>
                                    <input type="text" class="text_field" id="country" name="country" placeholder="Enter Your Country"/>	
                                </li>
                            </ul>
                        </form>
                        <span class="note">Note : you can also press "Enter" to submit.</span>
                    </div><!--  End Form Steps  -->
               </div>
            </div>
        </div>
    </div>
</div>

       
  
<?php

$footer_include = '<script src="../_files/js/snap_svg.js"></script> <script src="../_files/js/velocity.js"></script>';
include('include/footer.php'); 

?>