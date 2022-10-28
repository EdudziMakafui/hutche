<?php include("includes/header.php");?>
    
    <!--offcanvas menu area start-->
    <div class="body_overlay">
                
    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.php">Home 1</a></li>
                                        <li><a href="index-2.php">Home 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-left-sidebar.php">shop left sidebar</a></li>
                                        <li><a href="shop-fullwidth.php">shop fullwidth</a></li>
                                        <li><a href="shop-collection.php">shop collection</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="single-product.php">Product</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.php">blog</a></li>
                                        <li><a href="blog-details.php">blog details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <!--header area start-->
    <header class="header_section header_other">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_header d-flex justify-content-between align-items-center">
                        <div class="header_logo">
                            <a class="sticky_none" href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block"> 
                            <nav>  
                                <ul class="d-flex">
                                    <li><a href="index.php">Home</a> 
                                        <ul class="sub_menu">
                                            <li><a href="index.php">Home 1</a></li>
                                            <li><a href="index-2.php">Home 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub_menu">
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="active" href="shop-left-sidebar.php">Shop </a>
                                        <ul class="sub_menu">
                                            <li><a href="shop-left-sidebar.php">shop left sidebar</a></li>
                                            <li><a href="shop-fullwidth.php">shop fullwidth</a></li>
                                            <li><a href="shop-collection.php">shop collection</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single-product.php">Product</a></li>
                                    <li><a href="blog.php">blog</a>
                                        <ul class="sub_menu">
                                            <li><a href="blog.php">Blog Pages</a></li>
                                            <li><a href="blog-details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>  
                            </nav> 
                        </div>
                        <!--main menu end-->
                        <div class="header__ridebar d-flex align-items-center">
                            <div class="header_account">
                                <ul class="d-flex">
                                    <li class="header_search_btn"><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                                    <li class="shopping_cart"><a href="#"><img src="assets/img/icon/cart.png" alt=""></a></li>
                                    <li class="account_link_menu"><a href="#"><img src="assets/img/icon/person.png" alt=""></a>
                                        <ul class="dropdown_account_link">
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Contact Us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="canvas_open">
                                <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!--mini cart-->
    <div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
               <div class="cart_img">
                   <a href="#"><img src="assets/img/product/small-product1.png" alt=""></a>
               </div>
                <div class="cart_info">
                    <a href="#">Primis In Faucibus</a>
                    <p>1 x <span> $65.00 </span></p>    
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-close icons"></i></a>
                </div>
            </div>
            <div class="cart_item">
               <div class="cart_img">
                <a href="#"><img src="assets/img/product/small-product2.png" alt=""></a>
               </div>
                <div class="cart_info">
                    <a href="#">Letraset Sheets</a>
                    <p>1 x <span> $60.00 </span></p>    
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-close icons"></i></a>
                </div>
            </div>
        </div>
        <div class="mini_cart_table">
            <div class="cart_table_border">
                <div class="cart_total">
                    <span>Sub total:</span>
                    <span class="price">$125.00</span>
                </div>
                <div class="cart_total mt-10">
                    <span>total:</span>
                    <span class="price">$125.00</span>
                </div>
            </div>
        </div>
        <div class="mini_cart_footer">
           <div class="cart_button">
                <a href="#"><i class="fa fa-shopping-cart"></i> View cart</a>
            </div>
            <div class="cart_button">
                <a href="#"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>
    <!--mini cart end-->

    <!-- page search box -->
    <div class="page_search_box">
        <div class="search_close">
            <i class="ion-close-round"></i>
        </div>
        <form class="border-bottom" action="#">
            <input class="border-0" placeholder="Search products..." type="text">
            <button type="submit"><i class="icofont-search"></i></button>
        </form>
    </div>
    <!--header area end-->

    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <h2>Shop</h2>
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li>></li>
                            <li><a href="shop-left-sidebar.php">shop Left Sidebar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>

    <!-- shop page section satrt -->
    <div class="shop_page_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop_page_inner d-flex ">
                        <div class="shop_sidebar_widget">
                            <div class="shop_widget_list categories">
                                <div class="shop_widget_title categories_title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="widget_categories">
                                    <ul>
                                        <li><a href="#">Lighting(12)</a></li>
                                        <li><a href="#">Desk(2)</a></li>
                                        <li><a href="#">Bedroom(26)</a></li>
                                        <li><a href="#">Chair(11)</a></li>
                                        <li><a href="#">Accessories(13)</a></li>
                                        <li><a href="#">Furniture(23)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop_widget_list">
                                <div class="shop_widget_title">
                                    <h3>by prices</h3>
                                </div>
                                <div class="widget_proce_filter">
                                    <form action="#"> 
                                        <input type="text" id="amount">
                                        <div id="slider-range"></div>
                                        <button type="submit">Filter Price</button>
                                    </form> 
                                </div>
                            </div>
                            <div class="shop_widget_list">
                                <div class="shop_widget_title">
                                    <h3>by colors</h3>
                                </div>
                                <div class="widget_color">
                                    <ul>
                                        <li><a class="color1" href="javascript:void(0)"></a></li>
                                        <li><a class="color2" href="javascript:void(0)"></a></li>
                                        <li><a class="color3" href="javascript:void(0)"></a></li>
                                        <li><a class="color4" href="javascript:void(0)"></a></li>
                                        <li><a class="color5" href="javascript:void(0)"></a></li>
                                        <li><a class="color6" href="javascript:void(0)"></a></li>
                                        <li><a class="color7" href="javascript:void(0)"></a></li>
                                    </ul>
                                </div>
                                <div class="widget_color_btn">
                                    <a href="#">FILTER COLOR</a>
                                </div>
                            </div>
                            <div class="shop_widget_list">
                                <div class="shop_widget_title">
                                    <h3>Tags cloud</h3>
                                </div>
                                <div class="widget_tags">
                                    <ul>
                                        <li><a href="#">FURNITURE</a></li>
                                        <li><a href="#">DECOR</a></li>
                                        <li><a href="#">INTERIOR</a></li>
                                        <li><a href="#">Bed room</a></li>
                                        <li><a href="#">Plants</a></li>
                                        <li><a href="#">bath room</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop_widget_thumb">
                                <img src="assets/img/others/shop-sidebar.png" alt="">
                            </div>
                        </div>
                        <div class="shop_right_sidaber">
                            <div class="shop_top_bar d-flex justify-content-between">
                                <div class="shop_product_count">
                                    <span>Show 9 / 12  / 18 / 24</span>
                                </div>
                                <div class="shop_top_right d-flex">
                                    <div class="product_sorting">
                                        <select>
                                            <option selected value="1">Default Sorting</option>
                                            <option value="1">Default Sorting2</option>
                                            <option value="1">Default Sorting3</option>
                                            <option value="1">Default Sorting3</option>
                                        </select>
                                    </div>
                                    <div class="shop_filter">
                                        <select>
                                            <option selected value="1">Filter</option>
                                            <option value="1">Filter2</option>
                                            <option value="1">Filter3</option>
                                            <option value="1">Filter4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="shop_gallery">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product1.png" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php">Tufted accent chair with wood legs, Beige</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product2.png" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_hot">hot</span>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php">Kendal Dark Teal Fabric Accent Chair</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product3.png" alt=""></a>

                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php">Tufted accent chair with wood legs, Beige</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product4.png" alt=""></a>
    
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php">Kendal Dark Teal Fabric Accent Chair</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product5.png" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_hot">hot</span>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php"> Contemporary Round Living Room Coffee</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product6.png" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php">Tufted accent chair with wood legs, Beige</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product7.png" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php"> Contemporary Round Living Room Coffee</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product8.png" alt=""></a>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php">Kendal Dark Teal Fabric Accent Chair</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product9.png" alt=""></a>
            
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php">Tufted accent chair with wood legs, Beige</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product10.png" alt=""></a>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php">Kendal Dark Teal Fabric Accent Chair</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product11.png" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php">Kendal Dark Teal Fabric Accent Chair</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="single-product.php"><img src="assets/img/product/product12.png" alt=""></a>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="single-product.php">Tufted accent chair with wood legs, Beige</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$399.99</span>
                                                        <span class="current_price">$129.99</span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="loding_bar">
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page section end -->

  <!-- footer section start -->
 <?php include("includes/footer.php");?>
    <!-- footer section end -->


    <!-- Js 
    ========================= -->
   <?php include("includes/javascript_section.php");?>

