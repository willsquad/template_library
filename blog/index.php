<?php 

$title = 'Blog 1';
include('include/header.php');
/** #13  **/
?>

<div class="container-fluid">
    <div id="blog_1" class="row">
        <div class="container">
            <h2 class="blog_h2 text-center">Blog</h2>
            <div class="row">
                <div class="col-12 col-lg-6 blog_lhs_container">
                    <div class="blog_lhs_div">
                        <h2 class="article_h2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, nobis!</h2>
                        <p class="article_excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet commodi, laborum molestias quaerat.</p>
                        <p class="article_more">
                            read more
                            <i class="fa fa-chevron-right"></i>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 blog_rhs_container">
                            <div class="blog_rhs_div">
                                <div class="rhs_top">
                                    <span class="article_date">14 Nov 2017</span>
                                    <h2 class="article_h2">Lorem ipsum sit amet.</h2>
                                    <p class="article_excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet commodi, laborum molestias.</p>
                                </div>
                                <div class="rhs_bottom">
                                    <p class="article_more">
                                        read more
                                        <i class="fa fa-chevron-right"></i>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 blog_rhs_container">
                            <div class="blog_rhs_div">
                                <div class="rhs_top">
                                    <span class="article_date">13 Nov 2017</span>
                                    <h2 class="article_h2">Lorem ipsum dolor sit amet.</h2>
                                    <p class="article_excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet commodi, laborum molestias
                                        quaerat aspernatur maxime.</p>
                                </div>
                                <div class="rhs_bottom">
                                    <p class="article_more">
                                        read more
                                        <i class="fa fa-chevron-right"></i>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>