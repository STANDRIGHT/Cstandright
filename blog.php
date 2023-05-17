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






            <div class="tf-space flat-blog flat-blog-details">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-8 col-md-12">  
                            <!-- Blog -->
                            <?php foreach($all_blogs as $blog) : ?>
                                <div class="flat-blog-grid">                               
                                    <div class="grid-post style-post">
                                        <div class="img-box">
                                            <div class="media">
                                                <img src="assets/images/blogs_images/<?php echo $blog->_images ?>" alt="blog-images">
                                                <div class="tags"><?php echo  $blog->_created_at ?></div>
                                            </div>
                                        </div>                                      
                                        <div class="content">
                                            <div class="meta link-style-3 font">                          
                                                <a  class="entry-author"  href="team?blog_team=<?php echo $blog->_id; ?>"> <?php echo strtoupper($blog->_added_by) ?></a> <a class="entry-comment" href="blog-details?blog=<?php echo $blog->_id ?>"><?php echo $blog->_comment ?> Comments</a>
                                                <h3 class="title-item" style="font-size:2.2rem;color:black;"><a href="blog-details?blog=<?php echo $blog->_id ?>"><?php echo $blog->_title ?></a></h3>
                                                <p><?php echo $blog->_description ?></p>
                                                <div class="read-more link-style-3">
                                                    <a href="blog-details?blog=<?php echo $blog->_id ?>" class="readmore">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ;?> 
                             <!-- end blog -->


                            
                            
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
                                    <div class="widget widget-categories"> 
                                        <div class="widget-title item">
                                            <h3>Blog Categories</h3>  
                                        </div>                                                                                                                        
                                        <ul>
                                            <li>
                                                <a href="blog">Web Development</a>
                                            </li>
                                            <li class="active">
                                                <a href="blog">Digital Marketing</a>
                                            </li>
                                            <li>
                                                <a href="blog">Graphics Design</a>
                                            </li>
                                            <li>
                                                <a href="blog">Still Motion Graphics</a>
                                            </li>
                                            <li>
                                                <a href="blog">SEO Analysis</a>
                                            </li>
                                            <li>
                                                <a href="blog">UX & UI</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget-title item">
                                        <h3>Recent Blogs</h3>
                                    </div>                                                                
                                    <ul class="widget recent-news">
                                        <li>
                                            <div class="thumb">
                                                <img src="assets/images/image-box/recent-post-01.png" alt="images">
                                            </div>
                                            <div class="texts grid-post">
                                                <div class="meta link-style-3 content font">                          
                                                    <a  class="entry-author " href="team.html"> Admin</a> <a class="entry-comment" href="blog.html">0 Comm</a>
                                                </div>
                                                <h5><a href="blog-grid.html">Digital Marketing Advertise
                                                    Onboarding</a></h5>
                                                <a href="blog-grid.html" class="entry-button">Read More </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="assets/images/image-box/recent-post-02.png" alt="images">
                                            </div>
                                            <div class="texts grid-post">
                                                <div class="meta link-style-3 content font">                          
                                                    <a  class="entry-author " href="team.html"> Admin</a> <a class="entry-comment" href="blog.html">0 Comm</a>
                                                </div>
                                                <h5><a href="blog-grid.html">Digital Marketing Advertise
                                                    Onboarding</a></h5>
                                                <a href="blog-grid.html" class="entry-button">Read More </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="assets/images/image-box/recent-post-03.png" alt="images">
                                            </div>
                                            <div class="texts grid-post">
                                                <div class="meta link-style-3 content font">                          
                                                    <a  class="entry-author " href="team.html"> Admin</a> <a class="entry-comment" href="blog.html">0 Comm</a>
                                                </div>
                                                <h5><a href="blog-grid.html">Digital Marketing Advertise
                                                    Onboarding</a></h5>
                                                <a href="blog-grid.html" class="entry-button">Read More </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="assets/images/image-box/recent-post-04.png" alt="images">
                                            </div>
                                            <div class="texts grid-post">
                                                <div class="meta link-style-3 content font">                          
                                                    <a  class="entry-author " href="team.html"> Admin</a> <a class="entry-comment" href="blog.html">0 Comm</a>
                                                </div>
                                                <h5><a href="blog-grid.html">Digital Marketing Advertise
                                                    Onboarding</a></h5>
                                                <a href="blog-grid.html" class="entry-button">Read More </a>
                                            </div>
                                        </li>
                                    </ul>                                 
                                </div>
                            </aside>
                        </div>                     
                    </div>                      
                </div>
            </div>     
<?php include("include/footer.php") ?>  

