<?php include("include/header.php") ?>   

<?php 

    //6 make functions for testimonials
    $fetch_testimonials=$app->testimonials();


?>

                <section class="flat-title-page"><div class="overlay-page"></div>
                    <div class="elip-header">
                        <img src="assets/images/mark-page/ab-header.png" alt="img">
                    </div>
                    <div class="elip-header1">
                        <img src="assets/images/mark-page/ellipse1.png" alt="img">
                    </div>
                    <div class="elip-header2">
                        <img src="assets/images/mark-page/Ellipse2.png" alt="img">
                     </div>
                     <div class="elip-header3">
                        <img src="assets/images/mark-page/mark-page.png" alt="img">
                     </div>
                    <div class="container">
                        <div class="row">                          
                            <div class="col-lg-12 col-md-12">                              
                                <div class="breadcrumbs">
                                    <h1>Testimonials Page<span class="style-color">.</span></h1>
                                    <div class="breadcrumb-trail link-style-2">
                                        <a class="home" href="index.php">Home Page</a><span>Testimonials</span>
                                    </div>
                                </div>                                                           
                            </div>                          
                        </div>
                    </div>
                </section>
            </div>
            <!-- #site-header-wrap -->

            <section class="flat-testimonial home2 home3 page">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12">
                            <div class="testi-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="500ms">
                                <div class="tf-sub-title">Our Testimonials</div>
                                <h2 class="tf-title">What <span class="text-color-3 style-title">[Client]</span> Says?</h2>
                            </div>
                        </div>
                                        
                        <div class="col-lg-12">
                            <div class="swiper-container testimonial-slider style carousel-8">
                                <div class="swiper-wrapper">
                                    <?php foreach($fetch_testimonials as $testimonial) :?>
                                        <div class="swiper-slide testimonial-post">  
                                            <div class="content">                                                                             
                                                <div class="reviews-box">
                                                    <div class="media">
                                                        <img src="assets/images/image-box/<?php echo $testimonial->_images; ?>" alt="images">                                
                                                    </div> 
                                                    <div class="reviews">
                                                        <h3><?php echo $testimonial->_name; ?></h3>
                                                        <span class="star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>                       
                                                        </span>
                                                        <span class="review">5 Reviews</span>
                                                    </div>                                                                                             
                                                </div>                                              
                                                <div class="tf-texts">                                              
                                                    <span class="text"><?php echo $testimonial->_content; ?></span>
                                                    <span class="media-1">
                                                        <img src="assets/images/icon/testi-2.png" alt="images">                                
                                                    </span> 
                                                    <span class="media-2">
                                                        <img src="assets/images/icon/testi-1.png" alt="images">                                
                                                    </span>
                                                </div>                                        
                                            </div>
                                        </div>                                                                               
                                    <?php endforeach;?>                                                                                                         
                                </div>
                                <div class="swiper-pagination"></div>                                        

                            </div>
                         
                        </div>                                                
                    </div>
                </div>
            </section>

            <?php include("include/footer.php") ?>   
