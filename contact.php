<?php include("includes/header.php");?>
    
    <!--offcanvas menu area start-->
    <div class="body_overlay">
                
    </div>
   

    <!--header area start-->
    <?php include("includes/header_nav.php");?>
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

    <!-- contact section start -->
    <section class="contact_page_section">
     
        <div class="contact_page_details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact_info">
                            <div class="contact_info_title">
                                <h3 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">Write Us, call us or <br>
                                    drop by our office at:</h3>
                            </div>
                            <div class="contact_info_inner d-flex justify-content-between">
                                <div class="contact_info_list wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                    <span>United States</span>
                                    <p>3891 Ranchview Dr. Richardson, <br> California 62639</p>
                                    <p>Phone: <a href="tel:657/4872-51475">657/4872-51475</a> </p> 
                                    <p><a href="#">lekker@hastheme.com</a></p>  
                                </div>
                                <div class="contact_info_list wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                    <span>Tokyo</span>
                                    <p>3-6 Ginza, Chuo City,</p>
                                    <p>Phone: <a href="tel:657/4872-51475">657/4872-51475</a> </p> 
                                    <p><a href="#">lekker@hastheme.com</a></p>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_form wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s"> 
                            <form id="contact-form" method="POST" action="assets/mail.php">
                                <div class="form_input_inner d-flex">
                                    <div class="form_input">
                                        <input name="name" class="border-0" placeholder="Fullname" type="text">
                                    </div>
                                    <div class="form_input">
                                        <input name="email" class="border-0"  placeholder="Email address" type="text">
                                    </div>
                                </div>
                                <div class="form_textarea">
                                    <textarea name="message" class="border-0" placeholder="Write us a message..."></textarea>
                                </div>
                                <div class="form_input_btn">
                                    <button class="btn btn-link">Send message</button>
                                </div>
                                <p class="form-messege"></p>
                            </form>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- contact section end -->


     <!-- footer section start -->
 <?php include("includes/footer.php");?>
    <!-- footer section end -->


    <!-- Js 
    ========================= -->
   <?php include("includes/javascript_section.php");?>

