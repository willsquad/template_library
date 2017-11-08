<?php 

$title = 'Header 7';
include('include/header.php'); 

?>
    
    <div class="header7_fixed_full_width">
        <div class="container">
            <div class="row">
               
                <div class="col-12 header7 d-flex align-items-center justify-content-between">

                    <div>
                       <img src="../_files/logos/fandango.png" class="logo">
                    </div>

                    <div class="col d-flex justify-content-center align-items-center hidden-md-down">
                        <input type="search" class="header_7_search" placeholder="search...">
                        <i class="material-icons header7_search_button">search</i>
                    </div>
                    
                    <div class="header7_rhs_login hidden-sm-down">
                        <button class="header7_login">Login</button>
                    </div>
                     
                    <div class="mobile_menu_bars hidden-md-up">
                       <i class="material-icons">menu</i>
                    </div>
                
                </div>

            </div>
        </div>
    </div>
    
    <div class="header7_inner_fixed_full_width d-flex align-items-center hidden-sm-down">
        <div class="container">
            <div class="row">
               <div class="col-12">
                    <div class="menu_elements">
                       <a class="active">Home</a>
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
                <div class="col-12 header_7_bg mobile_menu_elements_container hidden-md-up">
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