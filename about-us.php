<?php include("include/header.php") ?>  

<?php    

    // 3 MAKE QUERY FOR TEAM
    $fetch_teams=$app->team(); 


    // 6 MAKE QUERY FOR TESTIMONIALS
    $fetch_testimonials=$app->testimonials();


    // 2 MAKE QUERY FOR SERVICES
    $fetch_services=$app->getservice();
?>

            <!-- /#site-header -->
                <section class="flat-title-page page-about"><div class="overlay-page"></div>
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
                     </div>>
                    <div class="container">
                        <div class="row">                          
                            <div class="col-lg-12 col-md-12">                               
                                <div class="breadcrumbs">
                                    <h1>About Us<span class="style-color">.</span></h1>
                                    <div class="breadcrumb-trail link-style-2">
                                        <a class="home" href="index.php.">Home Page</a><span>About Us</span>
                                    </div>
                                </div>                                                           
                            </div>                          
                        </div>
                    </div>
                </section>
            <!-- #site-header-wrap -->





        <!-- flat and frequent questions -->
        <section class="tf-space flat-and ">
                <div class="container">
                    <div class="row">                      
                        <div class="col-lg-6 col-md-5">
                            <div class="and-heading">
                                <div class="tf-sub-title">Please Get To Know Us</div>
                                <h2 class="tf-title">Web Design <span class="text-color-3 style-title">Company</span> in Nigeria.</h2>
                                <!-- <h2 class="tf-title">No big egos here, <span class="text-color-3 style-title">just a group of passionate</span> and determined people looking to create fantastic work.</h2> -->

                                
                                <p class="text">
                                <?=config::Company["name"] ;?> is a web design firm based in Abuja, Nigeria. We employ some of Abuja's top web designers. 
                                The success of enterprises is a cause that our web developers are passionate about. As a result, 
                                you can rely on us to provide the ideal website for your company. 
                                We stick with you even though many web designers would leave after creating a website. 
                                This is due to the fact that we remain dedicated to you even after your website design is complete.</p>

                                <div class="media">
                                    <img src="assets/images/image-box/and-1.jpg" alt="images">                                                       
                                </div> 
                            </div>
                        </div>
                        
                            <div class="col-lg-6 col-md-7">
                                <p class="text">
                                We help companies, businesses, brands to create a website, tell their story and improve their web presence online.
                                </p>
                                
                                <div class="media">
                                    <img src="assets/images/image-box/blog-detail-2@2x.jpg" alt="images">                                                       
                                </div>

                                <p class="text">
                                At <?=config::Company["name"] ;?>, we help businesses by creating distinctive websites and developing eCommerce website is what we do also. 
                                Additionally, we offer search engine optimization (SEO) services with a focus on results. 
                                In addition, we provide smart online marketing to broaden the audience for your website. 
                                Therefore, <?=config::Company["name"] ;?> is the web design firm for you, no matter what type of business you have. 
                                We employ some of Nigeria's top web designers. Additionally, 
                                they are constantly prepared to assist you in expanding your firm.</p>
                                
                                <br>
                                <br>

                                <!-- <div class="button-slider"> -->
                                    <a href="contact.php" class="button btn-1"><span>Get In Touch </span></a>
                                <!-- </div> -->
                                <br>
                                <br>
                                <br>

                                <p>Your website will occasionally be updated with the help of our website management services. 
                                Working with our experienced web developers in Abuja will undoubtedly be a pleasure. 
                                You can start by leaving us a brief message on our Contact Us page. 
                                Soon, we'll be in touch with you! To submit us the details of your project, 
                                you can alternatively  go to our Request a quotation page.</p>
                                
                            </div>                    
                    </div>
                </div>
            </section>
        <!-- end of flat FAQ -->



        <!-- flat skill -->
        <section class="tf-space flat-skill">
                <div class="container">
                    <div class="row">                       
                        <div class="col-lg-6 col-md-7">
                            <div class="skill-heading">
                                <div class="tf-sub-title">We Help you Grow your Business</div>
                                <h2 class="tf-title">Where  <span class="text-color-3 style-title"> creativity  </span> and craft co-exist.</h2>
                                <p>We are trusted website design company located in Abuja. We provide top-notch Corporate 
                                    and eCommerce web design services to indeviduals, businesses and organizations...</p>
                                
                                <div class="progress-box1">
                                    <div class="progress-skill" style="padding-left:30px;">
                                        <div class="couter">
                                            <div class="chart" data-percent="95">
                                            <span class="percent">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">                                       
                                        <h3>Product Management</h3>
                                    </div>
                                </div>

                                <div class="progress-box2">
                                    <div class="progress-skill" style="padding-left:30px;">
                                        <div class="couter">
                                            <div class="chart" data-percent="95">
                                            <span class="percent">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Customers Satisfaction</h3>
                                    </div>
                                    <br><br>
                                </div>
                                
                               
                                <div class="progress-box2">
                                    <p class="">
                                    Work with our  web team right now. Many businesses frequently turn to <?=config::Company["name"] ;?> for their website design requirements. 
                                    This is due to the fact that we are aware of what is required for websites to effectively serve users. 
                                    It's crucial to make sure that your website loads quickly. As a result, we speed up the loading of your website. 
                                    Additionally, we optimize for search engines to make sure people can quickly locate your website. 
                                    Along with you, we also develop a content strategy to make it easier for people to access information.
                                    </p>    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-5">
                            <div class="media">
                                <img src="assets/images/image-box/trusted-home3.png" alt="images">                                                                          
                            </div><br>   
                            
                            <p class="">
                            Above all, we adopt tactics that emphasize a positive user experience. Similar to this, 
                            we use careful information architecture when structuring online material. 
                            Also, we make sure that every website we create is mobile-friendly. 
                            We are always available to work with clients from every part of Nigeria and beyond. Over the years, 
                            a number of our clients have originated from Europe and America. 
                            There are several testimonials to the high caliber of our work. 
                            Therefore, you may depend on us whenever you need a website designed.
                        </p>     
                        </div>
                    </div>
                </div>
            </section>
            <!-- End flat skill -->



            <!-- OUR SERVICES CARD -->
            <section class="tf-space flat-service home2 page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="tf-sub-title">Our Services List</div>
                                <h2 class="tf-title">THE <span class="text-color-3 style-title">[SERVICES]</span> WE’RE OFFERING</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="swiper-container service-slider carousel-4">
                                <div class="swiper-wrapper">
                                    <?php foreach($fetch_services as $services) : ?>
                                        <div class="swiper-slide service-post post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="media">
                                                <img src="assets/images/image-box/<?php echo $services->png ?>" alt="images">                                
                                            </div>
                                            <div class="content">                                  
                                                <h3><a href="service-details.php?id=<?php echo $services->_Sid ?>"><?php echo $services->title ?></a></h3>                                        
                                            </div>
                                        </div>
                                    <?php endforeach ; ?>                                    
                                </div>
                                
                                <div class="swiper-pagination"></div>                                     
                            </div>
                        </div>     
                    </div>
                </div>
            </section>
            <!-- SERVICES END HERE -->



            <!-- QUALITATIVE SERVICES  -->
                <section class="tf-space flat-servece page"><div class="overlay-page"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- <h2 class="tf-title text-center">We want to provide you a Qualitative Service</h2> -->
                                <div class="" style="color:white; font-size:6rem; text-align:center; font-weight:700;">
                                     We want to provide you a Qualitative Service.
                                </div>
                            </div>   
                        </div>
                    </div>
                </section>
            <!--ENDS QUALITATIVE SERVICES HERE -->




            <br>
            <br>
            <!-- OUR TEAM -->
            <section class="flat-team flat-blog-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="team-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="500ms">
                                <div class="tf-sub-title">Working Members</div>
                                <h2 class="tf-title">Expart <span class="text-color-3 style-title">[Team]</span> Members</h2>
                            </div>
                        </div>

                        <?php foreach($fetch_teams as $teams) : ?>
                            <div class="col-lg-3 col-md-6">
                            <div class="team-box grid-post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="media">
                                    <img src="assets/images/image-box/<?php echo $teams->_images; ?>" alt="images">                                
                                </div>
                                <div class="content"> 
                                    <div class="sub-title-content"><?php echo $teams->_position; ?></div>                                
                                    <h3 ><a href="team.php?team=<?php echo $teams->_id; ?>"><?php echo $teams->_name; ?></a></h3>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>     
                    </div>
                </div>
            </section>            
            <!-- END OF OUR TEAM -->






            <!-- testimonials starts flat work -->
            <section class="tf-space flat-testimonial home2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="testi-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="500ms">
                                <div class="tf-sub-title">Our Testimonials</div>
                                <h2 class="tf-title">What <span class="text-color-3 style-title">[Client]</span> Says?</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="swiper-container testimonial-slider carousel-6">
                                <div class="swiper-wrapper">
                                    <?php foreach($fetch_testimonials as $testimonial) :?>                                      
                                        <div class="swiper-slide testimonial-post "> 
                                            <div class="content">                                                                           
                                                <div class="reviews-box">
                                                    <div class="reviews">
                                                        <h3><?php echo $testimonial-> _name ?></h3>
                                                        <span class="star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>                       
                                                        </span>
                                                        <span class="review">5 Reviews</span>
                                                    </div>
                                                    <div class="media">
                                                        <img src="assets/images/image-box/<?php echo $testimonial-> _images ?>" alt="images">                                
                                                    </div>                                               
                                                </div>                                               
                                                <div class="tf-texts">                                              
                                                    <span class="text"><?php echo $testimonial-> _content ?></span>
                                                    <span class="media-1">
                                                        <img src="assets/images/icon/testi-2.png" alt="images">                                
                                                    </span> 
                                                    <span class="media-2">
                                                        <img src="assets/images/icon/testi-1.png" alt="images">                                
                                                    </span>
                                                </div>                                        
                                            </div>
                                        </div>                                                                            
                                    <?php endforeach ; ?>    
                                </div>
                                    <br><br>
                                    <!-- <div class="blog-button center"><a href="blog-grid.php" class="button btn-style2 btn-1 "><span>View All Blogs </span></a></div> -->
                                    <div class="button-case center"><a href="testimonials.php" class="button btn-style2 btn-1"><span>View All </span></a></div>      
                                <div class="swiper-pagination"></div>                                        
                            </div>                          
                        </div>     
                    </div>
                </div>
            </section>
            <!-- testimonials end -->
            







                    <br><br>

            
<?php include("include/footer.php") ?>   
