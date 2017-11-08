<?php 

$title = 'Gallery 10';
$header_include = '';
include('include/header.php'); 

?>
 
<div class="gallery10 container-fluid">
   <div class="row">
       <div class="container">
           <div class="row">
                <div class="heading col-12 text-center">
                    <h2>Image<span> Gallery</span></h2>
                </div>
                
                <div class="col-12 button-group filters-button-group">
                  <button class="button is-checked" data-filter="*">All</button>
                  <button class="button" data-filter=".monuments, .buildings">Monuments</button>
                  <button class="button" data-filter=".leisure">Leisure</button>
                  <button class="button" data-filter=".buildings">Buildings</button>
                </div>
                
                <div class="body col-12">
                   <div class="body_row row grid2">

                       <div class="grid-sizer col-1"></div>
                       
                        <a href="../_files/images/eiffel_tower.jpg" class="monuments img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery" data-category="monuments"><img src="../_files/images/eiffel_tower.jpg"></a>
                        
                       <a href="../_files/images/night.jpg" class="leisure img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery" data-category="leisure"><img src="../_files/images/night.jpg"></a>
                       
                       <a href="../_files/images/arch.jpg" class="buildings img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery" data-category="buildings"><img src="../_files/images/arch.jpg"></a>
                       
                        <a href="../_files/images/notre_dame.jpg" class="monuments img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery" data-category="monuments"><img src="../_files/images/notre_dame.jpg"></a>
                        
                       <a href="../_files/images/louvre.jpg" class="monuments img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery" data-category="monuments"><img src="../_files/images/louvre.jpg"></a>
                       
                        <a href="../_files/images/building.jpg" class="buildings img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery" data-category="buildings"><img src="../_files/images/building.jpg"></a>
                        
                        <a href="../_files/images/croissant.jpg" class="leisure img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery" data-category="leisure"><img src="../_files/images/croissant.jpg"></a>
                        
                        <a href="../_files/images/arch_tunnel.jpg" class="buildings img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery" data-category="buildings"><img src="../_files/images/arch_tunnel.jpg"></a>
                        
                       <a href="../_files/images/street.jpg" class="leisure img_div grid-item col-12 col-lg-4 col-sm-4 no-gutters" data-lightbox="gallery" data-category="leisure"><img src="../_files/images/street.jpg"></a>

                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

       
  
<?php

$footer_include = '<script src="../_files/js/imagesloaded.min.js"></script> <script src="../_files/js/isotope.pkgd.min.js"></script>';
include('include/footer.php'); 

?>