<?php include("include/header.php") ?>   

<?php 
    //5 make query for the blogprint_r($blogs);
    $all_blogs=$app->blogs();


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
                                    <h1>Blog Page<span class="style-color">.</span></h1>
                                    <div class="breadcrumb-trail link-style-2">
                                        <a class="home" href="index.php">Home Page</a><span>Blog Page</span>
                                    </div>
                                </div>                                                           
                            </div>                          
                        </div>
                    </div>
                </section>
            </div>
            <!-- #site-header-wrap -->
            
            <!-- title page -->
            <section class="tf-space flat-blog-grid">
                <div class="container">
                <h2 class="tf-title text-center">Insights <span class="text-color-3 style-title text-center" > & </span>Learnings.</h2><br><br>
                    <div class="row">
                        <?php foreach($all_blogs as $blog) : ?>
                            <div class="col-lg-4 col-md-4">
                                <div class="grid-post">
                                    <div class="media">
                                        <img src="assets/images/image-box/<?php echo $blog->_images ?>" alt="blog image">
                                        <div class="tags"><?php echo  $blog->_created_by ?></div>
                                    </div>
                                    <div class="content">
                                        <div class="meta link-style-3 font">                          
                                            <a  class="entry-author" href="team.php?blog=<?php echo $blog->_id; ?>"> <?php echo strtoupper($blog->_added_by) ?></a> <a class="entry-comment" href="blog-details?blog=<?php echo $blog->_id ?>"><?php echo $blog->_comment ?></a>
                                        </div>
                                        <h3 class="title-item" style="font-size:1.8rem;"><a href="blog-details.php?blog=<?php echo $blog->_id ?>"><?php echo $blog->_title ?></a></h3>
                                        <p><?php echo $blog->_description ?></p>
                                        <div class="read-more link-style-3">
                                            <a href="blog-details.php?blog=<?php echo $blog->_id ?>" class="readmore">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ;?>                        
                    </div>
                    <div class="themesflat-pagination clearfix">
                        <ul>
                            <li><a href="#" class="page-numbers prev-style">Prev</a></li>
                            <li><a href="#" class="page-numbers">1</a></li>
                            <li><a href="#" class="page-numbers current">2</a></li>
                            <li><a href="#" class="page-numbers">3</a></li>
                            <li><a href="#" class="page-numbers next-style">Next</a></li>
                        </ul>
                    </div> 
                </div>
            </section>

            <?php include("include/footer.php") ?>   
