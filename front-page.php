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
<?php get_template_part( 'template-parts/ourservice', 'none' ); ?>
     <!-- aboutus section area -->
  <?php get_template_part( 'template-parts/about-section', 'none' ); ?>
  <!-- aboutus section area -->
<!-- Chairman's message section area -->
    <?php get_template_part( 'template-parts/chairman-message', 'none' ); ?>
<!-- Chairman's message section area -->
 <!-- categories section area -->
<?php get_template_part( 'template-parts/productcategories', 'none' ); ?>
<!-- categories section area -->
<!-- Products section area -->
<?php get_template_part( 'template-parts/products-section', 'none' ); ?>
<!-- Products section area -->
<!-- why us section area -->
<?php get_template_part( 'template-parts/whyus', 'none' ); ?>
<!-- why us section area -->

 

<!-- aboutus section area -->
    <?php get_template_part( 'template-parts/about-team', 'none' ); ?>
<!-- aboutus section area -->
  


<!-- testimonials section area -->
<?php get_template_part( 'template-parts/testimonials', 'none' ); ?>
<!-- testimonials section area -->



<?php get_footer(); ?>
 