<?php
/*
    Template Name: Home Page

 */

 //Custom Fields
 $prelaunch_price               = get_post_meta(16, 'prelaunch_price', true);
 $launch_price                  = get_post_meta(16, 'launch_price', true);
 $final_price                   = get_post_meta(16, 'final_price', true);
 $course_url                    = get_post_meta(16, 'course_url', true);
 $button_text                   = get_post_meta(16, 'button_text', true);
 $optin_text                    = get_post_meta(16, 'optin_text', true);
 $optin_button_text             = get_post_meta(16, 'optin_button_text', true);

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

//Video Section

$video_section_title            = get_field('video_section_title');
$video_section_show             = get_field('video_section_url');
$video_section_ombed            = get_field('video_section_ombed');

//Instructor Section
$instructor_section_title       = get_field('instructor_section_title');
$instructor_name                = get_field('instructor_name');
$bio_excerpt                    = get_field('bio_excerpt');
$full_bio                       = get_field('full_bio');
$twitter_username               = get_field('twitter_username');
$facebook_username              = get_field('facebook_username');
$google_plus_username           = get_field('google_plus_username');
$num_students                   = get_field('num_students');
$num_reviews                    = get_field('num_reviews');
$num_courses                    = get_field('num_courses');

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
                    <h2> <?php echo $video_section_title; ?> </h2>
                    <iframe width="100%" height="415" src="<?php echo $video_section_show; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- col -->
                <div>
                    <?php the_field('video_section_ombed'); ?>
                </div>
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
                            <h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
                        </div>

                        <!-- col -->
                        <div class="col-lg-4">
                            <?php if(!empty($twitter_username)) :  ?>
                                <a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <?php endif; ?>

                            <?php if(!empty($facebook_username)) :  ?>
                                <a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <?php endif; ?>

                            <?php if(!empty($google_plus_username)) :  ?>
                                <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" class="badge social google" target="_blank"><i class="fa fa-google"></i></a>
                            <?php endif; ?>

                         </div>
                        <!-- col -->
                    </div>
                    <!-- row -->
                    <p class="lead"><?php echo $full_bio; ?></p>

                    <hr>

                    <h3>The Numbers <small>They Don't Lie</small></h3>

                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_students; ?><span>students</span>
                                </div>
                                <!-- num-content -->
                            </div>
                            <!-- num -->
                        </div>
                        <!-- col -->
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                <?php echo $num_reviews; ?>+<span>reviews</span>
                                </div>
                                <!-- num-content -->
                            </div>
                            <!-- num -->
                        </div>
                        <!-- col -->
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_courses; ?> <span>courses</span>
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

                    
                    <?php $loop = new WP_Query(array(
                                            'post_type' => 'testimonial',
                                            'orderby'   => 'post_id',
                                            'order'     => 'ASC' 
                    ));?>

                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        <!-- TESTIMONIAL -->
                        <div class="row testimonial">
                            <div class="col-sm-4">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail(array(200, 200));
                                } ?>
                            </div>
                            <!-- end of col -->

                            <div class="col-sm-8">
                                <blockquote>
                                    <?php the_content(); ?>
                                    <cite>&mdash; <?php the_title(); ?></cite>
                                </blockquote>
                            </div>
                        </div>
                        <!-- testimonial -->


                    <?php endwhile; ?>



                    
                    


                    
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
    </section>

    

<?php
get_footer();
