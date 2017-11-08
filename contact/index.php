<?php 

$title = 'Contact 1';
include('include/header.php'); 

?>
 
<div class="container">  
    <div class="contact1 col-12">
        <div class="row">
            <div class="lhs_div col-12 col-lg-5">
                <h2>Contact Us</h2>
                <div class="border_bottom"></div>

                <div class="input_row row">
                    <div class="col-12">
                       <p>Name</p>
                        <input type="text" class="" placeholder="">
                    </div>

                    <div class="col-12">
                       <p>Email</p>
                        <input type="text" class="">
                    </div>

                    <div class="social col-12 hidden-md-down">
                       <p>Follow Us</p>
                        <span style="background-color: #39589B;" class="fa fa-facebook"></span>
                        <span style="background-color: #179BF1;" class="fa fa-twitter"></span>
                        <span style="background-color: #CD1D20;" class="fa fa-pinterest"></span>
                        <span style="background-color: #DD4D3F;" class="fa fa-google-plus"></span>
                    </div>
                </div>

            </div>
            <div class="rhs_div col-12 col-lg-7 d-flex flex-column justify-content-between">
                <div class="input_row row">
                    <div class="col-12">
                       <p>Message</p>
                        <textarea class="" placeholder="Enter your message here..."></textarea>
                    </div>

                </div>


                    <div class="row send_message_div">
                       <div class="col-12">
                            <button class="send_message">Send Message</button>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

  
<?php include('include/footer.php'); ?>
        
