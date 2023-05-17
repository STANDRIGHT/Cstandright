<!-- include header -->
<?php include("include/header.php") ?>
<!-- include header -->


<?php
//check isset of the blog ID
if (isset($_GET["blog"])) {
    $blog = $_GET["blog"];


    //12 MAKE QUERY FOR BLOGS
    $blogs = $app->blog_dteails($blog);

    //13 MAKE QUERY FOR COMMENTS
    $comments = $app->comments($blog);
 } else {
    // echo "<script>window.location.href='index.php'</script>";
}

//making query for rating
// $ratings = $db->query("SELECT * FROM rates WHERE comment_id =:_com_id");
// $ratings->execute();

// $rating = $ratings->fetch(PDO:: FETCH_OBJ);
// print_r($rating);


?>



<section class="flat-title-page">
    <div class="overlay-page"></div>
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
                    <h1>Blog Details<span class="style-color">.</span></h1>
                    <div class="breadcrumb-trail link-style-2">
                        <a class="home" href="index.php">Home Page</a><span>Blog Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- #site-header-wrap -->

<!-- title page -->
<div class="tf-space flat-blog-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <article class="post">
                    <div class="inner-content grid-post">
                        <div class="media img-1">
                            <img src="assets/images/blogs_images/<?= $blogs->_Bimages ?>" alt="Blog images">
                            <div class="tags"><?php echo $blogs->_Bcategory;
                                                echo "<br>";
                                                echo "<br>";
                                                echo $blogs->_created_at  ?></div>
                        </div>

                        <div class="meta link-style-3 content font">
                            <a class="entry-author " href="team.php"> <?= strtoupper($blogs->_added_by)  ?></a> <a class="entry-comment" href="blog.php">0 Comments</a>
                        </div>
                        <h2 class="title"><?= $blogs->_Btitle ?></h2>
                        <p class="text"><?= $blogs->_Btext ?></p>
                        <div class="media img-2">
                            <img src="assets/images/services_details/<?= $blogs->_BSub_images ?>" alt="images">
                        </div>
                        <p class="text"><?= $blogs->_Btext_sub ?></p>

                        <h3>Our Success <span class="text-color-3">[JOURNEY]</span> We Can Provide.</h3>
                        <p class="text"><?= $blogs->_Bjourney ?></p>

                        <div class="post-image">
                            <div class="thumb">
                                <img src="assets/images/image-box/client-2.png" alt="images">
                            </div>

                            <div class="texts">
                                <h4 class="text-color-3">CLIFFORD STANDRIGHT</h4>
                                <div style="font-size:1.5rem; padding-right:10px; line-height:3rem;">Our services are geared to match your unique goals and needs and range from
                                    custom interactive solutions to content management systems.
                                    Making a good first impression is crucial, therefore our highly experienced team
                                    work's really hard to make your visually appealing, quick to load, and simple to use.</div>


                                <div class="img-title">
                                    <img src="assets/images/image-box/trusted-title.png" alt="images">
                                </div>
                            </div>
                        </div>

                        <p><?= $blogs->_Bjourney2 ?></p>
                        <div class="infor-row">
                            <div class="tags">
                                <h5 class="">Tag Here</h5>
                                <div>
                                    <a href="#">Creative</a>
                                    <a href="#" class="activ">Agency</a>
                                    <a href="#">Business</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="comments-navigate"></div>
                    <div id="comments">
                        <h2 class="title-comment">768 <span class="text-color-3">[COMMENTS]</span></h2>
                        <p class="text"> Make your voice heard by commenting on our blogs.</p>
                        <ol class="comment-list">
                            <?php foreach ($comments as $comment) : ?>
                                <li class="comment-01">
                                    <div class="comment-avatar">
                                        <img src="assets/images/image-box/comment-avatar-01.png" alt="images">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <div class="comment-author">
                                                <h5><?= $comment->_com_uname; ?></h5>
                                            </div>
                                        </div>

                                        <!-- Rating Sytem -->
                                        <form action="" id="form-data">
                                            <!-- <div onclick="h($('#rating').val(), $('#post_id').val())" class="my-rating"></div> -->
                                            <div class="my-rating"></div>
                                            <input type="text" id="rating" name="rating" value="">
                                            <input type="text" id="comment_id" name="comment_id" value="<?= $comment->_com_id; ?>">
                                        </form>
                                        <!-- end of rating system -->

                                        <div class="comment-text">
                                            <p><?= $comment->_com_message; ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ol>

                        <div id="respond" class="respond-comment">
                            <h2 class="title-comment">good <span class="text-color-3">[COMMENTS]</span></h2>
                            <p class="text"> Commit here and let your voice and opinion be heard </p>

                            <!-- COMMEENT FORM -->
                            <form id="comment" method="POST" action="comment.php">
                                <div class="text-wrap clearfix">
                                    <fieldset class="name-wrap style-text">
                                        <input type="text" id="blog_id" class="tb-my-input" name="blog_id" value="<?= $_GET["blog"] ?>" tabindex="1" placeholder="Enter Full Name" size="32" aria-required="true" required="">
                                        <br>
                                    </fieldset>


                                    <fieldset class="name-wrap style-text">
                                        <input type="text" id="blog_category" class="tb-my-input" name="blog_category" value="<?= $blogs->_Bcategory ?>" tabindex="1" placeholder="Enter Full Name" size="32" aria-required="true" required="">
                                    </fieldset>
                                    <br><br>


                                    <fieldset class="name-wrap style-text">
                                        <input type="text" id="name" class="tb-my-input" name="name" tabindex="1" placeholder="Enter Full Name" size="32" aria-required="true" required="">
                                    </fieldset>

                                    <fieldset class="email-wrap style-text">
                                        <input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Enter Your Email Address" size="32" aria-required="true" required="">
                                    </fieldset>
                                </div>

                                <fieldset class="message-wrap">
                                    <textarea id="message" name="message" rows="8" tabindex="4" placeholder="Enter Your Message" aria-required="true"></textarea>
                                </fieldset>

                                <fieldset class="email-wrap style-text">
                                    <br><br>
                                    <button name="submit" type="submit" class="button btn-style4 btn-submit-comment"><span>Comment Now</span></button>
                                    <!-- <button name="submit" type="submit">Comment</button> -->
                            </form>
                            <!-- END OF COMMEENT FORM -->
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
                                <input type="search" class="search-field" placeholder="Enter Your Keyword..." value="" name="s" title="Search for" required="">
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
                                        <a class="entry-author " href="team.php"> Admin</a> <a class="entry-comment" href="blog.php">0 Comm</a>
                                    </div>
                                    <h5><a href="blog-grid.php">Digital Marketing Advertise
                                            Onboarding</a></h5>
                                    <a href="blog-grid.php" class="entry-button">Read More </a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="assets/images/image-box/recent-post-02.png" alt="images">
                                </div>
                                <div class="texts grid-post">
                                    <div class="meta link-style-3 content font">
                                        <a class="entry-author " href="team.php"> Admin</a> <a class="entry-comment" href="blog.php">0 Comm</a>
                                    </div>
                                    <h5><a href="blog-grid.php">Digital Marketing Advertise
                                            Onboarding</a></h5>
                                    <a href="blog-grid.php" class="entry-button">Read More </a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="assets/images/image-box/recent-post-03.png" alt="images">
                                </div>
                                <div class="texts grid-post">
                                    <div class="meta link-style-3 content font">
                                        <a class="entry-author " href="team.php"> Admin</a> <a class="entry-comment" href="blog.php">0 Comm</a>
                                    </div>
                                    <h5><a href="blog-grid.php">Digital Marketing Advertise
                                            Onboarding</a></h5>
                                    <a href="blog-grid.php" class="entry-button">Read More </a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="assets/images/image-box/recent-post-04.png" alt="images">
                                </div>
                                <div class="texts grid-post">
                                    <div class="meta link-style-3 content font">
                                        <a class="entry-author " href="team.php"> Admin</a> <a class="entry-comment" href="blog.php">0 Comm</a>
                                    </div>
                                    <h5><a href="blog-grid.php">Digital Marketing Advertise
                                            Onboarding</a></h5>
                                    <a href="blog-grid.php" class="entry-button">Read More </a>
                                </div>
                            </li>
                        </ul>
                        <div class="widget tags_cloud">
                            <div class="widget-title">
                                <h3>Tag Here</h3>
                            </div>
                            <div class="tags_cloud_inner ">
                                <a href="blog-grid.php">Creative</a>
                                <a href="blog-grid.php">Agency</a>
                                <a href="blog-grid.php">Business</a>
                                <a href="blog-grid.php">Corporate</a>
                                <a href="blog-grid.php" class="active">Digital</a>
                                <a href="blog-grid.php">Parsonal Web</a>
                                <a href="blog-grid.php">UX?UI</a>
                                <a href="blog-grid.php">Web Design</a>
                                <a href="blog-grid.php">Template</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>


<?php include("include/footer.php") ?>


<!-- Rating star starts here  for javascript-->
<script>
    $(".my-rating").starRating({
        starSize: 18,
        callback: function(currentRating, $el) {
            initialRating

            // make a server call here
            $("#rating").val(currentRating);
            var formdata = $("#form-data").serialize() + "&insert=insert";
            $.ajax({
                type: "POST",
                url: "insert-ratings.php",
                data: formdata,

                success: function() {
                    // alert(formdata);
                }
            });
        }
    });




    // function pppj(){
    //     alert(9)
    // e.preventDefault();


    // function h(rating, post){
    //     $.ajax({
    //         url:'insert-ratings.php',
    //         method:'POST',
    //         dataType:'JSON',
    //         data:{post_id:post, rating:rating},
    //         success: function(resp){
    //             if(resp.status===1){
    //                 console.log(resp.message);
    //             }else{
    //                 console.log(resp.message);
    //             }
    //         }
    //     })
    // }
</script>
<!-- End of rating star for javascript -->