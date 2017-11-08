<?php 

$title = 'Gallery 6';
$header_include = '';
include('include/header.php'); 

?>
 
<div class="gallery6 container-fluid">
   <div class="row">
       <div class="container">
           <div class="row">
                <div class="heading col-12 no-gutters">
                    <h2>Image<span> Gallery</span></h2>
                </div>
                <div class="body col-12">
                   <div class="body_row row grid">

                       <div class="grid-sizer col-1"></div>
                       
                        <a href="../_files/images/ancient.jpg" class="img_div grid-item col-12 col-lg-8 col-sm-8 no-gutters" data-lightbox="gallery"><img src="../_files/images/ancient.jpg"></a>
                       <a href="../_files/images/coast.jpg" class="img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery"><img src="../_files/images/coast.jpg"></a>
                       <a href="../_files/images/lotr.jpg" class="img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery"><img src="../_files/images/lotr.jpg"></a>
                        <a href="../_files/images/metro.jpg" class="img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery"><img src="../_files/images/metro.jpg"></a>
                       <a href="../_files/images/nyc.jpg" class="img_div grid-item col-12 col-lg-8 col-sm-8 no-gutters" data-lightbox="gallery"><img src="../_files/images/nyc.jpg"></a>
                       <a href="../_files/images/taxi.jpg" class="img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery"><img src="../_files/images/taxi.jpg"></a>
                       <a href="../_files/images/sea.jpg" class="img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery"><img src="../_files/images/sea.jpg"></a>
                        <a href="../_files/images/scotland.jpg" class="img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery"><img src="../_files/images/scotland.jpg"></a>
                       <a href="../_files/images/mountain.jpg" class="img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery"><img src="../_files/images/mountain.jpg"></a>
                      
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

       
  
<?php

$footer_include = '<script src="../_files/js/imagesloaded.min.js"></script> <script src="../_files/js/masonry.pkgd.min.js"></script> <script src="../_files/js/packery.pkgd.min.js"></script>';
include('include/footer.php'); 

?>