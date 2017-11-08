<?php 

$title = 'Jumbotron 8';
$header_include = '<link rel="stylesheet" href="../_files/css/skippr.css">';
include('include/header.php'); 

?>
 
<div class="container-fluid">
   <div class="row">
        <div id="jumbotron" class="jumbotron8">
            <div style="background-image: url(../_files/images/scotland.jpg)"></div>
            <div style="background-image: url(../_files/images/sea.jpg)"></div>
            <div style="background-image: url(../_files/images/taxi.jpg)"></div>

        </div>
        <div class="overlay8 d-flex align-items-center">
            <div class="col-10 offset-1">
               <div class="row">
                   <div class="col-12 col-md-6">
                        <h2>Lorem.</h2>
                        <div class="jumbotron_border"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
                        <a class="more_button">More</a>
                        <a class="more_button">Download</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

       
  
<?php

$footer_include = '<script src="../_files/js/skippr.min.js"></script>';
include('include/footer.php'); 

?>