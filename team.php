<?php include("include/header.php") ?>   

<?php 

    // 3 MAKE QUERY FOR TEAM
    $fetch_teams=$app->team();

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
                        <div class="tf-button"><a href="contact.html" class="button btn-1"><span>Get A Quote </span></a></div>   
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
                                    <h1>Team Page<span class="style-color">.</span></h1>
                                    <div class="breadcrumb-trail link-style-2">
                                        <a class="home" href="index.php">Home Page</a><span>Team Page</span>
                                    </div>
                                </div>                                                           
                            </div>                          
                        </div>
                    </div>
                </section>
            </div>
            <!-- #site-header-wrap -->

            <!-- flat team -->
            <section class="tf-space flat-team flat-blog-grid">
                <div class="container">
                    <div class="row">                                                                
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

                                    <?php for($d=1; $d<=2; $d++){ 
                                        foreach($fetch_teams as $teams) : ?>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="team-box grid-post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                <div class="media">
                                                    <img src="assets/images/image-box/<?php echo $teams->_images; ?>" alt="images">                                
                                                </div>
                                                <div class="content"> 
                                                    <div class="sub-title-content"><?php echo $teams->_position; ?></div>                                
                                                    <h3 ><?php echo $teams->_name; ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; } ?> 
                                    
                                    
                                </div>
                            </div>
                        </section>            
                        <!-- END OF OUR TEAM -->
                    </div>
                </div>
            </section>
            <?php include("include/footer.php") ?>   
