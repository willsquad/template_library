<?php 

$title = 'Form 2';
include('include/header.php'); 

?>
<style>
    body {
        background: rebeccapurple;
        color: #fff;
    }
    .footer_collection_body>h1 {
        color: #fff;
    }
    .header_collection_list a {
        color: #fff;
    }
</style>

<div class="form2 container-fluid">
   <div class="row">
       <div class="container">
           <div class="">
                <div class="body col-12">
                    <!-- multistep form -->
                    <form id="msform">
                      <!-- progressbar -->
                      <ul id="progressbar">
                        <li class="active">Register</li>
                        <li>Social</li>
                        <li>Personal</li>
                      </ul>
                      <!-- fieldsets -->
                      <fieldset>
                        <h2 class="fs-title">Create your account</h2>
                        <input type="text" name="email" placeholder="Email" />
                        <input type="password" name="pass" placeholder="Password" />
                        <input type="password" name="cpass" placeholder="Confirm Password" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                      </fieldset>
                      <fieldset>
                        <h2 class="fs-title">Social Profiles</h2>
                        <input type="text" name="twitter" placeholder="Twitter" />
                        <input type="text" name="facebook" placeholder="Facebook" />
                        <input type="text" name="gplus" placeholder="Google Plus" />
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                      </fieldset>
                      <fieldset>
                        <h2 class="fs-title">Account Details</h2>
                        <input type="text" name="fname" placeholder="First Name" />
                        <input type="text" name="lname" placeholder="Last Name" />
                        <input type="text" name="phone" placeholder="Phone" />
                        <textarea name="address" placeholder="Address"></textarea>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />
                      </fieldset>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>

       
  
<?php
$footer_include = '<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>';
include('include/footer.php'); 

?>