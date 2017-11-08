<?php 

$title = 'Jumbotron 6';
$header_include = '<link rel="stylesheet" href="../_files/css/skippr.css">';
include('include/header.php'); 

?>
 
<div class="container-fluid">
   <div class="row">
        <div id="jumbotron" class="jumbotron6">
            <div style="background-image: url(../_files/images/metro.jpg)"></div>
            <div style="background-image: url(../_files/images/coast.jpg)"></div>
            <div style="background-image: url(../_files/images/lotr.jpg)"></div>
        </div>
        <div class="overlay6 d-flex align-items-center">
            <div class="col-10 offset-1">
                <h2>Lorem Ipsum</h2>
                <div class="jumbotron_border"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga ratione omnis, illo corporis vitae facilis placeat, veritatis architecto nulla quos hic.</p>
                <a class="more_button">Know More</a>
            </div>
        </div> 
    </div>
</div>

       
  
<?php

$footer_include = '<script src="../_files/js/skippr.min.js"></script>';
include('include/footer.php'); 

?>