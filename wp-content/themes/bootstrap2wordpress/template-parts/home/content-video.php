<?php

//Video Section

$video_section_title            = get_field('video_section_title');
$video_section_show             = get_field('video_section_url');
$video_section_ombed            = get_field('video_section_ombed');


?>


    <!-- VIDEO FEATURETTE
        ====================================================== -->
        <section id="featurette">
        <div class="container">
            <div class="row">
                <div>
                    <?php the_field('video_section_ombed'); ?>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <h2> <?php echo $video_section_title; ?> </h2>
                    <iframe width="100%" height="415" src="<?php echo $video_section_show; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- col -->
               
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
