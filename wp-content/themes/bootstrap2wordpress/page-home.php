<?php
/*
    Template Name: Home Page

 */


 



get_header();
?>

	
    <?php //get_template_part('template-parts/home/hero'); 
            get_template_part('template-parts/home/content', 'hero');
    
    ?>

    <?php get_template_part('template-parts/home/content', 'optin'); ?>

    <?php get_template_part('template-parts/home/content', 'boost'); ?>

    <?php get_template_part('template-parts/home/content', 'benefits'); ?>

    <?php get_template_part('template-parts/home/content', 'coursefeatures'); ?>

    <?php get_template_part('template-parts/home/content', 'projectfeatures'); ?>

    <?php get_template_part('template-parts/home/content', 'video'); ?>

    <?php get_template_part('template-parts/home/content', 'instructor'); ?>

    <?php get_template_part('template-parts/home/content', 'testimonials'); ?>

    

<?php
get_footer();
