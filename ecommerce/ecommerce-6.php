<?php 

$title = 'Ecommerce 6';
include('include/header.php');

?>

<div class="container-fluid">
    <div id="ecommerce_6" class="row">
        <div class="col-12 col-xl-8 offset-xl-2">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="row">
                        <div class="col-4 col-md-3 thumbnails_div">
                            <div class="thumbnail"></div>
                            <div class="thumbnail"></div>
                            <div class="thumbnail"></div>
                            <div class="thumbnail"></div>
                        </div>
                        <div class="col-8 col-md-9 product_image_container">
                            <div class="product_image"></div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-5 rhs_container">
                    <div class="rhs_top">
                        <h2 class="ecommerce_div_h2">Product Name</h2>
                        <span class="product_code">Item #123456789</span>

                        <div class="star_rating_and_rev">
                            <div class="star_rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="review_count">
                                300 reviews
                            </div>
                        </div>

                        <div class="product_price">
                            $205.00
                        </div>

                        <div class="product_features">
                            Color :
                            <strong>Red</strong>
                            <div class="colors_container">
                                <div class="color"></div>
                                <div class="color active"></div>
                            </div>

                        </div>
                        <div class="product_features">
                            Size :
                            <strong>Medium</strong>
                            <div class="colors_container">
                                <div class="color">XS</div>
                                <div class="color">S</div>
                                <div class="color active">M</div>
                                <div class="color">XL</div>
                            </div>

                        </div>
                        <div class="product_features">
                            Availability :
                            <strong>In Stock</strong>
                        </div>
                    </div>
                    <!-- RHS TOP -->
                    <div class="rhs_bottom">
                        <hr>
                        <div class="product_features">
                            Quantity :
                            <div class="quantity">
                                <div class="quantity_div">
                                    <input type="number" class="product_quantity" value="1" min="1" max="5">
                                </div>
                                <div class="product_price total_price_div">
                                    $205.00
                                </div>
                                
                            </div>

                        </div>

                        <div class="add_to_wishlist">
                            <button class="add_to_cart_button">Add To Cart</button>
                            <button class="add_to_wishlist_button"><i class="fa fa-heart-o"></i> Add to wishlist</button>
                        </div>
                    </div>
                    <!-- RHS BOTTOM -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>