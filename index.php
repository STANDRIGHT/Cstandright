<?php include("include/header.php") ?> 

<?php
    // 1 MAKE QUERY FOR HOME TOP
    // print_r($app->getSlide()); die();
    $sliders=$app->getSlide();



    // 2 MAKE QUERY FOR SERVICES
    $fetch_services=$app->getservice();

    // USING ANOTHER METHOD TO DO THIS  WITH WHILE LOOP
    // $fetch_services=[];
    // while($row=$services->fetch(PDO:: FETCH_OBJ)){
    //     $fetch_services[]=$row; 
    // }

    // 3 MAKE QUERY FOR TEAM
    $fetch_teams=$app->team();

    //4 MAKE QUERY FROM RECENT WORKS
    $fetch_recent=$app->recent_work();

    //5 MAKE QUERY FOR BLOGS
    $all_blogs=$app->blogs();
    // print_r($all_blogs);


    // 6 MAKE QUERY FOR TESTIMONIALS
    $fetch_testimonials=$app->testimonials();


    /* HOW TO FETCH A SINGLE COLUMN FROM A TABLE
    $fetch=$teams->fetchColumn(1); 
    print_r($fetch);
    */


    // USING WHILE LOOP TO FETCH THE DATA OF OUR TEAM
    // $allteam = $conn->query("SELECT * FROM our_team");
    // $allteam->execute();

    // while ($fetch= $allteam->fetch(PDO:: FETCH_OBJ)) {
    // $fetch_teams[]=$fetch;
    // } 
    // print_r($fetch_teams); 




    // Fetch Data
    // $all_blogs= $blogs->fetchAll(PDO:: FETCH_OBJ);
    // print_r($fetch_team);
    // die();

    //PDO
    /*if ($blogs->rowcount()>0) {
        while($blog= $blogs->fetch(PDO:: FETCH_OBJ)){
            echo "<pre>";
            print_r($blog->Btitle);
            echo "<pre>";

        }        
    }else{
        echo "<div style='color:red;'>We don't have any records for you</div>";
    }*/

    


?>
  
             
            <!-- slider -->
            <section class="slider"> 
                <div class="elip-header">
                    <img src="assets/images/mark-page/ab-header.png" alt="img">
                </div>               
                <div class="swiper-container mainslider">                                              
                    <div class="swiper-wrapper">
                       
                    
                    <?php foreach($sliders as $slide) :?> 
                            <div class="swiper-slide">
                            <div class="flat-slider">  <div class="overlay-slider"></div>
                                <div class="sld-img">
                                    <img src="assets/images/image-slider/<?php echo $slide->_img; ?>" alt="img"> 
                                </div>
                                <div class="elip-slider">
                                    <!-- <img src="assets/images/image-slider/elip-slider.png" alt="img"> -->
                                </div> 
                                <div class="elip-header3">
                                    <img src="assets/images/image-slider/elipse-3.png" alt="img">
                                </div>

                                <div class="content">
                                    <div class="heading">
                                        <h1><?php echo $slide->_title. "<br>"; ?> </h1>
                                        <p><?php echo $slide->_subtitle; ?></p>
                                    </div>

                                    <div class="button-slider">
                                        <a href="contact.php?slider<?php echo $slide->_id ;?>" class="button btn-1"><span>Get In Touch </span></a>
                                        <div class="video-slider">
                                            <a href="<?php echo $slide->youtube ;?>" class="lightbox-image">
                                            <!-- https://www.youtube.com/embed/xC4ze0p0b5Y -->
                                                <i class="ripple"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ;?>


                    </div>
                </div>
                <div class="button-custom-slider">
                    <div class="swiper-button-next button-slide-custom-next"></div>
                    <div class="swiper-button-prev button-slide-custom-prev"></div>
                </div>
            </section>
            <!-- end of slider in the top -->



            
            <!-- flat service -->
            <section class="tf-space flat-service">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <!-- <div class="tf-sub-title">Our Services List</div> -->
                                <!-- <h2 class="tf-title">THE <span class="text-color-3 style-title">[SERVICES]</span> WE’RE OFFERING</h2> -->
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="swiper-container service-slider carousel-4">
                                <div class="swiper-wrapper">

                                    <?php foreach($fetch_services as $service) :?>
                                        <div class="swiper-slide service-post style-post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="media">
                                                <img src="assets/images/image-box/<?php echo $service->png ;?>" alt="Services images">                                
                                            </div>
                                            <div class="content">                                  
                                                <h3><a href="service-details.php?=id<?php echo $service->_Sid ;?>"><?php echo $service->title ;?></a></h3>
                                                <p><?php echo $service->_description ;?></p>
                                                <div class="read-more">
                                                    <a href="service-details.php?=id<?php echo $service->_Sid ;?>" class="readmore"></a>
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
             <!-- end of flat service -->



            <!-- flat trusted -->
            <section class="tf-space flat-trusted">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="media img-1">
                                <img src="assets/images/image-box/trusted-1.jpg" alt="images">                                 
                                    <div class="mark-page tf-mark  animate-up"> <img src="assets/images/mark-page/mark-trusted-1.png" alt="images">    </div>
                                    <div class="mark-page2 tf-mark animate-up"> <img src="assets/images/mark-page/mark-trusted-2.png" alt="images"> </div>
                                    <div class="mark-page3 tf-mark animate-up"> <img src="assets/images/mark-page/mark-trusted-3.png" alt="images"> </div>
                                    <div class="mark-page4 tf-mark animate-up"> <img src="assets/images/mark-page/mark-trusted-3.png" alt="images"> </div>
                                    <div class="mark-page5 tf-mark animate-up"> <img src="assets/images/mark-page/mark-trusted-4.png" alt="images"> </div>
                                    <div class="mark-page6 tf-mark animate-up"> <img src="assets/images/mark-page/mark-trusted-3.png" alt="images"> </div>
                            </div>
                            <div class="media img-2">
                                <img src="assets/images/image-box/trusted-2.jpg" alt="images">   
                                <div class="trusted-years wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <h5>5+Years <br>
                                        Experience</h5>
                                </div>
                            </div>                                  
                        </div>
                        <div class="col-lg-6 col-md-7">
                            
                            <div class="trusted-heading">
                                <div class="tf-sub-title">Please Get To Know Us</div>
                                <h2 class="tf-title">We Are <span class="text-color-3 style-title">[Trusted]</span> first By our Clients.</h2>
                            </div>
                            <h3 class="text-color-3">Are you a business owner and your looking to create a corporate website?</h3>
                            <p>Our team has successfully developed various advanced websites and graphics designs
                                being used in various multi-level business processes. Cstandright has gained the experience 
                                and now become one of the best software development firm so far.</p>
                            
                            <!-- PROGRESS BAR STARTS -->
                            <div class="content-progress-box">
                                <div class="progress-bar" data-percentage="100%">
                                    <h4 class="progress-title-holder">
                                        <span class="progress-title">Web Development</span>                                       
                                        <span class="progress-number-wrapper">
                                            <span class="progress-number-mark">
                                                <span class="percent"></span>
                                            </span>
                                        </span>
                                    </h4>
                                    
                                    <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div>
                                </div>

                                <div class="progress-bar" data-percentage="95%">
                                    <h4 class="progress-title-holder">
                                        <span class="progress-title">Graphics Design</span>                                       
                                        <span class="progress-number-wrapper">
                                            <span class="progress-number-mark">
                                                <span class="percent"></span>
                                            </span>
                                        </span>
                                    </h4>
                                    
                                    <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div>
                                </div>

                                <!-- <div class="progress-bar" data-percentage="100%">
                                    <h4 class="progress-title-holder">
                                        <span class="progress-title">Motion and Still Graphics</span>                                       
                                        <span class="progress-number-wrapper">
                                            <span class="progress-number-mark">
                                                <span class="percent"></span>
                                            </span>
                                        </span>
                                    </h4>
                                    
                                    <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div>
                                </div> -->

                                <div class="progress-bar" data-percentage="85%">
                                    <h4 class="progress-title-holder">
                                        <span class="progress-title">SEO Analysis</span>                                       
                                        <span class="progress-number-wrapper">
                                            <span class="progress-number-mark">
                                                <span class="percent"></span>
                                            </span>
                                        </span>
                                    </h4>
                                    
                                    <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- PROGRESS BAR ENDS -->
                            <p class="text">We’ll be happy to hear from you. Call us today and let’s take your business higher together,
                                we will help boost Sales and Improve brand awareness with your Own Professional Business Website.</p>
                            
                            <div class="img-user">
                                <!-- <img src="assets/images/image-box/trusted-user.jpg" alt="images">    -->
                            </div>
                            
                            <div class="img-title">
                                <!-- <img src="assets/images/image-box/trusted-title.png" alt="images">    -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END OF  trusted -->



            <!-- WORK COUNTING STARTS -->
            <section class="tf-space flat-counter tf-counter style">
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
            <!-- END OF WORK COUNTING -->
            

            
            <!-- RECENT WORK START -->
            <section class="flat-work tf-work">
                <div class="container-fuild">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="work-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="500ms" >
                                <h2 class="tf-title">Our Recent <span class="text-color-3 style-title">[Works]</span> SHOWCASE</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="swiper-container work-slider carousel-2">
                                <div class="swiper-wrapper">
                                <?php foreach($fetch_recent as $recent) :?>
                                    <div class="swiper-slide work-post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="media">
                                            <img src="assets/images/our-services/<?php echo $recent->_Rimages ?>" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="tags"><span ><?php echo $recent->_Rsub_title ?></span></div>                                  
                                            <h3><a href="recent-work.php?id=<?php echo $recent->_Rid ?>"><?php echo $recent->_Rtitle ?></a></h3>
                                        </div>
                                    </div>
                                <?php endforeach ;?>
                                </div>                                                                                                    
                            </div>
                        </div>     
                    </div>
                </div>
            </section>
            <!-- RECENT EORKS END -->



            <!-- flat skill -->
            <section class="tf-space flat-skill">
                <div class="container">
                    <div class="row">                       
                        <div class="col-lg-6 col-md-7">
                            <div class="skill-heading">
                                <div class="tf-sub-title">We Help you Grow your Business</div>
                                <!-- Web Design Company in Abuja Nigeria that helps businesses grow -->
                                <h2 class="tf-title"><span class="text-color-3 style-title"> expertise</span> for your business needs.</h2>
                                <p>We are Nigeria’s trusted website design company located in Abuja. We provide top-notch Corporate 
                                    and eCommerce web design services to indeviduals, businesses and organizations...</p>
                                <div class="progress-box1">
                                    <div class="progress-skill">
                                        <div class="couter">
                                            <div class="chart" data-percent="100">
                                            <span class="percent">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">                                       
                                        <h3>Web Analysis</h3>
                                    </div>
                                </div>

                                <div class="progress-box2">
                                    <div class="progress-skill">
                                        <div class="couter">
                                            <div class="chart" data-percent="95">
                                            <span class="percent">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Graphics Analysis</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="media">
                                <img src="assets/images/image-box/skill-1.jpg" alt="images">                                                       
                            </div>                             
                        </div>
                    </div>
                </div>
            </section>
            <!-- End flat skill -->

 

            <!-- OUR TEAM -->
            <section class="flat-team flat-blog-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="team-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="500ms">
                                <!-- <div class="tf-sub-title">Working Member</div> -->
                                <h2 class="tf-title">Expart <span class="text-color-3 style-title">[Team]</span> Member</h2>
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



            <!-- flat and frequent questions -->
            <section class="tf-space flat-and ">
                <div class="container">
                    <div class="row">                      
                        <div class="col-lg-6 col-md-5">
                            <div class="and-heading">
                                <div class="tf-sub-title">Growth Our Business</div>
                                <h2 class="tf-title">frequency  <span class="text-color-3 style-title">[And]</span> questions.</h2>
                                <p>We provide website hosting services that help businesses stay online 24/7 
                                    and connect them with the right prospects for patronage. Contact us today to get started.</p>
                                <div class="media">
                                    <img src="assets/images/image-box/and-1.jpg" alt="images">                                                       
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <p class="texts">We help companies, businesses, brands to create a website, 
                                tell their story and improve their web presence online.</p>
                            <div class="flat-accordion fl-faq-content">    

                                <div class="flat-toggle">
                                    <h5 class="toggle-title active"> How much does it cost to design a website?<span class="btn-toggle"></span></h5>
                                    <div class="toggle-content section-desc">
                                        <p>It is possible for website design to cost as little as N50,000 or as much as N5,000,000. It depends on the elements that will be on the website and the sort of website that the business wants. To acquire a precise price, contact us and get a quote..</p>
                                    </div>
                                </div>

                                <div class="flat-toggle">
                                    <h5 class="toggle-title">Why do I need a website for my Business?<span class="btn-toggle"></span></h5>
                                    <div class="toggle-content section-desc">
                                        <p> Your online presence will be more successful if you have an appealing, 
                                            user-friendly website, which our firm will assist you in developing. 
                                            We can assist you in making the ideal web design decisions and building a user-friendly, 
                                            target audience-friendly website. Additionally, 
                                            we offer SEO solutions that can raise the position of your website in search engine results. 
                                            By contacting  us, we offer continuing support and upkeep to guarantee that your website 
                                            is functioning properly and is kept current in other to incrase your pitch of sales</p>
                                    </div>
                                </div>

                                
                                <div class="flat-toggle">
                                    <h5 class="toggle-title">Can I pay for my website design project in installments?<span class="btn-toggle"></span>
                                    </h5>
                                    <div class="toggle-content section-desc">
                                        <p>You can, indeed. On web design projects, Cstandright accepts up to three payments in installments. 
                                            However, the project's cost will determine this.</p>
                                    </div>
                                </div>


                                <div class="flat-toggle">
                                    <h5 class="toggle-title">How long does it take to design a corporate or business website?<span class="btn-toggle"></span>
                                    </h5>
                                    <div class="toggle-content section-desc">
                                        <p>Corporate website or business website design can be completed within 2 to 4 weeks. 
                                            It is however important that your contents are ready upfront.</p>
                                    </div>
                                </div>
                                

                                <div class="flat-toggle">
                                    <h5 class="toggle-title">How long does it take to design an eCommerce website?<span class="btn-toggle"></span>
                                    </h5>
                                    <div class="toggle-content section-desc">
                                        <p>An eCommerce website design can be completed within 3 to 6 weeks. It is however important that your contents are ready upfront. \
                                            You will also need to have all the necessary details needed for online payment gateway registration.</p>
                                    </div>
                                </div>

                            </div>                            
                        </div>
                    </div>
                </div>
            </section>
             <!-- end of flat FAQ -->



            
            <!-- flat journey -->
            <section class=" flat-journey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="img-box">
                                <div class="media img-1">
                                    <img src="assets/images/image-box/journey-1.jpg" alt="images">                                 
                                </div>
                                <div class="media img-2">
                                    <img src="assets/images/image-box/journey-2.jpg" alt="images">                                     
                                </div> 
                                <div class="media img-3">
                                    <img src="assets/images/image-box/journey-3.jpg" alt="images">                                     
                                </div> 
                                <div class="media img-4">
                                    <img src="assets/images/image-box/journey-4.jpg" alt="images">                                     
                                </div>                               
                                <div class="media img-mark">
                                    <img src="assets/images/mark-page/mark-journey.png" alt="images">                                     
                                </div> 
                                <div class="media img-mark style">
                                    <img src="assets/images/mark-page/mark-journey-1.png" alt="images">                                     
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="journey-heading">
                                <div class="tf-sub-title">Growth Our Business</div>
                                <h2 class="tf-title">OUR SUCCESS <span class="text-color-3 style-title">[JOURNEY]</span> We can Provide.</h2>
                            </div>
                            <p class="text-style">Whatever the level of your business success, we believe in growth. As a result, 
                                our web designers are keen on creating platforms that help businesses reach higher. 
                                We are the web development agency in Abuja Nigeria that’ll put your success first.</p>
                            <ul class="icon-box">
                                <li class="icon icon-one">
                                    <img src="assets/images/icon/icon-journey-1.png" alt="images">  
                                    <h4 class="title-icon">Business Analysis Statistic Bar Graph.</h4>
                                </li>
                                <li class="icon icon-two">
                                    <img src="assets/images/icon/icon-journey-2.png" alt="images">  
                                    <h4 class="title-icon">Digital Marketing Business SEO.</h4>
                                </li>
                            </ul>                      
                        </div>
                    </div>
                </div>
            </section>
            <!-- END OF FLAT JOURNEY -->






            <!-- flat testimonial -->
            <section class="tf-space flat-testimonial falt-client">
                <div class="container">
                    <div class="row">                       
                        <div class="col-lg-7">
                            <div class="swiper-container testimonial-slider tf-style carousel-5">
                                <div class="swiper-wrapper">
                                    
                                    <?php foreach($fetch_testimonials as $testimonial) :?>
                                        <div class="swiper-slide testimonial-post ">                                       
                                        <div class="content">                                  
                                            <h3><?php echo $testimonial->_name; ?></h3>
                                            <div class="reviews">
                                                <span class="star">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>                       
                                                </span>
                                                <span class="review">5 Reviews</span>
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
                            </div>
                            <div class="swiper-pagination-testi"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END OF Testimonials HERE -->





            <!-- flat blog (BLOG PAGE STARTS) -->            
            <section class="flat-blog-grid style-blog">
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="500ms">
                                <div class="tf-sub-title">News & Blogs</div>
                                <h2 class="tf-title">LATEST <span class="text-color-3 style-title">[News]</span> & ARTICLES</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="grid-post">
                                <div class="media">
                                    <img src="assets/images/image-box/blog-1.jpg" alt="images">
                                    <div class="tags">01 - Sep - 2022</div>
                                </div>
                                <div class="content">
                                    <div class="meta link-style-3 font">                          
                                        <a  class="entry-author" href="team.php"> Admin</a> <a class="entry-comment" href="blog.php">0 Comments</a>
                                    </div>
                                    <h3 class="title-item"><a href="blog-details.php">Standard Size Of Business Agency Consulating Management.</a></h3>
                                    <div class="read-more link-style-5">
                                        <a href="blog-details.php" class="readmore">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="grid-post style-blog">
                                <div class="media">
                                    <img src="assets/images/image-box/blog-2.jpg" alt="images">
                                    <div class="tags">01 - Sep - 2022</div>
                                </div>
                                <div class="content">
                                    <div class="meta link-style-3 font">                          
                                        <a  class="entry-author " href="team.php"> Admin</a> <a class="entry-comment" href="blog.php">0 Comments</a>
                                    </div>
                                    <h3 class="title-item"><a href="blog-details.php">Standard Size Of Business Agency Consulating Management.</a></h3>
                                    <div class="read-more link-style-5">
                                        <a href="blog-details.php" class="readmore">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="grid-post">
                                <div class="media">
                                    <img src="assets/images/image-box/blog-3.jpg" alt="images">
                                    <div class="tags">01 - Sep - 2022</div>
                                </div>
                                <div class="content">
                                    <div class="meta link-style-3 font">                          
                                        <a  class="entry-author " href="team.php"> Admin</a> <a class="entry-comment" href="blog.php">0 Comments</a>
                                    </div>
                                    <h3 class="title-item"><a href="blog-details.php">Standard Size Of Business Agency Consulating Management.</a></h3>
                                    <div class="read-more link-style-5">
                                        <a href="blog-details.php" class="readmore">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div class="blog-button"><a href="blog-grid.php" class="button btn-style2 btn-1"><span>View All Blogs </span></a></div>
                </div> -->
            </section>            
            <!-- END OF BLOG PAGE -->

            <!-- OUR MAIN BLOG PAGE STARTS HERE  -->
            <section class="tf-space flat-blog-grid home03">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="500ms">
                                <div class="tf-sub-title">News & Blogs</div>
                                <h2 class="tf-title">LATEST <span class="text-color-3 style-title">[News]</span> & ARTICLES</h2>
                            </div>
                        </div>

                        <?php foreach($all_blogs as $blog) : ?>
                            <div class="col-lg-4 col-md-4">
                                <div class="grid-post">
                                    <div class="media">
                                        <img src="assets/images/image-box/<?php echo $blog->_images ?>" alt="blog image">
                                        <div class="tags"><?php echo $blog->_created_by ?></div>
                                    </div>
                                    <div class="content">
                                        <div class="meta link-style-3 font">                          
                                            <a  class="entry-author" href="team.php?team=<?php echo $teams->_id; ?>"> <?php echo strtoupper($blog->_added_by) ?></a> <a class="entry-comment" href="blog-details?blog=<?php echo $blog->_id ?>"><?php echo $blog->_comment ?></a>
                                        </div>
                                        <h3 class="title-item"><a href="blog-details.php?blog=<?php echo $blog->_id ?>"><?php echo $blog->_title ?></a></h3>
                                        <p><?php echo $blog->_description ?></p>
                                        <div class="read-more link-style-3">
                                            <a href="blog-details.php?blog=<?php echo $blog->_id ?>" class="readmore">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ;?>

                    </div>
                    <div class="blog-button"><a href="blog-grid.php" class="button btn-style2 btn-1"><span>View All Blogs </span></a></div>
                </div>
            </section>
            <!-- MAIN BLOG PAGE END'S HERE -->


            <!-- flat brand (BRAND AND PARTNERS LOGO) -->
            <section class="flat-brand-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="brand-slider">
                                <div class="swiper-container carousel-3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="assets/images/image-box/slogan-01.png" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo active">
                                                <a href="#">
                                                    <img src="assets/images/image-box/slogan-01.png" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="assets/images/image-box/slogan-01.png" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="assets/images/image-box/slogan-01.png" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="assets/images/image-box/slogan-01.png" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END flat brand (BRAND AND PARTNERS LOGO) -->

<?php include("include/footer.php") ?>                