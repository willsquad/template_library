<?php 

$title = 'Contact 3';
include('include/header.php'); 

?>

<div class="full_width_map_div">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193571.43964108126!2d-74.11843026636996!3d40.70582489797609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1502086893595" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="iframe_overlay">
        
    </div>
    <div class="container">      
        <div class="contact3 col-12">
            <div class="icons_and_info row">
                <div class="col-12 col-md-4">
                    <i class="material-icons">location_on</i>
                    <p>123 Main Street, New York, NY 10001</p>
                </div>

                <div class="col-12 col-md-4">
                    <i class="material-icons">mail_outline</i>
                    <p>mail@company.com</p>
                </div>

                <div class="col-12 col-md-4">
                    <i class="material-icons">phone</i>
                    <p>+1 123-456-7890</p>
                </div>
            </div>

            <div class="input_text row">
                <div class="col-12 col-md-4">
                    <input type="text" placeholder="Your Name">
                </div>

                <div class="col-12 col-md-4">
                    <input type="text" placeholder="Your Email">
                </div>

                <div class="col-12 col-md-4">
                    <input type="text" placeholder="Subject">
                </div>
            </div>

            <div class="input_textarea row">
                 <div class="col-12">
                    <textarea placeholder="Your Message"></textarea>
                </div>
            </div>

            <div class="input_button row">
                <div class="col-12">
                    <button class="submit_button" type="submit">send message</button>
                </div>
            </div>

        </div>
    </div>
</div>

  
<?php include('include/footer.php'); ?>
        
