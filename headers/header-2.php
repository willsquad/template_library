<?php 

$title = 'Header 2';
include('include/header.php'); 

?>
    
    <div class="header2_fixed_full_width">
        <div class="container">
            <div class="row">
               
                <div class="col-12 header2 d-flex align-items-center">

                    <div>
                       <img src="../_files/logos/adidas.png" class="logo">
                    </div>

                    <div class="col d-flex justify-content-end align-items-center">
                       <!-- Search Bar -->
                       <div class="col hidden-sm-down text-right">
                            <i class="material-icons header_search_icon">search</i>
                            <input type="search" class="header_2_search">
                       </div>
                       <div class="mobile_menu_bars hidden-md-up">
                           <i class="material-icons">menu</i>
                       </div>
                    </div>
                
                </div>

            </div>
        </div>
    </div>
    
    <div class="header2_inner_fixed_full_width d-flex align-items-center hidden-sm-down">
        <div class="container">
            <div class="row">
               <div class="col-12">
                    <div class="menu_elements">
                       <a>Home</a>
                       <a>Products</a>
                       <a>FAQ</a>
                       <a>Contacts</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
            <div class="row">
                <div class="col-12 header_2_bg mobile_menu_elements_container hidden-md-up">
                    <div class="menu_elements menu_elements_mobile d-flex flex-column ">
                       <a>Home</a>
                       <a>Products</a>
                       <a>FAQ</a>
                       <a>Contacts</a>
                   </div>
                </div>
        </div>
    </div>

  
<?php include('include/footer.php'); ?>