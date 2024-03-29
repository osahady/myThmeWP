<?php 

?>

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



                    <?php wp_reset_query(); ?>
                    


                    
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
    </section>
