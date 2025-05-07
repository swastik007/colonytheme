<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colony_Suppliers
 */

 get_header();
 ?>
 
<!-- banner section area -->
    <?php get_template_part( 'template-parts/homeslider', 'none' ); ?>
<!-- banner section area -->
 
<!-- Chairman's message section area -->
    <?php get_template_part( 'template-parts/chairman-message', 'none' ); ?>
<!-- Chairman's message section area -->
 
<!-- aboutus section area -->
    <?php get_template_part( 'template-parts/aboutus', 'none' ); ?>
<!-- aboutus section area -->

<!-- why us section area -->
    <?php get_template_part( 'template-parts/whyus', 'none' ); ?>
<!-- why us section area -->
 
<!-- banner section area -->
    <?php get_template_part( 'template-parts/banner-area', 'none' ); ?>
<!-- banner section area -->

<!-- highlight section area -->
    <?php get_template_part( 'template-parts/highlight', 'none' ); ?>
<!-- highlight section area -->

<!-- aboutus section area -->
    <?php get_template_part( 'template-parts/about-team', 'none' ); ?>
<!-- aboutus section area -->
  
<!-- our service section area -->
    <?php get_template_part( 'template-parts/ourservice', 'none' ); ?>
<!-- our service section area -->

<?php get_footer(); ?>
 