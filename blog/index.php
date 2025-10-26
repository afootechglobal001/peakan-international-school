<?php include '../config/constants.php'; ?>
<?php include '../config/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
    <title><?php echo $thename ?> | Blog | Insights</title>

    <meta name="keywords"
        content="<?php echo $thename ?>, Peakan International School blog, Peakan International School Ikenne insights, education blog Ogun State, private schools Ogun articles, parenting and education tips Nigeria, innovative teaching ideas, holistic education blog, nurturing creativity articles, collaborative learning advice, preschool and college blog Nigeria, academic excellence insights, creative learning methods, Ikenne-Remo schools news" />

    <meta name="description"
        content="Explore Peakan International School’s blog for educational insights, parenting advice, and innovative teaching ideas. Stay inspired by stories of excellence and creativity from Ikenne-Remo, Ogun State." />

    <meta property="og:title" content="<?php echo $thename ?> | Blog | Insights" />
    <meta property="og:image" content="<?php echo $website_url ?>/all-images/plugin-pix/peakaninternationalschool.jpg" />
    <meta property="og:description"
        content="Read Peakan International School’s blog — your source for educational insights, parenting tips, and creative learning approaches that inspire excellence and character development." />

    <meta name="twitter:title" content="<?php echo $thename ?> | Blog | Insights" />
    <meta name="twitter:card" content="<?php echo $thename ?>" />
    <meta name="twitter:image" content="<?php echo $website_url ?>/all-images/plugin-pix/peakaninternationalschool.jpg" />
    <meta name="twitter:description"
        content="Discover insightful articles from Peakan International School in Ikenne-Remo, Ogun State — covering parenting, education, innovation, and moral excellence." />
</head>



<body>
    <?php include '../header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <div class="div-in">
                    <ul>
                        <a href="<?php echo $website_url ?>">
                            <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                        </a>
                        <a href="<?php echo $website_url ?>/blog/">
                            <li title="Blog & Latest Insights">Blog & Latest Insights</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Blog & Latest News</span></h1>
                <p>Dive into our blog and latest news section for a wealth of information, including detailed insights, trending topics, expert tips, and the latest updates designed to keep you informed.</p>

                <?php $callclass->_otherPagesBtn($website_url); ?>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div blog-body-div">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>SEARCH</h3>
                            <div class="text_field_container">
                                <input class="text_field blog_text_field" id="search_keywords" onkeyup="_fetchListBlog();" type="text" placeholder="" />
                                <div class="placeholder blog-placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <div class="div-in">
                            <h3>TAG LIST</h3>

                            <ul id="cat_id">
                                <script>
                                    _getBlogCategory();
                                </script>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="page-list-back-div" id="fetchListBlog">
                            <script>
                                _fetchListBlog();
                            </script>

                            <div class="content-loading-div">
                                <img src="<?php echo $website_url ?>/all-images/images/spinner.gif" alt="Loading" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="related-blog-back-div">
                    <div class="title-div" data-aos="zoom-in" data-aos-duration="1000">
                        <h3>Related Blogs</h3>
                    </div>

                    <div class="list-back-div" id="fetchRelatedBlog">
                        <script>
                            _fetchRelatedBlog();
                        </script>

                        <div class="content-loading-div">
                            <img src="<?php echo $website_url ?>/all-images/images/spinner.gif" alt="Loading" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../footer.php' ?>
    </section>

</body>

</html>