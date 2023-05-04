<?php include("include/header.php") ?>   

<?php 


    // 2 MAKE QUERY FOR SERVICES
    $fetch_services=$app->getservice();


    // 3 MAKE QUERY FOR TEAM
    $fetch_teams=$app->team();


    // 6 MAKE QUERY FOR TESTIMONIALS
    $fetch_testimonials=$app->testimonials();


    
    //9 FUNCTION for DETAILS_LIST
    $Sdetails_list=$app->Sdetails_list();
    // print_r($Sdetails);

?>
                <!-- <header>
                        <div class="icon-header">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                        <div class="phone-header phone-style">
                            <div class="icon-headphone"><img src="assets/images/icon/icon-headphone.png" alt="img"></div>
                           <h3> +55 (121) 234 444 </h3>
                        </div>
                        <div class="tf-button"><a href="contact.php" class="button btn-1"><span>Get A Quote </span></a></div>   
                </header> -->

            <!-- /#site-header -->
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
                                    <h1>Service Page<span class="style-color">.</span></h1>
                                    <div class="breadcrumb-trail link-style-2">
                                        <a class="home" href="index.php">Home Page</a><span>Service Page</span>
                                    </div>
                                </div>                                                            
                            </div>                          
                        </div>
                    </div>
                </section>
            <!-- #site-header-wrap -->


            <!-- services card with side search procedure -->
                <div class="tf-space flat-work flat-case flat-blog-details page">
                    <div class="container">
                        <div class="row"> 
                            <div class="col-lg-8 col-md-12">    
                            <?php foreach($fetch_services as $service) :?>

                                <div class="work-wrap">  
                                        <div class="work-post item1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="500ms">
                                            <div class="media">
                                                <img src="assets/images/services_details/<?php echo $service->images ?>" alt="services images">                                
                                            </div>
                                            <div class="content">
                                                <div class="tags"><span ><?php echo $service->subtitle ?></span></div>                                  
                                                <h3><a href="service-details.php?id=<?php echo $service->_Sid ?>"><?php echo $service->title ?></a></h3>
                                            </div>
                                        </div>
                                </div>                                 
                                <?php endforeach ;?>                                                        
                            </div>
                                
                                <div class="col-lg-4 col-md-12">
                                    <aside class="side-bar">
                                        <div class="inner-side-bar">                                           
                                            <div class="widget search">
                                                <div class="widget-title">
                                                    <h3>Search Here</h3>                                       
                                                </div>
                                                <form action="#" method="get" role="search" class="search-form">
                                                    <input type="search" class="search-field"
                                                        placeholder="Enter Your Keyword..." value="" name="s"
                                                        title="Search for" required="">
                                                    <button class="search-icon search-submit" type="submit" title="Search"></button>
                                                </form>
                                            </div>

                                    <!--Widget-categories-->
                                    <div class="widget widget-categories"> 
                                        <div class="widget-title item">
                                            <h3>Services List</h3>  
                                        </div>                                                                                                                        
                                        <ul>
                                            <?php foreach($Sdetails_list as $Sdetail) :?>
                                                <li >
                                                    <a class="<?php //if($SLid==){}?>" href="service-details-list.php?SLid=<?php echo $Sdetail->SLid; ?>"><?php echo $Sdetail->SLname; ?></a> 
                                                </li>
                                            
                                                <li class="tf-style">
                                                    <!-- <a href="services.php">XD Design</a> -->
                                                </li>
                                            <?php endforeach ;?>                                                        
                                        </ul>
                                    </div>
                                    <!--End Widget-categories-->



                                            <div class="widget-title item">
                                                <h3>Recent Posts</h3>
                                            </div>                                                                
                                            <ul class="widget recent-news">
                                                <li>
                                                    <div class="thumb ">
                                                        <img src="assets/images/image-box/recent-post-01.png" alt="images">
                                                    </div>
                                                    <div class="texts grid-post">
                                                        <div class="title-item text-color-3">                          
                                                            Web Design
                                                        </div>
                                                        <h5><a href="case-study.php">Digital Marketing Advertise Onboarding</a></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="assets/images/image-box/recent-post-06.png" alt="images">
                                                    </div>
                                                    <div class="texts grid-post">
                                                        <div class="title-item text-color-3">                          
                                                            Web Design
                                                        </div>
                                                        <h5><a href="case-study.php">Digital Marketing Advertise Onboarding</a></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="assets/images/image-box/recent-post-07.png" alt="images">
                                                    </div>
                                                    <div class="texts grid-post">
                                                        <div class="title-item text-color-3">                          
                                                            Web Design
                                                        </div>
                                                        <h5><a href="case-study.php">Digital Marketing Advertise Onboarding</a></h5>
                                                    </div>
                                                </li>
                                                <li class="flat">
                                                    <div class="thumb">
                                                        <img src="assets/images/image-box/recent-post-08.png" alt="images">
                                                    </div>
                                                    <div class="texts grid-post">
                                                        <div class="title-item text-color-3">                          
                                                            Web Design
                                                        </div>
                                                        <h5><a href="case-study.php">Digital Marketing Advertise Onboarding</a></h5>                                              
                                                    </div>
                                                </li>
                                            </ul>                                     
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <!-- <div class="button-case center"><a href="service-details.php" class="button btn-style2 btn-1"><span>View All </span></a></div>       -->
                        </div>
                    </div>
                </div>
            <!-- services card with side search procedure -->


            <!-- work done for client -->
            <section class=" flat-counter home2 tf-counter page2">
                <div class="container">
                    <div class="row count-row">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-box">
                                <div class="content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <!-- <div class="number number-style" data-speed="2000" data-to="12" data-inviewport="yes">12</div> -->
                                    <div class="number" data-speed="2000" data-to="97" data-inviewport="yes">0</div>
                                    <h3 class="heading">Happy Clients</h3>
                                    <div class="mark "></div>
                                </div>                                
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="counter-box">
                                <div class="content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <!-- <div class="number number-style number-one" data-speed="2000" data-to="1" data-inviewport="yes">15</div> -->
                                    <div class="number" data-speed="2000" data-to="100" data-inviewport="yes">100</div>
                                    <h3 class="heading">Our Total Project</h3>
                                    <div class="mark"></div>
                                </div>                                
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="counter-box">
                                <div class="content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="number" data-speed="2000" data-to="3" data-inviewport="yes">3</div>
                                    <h3 class="heading">Our Winning Award</h3>
                                    <div class="mark mark-style"></div>
                                </div>                                
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-box">
                                <div class="content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="number" data-speed="2000" data-to="10" data-inviewport="yes">10</div>
                                    <h3 class="heading">Our Team Member</h3>
                                    <div class="mark mark-style"></div>
                                </div>                                
                            </div>
                        </div>                   

                    </div>
                </div>
            </section>
            <!-- end of client works -->




            <!-- QUALITATIVE SERVICES  -->
                <section class="tf-space flat-servece page"><div class="overlay-page">

                    <!-- <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title">We want to provide you a Qualitative Service.</div>
                            </div>   
                        </div>
                    </div> -->
                </section>
            <!--ENDS QUALITATIVE SERVICES HERE -->



            

            <!-- Trusted  25 years Experience-->
            <section class="tf-space flat-trusted home3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="media-box">
                                <div class="media">
                                    <img src="assets/images/image-box/trusted-home3.png" alt="images">                                                                   
                                </div>
                                <div class="years-title text-color-3">
                                    <h2>25+Years Experience </h2>   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="trusted-heading">
                                <div class="tf-sub-title">Please Get To Know Us</div>
                                <h2 class="tf-title">We Are <span class="text-color-3 style-title">[Trusted]</span> By First & Best In The World.</h2>
                            </div>
                            <h3 class="text-color-3">Pnteger vitae pretium nunc. Aliquam rutrum lectus vel est pulvinar, in scelerisque purus faucibus fusce varius lacinia.</h3>
                            <p>Phasellus dignissim arcu sit amet augue mattis, eget rutrum ex finibus. Morbi blandit luctus nisi, id ornare sem blandit sed. 
                                In sed luctus dolor. Integer vitae pretium nunc. Aliquam rutrum lectus vel est pulvinar in scelerisque purus.</p> 

                            <div class="img-user">
                                <img src="assets/images/image-box/trusted-user.jpg" alt="images">   
                            </div>
                            <div class="img-title">
                                <img src="assets/images/image-box/trusted-title.png" alt="images">   
                            </div>
                        </div>
                    </div>
                </div>
            </section>





            <!-- OUR TEAM -->
            <section class="flat-team flat-blog-grid">
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="team-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="500ms">
                                <div class="tf-sub-title">Working Members</div>
                                <h2 class="tf-title">Expart <span class="text-color-3 style-title">[Team]</span> Member</h2>
                            </div>
                        </div>

                        <?php // foreach($fetch_teams as $teams) : ?>
                            <div class="col-lg-3 col-md-6">
                            <div class="team-box grid-post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="media">
                                    <img src="assets/images/image-box/<?php // echo $teams->_images; ?>" alt="images">                                
                                </div>
                                <div class="content"> 
                                    <div class="sub-title-content"><?php //echo $teams->_position; ?></div>                                
                                    <h3 ><a href="team.php?team=<?php //echo $teams->_id; ?>"><?php //echo $teams->_name; ?></a></h3>
                                </div>
                            </div>
                        </div>
                        <?php // endforeach; ?>     
                    </div>
                </div> -->
            </section>            
            <!-- END OF OUR TEAM -->

            
            
            <!-- flat and -->
             <section class="flat-and page2">
                <div class="container">
                    <div class="row">                      
                        <div class="col-lg-6 col-md-5">
                            <div class="and-heading">
                                <div class="tf-sub-title">Growth Our Business</div>
                                <h2 class="tf-title">frequency  <span class="text-color-3 style-title">[And]</span> questions.</h2>
                                <p>Phasellus dignissim arcu sit amet augue mattis, eget rutrum ex finibus. Morbi blandit luctus nisi, id ornare sem blandit sed. 
                                    In sed luctus dolor. Integer vitae pretium nunc Aliquam rutrum.</p>
                                <div class="media">
                                    <img src="assets/images/image-box/and-1.jpg" alt="images">                                                       
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <p class="texts">Phasellus dignissim arcu sit amet augue mattis, eget rutrum ex finibus.
                                Morbi blandit luctus nisi id ornare sem blandit sed.</p>
                            <div class="flat-accordion fl-faq-content">                              
                                <div class="flat-toggle">
                                    <h5 class="toggle-title active"> What is the standard size of business cards?<span class="btn-toggle"></span></h5>
                                    <div class="toggle-content section-desc">
                                        <p>Nullam felis sapien, pellentesque sit amet finibus ac, semper at lacus. Vestibulum nisi eros, 
                                            molestie auctor suscipit consectetur, tempor vitae lacus. Duis purus dui.</p>
                                    </div>
                                </div>
                                <div class="flat-toggle">
                                    <h5 class="toggle-title">What should be listed on a business card?<span class="btn-toggle"></span></h5>
                                    <div class="toggle-content section-desc">
                                        <p>Nullam felis sapien, pellentesque sit amet finibus ac, semper at lacus. Vestibulum nisi eros, 
                                            molestie auctor suscipit consectetur, tempor vitae lacus. Duis purus dui.</p>
                                    </div>
                                </div>
                                <div class="flat-toggle">
                                    <h5 class="toggle-title">How do I design my own business cards?<span class="btn-toggle"></span>
                                    </h5>
                                    <div class="toggle-content section-desc">
                                        <p>Nullam felis sapien, pellentesque sit amet finibus ac, semper at lacus. Vestibulum nisi eros, 
                                            molestie auctor suscipit consectetur, tempor vitae lacus. Duis purus dui.</p>
                                    </div>
                                </div>                              
                            </div>                            
                        </div>
                    </div>
                </div>
            </section>





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
                                <div class="swiper-pagination"></div>                                        
                            </div>                          
                        </div>     
                    </div>
                </div>
            </section>
            <!-- testimonials end -->
            

            
            <?php include("include/footer.php") ?>   
