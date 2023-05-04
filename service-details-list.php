<?php include("include/header.php") ?>  


<?php 
if (isset($_GET["SLid"])) {
    $SLid= $_GET["SLid"];

    // 2 MAKE QUERY FOR SERVICES
    $Sdetails=$app->Service_list_details($SLid);
    if($Sdetails==""){
        echo "<script>window.location.href='index.php'</script>";
        // header("location:index.php");
    }
}else{
    echo "<script>window.location.href='index.php'</script>";
}


    //9 FUNCTION for DETAILS_LIST
    $Sdetails_list=$app->Sdetails_list();
    // print_r($Sdetails);

?>

                
                        <!-- <div class="navigation-side-menu icon-icon">      </div> -->
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
                </header>

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
                                    <h1>Service Details<span class="style-color">.</span></h1>
                                    <div class="breadcrumb-trail link-style-2">
                                        <a class="home" href="index.php">Home Page</a><span>Service Page</span>
                                        <a class="home" href="">Details</a><span><?php echo $Sdetails->subtitle; ?></span>
                                    </div>
                                </div>
                                                             
                            </div>                          
                        </div>
                    </div>
                </section>
                <!-- /#End site-header -->
                



            <!-- ALL DETAILS LANDING -->
            <div class="tf-space flat-blog-details flat-service-details flat-journey flat-and">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <article class="post">
                                <div class="inner-content grid-post">                                    
                                    <!-- Simages starts -->
                                    <div class="media img-01">
                                        <img src="assets/images/services_details/<?php echo $Sdetails->images ?>" alt="Service images">                                      
                                    </div>
                                    <!-- End Simages -->
                                    
                                    <h2 class="title"><?php echo $Sdetails->_Scaption ?></h2>
                                    <p class="text"><?php echo $Sdetails->_SLdetails ?></p>
                                   
                                    <div class="box">
                                        <div class="media img-02">
                                            <img src="assets/images/services_details/<?php echo $Sdetails->_Subimages ?>" alt="services images">
                                        </div>
                                        <ul class="service-tag tag1">                                    
                                            <li><a href="">Dedication</a></li>
                                            <li><a href="services.php">Efficiency</a></li>                                             
                                            <li><a href="services.php">Productivity</a></li>
                                            <li><a href="services.php">Transparency</a></li>
                                            <li><a href="services.php">Effectiveness</a></li> 
                                        </ul> 
                                        
                                        <ul class="service-tag tag2">
                                            <li><a href="services.php">UX strategy</a></li>
                                            <li><a href="services.php">Development</a></li>                                             
                                            <li><a href="services.php">Marketing</a></li>
                                            <li><a href="services.php">Wireframing</a></li>
                                            <li><a href="services.php">UI Design</a></li> 
                                        </ul>
                                    </div>  
                                     
                                    <p class="text-2"><?php echo $Sdetails->_SMdetails; ?></p>  
                                    <h3>Our Success <span class="text-color-3">[JOURNEY]</span> We Can Provide.</h3>
                                    <p class="text"><?php echo $Sdetails->_Sjourney; ?></p> 
                                    <ul class="icon-box">
                                        <li class="icon icon-one">
                                            <img src="assets/images/icon/icon-journey-1.png" alt="images">  
                                            <h4 class="title-icon">Business Analysis Statistic Bar Graph.</h4>
                                        </li>
                                        <li class="icon icon-two">
                                            <img src="assets/images/icon/icon-journey-2.png" alt="images">  
                                            <h4 class="title-icon">Digital Marketing Business SEO.</h4>
                                        </li>
                                        <li class="icon icon-three">
                                            <img src="assets/images/icon/icon-journey-3.png" alt="images">  
                                            <h4 class="title-icon">business analysis statistic bar graph..</h4>
                                        </li>
                                    </ul> 
                                    <p class="text-3"><?php echo $Sdetails->_Sjourney2; ?></p>  
                                     
                                        
                                    <div class="flat-accordion fl-faq-content">    
                                        <h2 class="tf-title">frequency  <span class="text-color-3 style-title">[And]</span> questions.</h2>
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
                                                <p>You can, indeed. On web design projects, <?=config::Company["name"] ;?> accepts up to three payments in installments. 
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
                            </article>                                
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


                                    <!-- COMPANY INFORMATION -->
                                    <div class="widget-information">                                                                                                                     
                                            <ul>
                                                <li class="icon-client">
                                                    <div class="media img1">
                                                        <img src="assets/images/icon/icon-case-1.png" alt="images"> 
                                                    </div>
                                                    <div class="title-imformation title1">
                                                        <div class="title-icon">Company Name:</div>
                                                        <a href="mailto:<?=config::Company["email"] ;?>" class="text-icon">
                                                        <?=config::Company["name"] ;?>
                                                            www.cliffordstandright.com</a>
                                                    </div>
                                                </li>

                                                <li class="icon-loction">
                                                    <div class="media img2">
                                                        <img src="assets/images/icon/icon-case-2.png" alt="images"> 
                                                    </div>
                                                    <div class="title-imformation title2">
                                                        <div class="title-icon">Loction:</div>
                                                        <div class="text-icon">1247/Plot No. 39, 15th Phase, New York
                                                            United States Of America</div>
                                                    </div>
                                                </li>

                                                <li class="icon-loction">
                                                    <div class="media img3">
                                                        <img src="assets/images/icon/icon-case-3.png" alt="images"> 
                                                    </div>
                                                    <div class="title-imformation title3">
                                                        <div class="title-icon">Category:</div>
                                                        <div class="text-icon">Design, Development</div>
                                                    </div>
                                                </li>

                                                <li class="icon-loction icon-style">
                                                    <div class="media img4">
                                                        <img src="assets/images/icon/icon-case-4.png" alt="images"> 
                                                    </div>
                                                    <div class="title-imformation title4">
                                                        <div class="title-icon">Date:</div>
                                                        <div class="text-icon">20 February, 2022</div>
                                                    </div>
                                                </li>                                                                                   
                                            </ul>
                                        </div>
                                        <br><br>
                                    <!--END COMPANY INFORMATION -->                                        


                                    <!--Widget-categories-->
                                    <div class="widget widget-categories"> 
                                        <div class="widget-title item">
                                            <h3>Services List</h3>  
                                        </div>                                                                                                                        
                                        <ul>
                                            <?php foreach($Sdetails_list as $Sdetail) :?>
                                                <li class="<?php if($SLid==$Sdetail->SLid){ echo 'active';}?>" >
                                                    <a href="service-details-list.php?SLid=<?php echo $Sdetail->SLid; ?>"><?php echo $Sdetail->SLname; ?></a> 
                                                </li>
                                            
                                                <li class="tf-style">
                                                    <!-- <a href="services.php">XD Design</a> -->
                                                </li>
                                            <?php endforeach ;?>                                                        
                                        </ul>
                                    </div>
                                    <!--End Widget-categories-->

                                    
                                    <div class="widget tags_cloud">
                                        <div class="widget-title">
                                            <h3>Recent Works</h3>
                                        </div>
                                        <div class="tags_cloud_inner ">
                                            <a href="blog-grid.php">Creative</a>
                                            <a href="blog-grid.php">Agency</a>
                                            <a href="blog-grid.php">Business</a>
                                            <a href="blog-grid.php">Corporate</a>
                                            <a href="blog-grid.php" class="active">Digital</a>
                                            <a href="blog-grid.php">SEO</a>
                                            <a href="blog-grid.php">UX?UI</a>
                                            <a href="blog-grid.php">Web Design</a>
                                            <a href="blog-grid.php">Graphics Design</a>
                                        </div>
                                    </div>

                                    <div class="recent-blog">
                                        <div class="widget-title item">
                                            <br><br>
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
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF ALL DETAILS LANDING --
<?php include("include/footer.php") ?>   
