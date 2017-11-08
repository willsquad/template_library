<?php 

$title = 'Gallery 9';
$header_include = '';
include('include/header.php'); 

?>
 
<div class="gallery9 container-fluid">
   <div class="row">
       <div class="container">
           <div class="row">
                <div class="heading col-12">
                    <h2>Image<span> Gallery</span></h2>
                </div>
                <div class="body col-12">
                   <div class="body_row row grid">

                       <div class="grid-sizer col-1"></div>
                            
                                
                            <div class="img_div grid-item col-12 col-lg-4 col-xl-3 col-sm-6">
                                <a href="../_files/images/louvre.jpg" data-lightbox="gallery" title="Lourve"><img src="../_files/images/louvre.jpg"></a>
                            </div>
                            
                            
                            <div class="img_div grid-item col-12 col-lg-4 col-xl-3 col-sm-6">
                                <a href="../_files/images/eiffel_tower.jpg" data-lightbox="gallery" title="Eiffel Tower"><img src="../_files/images/eiffel_tower.jpg"></a>
                            </div>
                            
                            <div class="img_div grid-item col-12 col-lg-4 col-xl-3 col-sm-6">
                                <a href="../_files/images/arch.jpg" data-lightbox="gallery" title="Arc de Triomphe"><img src="../_files/images/arch.jpg"></a>
                            </div>
                            
                            <div class="img_div grid-item col-12 col-lg-4 col-xl-3 col-sm-6">
                                <a href="../_files/images/arch_tunnel.jpg" data-lightbox="gallery" title="Institut de France"><img src="../_files/images/arch_tunnel.jpg"></a>
                            </div>
                            
                             <div class="img_div grid-item col-12 col-lg-4 col-xl-3 col-sm-6">
                                <a href="../_files/images/building.jpg" data-lightbox="gallery" title="Building"><img src="../_files/images/building.jpg"></a>
                            </div>
                            
                            <div class="img_div grid-item col-12 col-lg-4 col-xl-3 col-sm-6">
                                <a href="../_files/images/night.jpg" data-lightbox="gallery" title="Night Sky"><img src="../_files/images/night.jpg"></a>
                            </div>
                            
                            <div class="img_div grid-item col-12 col-lg-4 col-xl-3 col-sm-6">
                                <a href="../_files/images/croissant.jpg" data-lightbox="gallery" title="Croissant"><img src="../_files/images/croissant.jpg"></a>
                            </div>
                            
                            
                            <div class="img_div grid-item col-12 col-lg-4 col-xl-3 col-sm-6">
                                <a href="../_files/images/notre_dame.jpg" data-lightbox="gallery" title="Notre Dame Cathedral"><img src="../_files/images/notre_dame.jpg"></a>
                            </div>

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