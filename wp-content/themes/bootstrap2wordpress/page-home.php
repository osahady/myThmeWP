<?php
/*
    Template Name: Home Page

 */

 //Custom Fields
 $prelaunch_price   = get_post_meta(16, 'prelaunch_price', true);
 $launch_price      = get_post_meta(16, 'launch_price', true);
 $final_price       = get_post_meta(16, 'final_price', true);
 $course_url        = get_post_meta(16, 'course_url', true);
 $button_text       = get_post_meta(16, 'button_text', true);
 $optin_text        = get_post_meta(16, 'optin_text', true);
 $optin_button_text = get_post_meta(16, 'optin_button_text', true);

 //Advanced Custom Fields

 $income_feature_image          = get_field('income_feature_image');
 $income_section_title          = get_field('income_section_title');
 $income_section_description    = get_field('income_section_description');
 $reason_1_title                = get_field('reason_1_title');
 $reason_1_description          = get_field('reason_1_description');
 $reason_2_title                = get_field('reason_2_title');
 $reason_2_description          = get_field('reason_2_description');

//Who Section
$who_feature_image              = get_field('who_feature_image');
$who_section_title              = get_field('who_section_title');
$who_section_body               = get_field('who_section_body');

//Features Section
$features_section_image         = get_field('features_section_image');
$features_section_title         = get_field('features_section_title');
$features_section_body          = get_field('features_section_body');


//Project Features Section
$project_section_title          = get_field('project_section_title');
$project_section_body           = get_field('project_section_body');

get_header();
?>

	
    <!-- HERO 
        =====================================================-->
        <section id="hero" data-type="background" data-speed="2">
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-badge.png" alt="logo" class="logo" srcset="">
                    </div>
                    
                    <!-- col  -->
                    <div class="col-sm-7 hero-text">
                        <h1> <?php bloginfo('name'); ?> </h1>
                        <p class="lead"><?php bloginfo('description') ?></p>
                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                                <span><?php echo $prelaunch_price; ?></span>
                            </div>
                            <!-- price  -->
                            <div class="price">
                                <h4>Pre-Launch Price <small>Coming soon!</small></h4>
                                <span><?php echo $launch_price; ?></span>

                            </div>
                            <!-- price  -->
                            <div class="price">
                                <h4>Pre-Launch Price <small>Coming soon!</small></h4>
                                <span><?php echo $final_price; ?></span>

                            </div>
                            <!-- price  -->
                       

                        </div>
                        <!-- price-timeline  -->
                        <p><a target="_blank" class="btn btn-lg btn-danger" href="<?php echo $course_url ?>" role="button"><?php echo $button_text ?> &raquo;</a></p>
                    </div>
                    <!-- col  -->
                </div>
                <!-- row  -->
            </div>
            <!-- container  -->
        </article>
        </section>
    <!-- hero  -->

    <!-- OPT IN SECTION
        ====================================================== -->
    <section id="optin">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text ?></p>
                </div>
                <!-- end of col-sm-8 -->
                <div class="col-sm-4">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text ?></button>
                </div>
                <!-- end of col-sm-r -->
            </div>
            <!-- end of row -->
        </div>
        <!-- optin -->
    </section>

    <!-- BOOST YOUR INCOME
        ====================================================== -->
    <section id="boost-income">
        <div class="container">
            <div class="section-header">
                <!-- if image uploaded by user -->
                <?php if (!empty($income_feature_image)) : ?>
                    <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
                <?php endif; ?>
                <h2><?php echo $income_section_title; ?></h2>
            </div>
            <!--  section-header -->
            <p class="lead"><?php echo $income_section_description; ?> </p>

            <div class="row">
                <div class="col-sm-6">
                    <h3> <?php echo $reason_1_title  ; ?> </h3>
                    <p><?php echo $reason_1_description  ; ?></p>

                </div>
                <!-- col -->
                <div class="col-sm-6">
                    <h3><?php echo $reason_2_title  ; ?></h3>
                    <p><?php echo $reason_2_description  ; ?></p>

                </div>
                <!-- col -->
            </div>
            <!-- row -->

        </div>
        <!-- container -->

    </section>

  <!-- WHO BENEFITS
        ====================================================== -->
        <section id="who-benefits">
        <div class="container">
            <div class="section-header">
                <!-- if image uploaded by user -->
                <?php if (!empty($who_feature_image)) : ?>
                    <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
                <?php endif; ?>
                <h2><?php echo $who_section_title; ?></h2>
            </div>
            <!-- section-header -->
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php echo $who_section_body; ?>
                </div>
                <!-- thin col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- who-benefits -->

    <!-- COURSE FEATURES
        ====================================================== -->
    <section id="course-features">
        <div class="container">
            <div class="setion-header">

                <?php if (!empty($features_section_image)) : ?>
                    <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
                <?php endif; ?>

                <h2><?php echo $features_section_title; ?></h2>

                <!-- feature section body (optional) -->
                <?php if (!empty($features_section_body)) : ?>
                    <p class="lead"><?php echo $features_section_body; ?></p>
                <?php endif; ?>

            </div>
            <!-- section-header -->

       

            <div class="row">

                <?php $loop = new WP_Query(array(
                                        'post_type' => 'course_feature',
                                        'orderby'   => 'post_id',
                                        'order'     => 'ASC' 
                ));?>

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="col-sm-2">
                        <i class="<?php the_field('course_feature_icon') ?>"></i>
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <!-- col -->
                <?php endwhile; ?>


                
                
            </div>
            <!-- row -->
        </div>
    </section>

    <!-- PROJECT FEATURES
        ======================================================= -->
    <section id="project-features">
        <div class="container">
            <h2><?php echo $project_section_title; ?></h2>
            <p class="lead"><?php echo $project_section_body; ?></p>

            <div class="row">
                
               
                <?php $loop = new WP_Query(array(
                                        'post_type' => 'project_feature',
                                        'orderby'   => 'post_id',
                                        'order'     => 'ASC' 
                ));?>

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="col-sm-4">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                    <!-- col -->

                <?php endwhile; ?>




                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-design.png" alt="design">
                    <h3>Sexy &amp; Modern Design</h3>
                    <p>You get to work with a modern, professional quality design &amp; layout.</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-code.png" alt="code">
                    <h3>Quality HTML5 &amp; CSS3</h3>
                    <p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 &amp; CSS3.</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-cms.png" alt="cms">
                    <h3>Easy-to-use CMS</h3>
                    <p>Allow your clients to easily update their websites by converting your static websites to dynamic websites, using WordPress.</p>
                </div>
                <!-- col -->

            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!-- VIDEO FEATURETTE
        ====================================================== -->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>Watch the Course Introduction</h2>
                    <iframe width="100%" height="415" src="https://www.youtube.com/embed/SMpNL-tAiAE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!-- INSTRUCTOR
        ====================================================== -->
    <section id="instructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2>Your Instructor <small>Brad Hussey</small></h2>
                        </div>

                        <!-- col -->
                        <div class="col-lg-4">
                            <a href="https://twitter.com/bradhussey" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://facebook.com/bradhussey" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://plus.google.com/+BradHussey" class="badge social google" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <!-- col -->
                    </div>
                    <!-- row -->
                    <p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur. </p>

                    <p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web,
                        crafting design solutions, and speaking in code.</p>

                    <p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big &amp; small, across
                        the Americas.</p>

                    <p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web
                        design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>

                    <hr>

                    <h3>The Numbers <small>They Don't Lie</small></h3>

                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    41,000+ <span>students</span>
                                </div>
                                <!-- num-content -->
                            </div>
                            <!-- num -->
                        </div>
                        <!-- col -->
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    568 <span>reviews</span>
                                </div>
                                <!-- num-content -->
                            </div>
                            <!-- num -->
                        </div>
                        <!-- col -->
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    8 <span>courses</span>
                                </div>
                                <!-- num-content -->
                            </div>
                            <!-- num -->
                        </div>
                        <!-- col -->
                    </div>
                    <!-- row -->

                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- instructor section -->

    <!-- TESTIMONIALS
        ====================================================== -->
    <section id="kudos">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>What People are saying about Brad</h2>
                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/brennan.jpg" alt="Brennan">
                        </div>
                        <!-- end of col -->

                        <div class="col-sm-8">
                            <blockquote>
                                These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple
                                solution or a helpful suggestion to keep me going forward with the course work.
                                <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
                            </blockquote>
                        </div>
                    </div>
                    <!-- testimonial -->

                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/ben.png" alt="Brennan">
                        </div>
                        <!-- end of col -->

                        <div class="col-sm-8">
                            <blockquote>
                                These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple
                                solution or a helpful suggestion to keep me going forward with the course work.
                                <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
                            </blockquote>
                        </div>
                    </div>
                    <!-- testimonial -->

                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/aj.png" alt="Brennan">
                        </div>
                        <!-- end of col -->

                        <div class="col-sm-8">
                            <blockquote class="blockquote">
                                These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple
                                solution or a helpful suggestion to keep me going forward with the course work.
                                <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
                            </blockquote>
                        </div>
                    </div>
                    <!-- testimonial -->

                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/ernest.png" alt="Brennan">
                        </div>
                        <!-- end of col -->

                        <div class="col-sm-8">
                            <blockquote>
                                These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple
                                solution or a helpful suggestion to keep me going forward with the course work.
                                <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
                            </blockquote>
                        </div>
                    </div>
                    <!-- testimonial -->
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
    </section>

    

<?php
get_footer();
