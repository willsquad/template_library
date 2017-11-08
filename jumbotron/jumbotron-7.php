<?php 

$title = 'Jumbotron 7';
$header_include = '<link rel="stylesheet" href="../_files/css/skippr.css">';
include('include/header.php'); 

?>
 
<div class="container-fluid">
   <div class="row">
        <div id="jumbotron" class="jumbotron6">
            <div style="background-image: url(../_files/images/nyc.jpg)"></div>
            <div style="background-image: url(../_files/images/ancient.jpg)"></div>
            <div style="background-image: url(../_files/images/mountain.jpg)"></div>
        </div>
        <div class="overlay7 d-flex align-items-center">
            <div class="col-10 offset-1">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <h2>Lorem Ipsum</h2>
                <a class="more_button">Know More</a>
            </div>
        </div> 
    </div>
</div>

       
  
<?php

$footer_include = '<script src="../_files/js/skippr.min.js"></script>';
include('include/footer.php'); 

?>