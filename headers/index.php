<?php 

$title = 'Header 1';
include('include/header.php'); 

?>
    
    <div class="header1_fixed_full_width">
        <div class="container">
            <div class="row">
                <div class="col-12 header1 d-flex align-items-center">

                    <div class="">
                       <img src="../_files/logos/apple.png" class="logo">
                    </div>

                    <div class="col d-flex justify-content-end align-items-center">
                       <div class="col menu_elements hidden-sm-down d-flex justify-content-end">
                           <a>Home</a>
                           <a>Products</a>
                           <a>FAQ</a>
                           <a>Contacts</a>
                       </div>
                       <div class="mobile_menu_bars hidden-md-up">
                           <i class="material-icons">menu</i>
                       </div>
                    </div>
                
                </div>
                
                <div class="col-12 mobile_menu_elements_container hidden-md-up">
                    <div class="menu_elements menu_elements_mobile d-flex flex-column ">
                       <a>Home</a>
                       <a>Products</a>
                       <a>FAQ</a>
                       <a>Contacts</a>
                   </div>
                </div>
                
            </div>
        </div>
</div>

  
<?php include('include/footer.php'); ?>
        
